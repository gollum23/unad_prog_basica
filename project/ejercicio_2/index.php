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
                    <h3 class="text-center">Ejercicio 2</h3>
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
                        <label for="number_one" >Base</label>
                        <input class="form-control" type="text" id="base" name="base"
                               value=<?=$_POST['base'];?> >
                    </div>
                    <div class="form-group">
                        <label for="number_two">Exponente</label>
                        <input class="form-control" type="text" id="exp" name="exp" value=<?=$_POST['exp'];?> >
                    </div>
                    <button type="submit" class="btn btn-success">Calcular!</button>
                </div>
            </div>
        </form>

        <?php
            if (isset($_POST['base']) and isset($_POST['exp'])) {
                $base = $_POST['base'];
                $exp = $_POST['exp'];

                $total = $base;
                for ($i = 1; $i < $exp; $i ++) {
                    $sum = 0;
                    for ($j = 1; $j <= $base; $j++) {
                        $sum += $total;
                    }
                    $total = $sum;
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
                                <?=$total;?>
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
                        &ltlabel for="number_one" &gtBase&lt/label&gt
                        &ltinput class="form-control" type="text" id="base" name="base"
                               value=&lt?=$_POST['base'];?&gt &gt
                    &lt/div&gt
                    &ltdiv class="form-group"&gt
                        &ltlabel for="number_two"&gtExponente&lt/label&gt
                        &ltinput class="form-control" type="text" id="exp" name="exp" value=&lt?=$_POST['exp'];?&gt &gt
                    &lt/div&gt
                    &ltbutton type="submit" class="btn btn-success"&gtCalcular!&lt/button&gt
                &lt/div&gt
            &lt/div&gt
        &lt/form&gt

        &lt?php
        if (isset($_POST['base']) and isset($_POST['exp'])) {
            $base = $_POST['base'];
            $exp = $_POST['exp'];

            $total = $base;
            for ($i = 1; $i &lt $exp; $i ++) {
                $sum = 0;
                for ($j = 1; $j &lt= $base; $j++) {
                    $sum += $total;
                }
                $total = $sum;
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
                                &lt?=$total;?&gt
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

