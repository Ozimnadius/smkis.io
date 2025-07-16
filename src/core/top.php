<? include_once('init.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Страница</title>
  <meta name="keywords" content="Страница">
  <meta name="description" content="Страница">

  <!--ICON-->
  <link rel="icon" type="image/png" href="<?=$GLOBALS['templatePath'];?>/images/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="<?=$GLOBALS['templatePath'];?>/images/favicon/favicon.svg" />
  <link rel="shortcut icon" href="<?=$GLOBALS['templatePath'];?>/images/favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?=$GLOBALS['templatePath'];?>/images/favicon/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="Сайт" />
  <link rel="manifest" href="<?=$GLOBALS['templatePath'];?>/images/favicon/site.webmanifest" />

  <!--CSS-->
  <link rel="stylesheet" href="<?=$GLOBALS['templatePath'];?>/libs/styles.css">
  <link rel="stylesheet" href="<?=$GLOBALS['templatePath'];?>/styles.css">

  <!--JS-->
  <script defer src="<?=$GLOBALS['templatePath'];?>/libs/scripts.min.js"></script>
  <script defer src="<?=$GLOBALS['templatePath'];?>/js/scripts.js"></script>

</head>
<body>

<!--wrapper-->
<div class="wrapper">
  <div class="wrapper__header">
    <? component('header');?>
  </div>
  <!--wrapper__content-->
  <div class="wrapper__content">
