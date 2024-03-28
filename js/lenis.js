const lenis = new Lenis({
    lerp: 0.09,
    wheelMultiplier: 0.7
})

lenis.on('scroll', ScrollTrigger.update)

gsap.ticker.add((time)=>{
lenis.raf(time * 1000)
})

gsap.ticker.lagSmoothing(0)