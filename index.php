<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>AEV Projeto Hackathon</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .suporte {
            font-size: xx-large;
            background-color: lightgreen;
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 1em;
            border: black 1px solid;
            margin: 1em;
            position: fixed;
            bottom: .1em;
            right: .1em;
        }

        .navbar {
            padding-left: 1em;
            padding-right: 1em;
        }

        .navbar-nav {
            font-size: 1em;
        }

        .link {
            color: #434db3 !important;
            padding-right: .5rem;
            padding-left: .5rem;
            display: block;
            padding: .5rem 1rem;
        }

        .dropdown-menu {
            min-width: auto;
            border-top: 0px;
        }

        .dropdown-menu a {
            color: #434db3;
        }

        .navbar-brand {
            font-size: xx-large
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="link" href="#">Quem somos</a>
                </li>
                <li class="nav-item">
                    <a class="link" href="#">A Equoterapia</a>
                </li>
                <li class="nav-item">
                    <a class="link" href="#">Esportivo Adaptado</a>
                </li>
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <a class="link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Equipe
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Cavalos</a>
                            <a class="dropdown-item" href="#">Profissionais</a>
                            <a class="dropdown-item" href="#">Fundadoras</a>
                            <a class="dropdown-item" href="#">Diretoria</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="link" href="#">Mídias</a>
                </li>
                <li class="nav-item">
                    <a class="link" href="#">Transparência</a>
                </li>
                <li class="nav-item">
                    <a class="link" href="#">Loja</a>
                </li>
                <li class="nav-item">
                    <a class="link" href="#">Adote!</a>
                </li>
                <li class="nav-item">
                    <a class="link" href="#">Colabore!</a>
                </li>
                <li class="nav-item">
                    <a class="link" href="#">Contato!</a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-lg-0">
            <input type="search" placeholder="Search" aria-label="Search">
        </form>
    </nav>
    <div class="container">
    </div>
    <div class="suporte" style="display: none">?</div>
</body>

</html>