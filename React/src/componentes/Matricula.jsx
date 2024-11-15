import React from "react";
import Aficiones from "./Aficiones.jsx";

const Matricula = (props) => {
    const { id, nombre, apellidos, curso, aficiones, comida } = props;

    return (
        <div className="matricula">
            <p><strong>Alumno {id}</strong> </p>
            <p id={`nombre-${id}`}><strong>Nombre:</strong> {nombre} {apellidos} </p>
            <p><strong>Curso:</strong> {curso} </p>
            <Aficiones aficiones={aficiones} />
            <p><strong>Comida favorita:</strong> {comida} </p>
            <p>-----------------------------------------------------------</p>
        </div>
    );
};

export default Matricula;