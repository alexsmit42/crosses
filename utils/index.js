let crypto = require('crypto-js/sha256');

module.exports = {

    encrypt: function (str) {
        return crypto(str);
    },
    pageTitle: function(str) {
        let pageTitle = 'Crosses App';
        if (str) {
            pageTitle += ' - ' + str;
        }
        return pageTitle;
    }
};