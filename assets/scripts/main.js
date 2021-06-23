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
    
    function updateCounter()
    {
        let curr = +counter.innerText;
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


// Donate to Razorpay
const donateForm = document.querySelector("#donateForm");
donateForm.addEventListener("submit", startCheckout);

function startCheckout(e)
{
    console.dir(this);
    let name = this.elements.name.value;
    let amt = this.elements.amount.value;
    let phone = this.elements.phone.value;
    let email = this.elements.email.value;

    axios.post('http://localhost:8000/assets/partials/_handlePayment.php',{
        amt: amt,
        name: name,
        phone: phone,
        email: email,
    })
    .then(success => {
        console.log(success, "was successfull");
        var options = {
            "key": "rzp_test_d1YgWNuy1yyx2Y",
            "amount": `${amt*100}`,
            "currency": "INR",
            "name": "Yogdaan Foundation",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler": function (response){
                axios.post('http://localhost:8000/assets/partials/_handlePayment.php',{
                    payment_id: response.razorpay_payment_id
                })
                .then(success => {
                    console.log(success, "was successfull");
                    axios.get('index.php');
                })
                .catch(error => console.log("Error: ", error));
            }
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
    })
    .catch(error => console.log("Error: ", error));
    
    e.preventDefault();
    
}