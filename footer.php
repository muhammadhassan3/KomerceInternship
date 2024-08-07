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
                    <p class="text-wrap">Head Office Komerce<br><a>Sawah Tengah Street No. 3 Desa Tunjungmuli Kecamatan Karangmoncol<br>Kabupaten Purbalingga (53355)</a></p>
                </div>
                <div class="d-flex flex-row">
                    <?php $image = get_template_directory_uri()."/Images/whatsapp.svg" ?>
                    <img src=<?= $image?> alt="Phone number"
                         height="24" class="me-2">
                    <p><a>+62 813 6064 6002<a></p>
                </div>
                <div class="d-flex flex-row">
                    <img src="https://storage.googleapis.com/komerce/assets/LP-Komcard/sms.svg" alt="location"
                         height="24" class="me-2">
                    <p><a>contact@komerce.id</a></p>
                </div>
            </div>
            <div class="col-sm row">
                <div class="col d-flex flex-column">
                    <h4>Company</h4>
                    <ul class="list-unstyled">
                        <li><a href="http://google.com" class="nav-link">Event</a></li>
                        <li><a>Affiliate</a></li>
                        <li><a>Blog</a></li>
                        <li><a>Career</a></li>
                        <li><a>Social Impact</a></li>
                    </ul>
                </div>
                <div class="col d-flex flex-column">
                    <h4>Product</h4>
                    <ul class="list-unstyled">
                        <li><a>Komtim</a></li>
                        <li><a>Komship</a></li>
                        <li><a>Kompack</a></li>
                        <li><a>Komplace</a></li>
                        <li><a>Komcards</a></li>
                        <li><a>Product</a></li>
                        <li><a>Komchat</a></li>
                        <li><a>Komclass</a></li>
                        <li><a>Pendamping UMKM</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm d-flex flex-column">
                <p>Find Out Our Latest News</p>
                <div class="d-flex flex-row mb-2">
                    <?php 
                    $instagram = get_template_directory_uri()."/Images/instagram.svg"; 
                    $facebook = get_template_directory_uri()."/Images/facebook.svg"; 
                    $youtube = get_template_directory_uri()."/Images/youtube.svg"; 
                    $linkedin = get_template_directory_uri()."/Images/Linkedln.svg"; 
                    $telegram = get_template_directory_uri()."/Images/Telegram.svg";       
                    ?>
                    <img src=<?= $instagram?> alt="Instagram"
                    height="24" class="me-2">
                    <img src=<?= $facebook?> alt="Facebook"
                    height="24" class="me-2">
                    <img src=<?= $youtube?> alt="Youtube"
                    height="24" class="me-2">
                    <img src=<?= $linkedin?> alt="LinkedIn"
                    height="24" class="me-2">
                    <img src=<?= $telegram?> alt="Telegram"
                    height="24" class="me-2">
                </div>
                
            <p>Collaboration Partners</p>
                <div class="d-flex flex-row mb-2">
                    <?php 
                    $zahir = get_template_directory_uri()."/Images/zahir.png"; 
                    $jne = get_template_directory_uri()."/Images/jne.png"; 
                    $sicepat = get_template_directory_uri()."/Images/sicepat.png"; 
                    $idexpress = get_template_directory_uri()."/Images/idexpress.png"; 
                    $sap = get_template_directory_uri()."/Images/sap.png";       
                    ?>
                    <div class="image-brand-container me-1">
                    <img src=<?= $zahir?> alt="Zahir"class="image-brand">
                        </div>
                    <div class="image-brand-container me-1">
                    <img src=<?= $jne?> alt="Jne"class="image-brand">
                        </div>
                    <div class="image-brand-container me-1">
                    <img src=<?= $sicepat?> alt="Sicepat"class="image-brand">
                        </div>
                    <div class="image-brand-container me-1">
                    <img src=<?= $idexpress?> alt="IDExpress"class="image-brand">
                        </div>
                    <div class="image-brand-container me-1">
                    <img src=<?= $sap?> alt="SAP" class="image-brand">
                        </div>
                </div>
            <p>Registered in</p>
                <div class="d-flex flex-column mb-2">
                    <?php 
                    $kominfo = get_template_directory_uri()."/Images/kominfo.png";  
                    ?>
                    <img src=<?= $kominfo?> alt="Kominfo" class="image-brand">
                    <p><a>PSE Kominfo</a></p>
                </div>
        </div>
            </div>
    </div>
    <div class="h-divider mb-1"></div>
    <div class="max-vw-100 d-flex flex-row justify-content-between container">
        <p class=""><a>Copyright © 2023 Komerce. All Rights Reserved</a></p>
        <div class="d-flex flex-row gap-3">
            <p><a>Term and Conditions</a></p>
            <p><a>Privacy Policy</a></p>>
        </div>
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