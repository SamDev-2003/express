var mysql= require('mysql')
var connection =mysql.createConnection({
host:'localhost',
user:'root',
password:'',
database:'sod_society',
});
connection.connect(function(error){
    if(error){ 
        throw error;
    }else{
    console.log('Database connected')
}
})
module.exports=connection;