var server = require('ws').Server;
var s = new server({ port: 5000});

s.on('connection',function (ws) {
    ws.on('message',function (message) {
        console.log('Received: '+message);
    });
});