var express = require('express');
var http = require('http');
var mysql = require('mysql');
var app = express();
var bodyParser = require('body-parser');
var path = require('path');

var urlencodedParser = bodyParser.urlencoded({ extended: false});

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended:true}));
app.use(bodyParser.urlencoded({ extended: false }));
app.use(express.static(path.join(__dirname, 'public')));

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

app.get('/', function(req, res) {
	res.render('homepage');
	});

app.get('/homepage2', function(req, res) {
	res.render('homepage2');
	});

app.get('/clientreg', function(req, res) {
	//res.render(path.join(__dirname+ '/views/clientreg.ejs'));
	res.render('clientreg', {qs: req.query});
	});

app.get('/spreg', function(req, res) {
	res.render('spreg', {qs: req.query});
	});
entry=[];
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

        //res.render('clientreg',{page_title:"Client Registration",qs:rows});
        //console.log('Last insert ID:', res.insertedId);
        entry = rows;
        return res.redirect('/success2');

	})
})

app.post('/spreg', urlencodedParser, function(req, res){
	var sp = {
	last_name	: req.body.last_name,
	first_name	: req.body.first_name,
	service_id : req.body.service_id,
	sp_email : req.body.sp_email,
	sp_cn	: req.body.sp_cn,
	sp_pw		: req.body.sp_pw,
};
	console.log(req.body);

	connection.query('INSERT INTO service_provider set ?', sp, function(err,rows, field){
		if(err)
          console.log("Error Selecting : %s ",err );

        //res.render('spreg',{page_title:"SP Registration",qs:rows});
        return res.redirect('/success2')

	})
})

app.get('/clientt', function(req, res){
	connection.query('SELECT * FROM client',function(err,rows, field){
		if(err)
          console.log("Error Selecting : %s ",err );

        res.render('clientt',{page_title:"clientt Table",data:rows});
	})
})

app.post('/clientt', urlencodedParser, function(req, res){
	connection.query('SELECT client_id FROM client', function(err, rows, field){
		var id = entry[i].client_id;

	connection.query('UPDATE client set membership_status = ? WHERE membership_status = ? and client_id = ?', ["member", "pending", entry[i].client_id], function(err, result){
		console.log("Successfully Updated");
		console.log(result);
		//res.write('');

	});
	})
	//connection.query('UPDATE client set membership_status = ? WHERE membership_status = ? and client_id = ?', ["member", "pending", id], function(err, result){
	//	console.log("Successfully Updated");
	//	console.log(result);
		//res.write('');

	//});
});

app.get('/spp', function(req, res){
	connection.query('SELECT * FROM service_provider',function(err,rows, field){
		if(err)
          console.log("Error Selecting : %s ",err );

        res.render('spp',{page_title:"spp Table",data:rows});
	})
})

app.post('/spp', urlencodedParser, function(req, res){
	connection.query('UPDATE service_provider set membership_status = ?', ["member"], function(err, result){
		console.log("Successfully Updated");
		console.log(result);
		res.write("Update Successful");
		//res.render('spp',{page_title:"clientt Table",data:rows});

	});
});

app.get('/test', function(req, res){
	connection.query('SELECT * FROM service',function(err,rows, field){
		if(err)
          console.log("Error Selecting : %s ",err );

        res.render('test',{page_title:"Test Table",data:rows});
	});
});

app.get('/login', function(req, res){
	res.render('login', {qs: req.query});
});
 
app.post('/login', urlencodedParser, function(req, res){
  var email= req.body.admin_email;
  var password = req.body.admin_password;

  connection.query('SELECT * FROM admin WHERE admin_email = ?',[email], function (error, results, fields) {
  if (error) {
    // console.log("error ocurred",error);
    res.send({
      "code":400,
      "failed":"error ocurred"
    })
  }else{
    // console.log('The solution is: ', results);
    if(results.length >0 && [0].password == [0].password){
      //if([0].password == password){
        //res.send({
          //"code":200,
          //"success":"login sucessfull"
           //});
           return res.redirect('/homepage2');
      }
      //else{
       // res.send({
          //"code":204,
         // "success":"Email and password does not match"
           // });
      //}
    //}
    else{
      res.send({
        "code":204,
        "success":"Email does not exits"
          });
    }
  }
  });
});

app.get('/addservice', function(req, res){
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

       // res.render('addservice',{page_title:"Add Service",qs:rows});
        //res.send('Insert was Successful!');
        return res.redirect('/success')
	})
})

app.get('/success', function(req, res){
	res.render('success');
})

app.get('/success2', function(req, res){
	res.render('success2');
})

http.createServer(app).listen(app.get('port'), function(){
    console.log('Express server listening on port ' + app.get('port'));
});

