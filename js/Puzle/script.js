"use script"

import { generarImagenesOrdenAleatorio, generarDivs } from './biblioteca.js';

document.addEventListener("DOMContentLoaded", () => {
    // Creación del HTML desde JavaScript para practicar.
    const primerDiv = document.getElementById("piezas-rompecabezas");
    const segundoDiv = document.getElementById("casillas-rompecabezas");

    // Genera las imágenes en orden aleatorio en el primer contenedor.
    generarImagenesOrdenAleatorio(primerDiv);

    // Genera las casillas en el segundo contenedor.
    generarDivs(segundoDiv);

    // Crea el mensaje de victoria, inicialmente oculto.
    const mensaje = document.createElement("h3");
    mensaje.textContent = "¡Has Ganado!";
    segundoDiv.parentNode.insertBefore(mensaje, segundoDiv);
    mensaje.style.display = "none";

    // Configuración de eventos de arrastre para las piezas.
    document.body.addEventListener(
        "dragstart",
        (evento) => {
            // Permite solo arrastrar imágenes.
            if (evento.target.tagName === "IMG") { 
                evento.dataTransfer.setData("identificador", evento.target.id);
            } else {
                // Evita que otros elementos se arrastren.
                evento.preventDefault();
            }
        },
        false
    );

    // Previene el comportamiento predeterminado al arrastrar sobre cualquier elemento.
    document.body.addEventListener(
        "dragover",
        (evento) => {
            evento.preventDefault();
        },
        false
    );

    // Evento de soltado para colocar las piezas en las casillas correspondientes.
    document.body.addEventListener(
        "drop",
        (evento) => {
            evento.preventDefault();
            if (evento.target.classList.contains("soltable")) {
                // Solo permite soltar si el elemento arrastrado es una imagen.
                const elementoArrastrado = document.getElementById(evento.dataTransfer.getData("identificador"));
                if (elementoArrastrado && elementoArrastrado.tagName === "IMG") {
                    evento.target.appendChild(elementoArrastrado);
                    verificarVictoria();
                }
            }
        },
        false
    );

    const casillas = segundoDiv.querySelectorAll(".soltable");
    const boton = document.getElementsByTagName("button")[0];

    // Evento del botón para reiniciar el rompecabezas.
    boton.addEventListener("click", () => {
        primerDiv.innerHTML = "";
        for (let i = 0; i < casillas.length; i++) {
            casillas[i].innerHTML = "";
        }
        mensaje.style.display = "none";
        generarImagenesOrdenAleatorio(primerDiv);
    });

    // Función para verificar si el jugador ha ganado.
    const verificarVictoria = () => {
        let completado = true;

        for (let i = 0; i < casillas.length; i++) {
            const casilla = casillas[i];
            const imagen = casilla.querySelector("img");
            // Verifica que cada casilla tenga la imagen correcta en el orden correcto.
            if (!imagen || imagen.id !== `imagen-${i + 1}`) {
                completado = false;
                break;
            }
        }

        // Muestra el mensaje si el rompecabezas está completo.
        mensaje.style.display = completado ? "block" : "none";
    };
}); // Fin de DOMContentLoaded.
