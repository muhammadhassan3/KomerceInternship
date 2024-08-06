<?php wp_footer(  ); ?>
<footer>
    <div class="container-fluid d-flex flex-column ">
        <ul>
            <?php
            if(function_exists('the_custom_logo'))
            {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src( $custom_logo_id );

            }
            ?>
            <img src="<?php echo $logo[0] ?>" alt="Logo"  height="40" class="mb-3 mx-auto logo">
        </ul>

        <div class="row align-items-start">
            <div class="col mt-4 pt-4">
                Head Office Komerce
                Purbalingga, Jawa Tengah (53355)
            </div>
            <div class="col">
                About US
            </div>
            <div class="col">
                Komchat
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col">
                Contact @komerce.id
            </div>
            <div class="col">
                Komform
            </div>
            <div class="col">
                KomAI
            </div>
        </div>
    </div>

    <div>

    </div>
    -
    <div>-</div>

    </div>

</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>