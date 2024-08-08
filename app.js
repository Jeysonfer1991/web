/* importar libreria
const express = require("express");



// llamar objetos

const app = express();

//configuraciones ejs


app.set("view engine", "ejs");
app.get("/", function(req,res){
    res.render("index")
});


/* ruta inicial, mostrrar mensaje

app.get("/", function(req,res){
    res.send("HOLA")

})*/

// ruta de paginas staticas html mildddreware

//app.use(express.static("public"));



// crear servidor , configurar puerto usado

/*app.listen(3000,function(){
    console.log("EL SERVIDOR ES http://localhost:3000")
});
