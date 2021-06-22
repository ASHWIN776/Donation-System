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

    var options = {
        "key": "rzp_test_d1YgWNuy1yyx2Y", // Enter the Key ID generated from the Dashboard
        "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "Acme Corp",
        "description": "Test Transaction",
        "image": "https://example.com/your_logo",
        // "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
        // "account_id": "acc_Ef7ArAsdU5t0XL",
        "handler": function (response){
            axios.post('http://localhost:8000/assets/partials/_handlePayment.php',{
                amt: amt,
                name: name,
                phone: phone,
                email: email,
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
    e.preventDefault();
}