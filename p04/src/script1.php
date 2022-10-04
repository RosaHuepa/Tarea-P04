<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Completado</title>
		<style type="text/css">
			body {margin: 20px; 
			background-color: #C4DF9B;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
		<h1>RESPUESTA</h1>
		<?php
		$age = $_POST["edad"];
        $sex = $_POST["sexo"];

if ($age >18) {
	if ($sex == "femenino" || $sex == "Femenino" || $sex == "FEMENINO" ||$sex=='masculino' ||$sex=='Masculino' ||$sex=='MASCULINO') {
		echo '<h1>Bienvenida, usted está en el rango de edad permitido.</h1>';
	} elseif ($age >=35) {
		if ($sex == "femenino" || $sex == "Femenino" || $sex == "FEMENINO" ||$sex=='masculino' ||$sex=='Masculino' ||$sex=='MASCULINO')
		echo '<h1>Bienvenido, usted no está en el rango de edad permitido.</h1>';
	}
} else {
	echo "USTED NO TIENE PERMITIDO ENTRAR";
}
?>

<?php
            $autos = array('UBN6338' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2001",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Josue',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Balcones del Sur'
                )
            ), 'UBN6339' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2001",
                    'tipo' => "Hachback"
                ),
                'propietario' => array(
                    'nombre' => 'Evelyn',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Balcones del Sur'
                )
            ), 'HTC6338' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2011",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Patricio',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Volcanes'
                )
            ), 'UHN6538' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2009",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Victor',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Angelopolis'
                )
            ), 'UTT6399' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2001",
                    'tipo' => "Senda"
                ),
                'propietario' => array(
                    'nombre' => 'Marcos',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Valles'
                )
            ), 'YUT1234' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2013",
                    'tipo' => "Senda"
                ),
                'propietario' => array(
                    'nombre' => 'Troy',
                    'ciudad' => 'Hidalgo',
                    'direccion' => 'Col. Bella Vista'
                )
            ), 'UBP6377' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2020",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Jose',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. Maravillas'
                )
            ), 'UYH8338' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2006",
                    'tipo' => "Hachback"
                ),
                'propietario' => array(
                    'nombre' => 'Antonio',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Palmera'
                )
            ), 'TRH5647' => array(
                'auto' => array(
                    'marca' => "Crevrolet",
                    'modelo' => "2020",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Dolores',
                    'ciudad' => 'Chihuahua',
                    'direccion' => 'Col. El Chico'
                )
            ), 'UBN8888' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2014",
                    'tipo' => "Sedan"
                ),
                'propietario' => array(
                    'nombre' => 'Alberto',
                    'ciudad' => 'Aguascalientes',
                    'direccion' => 'Col. Del Rio'
                )
            ), 'HDR7838' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2021",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Josue',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. La Playa'
                )
            ), 'UPO9988' => array(
                'auto' => array(
                    'marca' => "Nissan",
                    'modelo' => "2015",
                    'tipo' => "Sedan"
                ),
                'propietario' => array(
                    'nombre' => 'Xochitl',
                    'ciudad' => 'Puebla',
                    'direccion' => 'Col. La Loma'
                )
            ), 'CHT5638' => array(
                'auto' => array(
                    'marca' => "Chevrolet",
                    'modelo' => "2019",
                    'tipo' => "Hachback"
                ),
                'propietario' => array(
                    'nombre' => 'Maria',
                    'ciudad' => 'Veracruz',
                    'direccion' => 'Col. Cerrito'
                )
            ), 'UTL3387' => array(
                'auto' => array(
                    'marca' => "Toyota",
                    'modelo' => "2012",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Miguel Angel',
                    'ciudad' => 'Oaxaca',
                    'direccion' => 'Col. Ranchito Alto'
                )
            ), 'UBO8338' => array(
                'auto' => array(
                    'marca' => "Honda",
                    'modelo' => "2001",
                    'tipo' => "Camioneta"
                ),
                'propietario' => array(
                    'nombre' => 'Odette',
                    'ciudad' => 'Chihuahua',
                    'direccion' => 'Col. El Rio'
                )
            ));

            $m = $_POST["matricula"];

            if ($m == "ALL") {
                print_r($autos);
            } else {

                echo $m.'<br>';
                print_r($autos[$m]);
            }

            ?>
        </pre>

	</body>
</html>