<!-- LISTE LES USAGERS -->

<!-- connexion a la bdd -->
<?php include '../bdd.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <title>Ajouter un client</title>
</head>
<body>

    <?php include '../includes/sidebar.php';?>

    <?php include '../includes/topbar.php';?>

<!-- FORMULAIRE D'AJOUT -->
<div class="container">
    <form action="action.php" method="POST">
        <div class="mb-3">
            <label for="nonm" class="form-label">Nom : </label>
            <input type="text" name="nom" class="form-control">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" name="prenom" class="form-control">
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Addresse :</label>
            <input type="text" name="adresse" class="form-control">
        </div>
        <div class="mb-3">
            <label for="ville" class="form-label">Ville :</label>
            <input type="text" name="ville" class="form-control">
        </div>
        <div class="mb-3">
            <label for="code_postal" class="form-label">Code postal :</label>
            <input type="text" name="code_postal" class="form-control">
        </div>    
        <div class="mb-3">
            <label for="mail" class="form-label">Mail :</label>
            <input type="email" name="mail" class="form-control">
        </div>
            <div class="text-center mb-3">
            <input type="submit" name="btn_add_usager" class="btn btn-primary" value="Ajouter">
        </div>
    </form>
</div>


<?php include '../includes/footer.php';?>
