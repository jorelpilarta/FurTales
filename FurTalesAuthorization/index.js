//exports.index = function(req, res) {
//	res.render("login.ejs");	
//}
////this code above may not be required or
////this index.js as it is in another folder

var fs = require('fs')
 , path = require('path')
 , Sequelize = require('sequelize')
 , lodash = require('lodash')
 , sequelize = new Sequelize('goatjs', 'root', null)
 , db = {}

fs
	.readdirSync(__dirname)
	.filter(function(file) {
		return(file.indexOf('.') !== 0) && (file !== 'index.js')
	})
	.forEach(function(file) {
		var model = sequelize.import(path.join(__dirname, file))
		db[model.name] = model
	})

module.exports = lodash.extend({
	sequelize: sequelize,
	Sequelize: Sequelize
}, db)