module.exports = function(server, sessionMiddleware) {
    let io = require('socket.io').listen(server);
    io.use(function(socket, next) {
        sessionMiddleware(socket.request, socket.request.res, next);
    });

    require('./sockets/admin')(io);
    require('./sockets/game')(io);
};