let utils = require(__base + '/utils');

module.exports = {
    
    indexPage: function(req, res) {
        res.render('partials/profile', {
            title: utils.pageTitle('Profile')
        });
    }
};