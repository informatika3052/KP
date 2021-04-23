
document.addEventListener("DOMContentLoaded", function () {


    // const tampilDetail = document.querySelector('.tampilDetail');
    // console.log(tampilDetail);
    // tampilDetail.addEventListener('click', function (e) {
    //     console.log('okkk');
    //     e.preventDefault();

    //     // console.log(tampilModalUbah.attributes['data-id_mhs'].value);
    //     console.log(this);
    //     console.log(e.target);
    // });
    const tampilModalUbah = document.querySelector('.tampilModalUbah');
    // console.log(tampilModalUbah);
    tampilModalUbah.addEventListener('click', function (e) {
        console.log('okkk');
        e.preventDefault();
        const judulModal = document.querySelector('#judulModal');
        judulModal.innerHTML = 'Ubah Data Mahasiswa';


        const modalFooter = document.querySelector('.modal-footer button[type=submit]');
        modalFooter.innerHTML = 'Ubah Data';

        // console.log(tampilModalUbah.attributes['data-id_mhs'].value);
        console.log(this);
        console.log(e.target);
    });
    // console.log(tampilModalUbah.attributes['data-id'].value);
    // console.log(tampilModalUbah);


    // ====================================================================================
    const tambahDataMahasiswa = document.querySelector('.tambahDataMahasiswa');

    tambahDataMahasiswa.addEventListener('click', function () {

        const judulModal = document.querySelector('#judulModal');
        judulModal.innerHTML = 'Tambah Data Mahasiswa';

        const modalFooter = document.querySelector('.modal-footer button[type=submit]');
        modalFooter.innerHTML = 'Tambah Data';
        console.log('okkk');
    });





});


// <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge  bg-success tampilModalUbah " data-bs-toggle="modal" data-bs-target="#formModal" data-bs-id="<?= $mhs['id']; ?>">Ubah</a>