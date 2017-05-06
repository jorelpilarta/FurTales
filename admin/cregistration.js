var express = require('express');
var http = require('http');
var mysql = require('mysql');
var app = express();
var bodyParser = require('body-parser');

var urlencodedParser = bodyParser.urlencoded({ extended: false});

app.set('port', process.env.PORT || 1337);
app.set('view engine', 'ejs');

var connection = mysql.createConnection({

	host: 'localhost',
	user: 'root',
	password: '',
	database: 'furtales'
});


connection.connect(function(error) {
	if (!!error) {
		console.log('Error');
	} else {
		console.log('Connected');
	}
});

app.get('/', function(req, res){
	res.render('clientreg', {qs: req.query});
})

//app.post('/clientreg', urlencodedParser, function(req, res){
//	console.log(req.body);
//	res.render('clientreg', {qs: req.query});
//});

app.post('/clientreg', urlencodedParser, function(req, res){

	var client = {
	last_name	: req.body.last_name,
	first_name	: req.body.first_name,
	client_address : req.body.client_address,
	client_cn	: req.body.client_cn,
	client_email : req.body.client_email,
};
	console.log(req.body);

	connection.query('INSERT INTO client set ?', client, function(err,rows, field){
		if(err)
          console.log("Error Selecting : %s ",err );

        res.render('clientreg',{page_title:"Client Registration",qs:rows});
	})
})

http.createServer(app).listen(app.get('port'), function(){
    console.log('Express server listening on port ' + app.get('port'));
});