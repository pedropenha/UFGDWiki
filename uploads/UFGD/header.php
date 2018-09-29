<?php require 'instancias.php';
?>
<html>
<head>
    <!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
    <meta name="viewport" content="width=device-width, maximum-escale=1,user-scalable=no-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="assets/js/script.js" rel="script"></script>
    <script src="assets/js/jquery-3.3.1.min.js" rel="script"></script>
    <!--necessario para ordenação da tabela-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="tablesort/jquery.dataTables.min.js" rel="script"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="shortcut icon" href="assets/img/ufgd.ico" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
<div class="container-header">
    <div class="container-image">
        <a href="index.php"><img src="assets/img/ufgd-logo-egressos.png"></a>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php
                $nivel = $cadastros->getAcesso();

                if($nivel['acesso'] == '1')
                    echo "<a class=\"navbar-brand\">Administrador</a>";
                elseif($nivel['acesso'] == '2')
                    echo "<a class=\"navbar-brand\">Coordenador</a>";
                elseif($nivel['acesso'] == '3')
                    echo "<a class=\"navbar-brand\">Egresso</a>";
                elseif($nivel['acesso'] == '4')
                    echo "<a class=\"navbar-brand\">Empresa</a>";
                else
                    echo "<a class=\"navbar-brand\" hidden></a>"
                ?>
            <li class="nav-item">
                <a href="index.php" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/' || $get == '/index.php')
                    echo 'class="nav-link active"'; else echo 'class="nav-link"';?>>Página Principal<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a <?php $get = $_SERVER[REQUEST_URI]; if($get == '/egressos.php')
                    echo 'class="nav-link active"'; else echo 'class="nav-link"'; ?> href="egressos.php">Egressos</a>
            </li>
            <li class="nav-item">
                <a <?php $get = $_SERVER[REQUEST_URI]; if($get == '/depoimentos.php')
                    echo 'class="nav-link active"'; else echo 'class="nav-link"'; ?> href="depoimentos.php">Depoimentos</a>
            </li>
            <li class="nav-item">
                <a <?php $get = $_SERVER[REQUEST_URI]; if($get == '/buscar-cursos.php')
                    echo 'class="nav-link active"'; else echo 'class="nav-link"'; ?> href="buscar-cursos.php">Todos os cursos</a>
            </li>
        </ul>
        <?php
        $acessos = $cadastros->getAcesso();
        if($acessos['acesso'] == '1'):?>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <div class="btn-group button" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <button type="button" onclick="window.location.href='faculdades.php'" <?php $get = $_SERVER[REQUEST_URI];
                        if($get == '/faculdades.php') echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"';
                            ?>>Faculdades</button>
                        <button type="button" onclick="window.location.href='cursos.php'" <?php $get =
                            $_SERVER[REQUEST_URI]; if($get == '/cursos.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Cursos</button>
                        <button type="button" onclick="window.location.href='coordenador.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/coordenador.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"';
                            ?>>Coordenador</button>
                        <button type="button" onclick="window.location.href='cadastrar-egressos.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/cadastrar-egressos.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Cadastrar egressos</button>
                        <button type="button" onclick="window.location.href='ver-mensagens.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/ver-mensagens.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Mensagens</button>
                        <button type="button" onclick="window.location.href='empresas.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/empresas.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Empresas</button>
                    </div>
                </div>
                <button class="btn btn-danger" type="button" onclick="if(confirm('Deseja realmente sair?'))
                                                                                    window.location.href='sair.php';"
                >Sair <i class="fas fa-sign-out-alt"></i></button>
            </div>
        <?php elseif($acessos['acesso'] == '2'):?>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <div class="btn-group button" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <button type="button" onclick="window.location.href='cadastrar-egressos.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/cadastrar-egressos.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Cadastrar egressos</button>
                        <button type="button" onclick="window.location.href='empresas.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/empresas.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Empresas</button>
                        <button type="button" onclick="window.location.href='mensagens-coordenador.php'" <?php $get =
                            $_SERVER[REQUEST_URI]; if($get == '/mensagens-coordenador.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Mensagens</button>
                        <button type="button" onclick="window.location.href='validar-depoimentos.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/validar-depoimentos.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Validar depoimentos</button>
                        <button type="button" onclick="window.location.href='empregos-coordenador.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/empregos.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Oportunidades de empregos</button>
                    </div>
                </div>
                <button class="btn btn-danger" type="button" onclick="if(confirm('Deseja realmente sair?'))window.location.href='sair.php';">Sair <i class="fas fa-sign-out-alt"></i></button>
            </div>
        <?php elseif($acessos['acesso'] == '3'):?>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <div class="btn-group button" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <button type="button" onclick="window.location.href='concluir-cadastro.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/concluir-cadastro.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Concluir cadastro</button>
                        <button type="button" onclick="window.location.href='escrever-depoimento.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/escrever-depoimentos.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Escrever depoimento</button>
                        <button type="button" onclick="window.location.href='mensagens-egresso.php'" <?php $get =
                            $_SERVER[REQUEST_URI]; if($get == '/mensagens-egresso.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Mensagens</button>
                        <button type="button" onclick="window.location.href='empregos.php'" <?php $get = $_SERVER[REQUEST_URI]; if($get == '/empregos.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Oportunidades de empregos</button>
                    </div>
                </div>
                <button class="btn btn-danger" type="button" onclick="if(confirm('Deseja realmente sair?'))
                                                                                    window.location.href='sair.php';
                ">Sair <i class="fas fa-sign-out-alt"></i></button>
            </div>
        <?php elseif($acessos['acesso'] == '4'):?>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <div class="btn-group button" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ações
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <button type="button" onclick="window.location.href='concluir-cadastro-empresa.php'"<?php $get = $_SERVER[REQUEST_URI]; if($get == '/concluir-cadastro-empresa.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Concluir cadastro</button>
                        <button type="button" onclick="window.location.href='mensagens-empresa.php'"
                            <?php $get = $_SERVER[REQUEST_URI]; if($get == '/mensagens-empresa.php')
                                echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"';
                                ?>>Mensagens</button>
                        <button type="button" onclick="window.location.href='cadastro-empregos.php'"
                            <?php $get = $_SERVER[REQUEST_URI]; if($get == '/cadastro-empregos.php')
                            echo 'class="dropdown-item active"'; else echo 'class="dropdown-item"'; ?>>Empregos</button>
                    </div>
                </div>
                <button class="btn btn-danger" type="button" onclick="if(confirm('Deseja realmente sair?'))
                                                                                    window.location.href='sair.php';
                ">Sair <i class="fas fa-sign-out-alt"></i></button>
            </div>
        <?php else:?>
            <?php $get = $_SERVER[REQUEST_URI]; if($get == '/index.php' || $get == '/' ||
            $get == '/login.php'):?>
                <div class="btn-group button" role="group" aria-label="Basic example" hidden>
                    <button type="button" class="btn btn-info button" onclick="window.location.href='login' +
            '.php';"><i class="fas fa-sign-in-alt"></i> Entrar</button>
                </div>
            <?php else:?>
                <div class="btn-group button" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-info button" onclick="window.location.href='login' +
            '.php';"><i class="fas fa-sign-in-alt"></i> Entrar</button>
                </div>
            <?php endif;?>
        <?php endif;?>
    </div>
</nav>

