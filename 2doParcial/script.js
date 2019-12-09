
//ajax 
function ajax (enlace) {
    ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                document.getElementById('contenido').innerHTML = 
                ajax.responseText;
            }
        }
    }
    ajax.open('GET', enlace+"?Nocache=Math.random()", true);
      ajax.send(null);
}

//funcion mayor
function mayor() {
    document.getElementById('estatus1').innerHTML= '';
    document.getElementById('estatus2').innerHTML= '';
    document.getElementById('estatus3').innerHTML= '';
    document.getElementById('estatus4').innerHTML= '';


    var num1 = parseInt(document.getElementById('text1').value);
    var num2 = parseInt(document.getElementById('text2').value);
    var num3 = parseInt(document.getElementById('text3').value);
    var num4 = parseInt(document.getElementById('text4').value);
    //console.log(`${num1} ${num2} ${num3} ${num4}`);

    if(num1 >= num2 && num1 >= num3 && num1 >= num4) {
        document.getElementById('estatus1').innerHTML= ' es el Mayor';
    } else if(num2 >= num1 && num2 >= num3 && num2 >= num4) {
        document.getElementById('estatus2').innerHTML =' es el Mayor';
    } else if(num3 >= num1 && num3 >= num2 && num3 >= num4) {
        document.getElementById('estatus3').innerHTML = ' es el Mayor';
    } else {
        document.getElementById('estatus4').innerHTML = ' es el Mayor';
    }
}


//pregunta2 js
function llamarSuma() {
	var html = "<br><label for='txtSum1'>numero 1</label> \
	<input type='text' name='txtSum1' id='txtSum1'><br><br> \
	<label for='txtSum2'>numero 2</label> \
	<input type='text' name='txtSum2' id='txtSum2'><br><br>\
	<button onclick='sumar();'>Sumar</button>";
	document.getElementById('contenido').innerHTML = html;
  }
  function sumar() {
      var num1 = parseInt(document.getElementById('txtSum1').value);
      var num2 = parseInt(document.getElementById('txtSum2').value);
      var suma=num1+num2;
      document.getElementById('resultado').innerHTML = 'Resultado =' + suma;
  }

  //noticia extensa
  function verMas(id) {
    ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                document.getElementById('contenido').innerHTML = 
                ajax.responseText;
            }
        }
    }
    ajax.open('GET', 'datos.php?id='+id, true);
      ajax.send(null);
}


    //pregunta 4
function validar(){
   if (document.getElementById("correo").value.length==0)
      {
      alert('error no especifico correo');
      document.getElementById("correo").setfocus();
      return
      }
   registrarU();
   return     
}
function registrarU(){
    var ajax = new XMLHttpRequest();
    var correo = document.getElementById("correo").value;
    var password = document.getElementById("password").value;
    var nombrecompleto = document.getElementById("nombrecompleto").value;
    var nivel = document.getElementById("nivel").value;
    var cadena = "correo=" + correo 
                + "&password=" + password 
                + "&nombrecompleto=" + nombrecompleto 
                + "&nivel=" + nivel;
        ajax.onreadystatechange = function(){
        if (ajax.readyState == 4 
            && ajax.status ==200) {
                var sms = ajax.responseText;
                contenido.innerHTML = sms;
        }
    }
    ajax.open("POST", "registrarUsuario.php", true);
    ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
    ajax.send(cadena);
}