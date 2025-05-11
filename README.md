# Janji

Saya Shizuka Maulia Putri dengan NIM 2308744 mengerjakan Latihan Praktikum 9 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

---

# Sistem Informasi Mahasiswa
Web sederhana untuk mengelola data mahasiswa dengan fitur CRUD (Create, Read, Update, Delete) yang responsif dan user-friendly.
# Fitur Utama
- Tambah Mahasiswa: Form dengan validasi input
- Tampilan Data: Tabel dengan fitur pagination
- Pencarian & Filter: Pencarian real-time dan filter berdasarkan gender
- Pengurutan: Opsi pengurutan berdasarkan nama dan NIM
- Edit Data: Modal form untuk mengubah data
- Hapus Data: Konfirmasi sebelum penghapusan
  
# Alur Program
- User mengakses halaman utama
- Data mahasiswa ditampilkan dalam bentuk tabel
- User dapat melakukan pencarian, filter, dan pengurutan data
- Untuk menambah data, user klik tombol "Tambah Mahasiswa" yang akan menampilkan form
- Untuk mengedit atau menghapus, user menggunakan tombol aksi di setiap baris data

# Implementasi AJAX
AJAX adalah teknik yang digunakan di web supaya browser bisa ngirim dan nerima data dari server tanpa harus me-refredh halaman
Penggunaan AJAX dalam Program:
- Saat Edit Data: Update data tanpa reload page
- Saat Hapus Data: Konfirmasi dan proses hapus tanpa reload
- Saat Pencarian & Filter: Hasil pencarian ditampilkan secara instan(tidak harus klik sesuatu terlebih dahulu)

# Alur Proses CRUD
- Create (Tambah Data)
  - User klik tombol "Tambah Mahasiswa"
  - Form tambah data muncul
  - User mengisi data dan submit
  - Data dikirim ke server
  - Jika berhasil, tabel diupdate dengan data baru (tanpa reload)
    
- Read (Baca Data)
  - Data awal dimuat saat halaman pertama kali dibuka
  - Fitur pencarian dan filter jika user ingen menemukan data spesifik
  - Pagination jika data banyak

- Update (Edit Data)
  - User klik tombol "Edit" pada baris data
  - Modal edit muncul dengan data yang sudah terisi
  - User mengubah data dan klik "Simpan"
  - AJAX mengirim perubahan ke server
  - Tampilan tabel diupdate secara real-time tanpa reload
    
- Delete (Hapus Data)
  - User klik tombol "Hapus" pada baris data
  - Modal konfirmasi muncul
  - Jika user mengkonfirmasi, AJAX request dikirim ke server
  - Jika berhasil, baris dihapus dari tabel tanpa reload halaman


