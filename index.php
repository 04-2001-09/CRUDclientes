<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link href="public\css\bootstrap.min.css" rel="stylesheet">
    <link href="public\css\styles.css" rel="stylesheet">
    <title>Cadastro Usuarios</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="head">
                <h1><img src="public/img/head.png" width="4%"> Gerenciamento de Usuarios</h1>
            </div>
            <div class="menu">
                <ul>

                    <li>
                        <a href="index.php?page=home">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="index.php?page=cadastrar">
                            Cadastrar
                        </a>
                    </li>


                </ul>
            </div>
        </header>
        <main>
            <?php
            $page = $_GET['page'];
            if ($page == 'home') {
                require_once 'app/view/home.php';
            }
            else if ($page == 'cadastrar') {
                require_once 'app/view/form.php';
            }
            else if ($page == 'edit') {
                require_once 'app/view/form.php';
            }else{
                require_once 'app/view/home.php';
            }
            ?>
        </main>
        <footer class="footer mt-4">
            <div class="text-center">
                <span>
                    &#x2117; - Desenvolvido por Allan Aparecido Milani - 2020
                </span>
            </div>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.mask.min.js"></script>

</body>

</html>