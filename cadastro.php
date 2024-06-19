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
<?php echo "<p>Idade: $idade | RG: " . RG . "</p>";?>
</body>
</html>


<<!DOCTYPE html>
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
<p>Nome do Aluno: <?php $nomeAluno=Maria Fernanda; echo $nomeAluno;?></p>
<p>Endereço: <?php $endereco= Rua Violeta, 3025; echo $endereco;?> </p>
<p>Cidade: <?php $cidade=Campinas; echo $cidade; ?></p>
<p> Estado <?php $estado=São Paulo echo $estado; ?></p>
<p> CEP: <?php $cep=13.536-459 echo $cep ?> </p>
<p> Telefone: <?php $fone=(19) 8182-9977 echo $fone;?></p>
<p> Celular: <?php $cel=(19) 3854-3695 echo $cel; ?> </p>
<p>RG: <?php define(RG,28.569.569-X); ?> </p>
<p>CPF: <?php define(CPF,123.653.659-98,case_insensitive) ?></p>
<p>PIS:<?php define(PIS,8452368888); ?></p>

<?php  //Atividade 3//
$doc = array("codigo"=> "8282", "livros"=>"PHP - Páginas dinâmicas","autor"=> "Marcos Melo","paginas"=>"360");
echo $doc [array]
?>

    <!--Atividade 4-->
<table>  
    <tr>
        <th>Código</th> 
        <th>Livros</th>
        <th>Autor</th>
        <th>Páginas</th>
    </tr>
    <tr>
        <?php $doc = array ("codigo"=> "8282", "livro"=>"PHP", "autor"=>"Marcos de Melo" "paginas" => "360") ?>
        <td>Código <?php echo array [codigo] ?></td>
        <td><?php echo array [livro] ?> </td>
        <td> <?php echo array [autor] ?></td>
        <td><?php echo array [paginas] ?> </td>
    </tr>
    <tr>
        <?php $doc = array ("codigo"=> "8383", "livro"=>"HTML5", "autor"=>"Ernandes Silva" "paginas" => "266") ?>
        <td> <?php echo array [codigo] ?></td>
        <td> <?php echo array [livro] ?></td>
        <td> <?php echo array [autor] ?></td>
        <td> <?php echo array [paginas] ?></td>
    </tr>
    <tr>
        <?php $doc = array ("codigo"=> "8384", "livro"=>"jQuery", "autor"=>"Nicoly ALmeida" "paginas" => "159") ?>
        <td> <?php echo array [codigo] ?></td>
        <td> <?php echo array [livro] ?></td>
        <td> <?php echo array [livro] ?></td>
        <td> <?php echo array [paginas] ?></td>
    </tr>
    <tr>
        <?php $doc = array ("codigo"=> "8285", "livro"=>"CSS", "autor"=>"Juliana Aparecida" "paginas" => "123") ?>
        <td> <?php echo array [codigo] ?></td>
        <td> <?php echo array [livro] ?></td>
        <td> <?php echo array [livro] ?></td>
        <td> <?php echo array [paginas] ?></td>
    </tr>
</table>

<?php      //Atividade 5
    $nome=Aninha;
    $idade=23;
    $mesada=800 reais;

    $$nomePessoa=nome
    $$idadePessoa=idade
    $$valorMesada=mesada

    ?>

<?php   //Atividade 6
    $a=numero1
    $b=numero2

    $soma= $a+$b
    If ($soma > 20); {
        $soma +8;
    }

    else ($soma <=20) {
        $soma - 5
    }

    ?>

    <!-- Atividade 7-->

    <?php 

    function number($numero);

    if ($numero % 5 = 0) && ($numero % 10=0) && ($numero % 2=0); {
        echo "$numero" . 'é divisível por 2, 5, 10.';
    }
    return ($numero);

    ?>


</body>
</html>

