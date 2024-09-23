<?php get_header(); ?>

<!-- hows life at komerce -->
<div class="position-relative">
    <div class="background-heros">
        <?php $image = get_template_directory_uri() . "/Images/hero.jpg" ?>
        <img src="<?= $image ?>" alt="KomerceTeam" class="image-hero filter-hero">
    </div>

    <div class="content-wrapper">
        <h1 class="main-heading">How’s Life at Komerce?</h1>
        <p class="sub-heading">Get an inside look into what working at Komerce is like!</p>
        <div class="button-container mt-3">
            <a class="styled-button" href="category/blog/">
                <span class="text">Let's Go!</span>
                <?php $image = get_template_directory_uri() . "/Images/arrow-right.svg" ?>
                <img src="<?= $image ?>" alt="Arrow" class="arrow-icon">
            </a>
        </div>
    </div>

    <div class="flex-container">
        <div class="marquee">
            <div class="marquee-content">
                <div class="d-flex flex-row align-items-center">
                    <div class="number">100</div>
                    <div class="text ms-2">Management Employee</div>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div class="number">50K</div>
                    <div class="text ms-2">Product User</div>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div class="number">12K</div>
                    <div class="text ms-2">Integrated Product</div>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div class="number">500K</div>
                    <div class="text ms-2">Komtim Talent</div>
                </div>
                <!-- Repeat content for smooth looping -->
                <div class="d-flex flex-row align-items-center">
                    <div class="number">100</div>
                    <div class="text ms-2">Management Employee</div>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div class="number">50K</div>
                    <div class="text ms-2">Product User</div>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div class="number">12K</div>
                    <div class="text ms-2">Integrated Product</div>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div class="number">500K</div>
                    <div class="text ms-2">Komtim Talent</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- hows life at komerce -->


<!-- Komerce Society -->

<div class="komerce-section">
    <div class=d-flex>
    <?php $image = get_template_directory_uri() . "/Images/arrow-up-right.svg" ?>
            <img src=<?= $image ?> alt="Arrow" class="arrow-up-right">
    </div>
  <div class="row">
    <!-- Left Side: What We Do Section -->
    <div class="col left-side">
      <h1 class="ks-font">Komerce Society</h1>
      <!-- <div class="what-we-do"> -->
        <div class="wwd-box">
        <h3 class="wwd-font">What we do?</h3>
        </div>
        <div class="mt-4 mb-4">
            <p class="wwd-paragraph">Komerce is a startup built by Indigo Telkom which operates in the end-to-end e-commerce enabler sector. This startup comes from Purbalingga, Central Java, which was founded in 2019.</p>
        </div>
        
        <div class="d-flex">
          <h2 class="product-count">12+</h2>
          <div>
            <p class="product-count-paragraph">Integrated</p>
            <p class="product-count-paragraph">Product</p>
          </div>
          
        </div>
        <div class="circle-container mt-4">
          <div class="circle1">
            <?php $image = get_template_directory_uri() . "/Images/komtim.svg" ?>
            <img src=<?= $image ?> alt="komtim" class="img-circle">
          </div>
          <div class="circle2">
            <?php $image = get_template_directory_uri() . "/Images/komship.svg" ?>
            <img src=<?= $image ?> alt="komtim" class="img-circle">
          </div>
          <div class="circle3">
            <?php $image = get_template_directory_uri() . "/Images/kompack.svg" ?>
            <img src=<?= $image ?> alt="komtim" class="img-circle">
          </div>
          <div class="circle4">
            <?php $image = get_template_directory_uri() . "/Images/komcards.svg" ?>
            <img src=<?= $image ?> alt="komtim" class="img-circle">
          </div>
          <div class="circle5">
            <?php $image = get_template_directory_uri() . "/Images/komplace.svg" ?>
            <img src=<?= $image ?> alt="komtim" class="img-circle">
          </div>
          <div class="circle6">
            <?php $image = get_template_directory_uri() . "/Images/add.svg" ?>
            <img src=<?= $image ?> alt="komtim" class="img-circle">
          </div>
        </div>    

      <!-- </div> -->
    </div>

    <!-- Right Side: Who We Are Section -->
    <div class="col right-side">
      <div class="wwd-box">
        <h3 class="wwd-font">Who Are We?</h3>
        </div>
        <div class="mt-4 mb-4">
            <p class="wwd-paragraph">We strongly believe that finding your purpose can be done by helping others achieve theirs. The impact we made for millions is the reason we come to work every day.</p>
        </div>
        <div>
            <?php $image = get_template_directory_uri() . "/Images/komerce-team.png" ?>
            <img src=<?= $image ?> alt="KomerceTeam" class="img-komerce-team">

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Komerce Society -->

<!-- Our Teams -->
<div class="container0">
    <div class="title0">
        <div class="arrow0">
            <?php $image = get_template_directory_uri() . "/Images/arrow-up-right.svg" ?>
            <img src=<?= $image ?> alt="Arrow" class="arrow0">
        </div>
        <h1 class="title0-h1">Our Team</h1>
    </div>

    <div class="paragraph0">
        Lorem ipsum dolor sit amet consectetur. Pretium tempus aenean gravida diam non aliquam id ac phasellus. Cras dui velit pretium purus vitae ipsum in. Quisque nisi laoreet imperdiet mi aliquet.
    </div>
</div>

<div class="card-container">
    <?php
    $jabatan_ids = array();
    $jabatan_names = array('Chief of Technology', 'Chief Operating Officer', 'Chief Executive Officer');

    foreach ($jabatan_names as $jabatan_name) {
        $jabatan_id = get_jabatan_id_by_name($jabatan_name);
        if ($jabatan_id) {
            $jabatan_ids[] = $jabatan_id;
        }
    }

    if (!empty($jabatan_ids)) {
        $args = array(
            'meta_query' => array(
                array(
                    'key' => 'jabatan',
                    'value' => $jabatan_ids,
                    'compare' => 'IN',
                ),
            ),
        );

        $users = get_users($args);
        
        if ($users) :
            foreach ($users as $user) :
                ?>
                 <?php
                $avatars = get_avatar_url($user->ID);
                $jabatan_id = get_user_meta($user->ID, 'jabatan', true);
                $jabatan_name = get_jabatan_name_by_id($jabatan_id);
            ?>
                <div class="card">
                    <img class="card-image" src="<?= esc_url($avatars) ?>" alt="User Avatar" />
                    <div class="d-flex mt-3">
                         <div class="name"><?php echo esc_html($user->display_name); ?></div>
                        <div class="name2"><?php echo esc_html($jabatan_name); ?></div>
                    </div>
                   
                    <p class="paragraph-desc mt-3">Being an Innovator at Telkom, makes me an adaptive person and always</p>
        
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Tidak ada user yang ditemukan.</p>
        <?php endif; 
    }
    ?>
</div>
<!-- Our Teams -->



<!-- Blog -->
<div class="blog-container-blog" id="blogPostsContainer">
    <div class="d-flex justify-content-between">
        <?php $image = get_template_directory_uri() . "/Images/arrow-up-right.svg"; ?>
        <img src="<?= $image ?>" alt="Arrow" class="arrow-up-right">

        <div class="button-container">
            <a class="styled-button-blog-left" href="javascript:void(0);" id="arrow-left">
                <?php $image = get_template_directory_uri() . "/Images/arrow-left.svg"; ?>
                <img src="<?= $image ?>" alt="Arrow" class="arrow-icon">
            </a>
            <a class="styled-button-blog-right" href="javascript:void(0);" id="arrow-right">
                <?php $image = get_template_directory_uri() . "/Images/arrow-right.svg"; ?>
                <img src="<?= $image ?>" alt="Arrow" class="arrow-icon">
            </a>
        </div>
    </div>

    <div class="d-flex">
        <h1 class="title-blog">Blog</h1>
    </div>

    <div class="paragraph-blog">
        <p>Lorem ipsum dolor sit amet consectetur. Pretium tempus aenean gravida diam non aliquam id ac phasellus. Cras dui velit pretium purus vitae ipsum in. Quisque nisi laoreet imperdiet mi aliquet.</p>
    </div>

    <!-- Blog Posts Section -->
    <div class="blog-posts" id="blog-posts-container"> <!-- Sesuaikan ID dengan yang ada di JS -->
        <?php

        if ($all_posts->have_posts()) :
            while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
                <div class="blog-post" style="min-width: 300px; margin-right: 20px;"> <!-- Adjust width and spacing as needed -->
                    <a href="<?php the_permalink(); ?>">
                        <span class="link"></span>
                    </a>
                    <?php
                    // Get post thumbnail or fallback image
                    if (has_post_thumbnail()) {
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    } else {
                        $image_url = get_template_directory_uri() . "/Images/kerkom.jpeg";
                    }
                    ?>

                    <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr(get_the_title()); ?>" class="blog-image filter">
                    
                    <div class="post-info">
                        <?php
                        $tags = get_the_tags();
                        if ($tags) {
                            foreach ($tags as $tag) {
                                echo "<span class='post-category me-2 border-tags'>" . $tag->name . "</span>";
                            }
                        }
                        ?>
                    </div>

                    <h2 class="post-title"><?php echo substr(strip_tags(get_the_title()), 0, 35) . "..."; ?></h2>
                    <p class="post-description">
                        <?php echo wp_trim_words(get_the_content(), 12, '...'); ?>
                    </p>
                    <div class="container-info">
                        <span><?php the_author(); ?></span> <!-- Display the author's name -->
                        <span><?php echo get_the_date('d F Y'); ?></span> <!-- Display the post's date -->
                    </div>
                </div>
            <?php endwhile; 
            wp_reset_postdata();
        else : ?>
            <strong>Sorry. No posts found!</strong>
        <?php endif; ?>
    </div>
</div>

<!-- Blog -->


<!-- Photos -->
<div class="background-container2 ">
    <div class="background1">
        <div class="content">
            <div class="text-boxes-photos ">
                        <div class="text-box2 text-white">
                            <h2 class="text-photos">“We have the resources to go as far as we want with ideas. And no idea is too
                                crazy.”</h2>
                            <br></br>
                            <p>Is Nursamsi, Lead Front-End Engineer</p>
                            <br></br>
							<?php $image = get_template_directory_uri() . "/Images/play-circle.svg"; ?>
                            <div class="video-container-circle">
                                <a href="https://www.youtube.com/watch?v=SeHz-w4arGY" target="_blank">
                                    <img src="<?= $image ?>" alt="Play" class="play-circle">
                                </a>
                                <p class="watch-text-circle">Watch the film</p>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- Photos -->


	<?php get_footer(); ?>
