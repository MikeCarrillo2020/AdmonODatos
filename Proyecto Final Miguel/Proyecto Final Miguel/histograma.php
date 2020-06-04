<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histograma</title>
    <link rel="stylesheet" href="./css/chartist.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="./js/chartist.min.js"></script>
</head>

<body>
    <div class="container">

        <div class="centro">
            <h1>Histograma De Televisores Por Hogar</h1>
            <span class="temp"><span class="tempbox max">&nbsp;</span>&nbsp; Cantidad De Televisores</span>
            <span class="subt">En este histograma podemos apreciar la cantidad de televisores que se tienen por vivienda.</span>
        </div>

        <div class="ct-chart ct-octave"></div>

    <?php

    $variable0 = 0;
    $variable1 = 0;
    $variable2 = 0;
    $variable3 = 0;
    $variable4 = 0;
    $variable5 = 0;

    $linea = 0;

        $archivoTemps = "./csv/datos.csv";

        $handle = fopen($archivoTemps, "r") or die("No se puede abrir el archivo: $archivoTemps");

        while (($datos = fgetcsv($handle, ",")) == true) 
        {
          $num = count($datos);
          $linea++;
        
                $csv = $datos[0];
                    if ($csv == '0') {
                            $variable0 += 1;
                        } elseif ($csv == '1'){
                            $variable1 +=1;
                        }
        
                        elseif ($csv == '2'){
                            $variable2 +=1;
                        }
        
                        elseif ($csv == '3'){
                            $variable3 +=1;
                        }
        
                        elseif ($csv == '4'){
                            $variable4 +=1;
                        }
        
                        elseif ($csv == '5'){
                            $variable5 +=1;
                        }
                }

                print "<p>Datos Totales</p>\n";
                echo $variable0;
                print "<p>Cantidad De Familias Sin Television</p>\n";
                echo $variable1;
                print "<p>Cantidad De Familias Con 1 Television</p>\n";
                echo $variable2;
                print "<p>Cantidad De Familias Con 2 Televisiones</p>\n";
                echo $variable3;
                print "<p>Cantidad De Familias Con 3 Televisiones</p>\n";
                echo $variable4;
                print "<p>Cantidad De Familias Con 4 Televisones</p>\n";
                echo $variable5;
                print "<p>Cantidad De Familias Con 5 Televisiones</p>\n";

        $d_encabezados = array();
        $d_temp_max = array();


        $d_encabezados = fgetcsv($handle, 0, ',', '"', '"');
        $d_temp_max = fgetcsv($handle, ',', '"', '"');

        ?>

        <script>

            var datos = {

                labels: [
                    '<?php echo $d_encabezados[0]; ?>',
                    '<?php echo $d_encabezados[1]; ?>',
                    '<?php echo $d_encabezados[2]; ?>',
                    '<?php echo $d_encabezados[3]; ?>',
                    '<?php echo $d_encabezados[4]; ?>',
                    '<?php echo $d_encabezados[5]; ?>',

                ],
                
                series: [{
                    name: 'serie-1',
                    data: [
                        <?php echo $variable0; ?>,
                        <?php echo $variable1; ?>,
                        <?php echo $variable2; ?>,
                        <?php echo $variable3; ?>,
                        <?php echo $variable4; ?>,
                        <?php echo $variable5; ?>,
                    ]
                
                }]
            };

            var opciones = {
                fullWidth: true,
                seriesBarDistance: 30,
                chartPadding: {
                    bottom: 40
                },
                axisX: {
                    position: 'start'
                },
                axisY: {
                    type: Chartist.FixedScaleAxis,
                    ticks: [0, 2000, 4000, 6000, 8000, 10000, 12000],
                    high: 12000,
                }
            };

            var opcionesResponsive = [
                ['screen and (min-width: 641px) and (max-width: 1024px)', {
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value;
                        }
                    }
                }],
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value[0];
                        }
                    }
                }]
            ];

            new Chartist.Bar('.ct-chart', datos, opciones, opcionesResponsive);
        
        </script>
    </div>
</body>

</html>