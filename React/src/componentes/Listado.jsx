import React, {useState} from "react";
import { generarNumeroAleatorio } from "./Biblioteca.js";

const Listado = () => {

    const vacio =[];

    const [estado, setEstado] = useState(vacio);

    const generar = (nuevoEstado) => {
        let nuevoNumero;
        do {
            nuevoNumero = generarNumeroAleatorio(1, 100);
        } while (estado.includes(nuevoNumero));
        setEstado([...estado, nuevoEstado]);
    }

    const eliminar = () => {
        setEstado(vacio);
    }

    return (
        <>
            <p>
                <ul>
                    {estado.map((numero, index) => (
                        <li key={index}>{numero}</li>
                    ))}
                </ul>
                </p>

            <button 
                onClick={() => {
                    generar(generarNumeroAleatorio(1,100));
                }}
            >
                Generar
            </button>
            <button 
                onClick={() => {
                    eliminar();
                }}
            >
                Eliminar
            </button>
        </>
    );
}

export default Listado;
