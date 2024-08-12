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
        document.addEventListener('DOMContentLoaded', function() {
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
        document.addEventListener('DOMContentLoaded', function() {
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



        


