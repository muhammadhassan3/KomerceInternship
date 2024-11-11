<?php get_header(); ?>
<article class="content px-3 py-5 p-md-5">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        
        <?php if (in_category('society')) : ?>
            <!-- Menampilkan template khusus untuk kategori 'society' -->
            <?php get_template_part('template-parts/content', 'society'); ?>
            <?php elseif (in_category('blog')) : ?>
            <!-- Menampilkan template khusus untuk kategori 'society' -->
            <?php get_template_part('template-parts/content', 'article'); ?>
        
     
        
        <?php endif; ?>
    
    <?php endwhile; ?>
<?php endif; ?>
</article>

<?php get_footer(); ?>