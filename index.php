<?php
    include('fonction.php');
    $news = get_dep();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <title>Employees_dep</title>
</head>
<body class="bg-light">

    <div class="container py-5">

        <div class="d-flex align-items-center mb-4">
            <i class="bi bi-building fs-2 text-primary me-3"></i>
            <div>
                <h1 class="h3 fw-bold mb-0 text-dark">Liste des Départements</h1>
                <p class="text-muted mb-0 small">Gestion des employés par département</p>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-primary">
                            <tr>
                                <th>Numero du departement</th>
                                <th>Nom du departement</th>
                                <th>Prenom Manager</th>
                                <th>Nom Manager</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        foreach ($news as $news_ligne) { ?>
                            <tr>
                                <td><?php echo $news_ligne['numero_departement'] ?></td>
                                <td class="ps-4"><a href="description.php?id=<?php echo $news_ligne['numero_departement'] ?>&nom=<?php echo $news_ligne['nom_departement'] ?>"><?php echo $news_ligne['nom_departement'] ?></a></td>
                                <td><?php echo $news_ligne['Prenom'] ?></td>
                                <td><?php echo $news_ligne['Nom'] ?></td>
                            </tr>
                       <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
