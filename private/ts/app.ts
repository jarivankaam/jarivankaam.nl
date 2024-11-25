import $ = require("jquery");



document.addEventListener('DOMContentLoaded', () => {
    // Select the header and main content elements
    const header = document.querySelector('header'); // Replace 'header' with your actual header selector
    const mainContent = document.querySelector('body'); // Replace 'main' with your main content container

    if(mainContent) {
        console.log("we have body");
    }
    if(header) {
        console.log('we have head')
    }

    if (header && mainContent) {
        // Function to adjust padding dynamically
        const adjustContentPadding = () => {
            const headerHeight = header.offsetHeight; // Get the height of the header
            mainContent.style.marginTop = `${headerHeight}px`; // Apply the header height as top margin to the main content
        };

        // Initial adjustment
        adjustContentPadding();

        // Adjust on window resize to handle dynamic changes
        window.addEventListener('resize', adjustContentPadding);
    }
    $('.hamburger').on("click", function() {
        $('.nav-wrapper').toggleClass('visible');
        $('.nav-col').toggleClass('no-height-mobile');
    });
    window.onscroll = function() {
        const body = document.body;

        if (window.scrollY > 0) {
            body.classList.add('scrolled');
        } else {
            body.classList.remove('scrolled');
        }
    };
});
