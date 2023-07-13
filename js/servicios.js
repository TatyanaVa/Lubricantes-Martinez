document.getElementById('descuentosForm').addEventListener('submit', function(event) {
    event.preventDefault();

let ci = document.getElementById('input-ci').value;
let nombre = document.getElementById('input-nombre').value;
let apellido = document.getElementById('input-apellido').value;
let direccion = document.getElementById('input-direccion').value;
let servicio = document.getElementById('input-servicio').value;
let precio = parseFloat(document.getElementById('input-precio').value);

let descuento ;
        if (servicio === 'cambio') {
      descuento = precio * 0.10;
        } else if (servicio === 'mecanica') {
      descuento = precio * 0.15;
        }

let precioFinal = precio - descuento;

let descuentoHTML = `
    <h3>Generador de descuentos:</h3>
    <p><strong>Cédula:</strong> ${ci}</p>
    <p><strong>Nombre:</strong> ${nombre}</p>
    <p><strong>Apellido:</strong> ${apellido}</p>
    <p><strong>Dirección:</strong> ${direccion}</p>
    <p><strong>Tipo de Servicio:</strong> ${servicio === 'mecanica' ? 'Mecanica' : 'Cambio'}</p>
    <p><strong>Precio Final:</strong> ${precioFinal}</p>`;

    document.getElementById('descuentoResult').innerHTML = descuentoHTML;
});

  