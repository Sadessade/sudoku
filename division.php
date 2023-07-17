<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>division</title>
<link rel="stylesheet" type="text/css" href="style_divide.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<header>
<?php include "header.php"; ?>
</header>
<body>
    <br>
    <div class="contenedor">
        <h1>DIVIDIR</h1> 
        <table>
            <tr>
                <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td></td>
                <td class="contiene">84</td>
                <td></td>
                <td class="contiene">16</td>
            </tr>
            <tr>
                <td class="contiene">:</td>
                <td></td>
                <td class="contiene">:</td>
                <td></td>
                <td class="contiene">:</td>
            </tr>
            <tr>
                <td class="contiene">3</td>
                <td></td>
                <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td></td>
                <td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
            <tr>
                <td class="contiene">=</td>
                <td></td>
                <td class="contiene">=</td>
                <td></td>
                <td class="contiene">=</td>
            </tr>
            <tr>
                <td class="contiene">2</td>
                <td class="contiene">:</td>
                <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
        </table>
        <br>
        <div class="contenedor-alternativa">
            <div class="caja" draggable="true" ondragstart="drag(event)" id="a">6</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="b">32</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="c">16</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="d">2</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="e">1</div>
        </div>
    
    <br>
    <!-- reloj -->
<div class="marco">
    <div class="tiempo" id="tiempo">00:00:00.000</div>
        <div class="botones-contenedor">
        <div class="btn" onclick="iniciar()">
        <i class="fas fa-play"></i>
        </div>
        <div class="btn" onclick="pausar()">
        <i class="fas fa-pause"></i>
        </div>
        <div class="btn" onclick="reiniciar()">
        <i class="fas fa-undo-alt"></i>
        </div>
    </div>
</div>
<!-- fin reloj -->
<br>
<br>
    <!-- fin visualizar resultado-->
        <div class="resultado">
        <h2></h2>
        </div>
        <br>

    </div>
    <script src="dividir.js"></script>
    <script src="tiempo.js"></script>
    
</body>
</html>