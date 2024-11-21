<?php get_header(); ?>

<!-- SOCIETY EVENTS -->
<div class="background-society">
    <?php $image = get_template_directory_uri() . "/Images/komerce2.png"; ?>
    <img src="<?= esc_url($image) ?>" alt="KomerceTeam" class="image-society filter-hero">

    <!-- Centered Content Wrapper -->
    <div class="scty-content-wrapper">
        <div class="scty-main-heading">
            <span>Society</span>
            <span class="events-bg">Events</span>
        </div>
        <p class="scty-sub-heading">Ikuti dan jelajahi kegiatan kami!</p>
    </div>
</div>
<!-- SOCIETY EVENTS -->

<!-- Container Kartu -->
<?php
// Query untuk mendapatkan jumlah total postingan dalam kategori Society
$total_posts_query = new WP_Query(array(
    'category_name' => 'society',
    'posts_per_page' => -1, // Ambil semua postingan untuk menghitung jumlah
));
$total_posts_count = $total_posts_query->found_posts;
?>

<div class="background-society-card">
    <div class="card-society-container" data-total-posts="<?php echo esc_attr($total_posts_count); ?>">
        <?php
        // Query untuk mendapatkan postingan kategori Society
        $args = array(
            'category_name' => 'society', // Kategori Society
            'posts_per_page' => 6,       // Jumlah postingan awal ditampilkan
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="card-society-event">
                    <?php if (has_post_thumbnail()) {
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    } else {
                        $image_url = get_template_directory_uri() . "/Images/kerkom.jpeg";
                    } ?>
                    <div class="overlay">
                        <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                        <div class="read-more-button">
                            <a href="<?php the_permalink(); ?>"><span class="link"></span></a>
                            Baca Selengkapnya
                        </div>
                    </div>
                    <div class="card-society-content">
                        <div class="card-society-title">
                            <?php
                            $title = strip_tags(get_the_title());
                            echo strlen($title) > 40 ? substr($title, 0, 35) . "..." : $title;
                            ?>
                        </div>
                        <div class="card-society-footer">
                            <span><?php echo get_the_date('d F Y'); ?></span>
                            <span><?php the_author(); ?></span>
                        </div>
                    </div>
                </div>
        <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <strong>Maaf, tidak ada postingan yang ditemukan!</strong>
        <?php endif; ?>
    </div>
</div>

<!-- Load More Button -->
<div class="btn-society">
    <?php
    // Cek jumlah total postingan dalam kategori Society
    $total_posts = new WP_Query(array(
        'category_name' => 'society',
        'posts_per_page' => -1, // Ambil semua postingan untuk menghitung jumlah
    ));

    if ($total_posts->found_posts > 6) : ?>
        <div class="btn-society">
            <button class="load-more-button-society" data-page="1">Tampilkan lebih banyak</button>
            <button class="load-less-button-society" style="display: none;">Tampilkan lebih sedikit</button>
        </div>
    <?php endif; ?>
    
    
</div>

<?php get_footer(); ?>
