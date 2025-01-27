<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php
    $nombre="Karla Vanessa Flores Alvarado";
    $lugarN="San Salvador";
    $edad=20;
    $carnet="FA211416";
    ?>


   <div class="container col-md-8 mt-5">
    <div class="row">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr >
                    <td>Campo</td>
                    <td>Valor</td>
                </tr>
            
            </thead>
            <tr>
                <td>Nombre:</td>
                <td><?= $nombre?></td>
            </tr>
            <tr>
                <td>Lugar de nacimiento</td>
                <td><?=$lugarN?></td>
            </tr>
            <tr>
                <td>Edad</td>
                <td><?=$edad?></td>
            </tr>
            <tr>
                <td>Carnet</td>
                <td><?=$carnet?></td>
            </tr>
        </table>
    </div>
   </div>
    
</body>
</html>