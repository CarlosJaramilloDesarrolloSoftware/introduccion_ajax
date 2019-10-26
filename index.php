<!DOCTYPE html>
<html>
<body>

<div>
    <h2 id="h2textoi">Texto inicial</h2>
    <button type="button" onclick="cambiarTexto()">Cambiar texto</button>

    <h2 id="h2contenidositio">NADA</h2>
    <button type="button" onclick="buscarInformacion()">Buscar y cargar</button>

    <h2 id="h2apio">Resultado del API</h2>
    <button type="button" onclick="buscarInformacionExterna()">Buscar y cargar Externa</button>
</div>

<script>
function cambiarTexto() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("h2textoi").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "informacion.txt", true);
  xhttp.send();
}

function buscarInformacion() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("h2contenidositio").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost:8080/web1_1902/introduccion_ajax/listaClientes.php", true);
  xhttp.send();
}

function buscarInformacionExterna() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.response);
      //document.getElementById("h2api").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "https://jsonplaceholder.typicode.com/todos/1", true);
  xhttp.send();
}
</script>

</body>
</html>
