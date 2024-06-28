cadastro.php
<?php
// Definindo variáveis Atividade 1
define("NOMECLIENTE","Mar
cos de Melo");
$endereco = 'Rua das Violetas, 320';
$bairro = 'Jd. Callegari';
$estado = 'SP';
$cep = '13.181-659';
$idade = 18; define("RG", "28290355-x");
$fone = '(19) 8888-9696';
?>
<html>
<head>
<title>Trabalhando com Variáveis</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-
8">
</head>
<body>
<h2>Documentos</h2>
<?php echo "<p>Idade: $idade | RG: " . RG . "</p>"; ?>
</body>
</html>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    
<h1>Informações do Contato</h1> 
<!-- atividade 2 --> 
<p>Nome do Aluno: <?php $nomeAluno="Maria Fernanda"; echo $nomeAluno;?></p>
<p>Endereço: <?php $endereco= "Rua Violeta,3025"; echo $endereco;?> </p>
<p>Cidade: <?php $cidade="Campinas"; echo $cidade; ?></p>
<p> Estado <?php $estado="São Paulo"; echo $estado; ?></p>
<p> CEP: <?php $cep="13.536-459"; echo $cep ?> </p>
<p> Telefone: <?php $fone="(19) 8182-9977"; echo $fone;?></p>
<p> Celular: <?php $cel="(19) 3854-3695"; echo $cel; ?> </p>
<p>RG: <?php define(RG,"28.569.569-X"); echo RG; ?></p>
<p>CPF: <?php define("CPF", "123.653.659-98"); echo CPF; ?></p>
<p>PIS:<?php define("PIS", "8452368888"); echo PIS; ?></p>

<?php  //Atividade 3//
$doc = array("codigo"=> 8282, "livros"=>"PHP - Páginas dinâmicas", "autor"=> "Marcos Melo","paginas"=> 360);

    foreach ($doc as $x=> $y) {
        echo "$x: $y <br>";
    }
    
?>
<br>

    <!--Atividade 4-->
<table>  
    <tr>
        <th>Código</th> 
        <th>Livros</th>
        <th>Autor</th>
        <th>Páginas</th>
    </tr>
    <tr>
        <?php $doc = array(
            array ("codigo"=> "8282", "livro"=>"PHP", "autor"=>"Marcos de Melo", "paginas" => "360") ,
            array ("codigo"=> "8383", "livro"=>"HTML5", "autor"=>"Ernandes Silva" ,"paginas" => "266"),
            array ("codigo"=> "8384", "livro"=>"jQuery", "autor"=>"Nicoly ALmeida", "paginas" => "159"), 
            array ("codigo"=> "8285", "livro"=>"CSS", "autor"=>"Juliana Aparecida" ,"paginas" => "123"),
        );
        ?>
        <td><?php echo $doc[0]["codigo"]; ?></td>
        <td><?php echo $doc[0]["livro"]; ?> </td>
        <td> <?php echo $doc[0]["autor"]; ?></td>
        <td><?php echo $doc[0]["paginas"]; ?> </td>
    </tr>
    <tr>
       
        <td> <?php echo $doc[1]["codigo"]; ?></td>
        <td> <?php echo $doc[1]["livro"]; ?></td>
        <td> <?php echo $doc[1]["autor"];?></td>
        <td> <?php echo $doc[1]["paginas"];  ?></td>
    </tr>
    <tr>
        
        <td> <?php echo $doc[2]["codigo"]; ?></td>
        <td> <?php echo $doc[2]["livro"]; ?></td>
        <td> <?php echo $doc[2]["autor"];?></td>
        <td> <?php echo $doc[2]["paginas"]; ?></td>
    </tr>
    <tr>

        <td> <?php echo $doc[3]["codigo"]; ?></td>
        <td> <?php echo $doc[3]["livro"];?></td>
        <td> <?php echo  $doc[3]["autor"]; ?></td>
        <td> <?php echo $doc[3]["paginas"]; ?></td>
    </tr>
</table>
<br>
<?php      //Atividade 5
    $nome="Aninha";
    $idade="23";
    $mesada="800 reais";

    echo"$nome"; ?><br>
     <?php echo "$idade"; ?><br>
     <?php echo "$mesada"; 

    ?>
<br>
<?php   //Atividade 6
    $a="numero1";
    $b="numero2";

    $soma= "$a+$b";

    If ($soma > 20) {
        "$soma +8";
    }

    else ($soma -5);

    ?>
<br>
    <!-- Atividade 7-->

    <?php 

    function number($numero) {

    if ($numero%5==0 && $numero%10==0 && $numero%2==0) {
        echo "$numero" . "é divisível por 2, 5, 10.";
    }
    return ($numero);
    }

    ?>
<br>
    <!--Atividade 8-->

    <?php
        $nome="Cathia";
        $sexo="feminino";
        $idade="55";

        if ($sexo="feminino"&&$idade < "25") {
            echo $nome . "ACEITA.";}

        else 
           { echo $nome . "NÃO ACEITA.";}

    ?>
<br>
<br>
    <!--Atividade 9-->

    <?php
        $numeros=array("numero1"=>"50", "numero2" => "80", "numero3" => "10",);

        rsort($numeros);
        
        echo "$numeros[0]", "$numeros[1]", "$numeros[2]";

    ?>    
<br>
<br>
    <!--Atividade 10-->

    <?php
        $lado1=5;
        $lado2=10;
        $lado3=5;

       If ($lado1!=$lado2&&$lado1!=$lado3&&$lado2!=$lado3) {
        echo "É um triângulo escaleno"; }

       elseif ($lado1==$lado2&&$lado1==$lado3&&$lado2==$lado3) {
    
        echo "É um triângulo equilatero";}

        else {echo "É um triângulo isoceles";}
    
    ?>
<br>
<br>
<!-- Atividade 11-->
 
<?php
    date_default_timezone_set("America/Sao_Paulo");
    echo date('l jS \of F Y h:i:s A');
?>
<br>
<br>
<!--Atividade 12-->

<?php

 $estado=array ("PR"=>"Curitiba", "SC"=>"Florianópolis", "RS"=>"Porto Alegre");
        foreach ($estado as $x=> $y) {

        
        echo "$x: $y,<br>";
        }
?>
<br>
<br>
<!--Atividade 13-->
<?php
    $x=9;
    $y=7;
    $z=-1;
?>
<br>
<br>
<!--Atividade 14-->

<?php
    $curso=array("nome"=>"PHP 5","data"=>"28/10/2010","carga horária"=>"200 horas","local"=>"Brasília");
    
    foreach ($curso as $x =>$y) {
        echo "$x: $y,<br>";
    }

?>
<br>
<br>
<!--Atividade 15-->

<form method="post">
    <label for="lado1">Altura retângulo:</label><br>
    <input type="text" id="lado1" name="lado1"><br>
    <label for="lado2">Comprimento triângulo:</label><br>
    <input type="text" id="lado2" name="lado2"><br>
    <input type="submit">
</form>

<?php
    $altura=$_POST['lado1'];
    $comprimento=$_POST['lado2'];
    $area= $altura * $comprimento;
    $perimetro = ($altura+$comprimento)*2; 

     echo "Área:$area<br>Perímetro:$perimetro"; 
     ?>


</body>
</html>

