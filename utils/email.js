let nodeMailer = require('nodemailer');
let config = require('config');
let {logger, emailLogger} = require(__base + '/utils/logger');

let transporter = nodeMailer.createTransport({
    host: config.get('email.host'),
    port: config.get('email.port'),
    auth: {
        user: config.get('email.login'),
        pass: config.get('email.password')
    }
});

module.exports = {
    registrationEmail: function(user) {
        if (!user) {
            return logger.error('Unknow user for email registration');
        }

        let mailOptions = {
            from: "Crosses game",
            to: user.email,
            subject: "Registration on crosses",
            html: `<h3>Hello, ${user.username}</h3><p>Thanks for registration</p>`
        };

        transporter.sendMail(mailOptions, (err, info) => {
            if (err) {
                return emailLogger.error(err);
            }

            emailLogger.info(`Mail about registration recieved on ${user.email}`);
        });
    }
};