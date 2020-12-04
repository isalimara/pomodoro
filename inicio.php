<html>
<head>

</head>
<body>
<?php
$host="";
$usuario="";
$senha="";
$bd="";
$conexao=new mysqli($host,$usuario,$senha,$bd);
$sql="insert into crono (hora,min,seg,descan,alarme)";
$hora=$_POST["hora"];   
$minuto=$_POST["min"];
$segundo=$_POST["seg"];
$descanco=$_POST["desc"];
$alarme=$_POST["alarm"];
$i=0;
do{
    if($i<60){
    if($segundo==0){ 
        $minuto=$minuto-1;
        echo $minuto;
        if($minuto==0){
            $hora=$hora-1;
            echo $hora;
        }
    }
}
}while($segundo>=0)?>

</body>
</html>