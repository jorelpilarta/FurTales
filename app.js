//WARNING: table must be created prior to running findById and findAll code blocks below
		   //comment those code blocks out if building a new table starting from scratch

//some columns are automatically generated and configured by Sequelize Module
var Sequelize = require('sequelize');

//password is currently not needed to get into phpMyAdmin
//db schema named ???, ie; demo_schema, needs to be manually created before running this code
var connection = new Sequelize('demo_schema', 'root', '');

//connect and define (create) a table named doggie
//define (create) columns and configure their datatypes based on your DEFAULT VALUES
var Doggie = connection.define('doggie', {
	title: Sequelize.STRING,
	body: Sequelize.TEXT
});

//connect to db and sync with doggie table, generate sql codeBehind
//insert data into identified columns identified in script above, ie; title: body:
connection.sync().then(function() {
	Doggie.create({
		title: 'wag tales',
		body: 'I dont speak Latin.'
	});
});

////findById(actual row # goes here) outputs full row of data from an identified table row
//connection.sync().then(function() {
	//you must know the (#) first
//	Doggie.findById(2).then(function(doggie) {
//		console.log(doggie.dataValues);
//	});
//});

////this code block is not of much use!!!
////findAll() length of array, total # of ROWS ONLY is output, from an identified table
////pluralize the table (name)
//connection.sync().then(function() {
//	Doggie.findAll().then(function(doggies) {
		//change property to length, from dataValues in code block above
//		console.log(doggies.length);
//	});
//});
