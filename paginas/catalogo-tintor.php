<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/estilos.css">
    <link rel="stylesheet" href="../Estilos/catalogo.css">
</head>
<body>
    <header>
        <div id="titulo" class="fixed-top">
            <div id="logo">
                <a href="../index.html">
                    <img src="../imagenes/tintor.png" alt="tintor" class="tintorimg">
                </a>
            </div>
            <div class="navegador">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo-tintor.php">CATALOGO TINTOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.html">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo-artesanal.php">CATALOGO ARTESANAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">CONTÁCTANOS</a>
                    </li>
                </ul>
            </div>
        </div>            
    </header>
    <div class="catalogo">
        <?php
        include 'conexion.php';
        $consulta  = "SELECT * FROM `ProductosExtras`";
        $query = $conn->prepare($consulta);
        $query->execute();
        while($registro = $query->fetch())
        {
            ?>
                <div class="paneles">                     
                    <div class="card panel">
                        <img src="<?=$registro["Foto"]?>" alt="" class="imagenes">
                        <div class="card-body cuerpo">
                            <h5 class="card-title"><?=$registro["Nombre"]?></h5>
                            <p class="card-text"><?=$registro["Descripcion"]?></p>
                            <span class="precio">$<?=$registro["Precio"]?></span>
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