function comprobar() {
  var nombre=document.getElementById("nombre").value;
  var apellidos=document.getElementById("apellidos").value;
  var curso=document.getElementById("curso").value;
  var error=true;
    document.getElementById('hidden1').style.display = 'none';
    document.getElementById('hidden2').style.display = 'none';
    document.getElementById('hidden3').style.display = 'none';
    document.getElementById('hidden4').style.display = 'none';
if (nombre=="") {
document.getElementById('hidden1').style.display = 'block';
error=false;
}
if (apellidos=="") {
  document.getElementById('hidden2').style.display = 'block';
  error=false;
}

if (curso=="") {
  document.getElementById('hidden3').style.display = 'block';
  error=false
}
if (isNaN(curso)) {
  document.getElementById('hidden4').style.display = 'block';
  error=false
}
if (error==false) {
  return false;
}

}
