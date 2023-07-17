<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sodoku Matemático</title>
<link rel="stylesheet" type="text/css" href="style_multi.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<header>
<?php include "header.php"; ?>
</header>
<body>
    <br>
    <div class="contenedor">
        <h1>MULTIPLICAR</h1> 
        <table>
            <tr>
                <td class="contiene">6</td>
                <td class="contiene">x</td>
                <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td class="contiene">=</td>
                <td class="contiene">18</td>
            </tr>
            <tr>
                <td class="contiene">x</td>
                <td></td>
                <td class="contiene">x</td>
                <td></td>
                <td class="contiene">x</td>
            </tr>
            <tr>
                <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td></td>
                <td class="contiene">9</td>
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
                <td class="contiene">12</td>
                <td></td>
                <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                <td></td>
                <td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
        </table>
        <br>
        <div class="contenedor-alternativa">
            <div class="caja" draggable="true" ondragstart="drag(event)" id="a">3</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="b">2</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="c">1</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="d">27</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="e">18</div>
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
    <script src="multiplicar.js"></script>
    <script src="tiempo.js"></script>
    
</body>
</html>