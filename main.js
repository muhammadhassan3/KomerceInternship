

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


// Tampilkan lebih banyak
jQuery(document).ready(function($) {
    var page = 2;
    var maxPages = load_more_params.maxPages;
    var ajaxUrl = load_more_params.ajaxUrl;
    var postsPerPage = 4; // Jumlah postingan yang akan ditampilkan pertama kali

    $('.load-more-button').on('click', function() {
        if (page <= maxPages) {
            $.ajax({
                url: ajaxUrl,
                type: 'POST',
                data: {
                    action: 'load_more_posts',
                    page: page,
                    category: 'society'
                },
                success: function(response) {
                    $('.card-society-container').append(response);
                    page++;
                    // Sembunyikan tombol "Tampilkan Lebih Banyak" jika sudah memuat semua halaman
                    if (page > maxPages) {
                        $('.load-more-button').hide();
                    }
                    $('.load-less-button').show(); // Tampilkan tombol "Tampilkan Lebih Sedikit"
                }
            });
        }
    });

    // Fungsi untuk tombol "Tampilkan Lebih Sedikit"
    $('.load-less-button').on('click', function() {
        // Hanya tampilkan postingan awal
        $('.card-society-container .card-society-event').slice(postsPerPage).remove();
        page = 2; // Reset page counter
        $('.load-more-button').show(); // Tampilkan kembali tombol "Tampilkan Lebih Banyak"
        $('.load-less-button').hide(); // Sembunyikan tombol "Tampilkan Lebih Sedikit"
    });
});
