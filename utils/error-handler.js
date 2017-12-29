let {logger} = require(__base + '/utils/logger');

module.exports = function(err, req, res, next) {

    // if (res.headersSent) {
    //     return next(err);
    // }
console.log(err)
    logger.error(err);
    if (process.env.NODE_ENV == 'production') {
        res.status(404).render('404');
    }

    res.status(500).render('error', {
        error: err
    });
};