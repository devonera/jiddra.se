<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php if(page() == 'rantefritt') : ?>
    <title>Räntefritt lån - Smslån, snabblån &amp; blancolån</title>
    <meta name="description" content="Ta ett räntefritt lån för att slippa extra kostnader.">
  <?php else : ?>
    <?php if(!empty($seo_title)) : ?>
      <title><?= $seo_title; ?></title>
    <?php else : ?>
      <title><?= $title; ?></title>
    <?php endif; ?>
    <?php if(!empty($seo_description)) : ?>
      <meta name="description" content="<?= $seo_description; ?>">
    <?php endif; ?>
  <?php endif; ?>

  <?php $time = server::isLocalhost() ? '?time=' . time() : ''; ?>

<link rel="stylesheet" href="<?= url('assets/cache/assets/css/style.min.css'); ?>" as="style" onload="this.rel='stylesheet'">
<link rel="stylesheet" href="https://use.typekit.net/icu8dxn.css" as="style" onload="this.rel='stylesheet'">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" as="style" onload="this.rel='stylesheet'">

  <link rel="icon" href="<?= url('assets/components/header/favicon.png'); ?>">

</head>
<body>
<?= component('cookie-banner'); ?>