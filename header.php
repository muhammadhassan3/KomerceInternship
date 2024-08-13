<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap">

  <?php wp_head(); ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">

    <div class="container d-flex flex-row">
      <a class="navbar-brand" href="#">
        <?php
        if (function_exists('the_custom_logo')) {
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
        }
        ?>
        <img src="<?php echo $logo[0] ?>" alt="Logo" height="40" class="mb-3.5 mt-2 mx-auto logo">

        <?php
        // wp_nav_menu(
        //   array(
        //     'menu' => 'primary',
        //     'container' => '',
        //     'theme_location' => 'primary',
        //     'items_wrap' => '<ul id="" class="navbar-nav flex-column tex-sm-center text-md-left">%3$s</ul>',
        //   )
        //   ); 
        ?>
      </a>
      <div class="collapse navbar-collapse justify-content-center mt-2">
        <ul class="navbar-nav">
            <li class="nav-item navbar-item">
                <a class='nav-link navbar-link navbar-link-active' aria-current='page' href='/'>Home</a>
            </li>
            <?php
            $menuLocation = get_nav_menu_locations();
            $menuId = $menuLocation['primary'];
            $menu = wp_get_nav_menu_items($menuId);
            $currentUrl = trailingslashit(home_url($wp->request));

            foreach ($menu as $item) {
                // Ensure trailing slash consistency
                $itemUrl = trailingslashit($item->url);
                $activeClass = ($itemUrl == $currentUrl) ? 'navbar-link-active' : '';
                echo "<li class='nav-item navbar-item'><a class='nav-link navbar-link " . $activeClass . "' aria-current='page' href='" . $item->url . "'> " . $item->title . "</a></li>";
            }
            ?>
          <!-- <li class="nav-item dropdown">
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
          </li> -->
        </ul>
      </div>
      <div class="d-flex align-items-center" style="gap: 15px;">
        <a  href="#" class="ind_text" style="color: red;">ID</a>
        <div>|</div>
        <a href="#" class="en_text" style="color: #333;">EN</a>
      </div>
    </div>
  </nav>