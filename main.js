

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

//JS UNTUK NAVIGASI BLOG
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('blog-posts-container');
    const leftArrow = document.getElementById('arrow-left');
    const rightArrow = document.getElementById('arrow-right');
    
    const scrollAmount = 800;

    leftArrow.addEventListener('click', () => {
        container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    rightArrow.addEventListener('click', () => {
        container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
});



