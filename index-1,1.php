<body>
    <?php
    include "header.php";
    include "função.php";
    $var_a = "olá mundo!";
    echo "$var_a<br/>";
    $var_a = "sim, está tudo bem";
    echo "$var_a<br/>";
    define("constante_a", 16);
    echo constante_a;
    
    $linguagens = ["PHP", "JAVA", "C#", "Python"];
    echo $linguagens[3];
    
    $filmes = [
        "Iord" => 2002,
        "hobbit" => "teste"
    ];
    echo "<br/>" . $filmes["hobbit"];
    
    $arr = [
        1 => [
            11 => [
                'teste111',
                'teste112'
            ],
            12 => 'teste12'
        ],
        2 => 'teste2',
        3 => 'teste3'
    ];
    echo $arr[1][12];
    echo "<hr/>";
    
    $clientes = [
        [
            'nome' => 'leonardo',
            'endereco' => 'Rua Tanauá, 23',
            'telefone' => [
                'residencial' => '2222-2222',
                'celular' => '55-55'
            ]
        ],
        [
            'nome' => 'leonardo',
            'endereco' => 'Rua Tanauá, 20',
            'telefone' => [
                'residencial' => '2223-3222',
                'celular' => '554-554'
            ]
        ]
    ];
    echo $clientes[0]['nome'] . "<br/>";
    echo $clientes[0]['telefone']['residencial'];
    ?>
    <hr/>
    <?php
    echo (1 +8)*3;
    ?>
    <hr/>
    <?php
    $var = "bom dia";
    $nome = "meu nome é joaquim";
    $saudacao = $var.",".$nome;
    echo $saudacao;
    ?>
    <hr/>
    <?php
    $a=1;
    $a=$a+1;
    echo $a;
    ?>
    <hr/>
    <?php
    $a=1;
    $b=1;
    $c=2;
    var_dump($a==$b);
    var_dump($a<>$b);
    var_dump($b<$c);
    var_dump($b>=$c);
    ?>
    <hr/>
    <?php
    $a = FALSE;
    $b = TRUE;
    $c = TRUE;
    var_dump($a && $b);
    var_dump($b && $c);
    var_dump($a || $b);
    var_dump($a XOR $b);
    var_dump($b XOR $c);
    ?>
    <hr/>
    <?php
    $i=30;
    $imin=18;
    $imax=65;
    if($i<$imin){
        echo "não obrigado";
    }elseif($i>=$imax){
        echo "não obrigatorio";
    }else{
        echo "obrigatorio";
    }
    ?>
    <hr/>
    <?php
    if($i<$imin || $i>=$imax){
       echo "não obrigatorio";
    }else{
        echo "obrigatorio";
    }
    ?>
    <hr/>
    <?php
    $i=2;
    switch($i){
        case 0:
            echo"i eigual a 0"; 
            break;
            case 1:
                echo"i é igual a 1";
                break;
                case 2:
                echo "i é igual a 2";
                break;
    }
    ?>
    <hr/> 
    <?php 
    $idade=20;
    switch($idade){
        case ($idade<=12):
            echo "Criança";
                break;
        case ($idade>12 and $idade<18):
                echo "Adolecente";
                break;
         default:
                echo "Aduto";

    }
    ?>
    <hr/>
    <?php
    $c=20;
    while($c<=30){
        echo $c.",";
        $c++;
    }
    ?>
    <hr/>
    <?php
    $msg="looping";
    $i=150;
    do{
        echo "$i - $msg <br/>";
        $i++;
    }while($i<=100);
    ?>
    <hr/>
    <?php
    for($c=10;$c<20;$c++){
        echo $c." ";
    }
    ?>
    <hr/>
    <?php
    $tabuada=9;
    for($c=1;$c<=10;$c++)
        echo $tabuada."x".$c."=".$tabuada*$c."<br/>";
    ?>
    <hr/>
<?php
$cursos = ['css', 'php', 'js', 'html'];
for ($c = 0; $c < count($cursos); $c++) {
    echo "curso: " . $cursos[$c]. "<br/>";
}
foreach($cursos as $nome){
    echo"curso:". $nome."<br/>"; 
}
$cursos=[
    'curso1' => 'php',
    'curso2' => 'css',
    'curso3' => 'html'
];
foreach($cursos as $chave => $valor){
    echo $chave.":".$valor. "<br/>";
}
?>
<form action="calcular.php" method="post">
    <input type="number" name="um"/>
    <select name="op">
        <option value="soma">+</option>
        <option value="sub">-</option>
        <option value="multi">*</option>
        <option value="div">/</option>
    </select>
    <input type="number" name="dois"/>
    <input type="submit" value="calcular"/>

</form>
<hr/>
<?php
function novamsg(){
    echo "nova mensagem";
}
novamsg(); 
novamsg(); 
?>
<hr/>
<?php
function nome ($nome){
    echo "$nome da silva<br/>";
}
nome("Joel");
nome("Maria");
nome("José");
?> <hr/>
<?php
function nomeano($nome, $ano){
    echo "$nome, nascido em $ano";
}
nomeano("Jorge", 1985);
nome("Maria",1975);
?>
<?php
function semvalor($valor=10){
    echo "<br/>o valor é $valor";
}
semvalor(20);
semvalor();
?>
<hr/>
<?php 
function soma($x, $y){
    $z=$x+$y;
    return $z; 
}
echo "5+10=".soma(5,10);
?>
<hr/>
<?php
$nomes = ['Carlos', 'José', 'João'];
$cursos = ['php', 'html', 'css'];
imprime($nomes);
imprime($cursos);
?>  
<hr/>
<?php
date_default_timezone_set('America/Sao_Paulo');
echo date("Y-m-d H:i:s");
setlocale(LC_ALL, 'pt-br.utf-8');
echo strftime('%a');
?>
<hr/>
<?php 
$nomes='Angela;Paula;Carla;Luciana';
$nomes_array=explode(';',$nomes);
echo $nomes_array[2];
?>
<hr/>
<?php
$texto="olá !nome!, seja bem vindo !";
$nome="Rodrigo";
echo str_replace('!nome!', $nome, $texto);
?>
<hr/>
<?php
$senha = '123456';
echo md5($senha);
echo "<br/>";
echo sha1($senha);
$senhacomplexa=md5($senhw);
echo "<br/>".($senhacomplexa);
$senha64=base64_encode($senha);
echo"<br/>".$senha64;
echo"<br/>".base64_decode($senha64);
?>
<?php

?>
</body>

