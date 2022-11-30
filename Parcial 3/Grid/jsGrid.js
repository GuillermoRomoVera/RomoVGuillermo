    $(document).ready(function() {   
    const settings = {
        "async": true,
        "cossDomain": true,
        "url": "http://localhost:8081/RomoVGuillermo/Parcial%203/jsGrid/Conexion.php",
        "method": "GET",
        "headers": {
        "Accept": "*/*"
        }
    }
 
    $.ajax(settings).done(function (response){
    let tabla =JSON.parse(response);

    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,

        data: tabla,
 

        fields: [
            { name: "Clave", type: "number", textField:"Clave"},
            { name: "Cliente", type: "text", textField:"Cliente"},
            { name: "Ciudad", type: "text", textField:"Ciudad"},
            { name: "Estado", type: "text", textField:"Estado"},
            { name: "CodigoPostal", type: "number", textField:"CodigoPostal"},
            { name: "Usuario", type: "text", textField:"Usuario"},
            { name: "RFC", type: "text", textField:"RFC", width: 200},
            { name: "Contrasena", type: "text", textField:"Contrasena"},
            { name: "IDCliente", type: "number", textField:"IDCliente"},

        ]
      });
    });
});
