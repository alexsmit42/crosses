module.exports = function(app, express) {
    let path = require('path');
    let helmet = require('helmet');
    let bodyParser = require('body-parser');
    let cookieParser = require('cookie-parser');
    let session = require('express-session');
    let router = require(__base + '/routes');
    let passport = require('passport');
    let flash = require('connect-flash');
    let favicon = require('serve-favicon');
    let redisStore = require('connect-redis')(session);
    let config = require('config');
    let errorHandler = require(__base + '/utils/error-handler');

    /* Helmet */
    app.use(helmet());

    /* Cookies and Sessions */
    app.use(session({
            secret: process.env.SECRET_SESSION,
            resave: true,
            saveUninitialized: false,
            store: new redisStore({
                host: config.get('redis.host'),
                port: config.get('redis.port')
            })
        })
    );
    app.use(cookieParser(process.env.SECRET_COOKIE));
    app.use(flash());

    /* Favicon */
    app.use(favicon(path.join(__base, 'public/favicon', 'favicon.ico')));

    /* DB */
    require('../utils/mongoose');

    /* Passport */
    require(__base + '/utils/passport')(app, passport);
    app.use(passport.initialize());
    app.use(passport.session());

    /* Templates and Static files */
    app.set('view engine', 'pug');
    app.use(express.static('public'));

    /* BodyParser */
    app.use(bodyParser.json());
    app.use(bodyParser.urlencoded({ extended: false }));

    /* Routing */
    router(app);

    app.use('*', function(req, res) {
        res.status(404).render('404');
    });

    /* Errors */
    app.use(errorHandler);
};