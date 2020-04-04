<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#27B532">
    <meta name="description" content="<?= $config->site_desc ?? '' ?>">
    <meta name="author" content="<?= $config->site_name ?? '' ?>">

    <meta data-rh="true" property="og:title" content="<?= $config->site_tagline ?? '' ?>" />
    <meta data-rh="true" property="og:site_name" content="<?= $config->site_name ?? '' ?>" />
    <meta data-rh="true" property="og:description" content="<?= $config->site_desc ?? '' ?>" />
    <meta data-rh="true" property="og:url" content="<?= $config->site_url ?? '' ?>" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= asset_url() . 'upload/' . $config->site_icon ?>" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= asset_url() . 'css/main.css' ?>">

    <!-- Jquery JS -->
    <script src="<?= asset_url() . 'vendor/jquery/jquery.min.js' ?>"></script>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Get title from controller -->
    <title><?= $title ?></title>