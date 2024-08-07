<?php wp_footer(  ); ?>
<footer>
    <div class="container d-flex flex-column mt-5 ">
        <ul>
            <?php
            if(function_exists('the_custom_logo'))
            {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src( $custom_logo_id );

            }
            ?>
            <img src="<?php echo $logo[0] ?>" alt="Logo"  height="40" class="mb-3 logo">
        </ul>

        <div class="max-vw-100 row ">
            <div class="col-sm d-flex flex-column">
                <div class="d-flex flex-row">
                    <img src="https://storage.googleapis.com/komerce/assets/LP-Komcard/location.svg" alt="location"
                         height="24" class="me-2">
                    <p class="text-wrap">aHead Office Komerce<br>Sawah Tengah Street No. 3 Desa Tunjungmuli Kecamatan Karangmoncol<br>Kabupaten Purbalingga (53355)</p>
                </div>
                <div class="d-flex flex-row">
                    <?php $image = get_template_directory_uri()."/Images/whatsapp.svg" ?>
                    <img src=<?= $image?> alt="Phone number"
                         height="24" class="me-2">
                    <p>+62 813 6064 6002</p>
                </div>
                <div class="d-flex flex-row">
                    <img src="https://storage.googleapis.com/komerce/assets/LP-Komcard/sms.svg" alt="location"
                         height="24" class="me-2">
                    <p>contact@komerce.id</p>
                </div>
            </div>
            <div class="col-sm row">
                <div class="col d-flex flex-column">
                    <h4>Company</h4>
                    <ul class="list-unstyled">
                        <li><a href="http://google.com" class="nav-link">Event</a></li>
                        <li>Affiliate</li>
                        <li>Blog</li>
                        <li>Career</li>
                        <li>Social Impact</li>
                    </ul>
                </div>
                <div class="col d-flex flex-column">
                    <h4>Product</h4>
                    <ul class="list-unstyled">
                        <li>Komtim</li>
                        <li>Komship</li>
                        <li>Kompack</li>
                        <li>Komplace</li>
                        <li>Komcards</li>
                        <li>Product</li>
                        <li>Komchat</li>
                        <li>Komclass</li>
                        <li>Pendamping UMKM</li>
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