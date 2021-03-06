<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Admin</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"> Espace Administrateur</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                </ul>

                <form method="GET" class="d-flex">
                    <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">  <a href="#search">  Search  </a></button>
                </form>
            </div>
        </div>
    </nav>
    <?php if(isset($_SESSION['erreur'])){ ?>

<div class="container mt-5">
<div class="alert alert-danger" role="alert"
    style="text-align: center; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px">
    
    <?php echo $_SESSION['erreur']; unset($_SESSION['erreur'])?>

</div>
</div>
<?php }else{  unset($_SESSION['erreur']);  session_destroy();} ?>