const tombol = document.querySelector('.toggle');
const navigation = document.querySelector('.navigation');
const navigationUl = document.querySelector('.navigation ul');
const neraca = document.querySelector('.neraca');
const tableNeraca = document.querySelector('.table-neraca');

// neraca.forEach((childNeraca) => {
//     childNeraca.addEventListener('click', function () {
//         childNeraca.classList.toggle('active');
//     })
// })
tombol.addEventListener('click', function () {
    tombol.classList.toggle('active');
    navigation.classList.toggle('active');
    navigationUl.classList.toggle('active');
    neraca.classList.toggle('active');
    tableNeraca.classList.toggle('active');
})

const lilili = document.querySelectorAll('.navigation ul li');

lilili.forEach(element => {
    element.addEventListener('mouseover', function () {
        element.style.background = "white";
        element.lastElementChild.style.color = "#32CD32";
        element.lastElementChild.firstElementChild.style.color = "#32CD32";
    });
});
lilili.forEach(element => {
    element.addEventListener('mouseout', function () {
        element.style.background = "#32CD32";
        // console.log(element);
        element.lastElementChild.style.color = "white";
        element.lastElementChild.firstElementChild.style.color = "white";
    });
});
