const express = require('express')
const app = express()
app.get('/hello', function(req, res){
    res.send("Hello World <br/>Bye World...")
    })
app.listen(9999,function(){
console.log("Server is running on PORT 9999")
})
