<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titulo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Calcular a Área do triangulo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#"></a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">

            <form class="row g-3" action="               
               " method="post" enctype="multipart/form-data">

                <div class="col-6">
                    <label for="base">Valor da BASE</label>
                    <input type="number" class="form-control" id="base" placeholder="Digite a base do triangulo:" name="base">
                </div>
                <div class="col-6">
                    <label for="altura">valor da altura</label>
                    <input type="number" class="form-control" id="altura" placeholder="Digite a altura do triangulo:" name="altura">
                </div>
               
                <div class="col-md-6">
                    <label for="CalcularAREA"></label>
                    <input type="submit" class="form-control" name="CalcularAREA" value="Calcular">
                </div>
            </form>
            <?php
            if (isset($_POST['CalcularAREA'])) 
            {
             
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                

                $areatri = ($base*$altura) / 2;


               
                if ($areatri == -0) 
                {
                    
                    echo "<p><p>";
                } 
                else 
                {
                    echo "<p>A area desse triangulo é $areatri <p>";

                }
            }
          
        
        

            ?>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>