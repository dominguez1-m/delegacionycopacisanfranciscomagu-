// Función para validar el formulario
function validarFormulario(event) {
  // Prevenir el envío del formulario por defecto
  event.preventDefault();

  // Obtener los valores de los campos
  var nombre = document.getElementById("nombre").value;
  var barrio = document.getElementById("barrio").value;
  var edad = document.getElementById("edad").value;
  var generoHombre = document.getElementById("hombre").checked;
  var generoMujer = document.getElementById("mujer").checked;
  var conformidad = document.getElementById("conformidad").value;
  var comentarios = document.getElementById("comentarios").value;

  // Validar que los campos no estén vacíos
  if (nombre === "" || edad === "" || comentarios === "") {
    alert("Por favor, complete todos los campos obligatorios");
    return;
  }

  // Validar que se haya seleccionado un género
  if (!generoHombre && !generoMujer) {
    alert("Por favor, seleccione un género");
    return;
  }

  // Validar la edad
  if (isNaN(edad) || edad <= 0) {
    alert("La edad debe ser un número positivo");
    return;
  }

  // Si todos los campos son válidos, se puede enviar el formulario
  console.log("Nombre:", nombre);
  console.log("Barrio:", barrio);
  console.log("Edad:", edad);
  console.log("Género:", generoHombre ? "Hombre" : "Mujer");
  console.log("Conformidad:", conformidad);
  console.log("Comentarios:", comentarios);
}

// Agregar evento de envío del formulario
document.querySelector("form").addEventListener("submit", validarFormulario);
