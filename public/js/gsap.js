
if (!sessionStorage.getItem('animationRan')) {
    gsap.from("#compname", {
        x: -150,
        opacity:0,
        duration: 1
    });
    
    gsap.from("#menubar li", {
        x: 50,
        opacity:0,
        duration: 0.8,
        stagger:0.2
    });
    
    gsap.from(".hotline", {
        x: 150,
        opacity:0,
        duration: 1,
    });
    sessionStorage.setItem('animationRan', 'true');
    }
    
    gsap.from(".benefitsbar .benefit", {
        y: 100,
        duration:1,
        opacity:0,
        stagger:0.3,
        scrollTrigger: {
            trigger:".benefitsbar .benefit"
        }
    })
    gsap.from(".middlecontent .part1", {
        x:100,
        duration:1,
        opacity:0,
        scrollTrigger: {
            trigger:".middlecontent .part1",
            scroller: "body",
            start: "top 60%"
        }
    });
    
    gsap.from(".middlecontent .part2", {
        x:-100,
        duration:1,
        opacity:0,
        scrollTrigger: {
            trigger:".middlecontent .part2",
            scroller: "body",
            start: "top 60%"
        }
    });
    gsap.from(".reviewscontainer", {
        x:100,
        duration:1,
        opacity:0,
        scrollTrigger: {
            trigger:".reviewscontainer",
            scroller: "body",
            start: "top 60%"
        }
    });
    
    gsap.from(".reviewimg", {
        x:-100,
        duration:1,
        opacity:0,
        scrollTrigger: {
            trigger:".reviewimg",
            scroller: "body",
            start: "top 60%"
        }
    });
    