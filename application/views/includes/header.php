<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <!--    Bootstrap Paper theme link-->
    <?= link_tag('https://bootswatch.com/paper/bootstrap.min.css'); ?>
    <!-- Fontawesome -->
    <?= link_tag('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <!--    Main Css File-->
    <?= link_tag('includes/css/main.css'); ?>
    <!--jQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--Bootstrap JS CDN-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Form Validator-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <!-- Ajax JS -->

    <script src="<?= base_url('includes/js/ajax.js'); ?>"></script>
    <!--Main Js file-->
    <script src="<?= base_url('includes/js/main.js'); ?>"></script>
</head>

<body class="<?= $page_class ?>">