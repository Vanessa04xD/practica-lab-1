<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP - Operadores aritmeticos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            font-family:"Arial Black";
        }
        .container{
            margin-top: 50px;
        }
    </style>
</head>
<body>

        <div class="container">
            <h1 class="text-center mb-4">Operadores aritmeticos en PHP</h1>
            <p class="lead text-center">Ejemplo de como realizar operaciones aritmeticas con PHP:</p>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Operaciones aritmeticas</h5>
                    <p class="card-text">
                        <?php
                        $a=8;
                        $b=3;
                        ?>

                        <strong>Resultado de la suma: </strong><?php echo $a +$b;?><br>
                        <strong>Resultado de la resta: </strong><?php echo $a-$b;?><br>
                        <strong>Resultado de la multiplicacion: </strong><?php echo $a*$b;?><br>
                        <strong>Resultado de la division: </strong><?php echo $a/$b;?><br>
                        <strong>Valor de $a despues del incremento: </strong><?php $a++; echo $b;?><br>
                        <strong>Valor de $b despues del incremento: </strong><?php $b++; echo $b;?><br>
                    </p>
                </div>
            </div>
        </div>
    <!-- Incluir jQuery y Bootstrap JS desde sus CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>