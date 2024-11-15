"use strict";

import { generarTabla, generarColores } from './biblioteca.js';

document.addEventListener("DOMContentLoaded", () => {

    // Generar Colores para Pintar.
    const coloresDiv = document.getElementById("colores");
    generarColores(coloresDiv);

    // Generar Pizarra.
    const tablaDiv = document.getElementById("pizarra");
    generarTabla(60, 50, tablaDiv);

    //Ejercicio:

    // Seleccionar color al hacer clic en un botón de colores.
    let colorSeleccionado = null;
    const colorSeleccionadoTexto = document.querySelector("h3");
    coloresDiv.addEventListener('click', (evento) => {
        // Verifica si se hizo clic en un botón dentro del div de colores.
        if (evento.target.closest("#colores") && evento.target.tagName === "BUTTON") {
            colorSeleccionado = evento.target.style.backgroundColor;
            console.log("Se hizo clic en un botón con color:", colorSeleccionado);

            // Actualiza el contenido del h3 con el color seleccionado.
            colorSeleccionadoTexto.innerText = `Color seleccionado: ${colorSeleccionado}`;
        }
    },
    false
    );

    // Evento de clic para activar/desactivar el modo de pintado.
    let modoPintado = false;
    tablaDiv.addEventListener("click", () => {
        modoPintado = !modoPintado;
        console.log("Modo de pintado: " + (modoPintado ? "Activado" : "Desactivado"));
    },
    false
);

// Evento de mouseover en el contenedor principal de la tabla.
tablaDiv.addEventListener("mouseover", (evento) => {
    // Verifica si el elemento objetivo del evento es una celda (td).
    if (evento.target.tagName === "TD" && modoPintado && colorSeleccionado) {
            evento.target.style.backgroundColor = colorSeleccionado;
    }
}, false);

    // Reiniciar tabla.
    const celdas = tablaDiv.getElementsByTagName("td");
    const reiniciarBoton = document.getElementById("reiniciar");

    reiniciarBoton.addEventListener("click", (evento) => { 
        modoPintado = false;
        for (let i = 0; i < celdas.length; i++) {
            celdas[i].style.backgroundColor = "white";
        }
    },
    false
    );

}); // Fin de DOMContentLoaded
