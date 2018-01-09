let redis = require('redis');
bluebird = require('bluebird');
bluebird.promisifyAll(redis.RedisClient.prototype);
bluebird.promisifyAll(redis.Multi.prototype);

redisClient = redis.createClient()

module.exports = {
    addOnlineUser: function(user) {
        let currentTime = new Date();
        redisClient.hset('online', user.username, currentTime);
    },
    removeOnlineUser: function(user) {
        redisClient.hdel('online', user.username);
    },
    getOnlineUsers: async function() {
        return redisClient.hkeysAsync('online');
    },
    getGameRooms: async function() {
        return [];
    }
};