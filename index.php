<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Estilo.css">
    <title>Discusion Resultados 1</title>
</head>
<body>
    <form method="post">

        <div class="Datos">
            <label>Ingrese un numero</label><br>
            <input type="text" name="NumTabla" class="texto" placeholder="min. 1 <--> max. 30">
        
            <div class="zonaBoton">
                <input type="submit" name="btnMostrarTabla" class="boton" value="Calcular"><br><br>
            </div>
        </div>
    </form>



    <div class="Resul">
        <label>Resultados: </label><br>
        <?php
            $tabla = array();
            if((isset($_POST["btnMostrarTabla"])) && !empty($_POST["NumTabla"]) && ($_POST["NumTabla"] >= 1) && ($_POST["NumTabla"] <=30))
            {
                for($i= 1; $i < 11; $i++)
                {
                    $tabla[$i]= $i. " x " . $_POST["NumTabla"]. " = " .($_POST["NumTabla"] * $i). "<br>";
                }

                for($i= 1; $i < 11; $i++)
                {
                    echo $tabla[$i];
                }
                
            }
            
        ?>
    </div>
</body>
</html>

