console.clear(); // Start with a clean console on refesh
gsap.defaults({ease: "power3"});
   ScrollTrigger.batch(".batchbox", {
    interval: 0.1,
    markers: true,
    onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
    onLeave: batch => gsap.set(batch, { opacity: 0, y: -300, overwrite: true }),
    onEnterBack: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
    onLeaveBack: batch => gsap.set(batch, { opacity: 0, y: 300, overwrite: true }),
    start: "top 100%",
    end: "bottom 0%"
}); 
