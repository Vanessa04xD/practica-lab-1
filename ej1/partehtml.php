<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demostracion de HTML y PHP</title>


    <!--incluyendo bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>
<body>

   <div class="container my-5">
    <header class="text-center mb-4">
        <h1 class="display-4">Demostracion de HTML y PHP</h1>
        <p class="lead">Compara las diferencias en el uso de HTML y PHP con ejemplos visuales</p>

    </header>


    <!--Seccion HTML y PHP lado a lado-->
    <section class="row d-flex justify-content-between">
    <div class="col-md-5">    
    <div class="section-title">HTML</div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Codigo HTML</h5>
                <div class="code-block">
                    <p>&lt;!DOCTYPE html&gt;</p>
                    <p>&lt;html&gt;</p>
                    <p class="highlight">&lt;!--Parte de HTML normal --&gt;</p>
                    <p>&lt;/html&gt;</p>
                </div>
                <p>Este es un fragmento de codigo HTML basico que estructura la pagina</p>
                </div>
            <div class="card-footer text-center">
                <img src="img/html5.png" alt="Logo de HTML5" class="img-fluid"/>
            </div>
        
        </div>
        </div>

        <!--seccion php-->
        <?php
        echo '
        <div class="col-md-5">
            <div class="section-title">Codigo PHP</div>
            <div class="card">
            <div class="card-body">
            <h5 class="card-title">Codigo PHP</h5>
                <div class="code-block">
                    <p>&lt;?php</p>
                    <p class="highlitght">echo "6lt;h1&gt;Hola desde PHP&lt;/h1&gt;";</p>
                    <p>&lt;?&gt,</p>
                </div>
                <p>Este es un ejemplo de como PHP se integra en una pagina web para generar contenido dinamico.</p>
            </div>
            <div class="card-footer text-center">
                <img src="img/php.png" alt="Logo de PHP" class="img-fluid"/>
            </div>
        </div>
        </div>
        ';
        ?>
    </section>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>