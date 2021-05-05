const tombol = document.querySelector('.toggle');
const navigation = document.querySelector('.navigation');

tombol.addEventListener('click', function () {
    tombol.classList.toggle('active');
    navigation.classList.toggle('active');
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
// <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
// <div class="container">
//     <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
//     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
//         <span class="navbar-toggler-icon"></span>
//     </button>
//     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
//         <div class="navbar-nav">
//             <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
//             <a class="nav-link" href="<?= BASEURL; ?>/about ">About</a>
//             <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa ">Mahasiswa</a>
//         </div>
//     </div>
// </div>
// </nav>