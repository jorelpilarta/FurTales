var mysql = require('mysql');
var http = require('http');
var express = require('express');
var app = express();
var bodyParser = require('body-parser');
var methodOverride = require('method-override');
var errorHandler = require('errorhandler');

var urlencodedParser = bodyParser.urlencoded({ extended: false});

app.set('port', process.env.PORT || 3000);
app.set('view engine', 'ejs');
app.use('/styles', express.static('styles'));

app.use(bodyParser.json());
app.use(require('body-parser').urlencoded({extended: true}));
app.use(methodOverride());

if ('development' == app.get('env')) {
  app.use(errorHandler());
}

var connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'furtales'
})

connection.connect(function(error) {
	if (!!error) {
		console.log('Error');
	} else {
		console.log('Connection established');
	}
});

// Main page
app.get('/', function(req, res){
	res.render('index');
});

// View admins
app.get('/admin', function(req, res){
  connection.query("SELECT admin_id, last_name, first_name FROM admin", function(err, rows, fields){
    if (err){
    	console.log("Error in query");
    	return;
    }

		res.render('admin', {admin: rows});
	});
});

// View client list
app.get('/client', function(req, res){
	connection.query('SELECT * FROM client',function(err, rows, field){
		if(err)
        console.log("Error Selecting : %s ", err);
        res.render('client',{page_title:"client Table", client:rows});
	})
})

// Register new client
// Client page is updated
app.get('/clientreg', function(req, res){
	res.render('clientreg', {qs: req.query});
})

app.post('/clientreg', urlencodedParser, function(req, res){
	var client = {
  	last_name	: req.body.last_name,
  	first_name	: req.body.first_name,
  	client_address : req.body.client_address,
  	client_cn	: req.body.client_cn,
  	client_email : req.body.client_email,
  };
	console.log(req.body);
	connection.query('INSERT INTO client set ?', client, function(err, rows, field){
		if(err)
        console.log("Error Selecting : %s ", err);
        res.render('clientreg',{page_title:"Client Registration", qs:rows});
	})
})

// View services
app.get('/service', function(req, res){
  connection.query("SELECT * FROM service", function(err, rows, fields){
    if (err){
    	console.log("Error Selecting : %s ", err);
    	return;
    }

		res.render('service',{page_title:"Services", service:rows});
	});
});

// View service providers
app.get('/serviceprovider', function(req, res){
	connection.query('SELECT * FROM service_provider',function(err, rows, field){
		if(err)
        console.log("Error Selecting : %s ", err);
        res.render('sp',{page_title:"spp Table", sp:rows});
	})
})

// New service provider
// Service provider list is updated
app.get('/spreg', function(req, res){
	res.render('spreg', {spreg: req.query});
})

app.post('/spreg', urlencodedParser, function(req, res){
	var sp = {
    staff_id : req.body.staff_id,
  	last_name	: req.body.last_name,
  	first_name	: req.body.first_name,
  	service_id : req.body.service_id,
    sp_email : req.body.sp_email,
  	sp_cn	: req.body.sp_cn,
  	sp_pw : req.body.sp_pw,
  };
	console.log(req.body);
	connection.query('INSERT INTO service_provider set ?', sp, function(err, rows, field){
		if(err)
        console.log("Error Selecting : %s ", err);
        res.render('spreg',{page_title:"SP Registration", spreg:rows});
	})
})

http.createServer(app).listen(app.get('port'), function(){
    console.log('Express server listening on port ' + app.get('port'));
});
