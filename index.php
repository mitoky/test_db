<?php
    include('fonction.php');
    $news = get_dep();
?>

<!DOCTYPE html>
<html lang="fr">
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

        <!-- En-tête -->
        <div class="d-flex align-items-center mb-4">
            <i class="bi bi-building fs-2 text-primary me-3"></i>
            <div>
                <h1 class="h3 fw-bold mb-0 text-dark">Liste des Départements</h1>
                <p class="text-muted mb-0 small">Gestion des employés par département</p>
            </div>
        </div>

        <!-- Tableau -->
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-primary">
                            <tr>
                                <th class="ps-4">
                                    <i class="bi bi-hash me-1"></i>N° Département
                                </th>
                                <th>
                                    <i class="bi bi-diagram-3 me-1"></i>Nom du Département
                                </th>
                                <th>
                                    <i class="bi bi-person me-1"></i>Prénom Manager
                                </th>
                                <th>
                                    <i class="bi bi-person-badge me-1"></i>Nom Manager
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($news as $news_ligne): ?>
                            <tr>
                                <td class="ps-4">
                                    <span class="badge bg-primary rounded-pill">
                                        <?php echo htmlspecialchars($news_ligne['numero_departement']) ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="description.php?nom_departement=<?php echo urlencode($news_ligne['nom_departement']) ?>"
                                       class="text-decoration-none fw-semibold text-primary">
                                        <i class="bi bi-arrow-right-circle me-1"></i>
                                        <?php echo htmlspecialchars($news_ligne['nom_departement']) ?>
                                    </a>
                                </td>
                                <td class="text-secondary"><?php echo htmlspecialchars($news_ligne['Prenom']) ?></td>
                                <td class="fw-medium"><?php echo htmlspecialchars($news_ligne['Nom']) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Pied du tableau -->
            <div class="card-footer text-muted small bg-white border-top">
                <i class="bi bi-info-circle me-1"></i>
                Cliquez sur un département pour voir ses employés.
            </div>
        </div>

    </div>

</body>
</html>