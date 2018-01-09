let User = require(__base + '/models/user');
let {logger, mongoLogger} = require(__base + '/utils/logger');
let redis = require(__base + '/utils/redis');

module.exports = function(io) {
    let admin = io.of('/admin');
    admin.on('connection', function(socket) {

        socket.on('changeRole', function(userID, newRole) {
            User.findOneAndUpdate({_id: userID}, {role: newRole}, {})
                .then(user => {
                    logger.info(`User "${user.username}" get new role: ${newRole}`);
                })
                .catch(err => {
                    mongoLogger.error(err);
                });
        });

        (async() => {
            let users = await redis.getOnlineUsers();

            socket.emit('onlineUsers', users.length);
        })();

        User.count({})
            .then(count => {
                socket.emit('registeredUsers', count);
            });
    });
};

