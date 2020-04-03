<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= url("/themes/lib/plugins/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= url("/themes/lib/plugins/node-waves/waves.css"); ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= url("/themes/lib/plugins/animate-css/animate.css"); ?>" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="<?= url("/themes/lib/plugins/sweetalert/sweetalert.css"); ?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= url("/themes/lib/css/style.css"); ?>" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="<?= url("/themes/lib/plugins/bootstrap-select/css/bootstrap-select.css"); ?>" rel="stylesheet" />
</head>

<?= $v->section("content"); ?>

</html>