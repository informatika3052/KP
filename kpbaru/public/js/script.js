
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
    const tampilModalUbah = document.querySelectorAll('.tampilModalUbah');
    // console.log(tampilModalUbah);
    tampilModalUbah.forEach(a => {

        a.addEventListener('click', function (e) {
            // console.log('okkk');
            e.preventDefault();
            const judulModal = document.querySelector('#judulModal');
            judulModal.innerHTML = 'Ubah Data Mahasiswa';

            const modalFooter = document.querySelector('.modal-footer button[type=submit]');
            modalFooter.innerHTML = 'Ubah Data';
            document.querySelector('.modal-body form').setAttribute('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

            // const id = parseInt(a.attributes['data-bs-id'].value);
            const id = a.attributes['data-bs-id'].value;
            // console.log(id);
            const data = { id: id };

            (async () => {
                const result = await fetch('http://localhost/phpmvc/public/mahasiswa/getUbah', {
                    method: 'POST', // or 'PUT'
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ id: id, toJSON() { return this.id; } })
                });

                const content = await result.text();
                // console.log(content);
                let jueson = JSON.parse(content);

                document.querySelector('#nama').value = jueson.nama;
                document.querySelector('#nrp').value = jueson.nrp;
                document.querySelector('#email').value = jueson.email;
                document.querySelector('#jurusan').value = jueson.jurusan;
                document.querySelector('#id').value = jueson.id;
                console.log(jueson);
            })();

        });
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