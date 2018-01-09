let User = require(__base + '/models/user');
let {logger, mongoLogger} = require(__base + '/utils/logger');
let redis = require(__base + '/utils/redis');

module.exports = function(io) {
    let game = io.of('/game');
    game.on('connection', function(socket) {

        let user = socket.request.session.passport.user;

        socket.on('createGame', function() {
            console.log(user);
        });
    });
};