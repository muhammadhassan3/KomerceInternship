<?php get_header( );?>

<!-- hows life at komerce -->
<div class="content-wrapper">
    <h1 class="main-heading">How’s Life at Komerce?</h1>
    <p class="sub-heading">Get an inside look into what working at Komerce is like!</p>
</div>

<div class="button-container">
    <a class="styled-button" href="https://komerce.id/">
        <span class="text">Lets Go</span>
        <div class="arrow-icon">→</div>
    </a>
</div>

<div class="background-container">
    <?php $image = get_template_directory_uri()."/Images/komerce.jpeg" ?>
    <img src=<?= $image?> alt="Komerce" class="background-image1">
</div>

<div class="flex-container">
    <div class="number">100</div>
    <div class="text">Management Employee</div>
    <div class="number">50K</div>
    <div class="text">Product User</div>
    <div class="number">12K</div>
    <div class="text">Integrated Product</div>
    <div class="number">500K</div>
    <div class="text">Komtim Talent</div>
</div>

<!-- hows life at komerce -->

<!-- Komerce Society -->
 <div class="container d-flex flex-column mt-4">
        <h1 class=" margin1 justify-content-center">Komerce Society</h1>
        <div class="mb-3"></div>
        <div class="content">
            <div class="text-boxes">
                <div class="text-box">
                    <h2>Who are we?</h2>
                    <p>We strongly believe that finding your purpose can be done by helping others achieve theirs. The impact we made for millions is the reason we come to work every day.</p>
                </div>
                <div class="text-box">
                    <h2>What we do?</h2>
                </div>
            </div>
            <div class="background-containers ">
                <?php $image = get_template_directory_uri()."/Images/komerce-team.png" ?>
                <img src=<?= $image?> alt="KomerceTeam" class="background-containers ">
            </div>
        </div>
    </div>
    <!-- Komerce Society -->

    <!-- Our Teams -->
    <div class="title  margin2">
        <h1>Our Teams</h1>
    </div>

    <div class="paragraph">
        Lorem ipsum dolor sit amet consectetur. Pretium tempus aenean gravida diam non aliquam id ac phasellus. 
        Cras dui velit pretium purus vitae ipsum in. Quisque nisi laoreet imperdiet mi aliquet.
    </div>

    <div class="card-container mt-5">
        <div class="card ">
        <?php $image = get_template_directory_uri()."/Images/pic.jpeg" ?>
        <img src=<?= $image?> alt="Team Member 1" class="card-image">
            <p class="paragraph">Being an Innovator at Telkom, makes me an adaptive person and always</p>
            <div class="name">CTO Komerce</div>
        </div>
        <div class="card">
        <?php $image = get_template_directory_uri()."/Images/pic.jpeg" ?>
        <img src=<?= $image?> alt="Team Member 2" class="card-image">
            <p class="paragraph">Being an Innovator at Telkom, makes me an adaptive person and always</p>
            <div class="name">CTO Komerce</div>
        </div>
        <div class="card">
        <?php $image = get_template_directory_uri()."/Images/pic.jpeg" ?>
            <img src=<?= $image?> alt="Team Member 3" class="card-image">
            <p class="paragraph">Being an Innovator at Telkom, makes me an adaptive person and always</p>
            <div class="name">CTO Komerce</div>
        </div>
    </div>
    <!-- Our Teams -->

    <!-- Blog -->
    <div class="title margin2">
        <h1>Blog</h1>
    </div>

    <div class="paragraph">
    <p > Lorem ipsum dolor sit amet consectetur. Pretium tempus aenean gravida diam non aliquam id 
    ac phasellus. Cras dui velit pretium purus vitae ipsum in. Quisque nisi laoreet imperdiet mi aliquet  </p>
    </div>
    
    <!-- Blog -->

    <!-- Blog -->


    <!-- Photos -->
    <div class="background-container2">
        <div class="background1">
    <div class="content">
            <div class="text-boxes ms-5">
                <div class="ms-5 mt-5">
                    <div class="mt-5">
                <div class="text-box2 text-white">
                    <h2>“We have the resources to go as far as we want with ideas. And no idea is too crazy.”</h2>
                    <br>
                    <p>Is Nursamsi, Lead Front-End Engineer</p>
                </div>
            </div>
</div>
            </div>
            </div>
        </div>
    <!-- Photos -->
</div>

<?php get_footer( ); ?>
