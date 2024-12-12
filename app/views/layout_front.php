<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= $base_url ?>/css/styles.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/dabff537d3.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include('includes/header.php') ?>
    <?= $content ?>
    <?php include('includes/footer.php') ?>
</body>

</html>