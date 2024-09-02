<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div class="card-blog-post">
            <div class="media">

                <div class="media-left">
                    <img class="post-thumb img-fluid" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
                </div>
                <div class="media-body">
                <h3 class="title-blog-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="meta mb-1"><span class="blog-date"><?php the_date('d F Y'); ?></span>
                        <span class="author"> oleh <?php the_author(); ?></span>
                    </div>
                    <div class="blog-post-paragraph"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="more-link">Baca selengkapnya &rarr;</a>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
    <div class="card-pagination"> 
        <div class="pagination" > <?php the_posts_pagination(); ?></div>
    </div>
    
<?php else : ?>
    <?php get_template_part('category', 'none'); ?>
<?php endif; ?>


<?php get_footer(); ?>