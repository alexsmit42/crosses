let express = require('express');
let admin = require(__base + '/controllers/admin');
let protect = require(__base + '/utils/protect-pages');

let router = express.Router();

router.use(protect.adminPage);

router.get('/users', admin.usersPage);
router.get('/stats', admin.statsPage);
router.get('/', admin.indexPage);

module.exports = router;