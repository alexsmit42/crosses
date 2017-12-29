let admin = require(__base + '/routes/admin');
let main = require(__base + '/routes/main');
let profile = require(__base + '/routes/profile');

module.exports = function(app) {
    app.use('/profile', profile);
    app.use('/admin', admin);
    app.use('/', main);
};