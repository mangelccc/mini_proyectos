
    //Generar Tabla

    const generarTabla = (filas,columnas,dondeLoQuieres) => {
        const table = document.createElement("table");
        for (let i = 0; i < filas; i++){
            const tr = document.createElement("tr");
            for (let j = 0; j < columnas; j++){
                const td = document.createElement("td")
                tr.appendChild(td);
            }
            table.appendChild(tr);
        }
        dondeLoQuieres.appendChild(table);
    }
    const generarColores = (dondeLoQuieres) => {
        let colores = ["black","yellow","green","blue","white"];
        for (let i = 0; i<colores.length; i++){
            const boton = document.createElement("button");
            boton.style.backgroundColor = colores[i];
            dondeLoQuieres.appendChild(boton);
        }
    }

export { generarTabla,generarColores };