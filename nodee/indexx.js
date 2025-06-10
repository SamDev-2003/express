var express=require('express');
var app=express();

var con= require('./db_conn.js');
var bodyparse=require('body-parser');

app.get('/',(req,res)=>{
    res.sendFile(__dirname + '/register.html')
})

app.use(bodyparse.json())
app.use(bodyparse.urlencoded({extended:true}))

app.post('/register',(req,res)=>{
    var name=req.body.name;
    var email=req.body.email;
    var mno=req.body.mno;

    var sql='INSERT INTO students(name,emai,number) VALUES (?,?,?)';
    con.query(sql,[name,email,mno],function(error,results){
        if(error){
            throw error
        }
        res.send('student registered successfully');
    })
})

app.listen(3100,()=>{
    console.log('http://localhost:3100')
})