<?php
    include ('fonction.php');
    $num_departement = $_GET['id'];
    $nom_departement = $_GET['nom'];
    $news = get_liste($num_departement);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <title>Liste employees departement</title>
</head>
<body class="bg-light">

    <div class="container py-5">

        <div class="d-flex align-items-center mb-4">
            <i class="bi bi-people fs-2 text-primary me-3"></i>
            <div>
                <h1 class="h3 fw-bold mb-0 text-dark">Liste des employés du departement <?php echo $nom_departement ?></h1>
                <p class="text-muted mb-0 small">Détail des membres du département</p>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-primary">
                            <tr>
                                <th class="ps-4">id employee</th>
                                <th>Prenom Manager</th>
                                <th>Nom Manager</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        foreach ($news as $news_ligne) { ?>
                            <tr>
                                <td class="ps-4"><?php echo $news_ligne['id_employe'] ?></td>
                                <td><?php echo $news_ligne['Prenom'] ?></td>
                                <td><?php echo $news_ligne['Nom'] ?></td>
                            </tr>
                       <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-muted small bg-white border-top">
                <a href="index.php" class="text-decoration-none">
                    <i class="bi bi-arrow-left me-1"></i>Retour à la liste des départements
                </a>
            </div>
        </div>

    </div>

</body>
</html>