const extraerNumero = (cadena) => {
    return cadena.replace(/\D/g, '');
}

const extraerTexto = (cadena) => {
    return cadena.replace(/[^a-zA-Z\s]/g, '');
}

const generarNumeroAleatorio = (min, max) => {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}


export { extraerNumero,extraerTexto,generarNumeroAleatorio };