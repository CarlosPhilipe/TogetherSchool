<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Perfumaria</title>
</head>
<body bgcolor="black">

<div id='cssmenu'>
<ul>
   <li><a href=?acao=tela><span>Home</span></a></li>
   <li class='has-sub'><a href="#"><span>Cadastrar</span></a>
      <ul>
         <li class='has-sub'><a href='#'><span>Funcionario</span></a>
            <ul>
               <li><a href="?op=Fun&op2=telaFun"><span>Inserir</span></a></li>
               <li class='last'><a href="?op=Fun&op2=lista"><span>Listar</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Aluno</span></a>
            <ul>
               <li><a href="?op=Aluno&op2=telaAluno"><span>Inserir</span></a></li>
               <li class='last'><a href="?op=Aluno&op2=listaAluno"><span>Listar</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Responsavel</span></a>
            <ul>
               <li><a href="?op=Responsavel&op2=telaResponsavel"><span>Inserir</span></a></li>
               <li class='last'><a href="?op=Responsavel&op2=listaResponsavel"><span>Listar</span></a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'><span>Turma</span></a>
            <ul>
               <li><a href="?op=Turma&op2=telaTurma"><span>Inserir</span></a></li>
               <li class='last'><a href="?op=Turma&op2=listaTurma"><span>Listar</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
</ul>
</div>
 

      <?php

                  $op=@$_REQUEST['op'];
                  $op2=@$_REQUEST['op2'];
                  if(!empty($op)){
                  $url="controller".$op;
                  require_once("$url.php");
                  //echo " <hr> $url <br>";
                  $o=new $url();
                  $o->$op2($o);
                }
      ?>

</body>
</html>