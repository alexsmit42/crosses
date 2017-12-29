let crypto = require('crypto-js/sha256');
let redis = require(__base + '/utils/redis');

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
    },
    getOnlineUsers: async function() {
        return redis.hkeysAsync('online');
    }
};