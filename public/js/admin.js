import io from 'socket.io-client';

const socket = io('http://localhost:3000/admin');

$(document).ready(function() {

    $('.change-role-admin').on('change', function() {
        let userID = $(this).closest('tr').attr('user-id');
        let newRole = $(this).prop('checked') ? 'admin' : 'user';

        socket.emit('changeRole', userID, newRole);
    });
});