import express from 'express';
import socket from 'socket.io';

// Setup
const port = 8616;

let app = express();
let server = app.listen(port);
let io = socket(server);

io.sockets.on('connection', socket => {
	console.log('New Connection: ' + socket.id);
	socket.on('test', data => {
		console.log(data);
	})
})

console.log('Up & Running');
