const burger = document.querySelector(".burger");
const line1 = document.querySelector(".line1")
const line2 = document.querySelector(".line2")
const line3 = document.querySelector(".line3")
const nav = document.querySelector("nav");
const main = document.querySelector("main");
const header = document.querySelector("header");

burger.addEventListener("click", showNav);

function showNav(evt)
{   
    burger.classList.toggle("rotate");
    nav.classList.toggle("nav-active");
    main.classList.toggle("shift-main");

    // Z-index problems mitigated here
    if(nav.className.includes("nav-active"))
    {
        nav.classList.add("nav-top");
    }

    else{
        nav.classList.remove("nav-top");

    }
}


window.addEventListener("scroll", styleNav);

function styleNav()
{
    header.classList.toggle("nav-scroll", this.scrollY > 0);
}

// Animation Counter
const counters = document.querySelectorAll(".num-counter");

counters.forEach(counter => {
    const target = +counter.dataset.target;
    const step = 100;
    const inc = target / step;
    let i = 0;
    
    function updateCounter()
    {
        console.log(++i);
        if(i > 40,00,000) return;
        let curr = +counter.innerText;
        console.log(curr, target);
        if(curr < target)
        {
            counter.innerText = curr + inc;
            setTimeout(updateCounter, 1);
        }
        else 
            counter.innerText = target;
    }

    updateCounter();
});