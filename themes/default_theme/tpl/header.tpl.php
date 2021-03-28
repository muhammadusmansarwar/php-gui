<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Muhammad Usman Sarwar" />
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/php-gui/themes/third_party_libs/bootstrap-5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap core js -->
    <script src="http://localhost/php-gui/themes/third_party_libs/bootstrap-5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- jquery -->
    <script src="http://localhost/php-gui/themes/third_party_libs/jquery-3.5.1.min.js"></script>


    <!-- hamburgers core CSS -->
    <!-- <link href="http://localhost/php-gui/themes/third_party_libs/hamburgers/hamburgers.min.css" rel="stylesheet" /> -->



    <!-- font awesome core CSS -->
    <link href="http://localhost/php-gui/themes/third_party_libs/fontawesome/css/all.css" rel="stylesheet" />
    <!-- font awesome core js -->
    <script src="http://localhost/php-gui/themes/third_party_libs/fontawesome/js/all.js"></script>

    <!-- main css -->
    <link href="http://localhost/php-gui/themes/default_theme/css/main.css" rel="stylesheet" />
    <link href="http://localhost/php-gui/themes/default_theme/css/icons.css" rel="stylesheet" />
    <!-- main js -->
    <script src="http://localhost/php-gui/themes/default_theme/js/main.js"></script>

</head>

<body style="background-color: #f1f4f6;">
    <div class="main_body" id="main_body">


        <?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'nav.tpl.php' ?>


        <div class="container-fluid">
            <div class="row">


                <?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'sidebar.tpl.php' ?>


                <main id="page_body" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">