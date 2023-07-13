<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Etiqueta meta para el autor del sitio y que datos va a tener-->
    <meta name="autor" content="Elizabeth Alarcón">
    <!--Etiqueta meta para las palabras relacionadas con mi página-->
    <meta name="keywords" content="Gaming computadoras Laptop Gammer">
    <!--Etiqueta meta que va a ser la descripción de mi página-->
    <meta name="description" content="Proyecto Finixware">
    <!--Link de Bootstrap - CDN via jsDelivr-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--Dowload los iconos de BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--Ícono de la página web-->
    <link rel="icon" type="image/x-icon" href="imagenes/icono_finixware.svg">
    <title>Detalles compra</title>
</head>

<body>
    <!-- Link mi hoja de estilos -->
    <link rel="stylesheet" href="css/formulario.css">
    <div class="pagina">
        <p>Si deseas mayor información sobre nuestros productos, déjanos tus datos y enseguida nos comunicamos contigo</p>
        <h3>SE PARTE DE NUESTRA COMUNIDAD GAMING</h3>
        <div class="formulario-compra container-fluid">
            <form action="modelo/registro.php" method="post" class="row g-3 needs-validation container" novalidate id="formulario">
                <legend>Datos de cliente</legend>
                <div class="mb-3">
                    <label for="ci-ruc-cliente" class="form-label">CI/RUC</label>
                    <input type="text" id="ci-ruc-cliente" class="form-control" name="ci_ruc_cliente" placeholder="CI/RUC">
                </div>
                <div class="mb-3">
                    <label for="nombre-cliente" class="form-label">Nombre o Razón Social</label>
                    <input type="text" id="nombre-cliente" class="form-control" name="nombre_cliente" placeholder="Nombre o Razón Social">
                </div>
                <div class="mb-3">
                    <label for="correo-cliente" class="form-label">Correo</label>
                    <input type="text" id="correo-cliente" class="form-control" name="correo_cliente" placeholder="Correo">
                </div>
                <div class="mb-3">
                    <label for="direccion-cliente" class="form-label">Dirección</label>
                    <input type="text" id="direccion-cliente" class="form-control" name="direccion_cliente" placeholder="Dirección">
                </div>
                <div class="mb-3">
                    <label for="celular-cliente" class="form-label">Teléfono / celular</label>
                    <input type="text" id="celular-cliente" class="form-control" name="celular_cliente" placeholder="Teléfono / celular">
                </div>
                <button type="submit" class="btn btn-primary" id="btn-registrar">Registrar</button>
            </form>
        </div>
        </div>
        <!--script de Bootstrap - CDN via jsDelivr-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>