const tombol = document.querySelector('.toggle');
const navigation = document.querySelector('.navigation');
const neraca = document.querySelector('.neraca');

tombol.addEventListener('click', function () {
    tombol.classList.toggle('active');
    navigation.classList.toggle('active');
    neraca.classList.toggle('active');
})
const lilili = document.querySelectorAll('.navigation ul li');

lilili.forEach(element => {
    element.addEventListener('mouseover', function () {
        element.style.background = "white";
        element.lastElementChild.style.color = "#42b549";
        element.lastElementChild.firstElementChild.style.color = "#42b549";
    });
});
lilili.forEach(element => {
    element.addEventListener('mouseout', function () {
        element.style.background = "#42b549";
        // console.log(element);
        element.lastElementChild.style.color = "white";
        element.lastElementChild.firstElementChild.style.color = "white";
    });
});
