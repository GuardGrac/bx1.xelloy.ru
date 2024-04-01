console.clear(); // Start with a clean console on refesh
gsap.defaults({ease: "power2"}); 
gsap.set(".batchbox", {y: 200});
   ScrollTrigger.batch(".batch", {
    interval: 0.1,
    onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
    onLeave: batch => gsap.set(batch, { opacity: 0, y: -600, overwrite: true }),
    onEnterBack: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
    onLeaveBack: batch => gsap.set(batch, { opacity: 0, y: 600, overwrite: true }),
    start: "top 100%",
    end: "bottom 0%"
});

ScrollTrigger.batch(".batchbox", {
    interval: 0.1,
    onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
    onLeave: batch => gsap.to(batch, { opacity: 0, y: -500, overwrite: true }),
    onEnterBack: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
    onLeaveBack: batch => gsap.to(batch, { opacity: 0, y: 500, overwrite: true }),
    start: "top 100%",
    end: "bottom 0%"
});

ScrollTrigger.batch(".footerbox", {
    interval: 0.1,
    onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
    onLeave: batch => gsap.to(batch, { opacity: 0, y: -500, overwrite: true }),
    onEnterBack: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
    onLeaveBack: batch => gsap.to(batch, { opacity: 0, y: 500, overwrite: true }),
    start: "top 100%",
    end: "bottom 0%"
});

gsap.set(".text-anim", {y: 500});
gsap.to(".text-anim",{
        duration: 1,
        opacity:1,
        y: 0,
        stagger: 0.15,
        overwrite: true  
});

const main2 = gsap.timeline({
    scrollTrigger:{
        trigger: "#svg",
        scrub: 1,
        start: "top 100%",
        end: "+=2000"
    }
})
.to(".text-anim2",{
    motionPath:{
    path: ".path-buba",
    align: ".path-buba",
    alignOrigin:[0, 0],
    offsetX: -4400,
 }, duration:80}, 0)
