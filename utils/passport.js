let User = require(__base + '/models/user');
let LocalStrategy   = require('passport-local').Strategy;

module.exports = function(app, passport) {

    passport.serializeUser(function(user, done) {
        done(null, user.id);
    });

    passport.deserializeUser(function(id, done) {
        User.findOne({ _id: id }, function (err, user) {
            done(err, user)
        });
    });

    passport.use(new LocalStrategy(
        {
            usernameField: 'email',
            passwordField: 'password'
        },
        function (email, password, done) {

            User.findOne({email: email})
                .then(user => {
                    if(!user) {
                        return done(null, false, { message: 'This email is not registered' });
                    }

                    if (!user.authenticate(password)) {
                        return done(null, false, { message: 'Invalid login or password' });
                    }

                    return done(null, user);
                })
                .catch(err => {
                    return done(err);
                });
        }
    ));
};