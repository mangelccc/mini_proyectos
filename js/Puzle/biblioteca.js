const generarImagenesOrdenAleatorio = (dondeLoQuieres) => {
    // Array de URLs de las imágenes del rompecabezas.
    let imagenesURL = [
        "./img/1.png",
        "./img/2.png",
        "./img/3.png",
        "./img/4.png",
        "./img/5.png",
        "./img/6.png",
        "./img/7.png",
        "./img/8.png",
        "./img/9.png"
    ];

    // Crear un array de índices para las imágenes (Ayudado de chat gpt).
    let indices = imagenesURL.map((_, index) => index);

    // Ordenar el array de índices de forma aleatoria.
    indices.sort(() => Math.random() - 0.5);

    // Crear y agregar cada imagen con su div contenedor al contenedor principal.
    for (let i = 0; i < indices.length; i++) {
        let id = indices[i];

        // Crear el elemento de imagen.
        const imagen = document.createElement("img");
        imagen.id = `imagen-${id + 1}`;
        imagen.src = imagenesURL[id];
        imagen.draggable = true;
        imagen.className = "pieza-rompecabezas";
        
        // Agregar la imagen al contenedor principal.
        dondeLoQuieres.appendChild(imagen);
    }
};

const generarDivs = (dondeLoQuieres) => {
    // Crear y agregar las casillas vacías para las imágenes.
    for (let i = 0; i < 9; i++) {
        const casilla = document.createElement("div"); 
        casilla.id = i + 1;
        casilla.className = "soltable";
        // Agregar la casilla vacía al contenedor principal.
        dondeLoQuieres.appendChild(casilla);
    }
};

export { generarImagenesOrdenAleatorio, generarDivs };

