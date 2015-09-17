<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TogetherSchool</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="?acao=tela">Home</a></li>

  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Aluno <span class="caret"></span>
    </a>
     <ul class="dropdown-menu">
            <li><a href="?op=Aluno&op2=telaAluno">Inserir</a></li>
            <li><a href="?op=Aluno&op2=listaAluno">Listar </a></li>
    </ul>
  </li>

  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Funcionário <span class="caret"></span>
    </a>
     <ul class="dropdown-menu">
            <li><a href="?op=Fun&op2=telaFun">Inserir</a></li>
            <li><a href="?op=Fun&op2=listaFun">Listar </a></li>
    </ul>
  </li>

  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Turmas <span class="caret"></span>
    </a>
     <ul class="dropdown-menu">
            <li><a href="?op=Aluno&op2=telaAluno">Inserir</a></li>
            <li><a href="?op=Aluno&op2=listaAluno">Listar </a></li>
    </ul>
  </li>
  </li>
</ul>


 <?php

       $op=@$_REQUEST['op'];
       $op2=@$_REQUEST['op2'];
      if(!empty($op)){
          $url="controller".$op;
          require_once("$url.php");
                
          $o = new $url();
          $o-> $op2($o);
        }
  ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
