<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

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
            <img src="<?php echo esc_url($logo[0]); ?>" alt="Logo" height="40" class="mb-3.5 mt-2 mx-auto logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center mt-2" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item navbar-item">
                    <?php
                    global $wp;
                    $homeUrl = trailingslashit(home_url('/'));
                    $menuLocation = get_nav_menu_locations();
                    $menuId = $menuLocation['primary'];
                    $menu = wp_get_nav_menu_items($menuId);
                    $currentUrl = trailingslashit(home_url($wp->request));

                    $homeActiveClass = ($homeUrl == $currentUrl) ? 'navbar-link-active' : '';
                    echo "<a class='nav-link navbar-link " . esc_attr($homeActiveClass) . "' aria-current='page' href='" . esc_url($homeUrl) . "'>Home</a>";
                    ?>
                </li>
                <?php
                foreach ($menu as $item) {
                    $itemUrl = trailingslashit($item->url);
                    $activeClass = ($itemUrl == $currentUrl 
                                    || ($item->title == 'Society' && !is_home() && !is_front_page() && (is_category('society') || in_category('society')))
                                    || ($item->title == 'Blog' && (is_category('blog') || in_category('blog'))))
                                    ? 'navbar-link-active' : '';
                
                    echo "<li class='nav-item navbar-item'><a class='nav-link navbar-link " . esc_attr($activeClass) . "' aria-current='page' href='" . esc_url($item->url) . "'> " . esc_html($item->title) . "</a></li>";
                }
                ?>
                <!-- <li>
                        <div class="language-switch d-flex d-md-none align-items-center">
                            <a href="#" class="language-option ">ID</a>
                            <a href="#" class="language-option active">EN</a>
                        </div>
                    </li>
                    <li>
                        <div class="language-switch d-none d-md-flex d-lg-none align-items-center">
                            <a href="#" class="language-option">ID</a>
                            <a href="#" class="language-option active">EN</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="language-switch d-none d-lg-flex align-items-center">
                <a href="#" class="language-option">ID</a>
                <a href="#" class="language-option active">EN</a>
            </div> -->
    </div>
</nav>
