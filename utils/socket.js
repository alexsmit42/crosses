let User = require(__base + '/models/user');
let {logger, mongoLogger} = require(__base + '/utils/logger');

module.exports = function(server) {
    let io = require('socket.io').listen(server);

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
    });
};