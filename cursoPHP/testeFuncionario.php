    <?php

include "Funcionario.class.php";

$f = new Funcionario("Zeca Paugordinho", 90.000);
echo ("O funcionario " . $f->nome . " recebe esse dinheirão aqui: R$" . $f->salario . "</br>");
          $f->aumentoSalario(8800);
          echo("Novo Salario:R$ " . $f->salario);

          echo("<br/><br/>");

          $aluno = new Funcionario("Luis Henrique", 40.000);
          echo("O Funcionario " . $aluno->nome . " recebe a bagatela de R$ " .  $aluno->salario . "<br/>");
          $aluno->aumentoSalario(10000);
          echo(" Novo salário: " . $aluno->salario);


          echo("<br/><br/>");

          $l = new Funcionario("( Gilbertinho do grau )", 1 );
          echo(" O cara que mora ali na esquina " . $l->nome . " pede, toda vez que vc passa na rua U$..." . $l->salario . "<br/>");
          $l->aumentoSalario(1);
          echo("Você passou, ele tem U$ " . $l->salario );

          $ladrao = new Funcionario(" Ladrão ",0);



          $usu = new Funcionario(" você ", 10000);
          echo("<br/><br/> Então..." . $usu->nome . "tem R$ 10.000, porem um ladrão filha duma égua te roubou R$3000, assim vc ficando");
          $ladrao->roubar($usu, 3000);
          echo ("<br/> Seu argumento monetario ficou com " . $usu->salario);
          echo ("<br/> E o Arrombado ficou com " . $ladrao->salario);


               


?>
        
