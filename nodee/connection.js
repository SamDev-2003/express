const mysql=require('mysql');
const express=require('express');
const app=express();
const port=4700;


const connection=mysql.createConnection({
    host :'localhost',
    user :'root',
    password :'',
    dbname :'sod_society',
    
    })
    app.get('/',(req,res)=>{
        res.send('CONNECTION TO DB SUCESSFULY ');
        
      })
    connection.connect((err)=>{
        if(err){
          console.log('not connected');
        }else{
          console.log(' connected   well ');
        }
      })
app.listen(port,()=>{
    console.log('http://localhost:4200')
})
module.export=connection;
