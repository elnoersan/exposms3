// Dapatkan elemen modal
var modal = document.getElementById("myModal");

// Dapatkan gambar dan masukkan ke dalam modal - gunakan teks "alt" sebagai keterangan
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

// Saat gambar diklik, tampilkan modal
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Fungsi untuk menutup modal
function closeModal() {
    modal.style.display = "none";
}

function backToMenu() {
  modal.style.display = "none";
  // Tambahkan logika atau navigasi ke menu awal di sini jika diperlukan
}