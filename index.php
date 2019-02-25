<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <title>.:Game:.</title>

    <style>
        .imagembotao {
            width: 29px;
            position: absolute;
            top: 8px;
            right: 2px;
        }

        .btnpesquisa {
            position: absolute;
            right: 33px;
            top: 10px;
        }
    </style>


</head>
<body>
<div class="container-fluid">
    <header class="container">
        <div class="row">
            <p></p>
        </div>
        <h1 class="col-xs-6 col-ms-6  col-md-6  col-lg-6">Games</h1>


    </header>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Menu</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Carrinho</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a>
                            <form method="post" action="#">
                                <input type="text" class="btnpesquisa" placeholder="pesquisar" name="pesquisa"/>
                                <input type="image" class="imagembotao" src="img/pesquisa.png">
                            </form>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Xbox One</h3>
            </div>
            <div class="panel-body">
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                    <img src="img/box.jpg" width=100%/>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
                    <p>Game lançado pela Microsoft</p>
                    <p>Console</p>
                    <p>Plataforma: Xbox One</p>
                    <p>R$ 1.350,00</p>
                    <p><a href="#" class="btn btn-primary">Comprar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
                                href="#" class="btn btn-success">Ver Mais</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="img/pst.jpg" class="imgtum">
            </div>
            <div class="caption">
                <h3>PlayStaion </h3>
                <p>R$ 2.000,00</p>
                <p>
                    <a href="#" class="btn btn-primary" role="button">Comprar</a>
                    <a href="#" class="btn btn-success" role="button">Ver Mais</a>
                </p>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="img/mario.jpg" class="imgtum">
            </div>
            <div class="caption">
                <h3>Mario Kart 8</h3>
                <p>R$ 220,00</p>
                <p>
                    <a href="#" class="btn btn-primary" role="button">Compar</a>
                    <a href="#" class="btn btn-success" role="button">Ver Mais</a>
                </p>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="img/bt.jpg" class="imgtum">
            </div>
            <div class="caption">
                <h3>Battle Field One</h3>
                <p>R$ 225,00</p>
                <p>
                    <a href="#" class="btn btn-primary" role="button">Compar</a>
                    <a href="#" class="btn btn-success" role="button">Ver Mais</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html> 