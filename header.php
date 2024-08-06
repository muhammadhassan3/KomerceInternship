<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

    <?php wp_head(  ); ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">

    <div class="container d-flex flex-row">
      <a class="navbar-brand" href="#">
      <?php
      if(function_exists('the_custom_logo'))
        {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src( $custom_logo_id );

        }
        ?>
        <img src="<?php echo $logo[0] ?>" alt="Logo"  height="40" class="mb-3 mx-auto logo">

        <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="" class="navbar-nav flex-column tex-sm-center text-md-left">%3$s</ul>'
          )
          ); ?>
      </a>
      <!-- <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="true">Produk</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="halo.php">Komtim</a></li>
              <li><a class="dropdown-item" href="#">Komform</a></li>
              <li><a class="dropdown-item" href="#">Komchat</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Affiliate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Karir</a>
          </li>
        </ul>
      </div> -->
      <div class="d-flex align-items-center">
        <a href="#" class="btn btn-danger ml-3">Hubungi Kami</a>
      </div>
    </div>
  </nav>

