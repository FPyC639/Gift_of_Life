var express = require('express');
var socket = require('socket.io');
var phpExpress = require('php-express')({
    binPath: 'php'
});

var app = express();

//App setup
var server = app.listen(4000, function() {
    console.log('listening on requests on port 4000');
});


app.engine('php', phpExpress.engine);

app.all(/.+\.php$/, phpExpress.router);

//Static files
app.use(express.static('public'));


//Socket setup
var io = socket(server);