import React, { useState } from "react";
import Matricula from "./Matricula.jsx";
import { extraerNumero, extraerTexto } from "./Biblioteca.js";

const Matriculas = (props) => {
    const { objeto } = props;
    const discentes = objeto.discentes;
    const [filtro, setFiltro] = useState(discentes);    

    // Filtra y muestra solo los estudiantes que pertenecen al curso "2DAW".
    const mostrarSolo2DAW = () => {
        const filtro = discentes.filter(
            (discente) => discente.curso === "2DAW"
        );
        setFiltro(filtro);
    } 
    
    // Filtra y muestra solo los estudiantes del primer curso.
    const mostrarSoloPrimerCurso = () => {
        const filtro = discentes.filter(
            (discente) => extraerNumero(discente.curso) === "1"
        );
        setFiltro(filtro);
    } 

    // Filtra y muestra solo los estudiantes que pertenecen al curso "DAW" (1º y 2º).
    const mostrarSoloDAW = () => {
        const filtro = discentes.filter(
            (discente) => extraerTexto(discente.curso) === "DAW"
        );
        setFiltro(filtro);
    } 

    // Filtra y muestra solo los estudiantes que tienen "lectura" como afición.
    const mostrarSoloAficionLectura = () => {
        const filtro = discentes.filter(
            (discente) => discente.aficiones.includes("lectura")
        );
        setFiltro(filtro);
    } 

    // Ordena la lista de estudiantes por apellidos en orden ascendente (alfabético).
    const ordenarPorApellidosAsc = () => {
        // Creamos una copia de `filtro` usando el operador de propagación (`[...filtro]`)
        // para evitar modificar el estado original directamente, ya que `sort` modifica
        // el array original. Aquí creamos un nuevo array para que React detecte el cambio
        // de estado sin alterar `filtro` directamente.
        const asc = [...filtro].sort(
            (a, z) => a.apellidos.localeCompare(z.apellidos)
        );
        setFiltro(asc);
    } 

    // Ordena la lista de estudiantes por apellidos en orden descendente (alfabético inverso).
    const ordenarPorApellidosDesc = () => {
        const desc = [...filtro].sort(
            (a, z) => z.apellidos.localeCompare(a.apellidos)
        );
        setFiltro(desc);
    } 

    // Restablece la lista completa de estudiantes sin aplicar filtros.
    const mostrarListadoCompleto = () => {
        setFiltro(discentes);
    } 

   // Función para eliminar un estudiante de la lista filtrada según su identificador.
    const clickDelete = (identificador) => {
        // Extraemos el número del identificador(persona-id).
        const id = extraerNumero(identificador);
        
        // Filtramos la lista `filtro` para crear una nueva lista `eliminado` que contiene
        // todos los estudiantes, excepto el que tiene el mismo ID que el identificado para eliminar.

        const eliminado = filtro.filter((discente) => discente.id !== parseInt(id));
        
        // Actualizamos 
        setFiltro(eliminado);
    };


    return (
        <>
            <div id="botones">
                <button 
                    onClick={() => {
                        mostrarSolo2DAW();
                    }}
                >
                    2º DAW
                </button>
                <button 
                    onClick={() => {
                        mostrarSoloPrimerCurso();
                    }}
                >
                    1º Curso
                </button>
                <button 
                    onClick={() => {
                        mostrarSoloDAW();
                    }}
                >
                    1º y 2º DAW
                </button>
                <button 
                    onClick={() => {
                        mostrarSoloAficionLectura();
                    }}
                >
                    Lectores
                </button>
                <button 
                    onClick={() => {
                        ordenarPorApellidosAsc();
                    }}
                >
                    Ordenar Apellidos Asc
                </button>
                <button 
                    onClick={() => {
                        ordenarPorApellidosDesc();
                    }}
                >
                    Ordenar Apellidos Desc
                </button>
                <button 
                    onClick={() => {
                        mostrarListadoCompleto();
                    }}
                >
                    Lista completa
                </button>
            </div>
            <div id="matriculados"
                     onClick={(e) => {
                        clickDelete(e.target.id);
                    }}
            >
                {filtro.map((discendente) => (
                    <Matricula
                        key={discendente.id}
                        id={discendente.id}
                        nombre={discendente.nombre}
                        apellidos={discendente.apellidos}
                        aficiones={discendente.aficiones}
                        curso={discendente.curso}
                        comida={discendente.comida}
                    />
                ))}
            </div>
        </>
    );
}

export default Matriculas;
