let mongoose = require('mongoose');
let config = require('config');

mongoose.Promise = global.Promise;
mongoose.connect(
    config.get('db.connection') + '/' + config.get('db.name'),
    {
        useMongoClient: true,
        autoReconnect: true
    }
);
module.exports = mongoose;