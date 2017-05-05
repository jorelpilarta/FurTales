var express = require('express');
var http = require('http');
var router = require('router');
var path = require('path');
var mysql = require('mysql');
var app = express();
//var test = require('./routes/test');
var bodyParser = require('body-parser');
var methodOverride = require('method-override');
var errorHandler = require('errorHandler');
//var morgan = require('morgan');
//var connection  = require('express-myconnection');

app.set('port', process.env.PORT || 1337);
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');
//app.use(express.logger('morgan'));
app.use(bodyParser.json());
app.use(require('body-parser').urlencoded({extended: true}));
app.use(methodOverride());
app.use(express.static(path.join(__dirname, 'public')))

if ('development' == app.get('env')) {
  app.use(errorHandler());
}

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

//app.get('.../routes/test', test.list);
app.get('/', function(req, res){
	connection.query('SELECT * FROM client',function(err,rows, field){
		if(err)
          console.log("Error Selecting : %s ",err );

        res.render('clientt',{page_title:"clientt Table",data:rows});
	})
})

http.createServer(app).listen(app.get('port'), function(){
    console.log('Express server listening on port ' + app.get('port'));
});

