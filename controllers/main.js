let utils = require(__base + '/utils');
let redis = require(__base + '/utils/redis');

module.exports = {
    indexPage: function(req, res) {

        (async () => {
            let users = await redis.getOnlineUsers();
            let rooms = await redis.getGameRooms();

            res.render('partials/index', {
                title: utils.pageTitle(''),
                user: req.user,
                online: users
            });
        })();
    }
};