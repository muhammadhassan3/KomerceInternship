<?php wp_footer(); ?>
<footer>
    <div class="background-footer">
        <div class="container d-flex flex-column ">
            <div class="mt-5">
				<?php
				if ( function_exists( 'the_custom_logo' ) ) {
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo           = wp_get_attachment_image_src( $custom_logo_id );

				}
				?>
                <img src="<?php echo $logo[0] ?>" alt="Logo" height="40" class="mb-3 logo">
            </div>

            <!-- footer lama  -->
            

            <div class="footer-container">
                <div class="footer-column address">
                    <div class="d-flex flex-row">
                        <img src="https://storage.googleapis.com/komerce/assets/LP-Komcard/location.svg" alt="location"
                             height="24" class="me-2">
                        <p class="text-wrap">Head Office Komerce<br><a>Sawah Tengah Street No. 3 Desa Tunjungmuli
                                Kecamatan Karangmoncol<br>Kabupaten Purbalingga (53355)</a></p>
                    </div>
                    <div class="d-flex flex-row">
						<?php $image = get_template_directory_uri() . "/Images/whatsapp.svg" ?>
                        <img src=<?= $image ?> alt="Phone number"
                        height="24" class="me-2">
                        <p><a>+62 813 6064 6002<a></p>
                    </div>
                    <div class="d-flex flex-row">
                        <img src="https://storage.googleapis.com/komerce/assets/LP-Komcard/sms.svg" alt="location"
                             height="24" class="me-2">
                        <p><a>contact@komerce.id</a></p>
                    </div>
                </div>
                
                    <div class="footer-column company ">
                        <h4>Company</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://komclass.id/" class="nav-link">Event</a></li>
                            <li><a href="https://affiliate.komerce.id/" class="nav-link">Affiliate</a></li>
                            <li><a href="https://komerce.id/blog" class="nav-link">Blog</a></li>
                            <li><a href="https://www.linkedin.com/company/komerceid/jobs/" class="nav-link">Career</a>
                            </li>
                            <li><a href="https://komerce.id/impact" class="nav-link">Social Impact</a></li>
                        </ul>
                    </div>
                    <div class="footer-column product">
                        <h4>Product</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.komtim.id/" class="nav-link">Komtim</a></li>
                            <li><a href="https://www.komship.id/" class="nav-link">Komship</a></li>
                            <li><a href="https://www.kompack.id/" class="nav-link">Kompack</a></li>
                            <li><a href="https://www.komplace.id/" class="nav-link">Komplace</a></li>
                            <li><a href="https://www.komcards.id/" class="nav-link">Komcards</a></li>
                            <li><a href="https://www.komform.id/" class="nav-link">Komform</a></li>
                            <li><a href="https://www.komchat.id/" class="nav-link">Komchat</a></li>
                            <li><a href="https://www.komclass.id/" class="nav-link">Komclass</a></li>
                            <li><a href="https://www.pendampingumkm.id/" class="nav-link">Pendamping UMKM</a></li>
                        </ul>
                    </div>
               
                <div class="col-sm d-flex flex-column ">
                    <p>Find Out Our Latest News</p>
                    <div class="d-flex flex-row mb-2">
						<?php
						$instagram = get_template_directory_uri() . "/Images/instagram.svg";
						$facebook  = get_template_directory_uri() . "/Images/facebook.svg";
						$youtube   = get_template_directory_uri() . "/Images/youtube.svg";
						$linkedin  = get_template_directory_uri() . "/Images/Linkedln.svg";
						$telegram  = get_template_directory_uri() . "/Images/Telegram.svg";
						?>
                        <a href="https://www.instagram.com/komerceid/">
                            <img src=<?= $instagram ?> alt="Instagram"
                                 height="24" class="me-2"></a>
                        <img src=<?= $facebook ?> alt="Facebook"
                             height="24" class="me-2">
                        <img src=<?= $youtube ?> alt="Youtube"
                             height="24" class="me-2">
                        <img src=<?= $linkedin ?> alt="LinkedIn"
                             height="24" class="me-2">
                        <img src=<?= $telegram ?> alt="Telegram"
                             height="24" class="me-2">
                    </div>

                    <p>Collaboration Partners</p>
                    <div class="d-flex flex-row mb-2">
						<?php
						$zahir     = get_template_directory_uri() . "/Images/zahir.png";
						$jne       = get_template_directory_uri() . "/Images/jne.png";
						$sicepat   = get_template_directory_uri() . "/Images/sicepat.png";
						$idexpress = get_template_directory_uri() . "/Images/idexpress.png";
						$sap       = get_template_directory_uri() . "/Images/sap.png";
						?>
                        <div class="image-brand-container me-1">
                            <img src=<?= $zahir ?> alt="Zahir"class="image-brand">
                        </div>
                        <div class="image-brand-container me-1">
                            <img src=<?= $jne ?> alt="Jne"class="image-brand">
                        </div>
                        <div class="image-brand-container me-1">
                            <img src=<?= $sicepat ?> alt="Sicepat"class="image-brand">
                        </div>
                        <div class="image-brand-container me-1">
                            <img src=<?= $idexpress ?> alt="IDExpress"class="image-brand">
                        </div>
                        <div class="image-brand-container me-1">
                            <img src=<?= $sap ?> alt="SAP" class="image-brand">
                        </div>
                    </div>
                    <p>Registered in</p>
                    <div class="d-flex flex-column mb-2">
						<?php
						$kominfo = get_template_directory_uri() . "/Images/kominfo.png";
						?>
                        <img src=<?= $kominfo ?> alt="Kominfo" class="image-brand-container">
                        <p><a>PSE Kominfo</a></p>
                    </div>
                </div>
            </div>
            <!-- footer lama  -->
            <!-- <div class="footer-container">
            <div class="footer-column address">
                <img src="location.svg" alt="location" height="24">
                <p>Head Office Komerce<br>Sawah Tengah Street No. 3 Desa Tunjungmuli<br>Kecamatan Karangmoncol<br>Kabupaten Purbalingga (53355)</p>
                <img src="whatsapp.svg" alt="Phone number" height="24">
                <p>+62 813 6064 6002</p>
                <img src="sms.svg" alt="email" height="24">
                <p>contact@komerce.id</p>
            </div>
            <div class="footer-column company">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">Event</a></li>
                    <li><a href="#">Affiliate</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Social Impact</a></li>
                </ul>
            </div>
            <div class="footer-column product">
                <h4>Product</h4>
                <ul>
                    <li><a href="#">Komtim</a></li>
                    <li><a href="#">Komship</a></li>
                    <li><a href="#">Kompack</a></li>
                    <li><a href="#">Komplace</a></li>
                    <li><a href="#">Komcards</a></li>
                    <li><a href="#">Komform</a></li>
                    <li><a href="#">Komchat</a></li>
                    <li><a href="#">Komclass</a></li>
                    <li><a href="#">Pendamping UMKM</a></li>
                </ul>
            </div>
            <div class="footer-column news">
                <p>Find Out Our Latest News</p>
                <div class="social-icons">
                    <img src="instagram.svg" alt="Instagram" height="24">
                    <img src="facebook.svg" alt="Facebook" height="24">
                    <img src="youtube.svg" alt="YouTube" height="24">
                    <img src="linkedin.svg" alt="LinkedIn" height="24">
                    <img src="telegram.svg" alt="Telegram" height="24">
                </div>
                <p>Collaboration Partners</p>
                <div class="partners">
                    <img src="zahir.png" alt="Zahir">
                    <img src="jne.png" alt="JNE">
                    <img src="sicepat.png" alt="Sicepat">
                    <img src="idexpress.png" alt="IDExpress">
                    <img src="sap.png" alt="SAP">
                </div>
                <p>Registered in</p>
                <div class="registration">
                    <img src="kominfo.png" alt="Kominfo">
                    <p><a href="#">PSE Kominfo</a></p>
                </div>
            </div>
        </div> -->

        </div>
        <div class="h-divider mb-1"></div>
        <div class="max-vw-100 d-flex flex-row justify-content-between container">
            <p class=""><a>Copyright © 2023 Komerce. All Rights Reserved</a></p>
            <div class="d-flex flex-row gap-3">
                <p><a>Term and Conditions</a></p>
                <p><a>Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p1sgVgz6+YEmj+dQpBTfms5J/eOL66xjNDuGm5xEfyJpFjRXzYjzx8cKzIJe9pVo"
        crossorigin="anonymous"></script>
</body>
</html>