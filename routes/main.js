let express = require('express');
let main = require(__base +'/controllers/main');
let auth = require(__base +'/controllers/auth');
let passport = require('passport');
let protect = require(__base + '/utils/protect-pages');

let router = express.Router();

router.get('/login', protect.authPage, auth.loginPage);
router.post('/login',
    passport.authenticate('local', {
        failureRedirect: '/login',
        failureFlash: true
    }),
    auth.loginAction);
router.get('/register', protect.authPage, auth.registerPage);
router.post('/register', auth.registerAction);
router.get('/logout', auth.logout);
router.get('/', main.indexPage);

module.exports = router;