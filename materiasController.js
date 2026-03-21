fetch("materiasModel.php")
.then(res => res.json())
.then(data => {

let select = document.getElementById("materia");

select.innerHTML="";

data.forEach(m => {

let option = document.createElement("option");

option.value = m.id;
option.text = m.nombre + " - " + m.docente;

select.appendChild(option);

});

});