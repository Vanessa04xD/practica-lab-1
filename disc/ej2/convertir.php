<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <?php
        
        $usd=$_POST['usd'];
        if(isset($_POST['usd']) && trim($_POST['usd']) !== '')
        {
            $usd=str_replace(',','.',$usd);

            //si no se usara type="number"
            /*if(is_numeric($usd))
            {
              */  $resultado=$usd*0.95;/*
            }
            else{
                $resultado='ingrese un valor numerico';
            }*/
        }
    
    ?>

    <div class="container col-md-5 py-3">
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <td>Valor en USD</td>
                    <td>Valor en EUR</td>
                </tr>
                <tr>
                    <td><?=number_format($_POST['usd'],2)?></td>
                    <td><?=number_format($resultado,2)?></td>
                </tr>
                
            </table>
        </div>
    </div>
    
</body>
</html>