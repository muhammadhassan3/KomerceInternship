<?php wp_footer(  ); ?>
<footer>
    <div class="container d-flex flex-column ">
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

        <div class="max-vw-100 row ">
            <div class="col-sm d-flex flex-column">
                <div class="d-flex flex-row">
                    <img src="https://storage.googleapis.com/komerce/assets/LP-Komcard/location.svg" alt="location"
                         height="24" class="me-2">
                    <p>Head Office Komerce<br>
                        Purbalingga, Jawa Tengah (53355)</p>
                </div>
                <div class="d-flex flex-row">
                    <img src="https://storage.googleapis.com/komerce/assets/LP-Komcard/sms.svg" alt="location"
                         height="24" class="me-2">
                    <p>contact@komerce.id</p>
                </div>
            </div>
            <div class="col-sm row">
                <div class="col d-flex flex-column">
                    <h4>Perusahaan</h4>
                    <ul class="list-unstyled">
                        <li><a href="http://google.com" class="nav-link">atu</a></li>
                        <li>atu</li>
                        <li>atu</li>
                        <li>atu</li>
                    </ul>
                </div>
                <div class="col d-flex flex-column">
                    <h4>Produk</h4>
                    <ul class="list-unstyled">
                        <li>atu</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm d-flex flex-column">
                <p>Head Office Komerce</p>
                <p>contact@komerce.id</p>
            </div>
        </div>
    </div>
    <div class="h-divider"></div>
    <div class="max-vw-100 d-flex flex-row justify-content-between container">
        <p class="">Komerce</p>
        <p class=""> Copyright &copy 2024</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>
</html>