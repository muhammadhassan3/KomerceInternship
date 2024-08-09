<?php get_header( );?>

<!-- hows life at komerce -->
 <div class="background-container-ring">
<div class="content-wrapper">
    <h1 class="main-heading pt-5 ">How’s Life at Komerce?</h1>
    <p class="sub-heading">Get an inside look into what working at Komerce is like!</p>
</div>

<div class="button-container">
    <a class="styled-button" href="https://komerce.id/">
        <span class="text">Lets Go</span>
        <div class="arrow-icon">→</div>
    </a>
</div>

<div class="background-video ">
    <?php $video = get_template_directory_uri()."/Images/komship-yt.mp4" ?>
    <div class="video-wrapper">
            <video src=<?= $video?> alt="Komerce" class="background-image1" controls width="1200px"></video>
    </div>
    
</div>

<div class="flex-container">
        <div class="d-flex flex-row align-items-center">
            <div class="number">100</div>
            <div class="text ms-2">Management Employee</div>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="number">50K</div>
            <div class="text ms-2">Product User</div>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="number">12K</div>
            <div class="text ms-2">Integrated Product</div>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="number">500K</div>
            <div class="text ms-2">Komtim Talent</div>
        </div>
    </div>
</div>
</div>
<!-- hows life at komerce -->

<!-- Komerce Society -->
 <div class="container d-flex flex-column mt-4">
        <h1 class=" margin1 justify-content-center h1-komerce-society underline-ks">Komerce Society</h1>
        <div class="mb-3"></div>
        <div class="content">
            <div class="text-boxes">
                <div class="text-box">
                    <h2>Who are we?</h2>
                    <p class="paragraph-whoarewe">We strongly believe that finding your purpose can be done by helping others achieve theirs.
                        The impact we made for millions is the reason we come to work every day.</p>
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
            <p class="paragraph-whoarewe mt-3">Being an Innovator at Telkom, makes me an adaptive person and always</p>
            <div class="name">CTO Komerce</div>
        </div>
        <div class="card">
        <?php $image = get_template_directory_uri()."/Images/pic.jpeg" ?>
        <img src=<?= $image?> alt="Team Member 2" class="card-image">
            <p class="paragraph-whoarewe mt-3">Being an Innovator at Telkom, makes me an adaptive person and always</p>
            <div class="name">CTO Komerce</div>
        </div>
        <div class="card">
        <?php $image = get_template_directory_uri()."/Images/pic.jpeg" ?>
            <img src=<?= $image?> alt="Team Member 3" class="card-image">
            <p class="paragraph-whoarewe mt-3">Being an Innovator at Telkom, makes me an adaptive person and always</p>
            <div class="name">CTO Komerce</div>
        </div>
    </div>
    <!-- Our Teams -->

    <!-- Blog -->
<div class="title margin2">
    <h1>Blog</h1>
</div>

<div class="paragraph">
    <p>Lorem ipsum dolor sit amet consectetur. Pretium tempus aenean gravida diam non aliquam id ac phasellus. Cras dui velit pretium purus vitae ipsum in. Quisque nisi laoreet imperdiet mi aliquet</p>
</div>

<div class="blog-container">
    <div class="blog-posts">
        <div class="blog-post">
            <?php $image = get_template_directory_uri()."/Images/kerkom.jpeg" ?>
            <div style="position: relative;"> <!-- Container untuk memposisikan label di atas gambar -->
                <img src=<?= $image?> alt="Blog Post" class="blog-image">
                <div class="label-red">
                    <span class="label-text">Advanced Techniques</span>
                </div>
                <div>
                    <span class="sub-label-text">iOS App Development</span>
                </div>
            </div>
            <h2 class="post-title">IOS Programming Languages : Advanced Techniques for iOS App Development</h2>
            <p class="post-description">The tech industry has witnessed an increasing growth pace of innovation and revolution, affecting every segment of the industry. The tech industry has witnessed an increasing growth pace of innovation and revolution.</p>
            <div class="post-info mt-5">
                <span class="post-date border-date">28 February 2024</span>
                <span class="post-category ms-3 border-date">Tech Sharing</span>
            </div>
        </div>
        
        <div class="blog-post">
            <?php $image = get_template_directory_uri()."/Images/kerkom.jpeg" ?>
            <div style="position: relative;"> <!-- Container untuk memposisikan label di atas gambar -->
                <img src=<?= $image?> alt="Blog Post" class="blog-image">
                <div class="label-red">
                    <span class="label-text">Advanced Techniques</span>
                </div>
                <div>
                    <span class="sub-label-text">iOS App Development</span>
                </div>
            </div>
            <h2 class="post-title">IOS Programming Languages : Advanced Techniques for iOS App Development</h2>
            <p class="post-description">The tech industry has witnessed an increasing growth pace of innovation and revolution, affecting every segment of the industry. The tech industry has witnessed an increasing growth pace of innovation and revolution.</p>
            <div class="post-info mt-5">
                <span class="post-date border-date">28 February 2024</span>
                <span class="post-category ms-3 border-date">Tech Sharing</span>
            </div>
        </div>
        
        <div class="blog-post">
            <?php $image = get_template_directory_uri()."/Images/kerkom.jpeg" ?>
            <div style="position: relative;"> <!-- Container untuk memposisikan label di atas gambar -->
                <img src=<?= $image?> alt="Blog Post" class="blog-image">
                <div class="label-red">
                    <span class="label-text">Advanced Techniques</span>
                </div>
                <div>
                    <span class="sub-label-text">iOS App Development</span>
                </div>
            </div>
            <h2 class="post-title">IOS Programming Languages : Advanced Techniques for iOS App Development</h2>
            <p class="post-description">The tech industry has witnessed an increasing growth pace of innovation and revolution, affecting every segment of the industry. The tech industry has witnessed an increasing growth pace of innovation and revolution.</p>
            <div class="post-info mt-5">
                <span class="post-date border-date">28 February 2024</span>
                <span class="post-category ms-3 border-date">Tech Sharing</span>
            </div>
        </div>
    </div>
</div>
<!-- Blog -->



    <!-- Photos -->
    <div class="background-container2 mt-5">
        <div class="background1">
    <div class="content">
            <div class="text-boxes ms-5">
                <div class="ms-5 mt-5">
                    <div class="mt-5">
                    <div class="text-box2 text-white">
                    <h2>“We have the resources to go as far as we want with ideas. And no idea is too crazy.”</h2>
                            <br></br>
                            <p>Is Nursamsi, Lead Front-End Engineer</p>
                            <br></br>
                            <?php $image = get_template_directory_uri() . "/Images/play-circle.svg"; ?>
                            <div class="video-container-circle">
                                <a href="https://www.youtube.com/watch?v=SeHz-w4arGY" target="_blank">
                                    <img src="<?= $image ?>" alt="Play" class="play-circle">
                                </a>
                                <p class="watch-text-circle">Watch the film</p>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <!-- Photos -->


<?php get_footer( ); ?>
