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
                <a class="navbar-brand" href="#">Calcular a nota dos alunos</a>
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
                <div class="col-12">
                    <label for="txtNome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="txtNome" placeholder="Digite seu nome..."
                        name="txtNome">
                </div>
                <div class="col-6">
                    <label for="nota1">NOTA 1:</label>
                    <input type="number" class="form-control" id="nota1" placeholder="Digite a nota 1:"
                        name="nota1" min="0" max="100" >
                </div>
                <div class="col-6">
                <label for="nota2">NOTA 2:</label>
                    <input type="number" class="form-control" id="nota1" placeholder="Digite a nota 2:"
                        name="nota2" min="0" max="100" >
                </div>
                <div class="col-md-6">
                <label for="nota1">NOTA 3:</label>
                    <input type="number" class="form-control" id="nota3" placeholder="Digite a nota 3:"
                        name="nota3" min="0" max="100" >
                </div>
                <div class="col-md-6">
                <label for="nota4">NOTA 4:</label>
                    <input type="number" class="form-control" id="nota1" placeholder="Digite a nota 4:"
                        name="nota4" min="0" max="100" >
                </div>
                <div class="col-md-6">
                <label for="Calcularnota"></label>
                    <input type="submit" class="form-control" id="calcularmedia" 
                        name="Calcularnota" value="Calcular" >
                </div>
            </form>
            <?php
               if(isset($_POST['Calcularnota']))
               {
                $nome = $_POST['txtNome'];
                $nota1 =$_POST['nota1'];
                $nota2 =$_POST['nota2'];
                $nota3 =$_POST['nota3'];
                $nota4 =$_POST['nota4'];

                $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;

                if($media == -1)
                {
                  echo "<p><p>";
                }else if($media >= 60)
                {
                  echo "<p>$nome ESTÁ APROVADO com a Média $media<p>";
                    
                }else
                {
                   echo "<p>$nome ESTÁ REPROVADO com a Média $media<p>";
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