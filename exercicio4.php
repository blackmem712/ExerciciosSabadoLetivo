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
                <a class="navbar-brand" href="#">Calcular a Raiz quadratica</a>
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
                    <label for="valora">valor A:</label>
                    <input type="number" class="form-control" id="valora" placeholder="Digite a nota 1:" name="valora">
                </div>
                <div class="col-6">
                    <label for="valorb">valor B:</label>
                    <input type="number" class="form-control" id="valorb" placeholder="Digite a nota 2:" name="valorb">
                </div>
                <div class="col-md-6">
                    <label for="valorc">valor C:</label>
                    <input type="number" class="form-control" id="valorc" placeholder="Digite a nota 3:" name="valorc">
                </div>
                <div class="col-md-6">
                    <label for="CalcularRAIZQUADRATICA"></label>
                    <input type="submit" class="form-control" name="CalcularRAIZQUADRADICA" value="Calcular">
                </div>
            </form>
            <?php
            if (isset($_POST['CalcularRAIZQUADRADICA'])) 
            {
             
                $valora = $_POST['valora'];
                $valorb = $_POST['valorb'];
                $valorc = $_POST['valorc'];

                $raizquadratica = ($valorb * $valorb) - (4 * $valora * $valorc);


               
                if ($raizquadratica > 0) 
                {
                    
                    $raizquadraticax1 = ((-$valorb) + (sqrt($raizquadratica))) / (2 * $valora);
                    $raizquadraticax2 = ((-$valorb) - (sqrt($raizquadratica))) / (2 * $valora);

                    echo "<p>a função quadratica x1= $raizquadraticax1<p>";
                    echo "<p>a função quadratica x2= $raizquadraticax2<p>";

                } 
                elseif ($raizquadratica == 0)
                 {
                    $raizquadraticax = (-$valorb) / (2 * $valora);


                    echo "<p>a função quadratica é $raizquadraticax<p>";
                } 
                else 
                {
                    echo "<p>essa função não tem raiz quadrada real<p>";

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