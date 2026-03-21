document.getElementById("formAlumno").addEventListener("submit", function(e){

e.preventDefault();

let datos = new FormData(this);

fetch("alumnosModel.php",{
method:"POST",
body:datos
})
.then(res => res.text())
.then(data =>{

alert(data);

document.getElementById("formAlumno").reset();

});

});