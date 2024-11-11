
<div class="blog-post-card">
        <div class="blog-post-content">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <div class="meta mb-3">
                <span class="blog-date"><?php the_date('d F Y'); ?></span>
                <span class="author"> oleh <?php the_author(); ?></span>
                <?php
                the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span></span><span class="tag"><i class="fa fa-tag"></i>', '</span></span>');
                ?>
                   <span class="comment-blogs"><a href="#comments"><i class="fa fa-comment"></i> <?php comments_number(); ?></span>
            </div>
            <div class="blog-post-paragraph"><?php the_content(); ?></div>
            <?php
            comments_template();   
            ?>
        </div>
    </div>