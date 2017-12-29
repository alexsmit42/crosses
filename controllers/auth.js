let User = require(__base + '/models/user');
let utils = require(__base + '/utils');
let {logger, mongoLogger} = require(__base + '/utils/logger');
let redis = require(__base + '/utils/redis');
let emailSender = require(__base + '/utils/email');

module.exports = {

    loginPage: function(req, res) {
        let errors = req.flash('error');
        let error = '';
        if (errors.length) {
            error = errors[0];
        }

        res.render('partials/login', {
            title: utils.pageTitle('Login'),
            error: error
        });
    },
    loginAction: function(req, res) {
        let currentTime = new Date();

        User.findOneAndUpdate({_id: req.user._id}, {lastEnter: currentTime}, {})
            .then(user => {
                redis.hset('online', req.user.username, currentTime);

                logger.info(`User "${req.user.username}" entered the site`);
                res.redirect('/');
            });
    },
    registerPage: function(req, res) {
        let error = req.flash('error') || '';

        res.render('partials/register', {
            title: utils.pageTitle('Registration'),
            error: error
        });
    },
    registerAction: function(req, res) {
        let email = req.body.email;
        let username = req.body.username;
        let password = req.body.password;

        User.findOne({email: email})
            .then(user => {
                if (user !== null) {
                    req.flash('error', 'This email already exist')
                    res.redirect('/register');
                } else {
                    let user = new User({
                        email: email,
                        username: username,
                        password: utils.encrypt(password)
                    });

                    return user.save();
                }
            })
            .then(user => {
                emailSender.registrationEmail(user);

                req.login(user, function(err) {
                    if (err) {
                        req.flash('error', err);
                        res.redirect('register');
                    }
                    let currentTime = new Date();
                    redis.hset('online', user.username, currentTime);

                    res.redirect('/');
                });
            })
            .catch(err => {
                mongoLogger.error(err);
                req.flash('error', "User don't save");
                res.redirect('/register');
            });
    },
    logout: function(req, res) {
        redis.hdel('online', req.user.username);

        logger.info(`User "${req.user.username}" left the site`);
        req.logout();

        res.redirect('/');
    }
};