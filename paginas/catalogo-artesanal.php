<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/estilos.css">
</head>
<body>
    
    <div class="container catalogo">
        <?php
        $host = "localhost";
        $database = "id20898695_catalogo";
        $usuario    = "id20898695_tintor";
        $contrasena = "Tintor1234@";
        try{
            $conn = new PDO("mysql:host=$host;dbname=;charset=utf8", $usuario, $contrasena);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo "ERROR: " . $e->getMessage();
        }

        $consulta  = "SELECT * FROM `Productos`";
        $query = $conn->prepare($consulta);
        $query->execute();
        while($registro = $query->fetch())
        {
            ?>
                <div class="col-12 col-md-4 text-center">
                    <div class="card">
                        <img src="<?=$registro["Foto"]?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?=$registro["Nombre"]?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>