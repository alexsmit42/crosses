
module.exports = {
    authPage: function(req, res, next) {
        if (req.isAuthenticated()) {
            res.redirect('/');
        } else {
            next();
        }
    },
    privatePage: function(req, res, next) {
        if (!req.isAuthenticated()) {
            res.redirect('/login');
        } else {
            next();
        }
    },
    adminPage: function(req, res, next) {
        if (req.isAuthenticated() && req.user.role === 'admin') {
            next();
        } else {
            res.redirect('/');
        }
    }
};