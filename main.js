

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
// document.addEventListener('DOMContentLoaded', () => {
//     const menuItems = document.querySelectorAll('.menu-item');

//     menuItems.forEach(item => {
//         item.addEventListener('mouseover', () => {
//             item.classList.add('fade');
//         });

//         item.addEventListener('mouseout', () => {
//             item.classList.remove('fade');
//         });
//     });
// });

//JS UNTUK NAVIGASI BLOG
// document.addEventListener('DOMContentLoaded', function () {
//     const container = document.getElementById('blog-posts-container');
//     const leftArrow = document.getElementById('arrow-left');
//     const rightArrow = document.getElementById('arrow-right');
    
//     const scrollAmount = 800;

//     leftArrow.addEventListener('click', () => {
//         container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
//     });

//     rightArrow.addEventListener('click', () => {
//         container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
//     });
// });

//JS UNTUK NAVIGASI BLOG
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('blog-posts-container');
    const leftArrow = document.getElementById('arrow-left');
    const rightArrow = document.getElementById('arrow-right');
    const leftButton = document.querySelector('.styled-button-blog-left');
    const rightButton = document.querySelector('.styled-button-blog-right');

    // Fungsi untuk mendapatkan scroll amount dinamis berdasarkan lebar post
    function getScrollAmount() {
        const post = document.querySelector('.blog-post');
        const postStyle = window.getComputedStyle(post);
        const gap = parseInt(postStyle.getPropertyValue('gap')) || 30; // Ambil gap antar elemen
        return post.offsetWidth + gap; // Total scroll amount
    }

    // Fungsi untuk menggeser kontainer ke kiri
    leftArrow.addEventListener('click', () => {
        container.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
        setTimeout(checkScrollPosition, 300);
    });

    // Fungsi untuk menggeser kontainer ke kanan
    rightArrow.addEventListener('click', () => {
        container.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
        setTimeout(checkScrollPosition, 300);
    });

    // Fungsi untuk mengaktifkan/menonaktifkan tombol
    rightButton.addEventListener('click', () => {
        leftButton.classList.add('active');
    });

    leftButton.addEventListener('click', () => {
        leftButton.classList.remove('active');
    });

    // Fungsi untuk mengecek posisi scroll dan mengatur status tombol
    function checkScrollPosition() {
        if (container.scrollLeft <= 0) {
            leftButton.classList.add('disabled');
        } else {
            leftButton.classList.remove('disabled');
        }

        if (container.scrollLeft + container.offsetWidth >= container.scrollWidth) {
            rightButton.classList.add('disabled');
        } else {
            rightButton.classList.remove('disabled');
        }
    }

    // Listener untuk memperbarui scroll amount saat ukuran layar berubah
    window.addEventListener('resize', checkScrollPosition);

    // Panggil pertama kali untuk set kondisi awal
    checkScrollPosition();
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

//chained combobox
jQuery(document).ready(function($) {
    $('#divisi').change(function() {
        var divisiID = $(this).val();
        var nonce = filterData.filter_nonce;

        $.ajax({
            url: filterData.ajaxurl,
            type: 'POST',
            data: {
                action: 'filter_jabatan_by_divisi',
                divisi_id: divisiID,
                nonce: nonce
            },
            success: function(response) {
                $('#jabatan').html(response);
            }
        });
    });
});


// Tampilkan lebih banyak society
jQuery(document).ready(function ($) {
    let page = 2; // Start from page 2 since the first page is already loaded
    const postsPerPage = 6; // Number of posts per page
    const totalPosts = parseInt($('.card-society-container').data('total-posts')); // Total posts from PHP

    // Load More button event
    $('.load-more-button-society').on('click', function () {
        const button = $(this);
        button.text('Loading...'); // Indicate loading

        $.ajax({
            url: society_ajax.ajax_url, // URL from localized script
            type: 'POST',
            data: {
                action: 'load_more_society',
                paged: page,
            },
            success: function (response) {
                if (response.trim() === '') {
                    button.text('No more posts').hide(); // Hide button if no more posts
                } else {
                    $('.card-society-container').append(response);
                    button.text('Tampilkan lebih banyak');
                    page++;

                    // Calculate total loaded posts
                    const totalLoadedPosts = (page - 1) * postsPerPage;

                    // Hide Load More button if all posts are loaded
                    if (totalLoadedPosts >= totalPosts) {
                        button.hide();
                    }

                    // Show Load Less button
                    $('.load-less-button-society').show();
                }
            },
            error: function () {
                button.text('Try again').prop('disabled', false);
            },
        });
    });

    // Load Less button event
    $('.load-less-button-society').on('click', function () {
        location.reload(); // Refresh to reset the post list
    });
});






//menampilkan user ourteams
document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk mengatur visibilitas tombol dan elemen
    function updateButtons(divisi) {
        const hiddenCards = document.querySelectorAll(`.users-grid[data-divisi="${divisi}"] .card-ourteams.hidden`);
        const totalCards = document.querySelectorAll(`.users-grid[data-divisi="${divisi}"] .card-ourteams`).length;

        const loadMoreButton = document.querySelector(`.load-more-button[data-divisi="${divisi}"]`);
        const loadLessButton = document.querySelector(`.load-less-button[data-divisi="${divisi}"]`);

         if (hiddenCards.length === 0) {
            loadMoreButton.style.display = "none";
            loadLessButton.style.display = "inline-block";
        } else if (hiddenCards.length > 1 && hiddenCards.length < 4) {
            loadMoreButton.style.display = "inline-block";
            loadLessButton.style.display = "inline-block"; // Sembunyikan tombol Load Less jika tersisa 1-4 kartu tersembunyi
        } else if (hiddenCards.length === totalCards) {
            loadLessButton.style.display = "none";
            loadMoreButton.style.display = "inline-block";
        } else {
            loadMoreButton.style.display = "inline-block";
            loadLessButton.style.display = "none";
        }
    }

    // Event listener untuk tombol "Load More"
    document.querySelectorAll(".load-more-button").forEach(button => {
        button.addEventListener("click", function () {
            const divisi = button.getAttribute("data-divisi");
            const hiddenCards = document.querySelectorAll(`.users-grid[data-divisi="${divisi}"] .card-ourteams.hidden`);

            hiddenCards.forEach((card, index) => {
                if (index < 4) {
                    card.classList.remove("hidden"); // Tampilkan hingga 4 kartu
                }
            });

            // Update visibilitas tombol
            updateButtons(divisi);
        });
    });

    // Event listener untuk tombol "Load Less"
    document.querySelectorAll(".load-less-button").forEach(button => {
        button.addEventListener("click", function () {
            const divisi = button.getAttribute("data-divisi");
            const userCards = document.querySelectorAll(`.users-grid[data-divisi="${divisi}"] .card-ourteams`);

            userCards.forEach((card, index) => {
                if (index >= 4) {
                    card.classList.add("hidden"); // Sembunyikan semua kecuali 4 kartu pertama
                }
            });

            // Update visibilitas tombol
            updateButtons(divisi);
        });
    });

    // Atur tombol awal berdasarkan keadaan awal elemen
    document.querySelectorAll(".users-grid").forEach(grid => {
        const divisi = grid.getAttribute("data-divisi");
        updateButtons(divisi);
    });
});

