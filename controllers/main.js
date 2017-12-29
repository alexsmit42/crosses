let User = require(__base + '/models/user');
let utils = require(__base + '/utils');
let logger = require(__base + '/utils/logger');
let redis = require(__base + '/utils/redis');

module.exports = {
    indexPage: function(req, res) {

        (async () => {
            let users = await utils.getOnlineUsers();

            res.render('partials/index', {
                title: utils.pageTitle(''),
                user: req.user,
                online: users
            });
        })();
    }
};