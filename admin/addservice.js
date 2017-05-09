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
	res.render('addservice', {qs: req.query});
})

app.post('/addservice', urlencodedParser, function(req, res){
	var service = {
	service_name	: req.body.service_name,
	price	: req.body.price,
	service_description : req.body.service_description,
	
};
	console.log(req.body);

	connection.query('INSERT INTO service set ?', service, function(err,rows, field){
		if(err)
          console.log("Error Selecting : %s ",err );

        res.render('addservice',{page_title:"Add Service",qs:rows});
	})
})

http.createServer(app).listen(app.get('port'), function(){
    console.log('Express server listening on port ' + app.get('port'));
});