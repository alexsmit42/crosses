global.__base = __dirname;

let express = require('express');
let app = express();
require('dotenv').config();
require(__base + '/middleware')(app, express);

let server = require('http').createServer(app).listen(process.env.PORT);

require(__base + '/utils/socket.js')(server);