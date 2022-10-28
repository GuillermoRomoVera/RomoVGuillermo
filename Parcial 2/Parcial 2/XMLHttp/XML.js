window.onload = function(){
document.getElementById("BotonCambiar").addEventListener("click",pedirHeader);
document.getElementById("BotonReiniciar").addEventListener("click",inicarHeader);

function pedirHeader(){
    var solicitud = new XMLHttpRequest();

    solicitud.onreadystatechange = function() 
    {{
        if (solicitud.readyState==4 && solicitud.status==200) {
            document.getElementById("CargarArch").innerHTML = solicitud.responseText; 
        }
    }};

    solicitud.open("GET", "Ejercicio Http.txt", true);
    solicitud.send();
}

function inicarHeader() {
    document.getElementById("CargarArch").innerHTML = "<h2>Se hizo cambio en el Header</h2>";
}
}
