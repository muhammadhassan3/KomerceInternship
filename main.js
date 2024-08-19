// JavaScript code to add the 'visible' class when elements are in viewport
// document.addEventListener('DOMContentLoaded', function() {
//     const elements = document.querySelectorAll('.fade-in');

//     function checkVisibility() {
//         elements.forEach(el => {
//             const rect = el.getBoundingClientRect();
//             if (rect.top < window.innerHeight && rect.bottom > 0) {
//                 el.classList.add('visible');
//             }
//         });
//     }

//     window.addEventListener('scroll', checkVisibility);
//     checkVisibility(); // Initial check
// });
// JavaScript code to add 'enlarged' class on hover for h2 elements
document.addEventListener('DOMContentLoaded', function () {
    const headings = document.querySelectorAll('h2');

    headings.forEach(heading => {
        heading.addEventListener('mouseover', () => {
            heading.classList.add('enlarged');
        });

        heading.addEventListener('mouseout', () => {
            heading.classList.remove('enlarged');
        });
    });
});
// JavaScript code to add 'hover' class on hover for the h1 element
document.addEventListener('DOMContentLoaded', function () {
    const heading = document.querySelector('h1');

    heading.addEventListener('mouseover', () => {
        heading.classList.add('hover');
    });

    heading.addEventListener('mouseout', () => {
        heading.classList.remove('hover');
    });
});

// script fade menu
// script.js
document.addEventListener('DOMContentLoaded', () => {
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(item => {
        item.addEventListener('mouseover', () => {
            item.classList.add('fade');
        });

        item.addEventListener('mouseout', () => {
            item.classList.remove('fade');
        });
    });
});


//script underline menu

//script untuk mempay video

document.addEventListener("DOMContentLoaded", function () {
    var pauseIcon = document.getElementById("pause-icon");
    var playIcon = document.getElementById("play-icon");
    var video = document.getElementById("background-video");

    playIcon.addEventListener("click", function () {
        video.play();
        playIcon.style.display = "none";
        pauseIcon.style.display = "block";
    });

    pauseIcon.addEventListener("click", function () {
        video.pause();
        playIcon.style.display = "block";
        pauseIcon.style.display = "none";
    });

    video.addEventListener("pause", function () {
        playIcon.style.display = "block";
        pauseIcon.style.display = "none";
    });

    video.addEventListener("play", function () {
        playIcon.style.display = "none";
        pauseIcon.style.display = "block";
    });

    // Tampilkan pause-icon saat kursor diarahkan ke video
    video.addEventListener("mouseover", function () {
        if (!video.paused) {
            pauseIcon.style.display = "block";
        }
    });

    // Sembunyikan pause-icon saat kursor keluar dari video
    video.addEventListener("mouseout", function () {
        if (!video.paused && !pauseIcon.contains(event.relatedTarget) && !video.contains(event.relatedTarget)) {
            pauseIcon.style.display = "none";
        }
    });
});

// Crud wordpress divisi dan jabatan

jQuery(document).ready(function ($) {
    $('.delete-divisi-link').on('click', function (e) {
        e.preventDefault();
        if (!confirm('Are you sure you want to delete this divisi?')) {
            return;
        }

        var id = $(this).data('id');
        $.post(divisiData.ajaxurl, {
            action: 'delete_divisi',
            nonce: divisiData.delete_nonce,
            id: id
        }, function (response) {
            if (response.success) {
                location.reload();
            } else {
                alert(response.data);
            }
        });
    });

    $('.delete-jabatan-link').on('click', function (e) {
        e.preventDefault();
        if (!confirm('Are you sure you want to delete this jabatan?')) {
            return;
        }

        var id = $(this).data('id');
        $.post(jabatanData.ajaxurl, {
            action: 'delete_jabatan',
            nonce: jabatanData.delete_nonce,
            id: id
        }, function (response) {
            if (response.success) {
                location.reload();
            } else {
                alert(response.data);
            }
        });
    });
});


        


