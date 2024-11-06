document.addEventListener('DOMContentLoaded', function () {
    if (window.runAnimation) {
        tl= gsap.timeline()

tl.from ("#navbar #compname", {
    scale:0,
    duration:0.5,
})
.from ("#navbar #menubar li", {
    scale:0,
    duration:0.5,
    stagger: 0.2
})
    }
});
