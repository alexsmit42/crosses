const { createLogger, format, transports } = require('winston');
const { combine, timestamp, label, printf } = format;

const myFormat = printf(info => {
    return `${info.timestamp} [${info.level}]: ${info.message}`;
});

const logger = createLogger({
    format: combine(
        timestamp(),
        myFormat
    ),
    transports: [
        new transports.File({ filename: __base + '/logs/info.log', level: 'info' }),
        new transports.File({ filename: __base + '/logs/errors.log', level: 'error' })
    ]
});

const mongoLogger = createLogger({
    format: combine(
        timestamp(),
        myFormat
    ),
    transports: [
        new transports.File({ filename: __base + '/logs/mongodb.log'})
    ]
});

const emailLogger = createLogger({
    format: combine(
        timestamp(),
        myFormat
    ),
    transports: [
        new transports.File({ filename: __base + '/logs/email.log'})
    ]
});

module.exports = {logger, mongoLogger, emailLogger};