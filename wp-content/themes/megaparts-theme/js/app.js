document.addEventListener("DOMContentLoaded", function() {
    // Your GSAP code here
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    let smoother = ScrollSmoother.create({
        wrapper: '#smooth-wrapper',
        content: '#smooth-content',
        smooth: 2 // Adjust smoothness value as needed
    });

    console.log("Hello"); // Ensure that the script is running and see if "Hello" is logged in the console
});