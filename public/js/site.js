import io from 'socket.io-client';

const gameSocket = io('http://localhost:3000/game');

$(document).ready(function() {
    $('#create-game').on('click', function() {
        gameSocket.emit('createGame');
    });
});