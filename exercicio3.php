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
                <a class="navbar-brand" href="#"> Contar números pares </a>
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
               
                <div class="col-md-6">
                <label for="numero1">INFOROME O NUMERO  </label>
                    <input type="number" class="form-control" id="numero1" 
                        name="numero1" >
                </div>
                <div class="col-md-6">
                <label for="numero2">INFOROME O NUMERO  </label>
                    <input type="number" class="form-control" id="numero2" 
                        name="numero2" >
                </div>
                <div class="col-md-6">
                <label for="Calcular"></label>
                    <input type="submit" class="form-control" 
                        name="Calcular" value="Calcular" >
                </div>
            </form>
            <?php
          
               if(isset($_POST['Calcular']))
               {

                $pares = 0;
                $numero1 =$_POST['numero1'];
                $numero2 =$_POST['numero2'];

                for($i=$numero1; $i <=$numero2;$i++)
                {
                    if( $i % 2 != 0)
                    {
                        continue;
                    }
                   $pares++;
                }


              echo  "<p>a quantidade de numeros pares entre $numero1 e $numero2 é $pares <p>";


               
        
                 
                
            }


            ?>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>