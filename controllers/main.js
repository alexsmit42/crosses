let User = require(__base + '/models/user');
let utils = require(__base + '/utils');
let logger = require(__base + '/utils/logger');
let redis = require(__base + '/utils/redis');

module.exports = {
    indexPage: function(req, res) {

        redis.hkeys('online', function(err, users) {
            if(!users.length) {
                users = false;
            }

            res.render('partials/index', {
                title: utils.pageTitle(''),
                user: req.user,
                online: users
            });
        });
    }
};