let express = require('express');
let profile = require(__base + '/controllers/profile');
let protect  = require(__base + '/utils/protect-pages');

let router = express.Router();

router.use(protect.privatePage);

router.get('/', profile.indexPage);

module.exports = router;

