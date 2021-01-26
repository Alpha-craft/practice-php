console.log("tems")
    // ambil element element yang dibutuhkan
let keyword = document.getElementById('keyword');
let tombol_cari = document.getElementById('cari');
let perubahan = document.getElementById('change');

keyword.addEventListener('keyup', () => {

    //buat objek ajax
    let ajax = new XMLHttpRequest();

    //cek kesiapan ajax
    ajax.onreadystatechange = function() {

            if (ajax.readyState == 4 && ajax.status == 200) {
                console.log("ready");
                console.log(ajax.responseText);
                perubahan.innerHTML = ajax.responseText;
            }
        }
        //ekesekusi ajax
    ajax.open('GET', 'ajax/waipu.php?keyword=' + keyword.value, true);
    ajax.send();

})