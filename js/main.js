import { animate, stagger } from 'animejs';

document.addEventListener('DOMContentLoaded', () => {
  const h2s = document.querySelectorAll('h2');

  animate(h2s, {
    color: ['#5a2cff', '#b58fff'],  // animate between purple and lighter purple
    duration: 1200,                  // 1.2 seconds per cycle
    easing: 'easeInOutSine',         // smooth easing
    direction: 'alternate',          // go back and forth
    loop: true,                       // repeat forever
    delay: stagger(100)               // stagger multiple h2s slightly
  });


  const h1s = document.querySelectorAll('h1');

  // Neon glow effect using text-shadow + color

  // Neon glow + gentle shake
  animate(h1s, {
    color: ['#ede9fcff', '#b58fff'],             // purple glow
    textShadow: [
      '0 0 2px #5a2cff, 0 0 5px #5a2cff, 0 0 10px #b58fff',
      '0 0 5px #b58fff, 0 0 15px #b58fff, 0 0 20px #5a2cff'
    ],
    translateY: stagger(-7.5),

    duration: 1500,
    easing: 'easeInOutSine',
    direction: 'alternate',                     // for neon glow
    loop: true,
    delay: stagger(200)                         // stagger h1s
  });


  const sections = document.querySelectorAll('.fade-in-section');

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animate(entry.target, {
            opacity: [0, 1],
            translateY: [20, 0], // optional subtle lift
            duration: 800,
            easing: 'outExpo'
          });

          observer.unobserve(entry.target); // animate once
        }
      });
    },
    {
      threshold: 0.2 // 20% visible before triggering
    }
  );

  sections.forEach(section => observer.observe(section));



});
