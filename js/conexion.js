/*let mysql = require("mysql");
let conexion = mysql.createConnection({
    host: "localhost",
    database: "tiendaonline",
    user: "root",
    password: ""

})

conexion.connect(function(err){
    if(err){
        throw err;
        
    }else{
        console.log("conexion exitosa")
        
    } 
});


//MOSTRAR PRODUCTOS

/*const prodcutos = "SELECT * FROM prodcutos";
conexion.query(prodcutos,function(error,lista){
    if (error){
        throw error;
    }else{ 
       console.log(lista[0].nombre_producto);
        
     }
})*/

//ingresar a datos  BD

//const registrarse = "INSERT INTO clientes (cc_nit, nombres, apellidos, telefono, correo, direccion) VALUES ('56456123', 'Sandra', 'Ramos', '123456', 'sandra@hotmail.com', 'cra 3 # 1 b 56')";
//conexion.query(registrarse, function(error, rows){
    //if (error){
        //throw error;
    //}else{
        //console.log("datos insertados correctamente")
    //}


//})

// ACTUALIZAR DATOS EM BD

//const modificar = "UPDATE clientes SET nombres= 'Eduardo' WHERE cc_nit = 1012375222  " ;
//conexion.query(modificar,function(error,lista){
    //if (error){
        //throw error;
    //}else{ 
       //console.log("dato modificado corectamente");
        
     //}
//})

// BORRAR DATOS
/*const borrar = "DELETE FROM clientes WHERE cc_nit = 1012375222";
conexion.query(borrar,function(error,lista){
    if (error){
        throw error;
    }else{ 
       console.log("registro borrado correctamente");
        
     }
})*/



conexion.end();



