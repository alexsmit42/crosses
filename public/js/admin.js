import io from 'socket.io-client';

const adminSocket = io('http://localhost:3000/admin');

$(document).ready(function() {

    $('.change-role-admin').on('change', function() {
        let userID = $(this).closest('tr').attr('user-id');
        let newRole = $(this).prop('checked') ? 'admin' : 'user';

        adminSocket.emit('changeRole', userID, newRole);
    });

    adminSocket.on('onlineUsers', function(countUsers) {
        $('#count-online-users').text(countUsers);
    });

    adminSocket.on('registeredUsers', function(countUsers) {
        $('#count-registered-users').text(countUsers);
    });
});