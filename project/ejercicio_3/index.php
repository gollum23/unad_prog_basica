<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Diego Forero</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link href="http://alexgorbatchev.com/pub/sh/current/styles/shCore.css" rel="stylesheet" type="text/css" />
    <link href="http://alexgorbatchev.com/pub/sh/current/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <header>
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h1 class="text-center">Programación de Sitios Web</h1>
                    <h3 class="text-center">Ejercicio 3</h3>
                    <div class="text-center">
                        <a href="/">Volver al menu</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content">

        <form action="." method="post">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="form-group">
                        <label for="number_one" >Número incial</label>
                        <input class="form-control" type="text" id="start" name="start"
                               value=<?=$_POST['start'];?> >
                    </div>
                    <div class="form-group">
                        <label for="number_two">Número final</label>
                        <input class="form-control" type="text" id="end" name="end" value=<?=$_POST['end'];?> >
                    </div>
                    <button type="submit" class="btn btn-success">Calcular!</button>
                </div>
            </div>
        </form>

        <?php
            if (isset($_POST['start']) and isset($_POST['end'])) {
                $start = $_POST['start'];
                $end = $_POST['end'];
                $array = array();
                $no_primes = 0;
                for ($start; $start <= $end; $start++) {
                    $counter = 0;
                    for ($i = 1; $i <= $start; $i++) {
                        if ($start % $i == 0) {
                            $counter++;
                        }
                    }
                    if ($counter<=2) {
                        array_push($array, $start);
                    }
                    else {
                        $no_primes++;
                    }
                }
        ?>
                <br>
                <div class="row show-grid">
                    <div class="col-xs-4 col-xs-offset-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Respuesta
                            </div>
                            <div class="panel-body">
                                <p>Números Primos</p>
                                <?php
                                    for ($j = 0; $j < count($array); $j++) {
                                ?>
                                    <p><?=$array[$j];?></p>
                                <?php
                                    }
                                ?>
                                <p>Cantidad de números no primos: <?=$no_primes?></p>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>

        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <h3 class="text-center">Código del ejercicio</h3>
                <pre class="brush: php">
    &ltdiv class="content"&gt

        &ltform action="." method="post"&gt
            &ltdiv class="row"&gt
                &ltdiv class="col-xs-4 col-xs-offset-4"&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="number_one" &gtNúmero incial&lt/label&gt
                        &ltinput class="form-control" type="text" id="start" name="start"
                               value=&lt?=$_POST['start'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="number_two"&gtNúmero final&lt/label&gt
                        &ltinput class="form-control" type="text" id="end" name="end" value=&lt?=$_POST['end'];?&gt &gt
                    &lt/div&gt
                    &ltbutton type="submit" class="btn btn-success"&gtCalcular!&lt/button&gt
                &lt/div&gt
            &lt/div&gt
        &lt/form&gt

        &lt?php
        if (isset($_POST['start']) and isset($_POST['end'])) {
            $start = $_POST['start'];
            $end = $_POST['end'];
            $array = array();
            $no_primes = 0;
            for ($start; $start &lt= $end; $start++) {
                $counter = 0;
                for ($i = 1; $i &lt= $start; $i++) {
                    if ($start % $i == 0) {
                        $counter++;
                    }
                }
                if ($counter&lt=2) {
                    array_push($array, $start);
                }
                else {
                    $no_primes++;
                }
            }
            ?&gt
            &ltbr&gt
            &ltdiv class="row show-grid"&gt
                    &ltdiv class="col-xs-4 col-xs-offset-4"&gt
                        &ltdiv class="panel panel-success"&gt
                            &ltdiv class="panel-heading"&gt
                                Respuesta
                            &lt/div&gt
                            &ltdiv class="panel-body"&gt
                                &ltp&gtNúmeros Primos&lt/p&gt
                                &lt?php
                                for ($j = 0; $j &lt count($array); $j++) {
                                    ?&gt
                                    &ltp&gt&lt?=$array[$j];?&gt&lt/p&gt
                                    &lt?php
                                }
                                ?&gt
                                &ltp&gtCantidad de números no primos: &lt?=$no_primes?&gt&lt/p&gt
                            &lt/div&gt
                        &lt/div&gt
                    &lt/div&gt
                &lt/div&gt
            &lt?php
        }
        ?&gt
    &lt/div&gt
                </pre>
            </div>
        </div>


    </div>

    <footer>
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">Universidad Nacional Abierta y a Distancia</h2>
                <h4 class="text-center">Grupo 301127 - 13</h4>
                <p class="text-center">Bogotá, Colombia Octubre 2016</p>
            </div>
        </div>
    </footer>
</div>


<script src="../js/bootstrap.min.js"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js" type="text/javascript"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js" type="text/javascript"></script>
<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPhp.js" type="text/javascript"></script>
<script>
    SyntaxHighlighter.all();
</script>
</body>
</html>
<?php

