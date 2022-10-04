<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3</title>
    <style type="text/css">
      ol { 
      list-style-type: none;
      }
    </style>
</head>
<body>
    <?php
    require_once __DIR__.'/src/funciones.php';
    ?>
    <div>
        <h3>Ejercicio 1</h3>
        <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>
        <p>
            R:
            <?php
                        if (!empty($_GET['numero'])) {
                $numero = $_GET['numero'];
                echo multiplo($numero);
            } else {
                echo '(vacío)';
            }
            
            ?>
        
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 2</h3>
        <p>
            Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una secuencia compuesta por:
            <br><strong>impar, par, impar</strong>
        </p>
        <p>
            R:
            <pre>
            <?php // AQUÍ VA EL CÓDIGO DE SOLUCIÓN
            impar_par();
            ?>
        </pre>
            
            
            
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 3</h3>
        <p>Utiliza un ciclo <strong>while</strong> para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
        <p>
            R:
            <?
            $num = $_GET['numero'];
            mult($num);
        ?>
        </p>
    </div>
    <hr>
    <div>
        <h3>Ejercicio 4</h3>
        <p>Crear un arreglo cuyos <strong>índices</strong> van de 97 a 122 y cuyos <strong>valores</strong> son las letras de la 'a' a la 'z'. Usa la función <strong>chr(n)</strong> que devuelve el caracter cuyo código ASCII es <strong>n</strong> para poner el valor en cada índice. Es decir:</p>
        <p>
            [97] => a <br>
            [98] => b <br>
            [99] => c <br>
            … <br>
            [122] => z
        </p>
        <p>
            R:
            <table style="border-collapse: collapse; width: 20%; height: 180px;" border="1">
            <?php
            // AQUÍ VA EL CÓDIGO DE SOLUCIÓN
            ascii();
            ?>
            </table>
            
        </p>
    </div>
    <div>
        
        <h3>Ejercicio 5</h3>
        <p>
            Usar las variables <strong>$edad</strong> y <strong>$sexo</strong> en una instrucción if para identificar una persona de sexo "femenino", 
            cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado. Por ejemplo:
        </p>
        <p>
            <em>Bienvenida, usted está en el rango de edad permitido.</em>
        </p>
        <p>
            En caso contrario, deberá devolverse otro mensaje indicando el error.
        </p>
        <ul>
            <li>Los valores para $edad y $sexo se deben obtener por medio de un formulario en HTML.</li>
            <li>Utilizar el la Variable Superglobal $_POST (revisar documentación).</li>
        </ul>
        </p>
        <p>
            R:
            <form id="formulario1" action="./src/script1.php" method="post"> 
            <fieldset>
                <legend>Información Personal</legend>
                <ol>
                <li><label>Edad:</label> <input type="text" name="edad"></li>
                <li><label>Sexo:</label> <input type="text" name="sexo"></li>
                </ol>
            </fieldset>
            <p>
                <input type="submit" value="¡OK!">
            </p>
            </form>
           
        </p>
    </div>

    <h3>Ejercicio 6</h3>
        <p>
        Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de
una ciudad. 
       
        </p>
        <p>
            R:
            <form method="POST" action="./src/script1.php" style="font-family: Arial, Helvetica, sans-serif;">
            <h3><strong>EJERCICIO 6</strong></h3>
            <h4>Consulta</h4>
            MATRICULA  <select name="matricula">
                <option>ALL</option>
                <option>UBN6338</option>
                <option>UBN6339</option>
                <option>HTC6338</option>
                <option>UHN6538</option>
                <option>UTT6399</option>
                <option>YUT1234</option>
                <option>UBP6377</option>
                <option>UYH8338</option>
                <option>TRH5647</option>
                <option>UBN8888</option>
                <option>HDR7838</option>
                <option>UPO9988</option>
                <option>CHT5638</option>
                <option>UTL3387</option>
                <option>UBO8338</option>
            </select>

            <br><br>
            <input type="submit" value="INGRESAR">
            <br><br>
        </form>
    </div>

        </p>
    </div>
</body>
</html>