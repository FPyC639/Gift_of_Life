var express = require('express');
var socket = require('socket.io');
const bodyParser = require('body-parser');
const { handleSignup } = require('./public/signup.js')
var phpExpress = require('php-express')({
    binPath: 'php'
});

var app = express();
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());


//App setup
var server = app.listen(4000, function() {
    console.log('listening on requests on port 4000');
});


app.engine('php', phpExpress.engine);
app.post('/signup.js', handleSignup);

app.all(/.+\.php$/, phpExpress.router);

//Static files
app.use(express.static('public'));
app.use(express.json());

//Socket setup
var io = socket(server);