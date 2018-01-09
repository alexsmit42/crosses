global.__base = __dirname;

let express = require('express');
let app = express();
require('dotenv').config();

let server = require('http').createServer(app);
require(__base + '/middleware')(app, express, server);
server.listen(process.env.PORT);
