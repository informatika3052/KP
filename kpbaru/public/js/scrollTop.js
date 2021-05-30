let mybutton = document.querySelector(".myBtn");
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";


    } else {
        mybutton.style.display = "none";
    }

}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    console.log('ok');
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// EVENT SCROLL MART

const childMart = document.querySelector('.child');

// console.log(subMart);
function effectScroll() {

    let introPort = childMart.getBoundingClientRect().top;
    // console.log(introPort);
    let screenPosition = window.innerHeight / 1.5;
    // console.log(screenPosition);

    if (introPort < screenPosition) {
        childMart.classList.add('up');
    }

}
window.addEventListener('scroll', effectScroll);


const subMenuMart = document.querySelector('.sub-menu-mart-1 img');
const subMenuMart2 = document.querySelector('.sub-menu-mart-2 img');
const subMenuMart3 = document.querySelector('.sub-menu-mart-3 img');
window.addEventListener('scroll', function () {
    let value = window.scrollY;
    console.log(value);
    subMenuMart.style.left = value * 0.04 + 'px';
    subMenuMart3.style.left = -value * 0.04 + 'px';
    subMenuMart2.style.top = -value * 0.1 + 'px';
    // subMenuMart.style.transform = `scale(0.5)`;
    // moon.style.left = -value * 0.5 + 'px';
    // mountain.style.top = -value * 0.15 + 'px';
    // road.style.top = value * 0.15 + 'px';
    // text.style.top = value * 1 + 'px';
})
