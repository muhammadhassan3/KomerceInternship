<?php get_header(); ?>

<!-- hows life at komerce -->
<div class="background-container-ring">
    <div class="content-wrapper">
        <h1 class="main-heading ">How’s Life at Komerce?</h1>
        <p class="sub-heading">Get an inside look into what working at Komerce is like!</p>
    </div>

    <div class="button-container">
        <a class="styled-button" href="https://komerce.id/blog/">
            <span class="text">Lets Go</span>
			<?php $image = get_template_directory_uri() . "/Images/arrow-right.png" ?>
            <img src=<?= $image ?> alt="KomerceTeam" class="arrow-icon ">
        </a>
    </div>

    <div class="position-relative">
        <div class="position-relative">
            <div class="background-video ">
				<?php $video = get_template_directory_uri() . "/Images/komship-yt.mp4" ?>
                    <video id="background-video" src=<?= $video ?> alt="Komerce" class="background-image1"
                           width="1200px"></video>
            </div>
            <div class="play-indicator">
				<?php $play = get_template_directory_uri() . "/Images/play-circle.png" ?>
                <img id="play-icon" src="<?= $play ?>" alt="Play icon" class="play-icon">
				<?php $pause = get_template_directory_uri() . "/Images/pause-circle.png" ?>
                <img id="pause-icon" src="<?= $pause ?>" alt="Pause icon" class="pause-icon" style="display: none;">
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
                    <!-- Repeat the content for smooth looping -->
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
</div>

<!-- hows life at komerce -->


<!-- Komerce Society -->
<div class=" d-flex flex-column">
    <h1 class="margin2 justify-content-center h1-komerce-society underline-ks">Komerce Society</h1>
    <div class="mb-3"></div>
    <div class="bg-content">
        <div class="text-boxes">
            <div class="text-box">
                <h2 class="h2-font">Who are we? <?php $image = get_template_directory_uri() . "/Images/arrow-right.svg" ?>
                    <img src=<?= $image ?> alt="Team Member 1" class=" bg-arrow"></h2>

                <p class="paragraph-whoarewe">We strongly believe that finding your purpose can be done by helping
                    others achieve theirs.
                    The impact we made for millions is the reason we come to work every day.</p>
            </div>
            <div class="text-box">
                <h2 class="h2-font">What we do? <?php $image = get_template_directory_uri() . "/Images/arrow-right.svg"  ?>
                    <img src=<?= $image ?> alt="Team Member 1" class=" bg-arrow"></h2>
            </div>
        </div>
        <div class="background-containers ">
			<?php $image = get_template_directory_uri() . "/Images/komerce-team.png" ?>
            <img src=<?= $image ?> alt="KomerceTeam" class="background-containers ">
        </div>
    </div>
</div>
<!-- Komerce Society -->

<!-- Our Teams -->
<div class="title margin2">
    <h1>Our Teams</h1>
</div>

<div class="paragraph">
    Lorem ipsum dolor sit amet consectetur. Pretium tempus aenean gravida diam non aliquam id ac phasellus.
    Cras dui velit pretium purus vitae ipsum in. Quisque nisi laoreet imperdiet mi aliquet.
</div>

<div class="card-container">
    <div class="card">
        <?php $image = get_template_directory_uri() . "/Images/Poto.png" ?>
        <img src=<?= $image ?> alt="Team Member 1" class="card-image">
        <p class="paragraph-desc mt-3">Being an Innovator at Telkom, makes me an adaptive person and always</p>
        <div class="name">- Is Nur - Lead Front End</div>
    </div>
    <div class="card">
        <?php $image = get_template_directory_uri() . "/Images/Poto.png" ?>
        <img src=<?= $image ?> alt="Team Member 2" class="card-image">
        <p class="paragraph-desc mt-3">Being an Innovator at Telkom, makes me an adaptive person and always</p>
        <div class="name">- Satrio - CTO Komerce</div>
    </div>
    <div class="card">
        <?php $image = get_template_directory_uri() . "/Images/Poto.png" ?>
        <img src=<?= $image ?> alt="Team Member 3" class="card-image">
        <p class="paragraph-desc mt-3">Being an Innovator at Telkom, makes me an adaptive person and always</p>
        <div class="name">- Ragil - Lead Backend</div>
    </div>
</div>
<!-- Our Teams -->


<!-- Blog -->
<div class="title margin2">
    <h1>Blog</h1>
</div>

<div class="paragraph">
    <p>Lorem ipsum dolor sit amet consectetur. Pretium tempus aenean gravida diam non aliquam id ac phasellus. Cras
        dui velit pretium purus vitae ipsum in. Quisque nisi laoreet imperdiet mi aliquet</p>
</div>

<div class="blog-container">
    <div class="blog-posts ">
		<?php if ( ! empty( $custom_posts ) ) : ?>
			<?php foreach ( $custom_posts as $post ) : setup_postdata( $post ); ?>
                <div class="blog-post">
					<?php
					if ( has_post_thumbnail( $post->ID ) ) {
						$image_url = get_the_post_thumbnail_url( $post->ID, 'full' );
					} else {
						$image_url = get_template_directory_uri() . "/Images/kerkom.jpeg";
					}
					?>
                    <img src="<?= esc_url( $image_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>"
                         class="blog-image filter">
                    <div class="label-red">
                        <span class="label-text"><?php echo substr( strip_tags( get_the_title() ), 0, 28 ) . "..." ?></span>
                    </div>
                    <div>
                        <span class="sub-label-text"><?php echo substr( strip_tags( get_the_content() ), 0, 15 ) . "..." ?></span>
                    </div>

                    <h2 class="post-title mt-3"><?php echo substr( strip_tags( get_the_title() ), 0, 20 ) . "..." ?></h2>
                    <p class="post-description">
						<?php echo wp_trim_words( get_the_content(), 12, '...' ); ?>
                    </p>
                    <div class="post-info mt-5">
                        <span class="post-date border-date"><?php echo get_the_date( 'd F Y', $post->ID ); ?></span>
						<?php
						foreach ( get_the_category( $post->ID ) as $category ) {
							echo "<span class='post-category ms-3 border-date'>" . $category->name . "</span>";
						}
						?>
                    </div>
                </div>
			<?php endforeach;
			wp_reset_postdata(); ?>
		<?php else : ?>
            <strong>Sorry. No posts matching your criteria!</strong>
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
