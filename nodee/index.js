var express = require('express')
var app =express()
var port=126;
var path = require('path')
app.get('/',function(req,res){

res.sendfile(path.join(__dirname,'/index.html'))

})
app.listen(port,()=>{
    console.log(`http://localhost:${port}`);
})