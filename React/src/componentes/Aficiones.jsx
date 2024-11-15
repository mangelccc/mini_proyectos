import React from "react";

const Aficiones = (props) => {
    const { aficiones } = props;

    return (
        <div className="aficiones">
            <p><strong>Mis Aficiones:</strong></p>
                {aficiones.map((aficion, index) => (
                    <p key={index}>{aficion}</p>
                ))}

        </div>
    );
};

export default Aficiones;
