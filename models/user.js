let mongoose = require('mongoose');
let utils = require(__base + '/utils');

let userSchema = mongoose.Schema({
    email: {
        type: String,
        required: true,
        trim: true
    },
    username: {
        type: String,
        required: true,
        trim: true
    },
    password: {
        type: String,
        required: true,
        trim: true
    },
    role: {
        type: String,
        default: 'user'
    },
    createDate: {
        type: Date,
        default: Date.now
    },
    lastEnter: {
        type: Date,
        default: Date.now
    }
});

userSchema.methods = {

    authenticate: function(password) {
        return utils.encrypt(password) == this.password;
    }
};

module.exports = mongoose.model('User', userSchema);