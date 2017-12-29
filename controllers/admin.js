let User = require(__base + '/models/user');

module.exports = {

    indexPage: function(req, res) {
        res.render('admin/index');
    },
    usersPage: function(req, res) {
        User.find({})
            .then(users => {
                res.render('admin/users', {
                    users: users
                });
            });
    },
    statsPage: function(req, res) {


        res.render('admin/stats');
    }
};