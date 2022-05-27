const tanggal_penjualan = document.getElementById('tanggal_penjualan');
const bungkus_produk = document.getElementById('bungkus_produk');
// CheckOut
const pilih_pengiriman = document.getElementById('pilihPengiriman');
const harga_pengiriman = document.getElementById('harga_pengiriman');
const hargaProduk = document.getElementById('ck_hargaProduk');
const jmlPesanan = document.getElementById('ck_jmlPesanan');
const total_pesanan = document.getElementById('total_pesanan');

function normal_grafik(x) {
    x.style.width = "13.5rem";
    x.style.height = "3rem";
    x.style.paddingTop = "0.7rem";
    x.style.color = "white";
    x.style.backgroundColor = "#A95E5E";
    x.style.borderRadius = "15px";
    x.style.transition = "0.5s ease";
    x.style.boxShadow = "0 3px 5px rgba(0, 0, 0 , .5)"
    x.style.transform = "translateY(0)";
}

function hover_grafik(x) {
    x.style.transform = "translateY(2px)";
    x.style.transition = "0.5s ease";
}

// Jumlah Pesanan
function minus_pesanan($id) {
    const akses_pesanan = document.getElementById("jml_pesanan" + $id);
    akses_pesanan.value = akses_pesanan.value == 0 ? 0 : parseInt(akses_pesanan.value) - 1
}

function plus_pesanan($id) {
    const akses_pesanan = document.getElementById("jml_pesanan" + $id);
    akses_pesanan.value = akses_pesanan.value == 25 ? parseInt(akses_pesanan.value) : parseInt(akses_pesanan.value) + 1
}

// Event CheckOut
pilih_pengiriman.addEventListener('change', () => {
    harga_pengiriman.innerText = "Rp" + parseInt(pilih_pengiriman.value);
    total_pesanan.innerText = "Rp" + ((parseInt(hargaProduk.outerText.slice(2, )) * parseInt(jmlPesanan.outerText)) + parseInt(pilih_pengiriman.value));
})


// tanggal_penjualan.addEventListener('change', () => {
//     console.log(typeof tanggal_penjualan.value);
//     console.log(tanggal_penjualan.value);
// })
