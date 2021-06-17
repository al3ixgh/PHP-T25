<?php
//Ejercicio 1
echo "<br> Ejercicio 1 <br>";
    $random=random_int(1, 3);
    switch ($random){
        case 1:
            echo "uno";
            break;
        case 2:
            echo "dos";
            break;
        case 3:
            echo "tres";
            break;
    }
    echo "<br>";

//Ejercicio 2
echo "<br> Ejercicio 2 <br>";
echo "tabla de multiplicar del 2 con un bucle for";
echo "<br>";
for($i=0;$i<=10;$i++){
    echo $i*2;
    echo "<br>";
}
echo "tabla de multiplicar del 2 con un bucle while";
echo "<br>";
$i=0;
while($i<=10){
    echo $i*2;
    $i++;
    echo"<br>";
}
echo "tabla de multiplicar del 2 con un bucle do/while";
echo "<br>";
$i=0;
do{
    echo $i*2;
    $i++;
    echo"<br>";
}while($i<=10);
echo "<br>";

//Ejercicio 3
echo "<br> Ejercicio 3 <br>";
$nombre=$_REQUEST['nombre'];
$edad=$_REQUEST['edad'];
if($edad<18){
    echo "$nombre es menor de edad";
}
else{
    echo "$nombre es mayor de edad";
}
echo "<br>";

//Ejercicio 4
echo "<br> Ejercicio 4 <br>";
$nombreEj4=$_REQUEST['nombreEj4'];
if($_REQUEST['estudios']=="noEstudios"){
    echo "$nombreEj4 no tiene estudios";
}elseif($_REQUEST['estudios']=="primarios"){
    echo "$nombreEj4 tiene estudios primarios";
}elseif($_REQUEST['estudios']=="secundarios"){
    echo "$nombreEj4 tiene estudios secundarios";
}
echo "<br>";

//Ejercicio 5
echo "<br> Ejercicio 5 <br>";
$nombreEj5=$_REQUEST['nombreEj5'];
$i=0;
if(isset($_REQUEST['check1Ej5'])){
    $i++;
}
if(isset($_REQUEST['check2Ej5'])){
    $i++;
}
if(isset($_REQUEST['check3Ej5'])){
    $i++;
}
if(isset($_REQUEST['check4Ej5'])){
    $i++;
}
echo "<br>";
echo "$nombreEj5 practica $i deportes";
echo "<br>";

//Ejercicio 6
echo "<br> Ejercicio 6 <br>";
$nombreEj6=$_REQUEST['nombreEj6'];
if($_REQUEST['selectEj6']==">3000"){
    echo "$nombreEj6 debe pagar impuestos";
}
else{
    echo "$nombreEj6 no debe pagar impuestos";
}
echo "<br>";

//Ejercicio 7


//Ejercicio 8
echo "<br> Ejercicio 8 <br>";
$random1=random_int(1, 100);
$random2=random_int(1, 100);
if($random1>$random2){
    echo "$random1 es mayor que $random2";
}elseif($random1<$random2){
    echo "$random1 es menor que $random2";
}elseif($random1==$random2){
    echo "$random1 es igual que $random2";
}
echo "<br>";

//Ejercicio 9
echo "<br> Ejercicio 9 <br>";
$nombre="Aleix";
echo "Bienvenido $nombre";
echo "<br>";

//Ejercicio 10
echo "<br> Ejercicio 10 <br>";
$nombreEj10=$_REQUEST['nombreEj10'];
echo "Bienvenido $nombreEj10";
echo "<br>";

//Ejercicio 11
echo "<br> Ejercicio 11 <br>";
$radioEj11=$_REQUEST['radioEj11'];
$areaCirculo=M_PI*pow($radioEj11,2);
echo "El area del circulo es $areaCirculo";
echo "<br>";

//Ejercicio 12
echo "<br> Ejercicio 12 <br>";
$numeroEj12=$_REQUEST['numeroEj12'];
if($numeroEj12%2==0){
    echo "El numero $numeroEj12 es divisible entre 2";
}else{
    echo "El numero $numeroEj12 no es divisible entre 2";
}
echo "<br>";

//Ejercicio 13
echo "<br> Ejercicio 13 <br>";
$precioEj13=$_REQUEST['precioEj13'];
$total=$precioEj13+$precioEj13*0.21;
echo "El precio total con IVA incluido de $precioEj13 es igual a $total";
echo "<br>";

//Ejercicio 14
echo "<br> Ejercicio 14 <br>";
$i=1;
while($i<=100){
    echo "$i ";
    $i++;
}
echo "<br>";
//Ejercicio 15
echo "<br> Ejercicio 15 <br>";
for($i=1;$i<=100;$i++){
    echo "$i ";
}
echo "<br>";

//Ejercicio 16
echo "<br> Ejercicio 16 <br>";
for($i=1;$i<=100;$i++){
    if(($i%2==0)&&($i%3==0)){
        echo "$i ";
    }
}
echo "<br>";

//Ejercicio 17
echo "<br> Ejercicio 17 <br>";


//Ejercicio 18
echo "<br> Ejercicio 18 <br>";
$dia=$_REQUEST['diaEj18'];
switch($dia){
    case 'lunes':
        echo "Dia laboral";
        break;

    case 'martes':
        echo "Dia laboral";
        break;

    case 'miercoles':
        echo "Dia laboral";
        break;

    case 'jueves':
        echo "Dia laboral";
        break;

    case 'viernes':
        echo "Dia laboral";
        break;

    case 'sabado':
        echo "No es dia laboral";
        break;

    case 'domingo':
        echo "No es dia laboral";
        break;
}
echo "<br>";


?>