<?php
    $num_departement = $_GET['id'];
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
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle mb-0">
                        <thead class="table-primary">
            <tr>
                <th>Numero du departement</th>
                <th>Nom du departement</th>
                <th>id employee</th>
                <th>Prenom Manager</th>
                <th>Nom Manager</th>
            </tr>
        </thead>
        <tbody>
            <?php
        foreach ($news as $news_ligne) { ?>
            <tr>
                <td><?php echo $news_ligne['numero_departement'] ?></td>
                <td><?php echo $news_ligne['nom_departement'] ?></td>
                <td><?php echo $news_ligne['id_employee'] ?></td>
                <td><?php echo $news_ligne['Prenom'] ?></td>
                <td><?php echo $news_ligne['Nom'] ?></td>
            </tr>
       <?php } ?>
        </tbody>
    </table>
</body>
</html>