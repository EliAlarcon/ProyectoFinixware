function captura() {
    let ciCliente = document.getElementById("ci-ruc-cliente").value;
    let nombreCliente = document.getElementById("nombre-cliente").value;
    let correoCliente = document.getElementById("correo-cliente").value;
    let direccionCliente = document.getElementById("direccion_cliente").value;
    let celularCliente = document.getElementById("celular_cliente").value;

    if (ciCliente == "") {
        alert("El número de ci/ruc es obligatorio");
        document.getElementById("ci-ruc-cliente").focus();
    } else {
        if (nombreCliente == "") {
            alert("El nombre es obligatorio");
            document.getElementById("nombre-cliente").focus();
        } else {
            if (correoCliente == "") {
                alert("Coloca tú correo electrónico");
                document.getElementById("correo-cliente").focus();
            } else {
                if (direccionCliente == "") {
                    alert("Déjanos saber desde que lugar nos visitas");
                    document.getElementById("direccion_cliente").focus();
                } else {
                    if (celularCliente == "") {
                        alert("Coloca al menos un número de contacto");
                        document.getElementById("celular_cliente").focus();
                    } else{
                        alert(`BIENVENIDO!!!!!!!\n${nombreCliente}\nA la comunidad gaming mas grande del Ecuador`);
                    }
                }
            }
        }
    }
}

const botonRegistrar = document.getElementById('btn-registrar');
botonRegistrar.addEventListener('submit', () =>{
    captura();
})
