gsap.from('.loader h1', 10, {
    x: 1000
}, 'start')

gsap.from('.loader h2', 10, {
    x: -800 
}, 'start')

// gsap.from('.navbar-collapse ul li', 1.4, {
//     y: -500,
//     stagger: 0.5
// });

gsap.from('#myText', {
    x: 100,      // Initial position on the x-axis (100px to the right)
    opacity: 0,  // Initial opacity (invisible)
    duration: 5, // Animation duration in seconds
    ease: 'power2.out', // Easing function
});

gsap.from('#myWrap', {
    x: -100,     // Initial position on the x-axis (100px to the left)
    opacity: 0,  // Initial opacity (invisible)
    duration: 5, // Animation duration in seconds
    ease: 'power2.out', // Easing function
});






// gsap.from('.myText', {
//     opacity: 0,
//     y: 50,
//     duration: 1.4,
//     ease: 'power3.out',
//     stagger: 0.5,
//     delay: 0.5
// });


// gsap.from('#myImage', {
//     opacity: 0,
//     scale: 0.5,
//     duration: 1.4,
//     ease: 'power3.out',
//     delay: 0.5
// });

// gsap.registerPlugin(ScrollTrigger);

// gsap.to("#myElement", {
//     opacity: 0,
//     y: 100,
//     duration: 1.4,
//     scrollTrigger: {
//         trigger: "#myElement",
//         start: "top 80%", // Animation starts when the element is 80% in view
//         end: "bottom 20%", // Animation ends when the element is 20% in view
//         toggleActions: "play none none reset" // Animation plays once when scrolling into view and resets when scrolling out
//     }
// });
