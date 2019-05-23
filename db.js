var mysql      = require('mysql');
var connection = mysql.createPool({
    host     : 'venus',
    user     : 'ceven',
    password : 'Deutsch',
    database : 'ceven'
});
module.exports=connection;