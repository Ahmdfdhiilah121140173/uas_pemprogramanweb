**Ahmad Fadillah** <br>
**121140173** <br>
**RB** <br>

Bagian 1: Client-side Programming
1.1 Pembuatan beberapa halaman termasuk pembuatan loginPage.php, registerPage.php, index.php, edit.php, create.php. Serta beberapa penanganan server seperti logout.php dan delete.php.

1.2 Pembuatan beberapa kejadian untuk menangani interaksi di halaman web dengan memanipulasi DOM saat formulir input, dalam beberapa file JavaScript seperti authLoginValidation.js dan authRegisValidation.js.

Bagian 2: Server-side Programming 
2.1 Terapkan skrip PHP yang bertanggung jawab untuk mengelola data yang berasal dari formulir pada berbagai halaman, termasuk create.php, edit.php, delete.php, login.php, register.php, dan index.php. Gunakan variabel PHP seperti `$_POST` untuk mengakses data yang dikirim melalui formulir, `$_GET` untuk mengambil data dari parameter URL, dan `$_SESSION` untuk menyimpan dan mengelola sesi pengguna. Skrip ini akan berfungsi sebagai penghubung antara antarmuka pengguna (UI) dan basis data, memproses input pengguna, dan memberikan respons yang sesuai.


2.2  Buatlah sebuah objek PHP berbasis OOP yaitu 
saya membuat dua kelas induk yang bernama `Connection` dan `User`. Selanjutnya, saya akan membuat dua kelas turunan yaitu `Jujutsu` yang akan mewarisi dari `Connection` dan `User`.

2.2.1 Kelas Induk `Connection`:
    - `Connection` berperan sebagai kelas yang bertanggung jawab untuk mengelola koneksi ke basis data MySQL.
    - Metode `connect()` akan digunakan untuk membuka koneksi ke basis data.

2.2.2 Kelas Induk `User`:
    - `User` akan menjadi kelas yang mengelola informasi pengguna.
    - Metode-metode CRUD (Create, Read, Update, Delete) akan dimasukkan di sini, seperti `createUser()`, `getUser()`

2.2.3 Kelas Turunan `Jujutsu`:
    - `Jujutsu` akan mewarisi fungsionalitas dari kelas `Connection` dan `User`.
    - Tambahan metode CRUD yang khusus untuk entitas "Jujutsu Sorcerer" akan ditempatkan di sini. Misalnya, `insertJujutsu()`, `getJujutsuSorcerers()`, `updateJujutsu()`,`getSorcererById`, dan `deleteJujutsu()`.

Dengan demikian, saya mencapai struktur pewarisan berlapis. `Jujutsu` sebagai kelas yang lebih khusus mengambil keuntungan dari fungsionalitas yang sudah ada di `Connection` dan `User`. Ini memungkinkan untuk pengelolaan yang terstruktur dan modular dari berbagai aspek aplikasi, menjadikan kode lebih mudah dipelihara dan diperluas.

Bagian 3: Database Management
3.1 Buatlah sebuah tabel pada database MySQL

- Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata :
<img src="/readme.jpg">

3.2  Membuat konfigurasi koneksi ke database MySQL pada file menggunakan pendekatan PDO `configuration`.

3.3  melakukan manipulasi data film pada tabel utama di index Misalnya, tambah data `$_POST`, ambil data `$_GET`, atau update data `$_POST`.

Bagian 4: State Management
4.1 membuatlah skrip PHP yang menggunakan session untuk menyimpan state pengguna user kedalam variabel global `$_SESSION` dengan isi :  
$_SESSION['email'] = $userData['email'];
$_SESSION['password'] = $userData['password'];


4.2 Menerapkan manajemen status (state) dengan memanfaatkan teknik cookie dengan menambahkan script js dan penyimpanan lokal di sisi klien menggunakan JavaScript menggunakan localstorage untuk memastikan efisiensi dan responsivitas dalam pengelolaan data status.

Bagian Bonus: Hosting Aplikasi Web 
- Bagaimana Anda meng-host aplikasi web Anda?
  Pilih penyedia hosting web gratis, lakukan registrasi dan login, kemudian ajukan permohonan pembuatan situs web. Setelah itu, buat database dan atur cPanel.

- Mengapa Anda memilih penyedia hosting web tertentu untuk aplikasi web Anda? Berikan alasan Anda.
  Saya memilih penyedia layanan hosting yang dianggap paling sesuai untuk aplikasi web saya dengan mempertimbangkan faktor biaya, terutama karena 000webhost menawarkan layanan hosting gratis tanpa biaya bulanan atau tahunan. Ini merupakan pilihan yang ekonomis, terutama untuk proyek-proyek kecil atau eksperimen, dan menyediakan lingkungan pengembangan yang lengkap. Proses pendaftaran dan konfigurasi dengan 000webhost berlangsung dengan cepat, memungkinkan pengguna untuk segera memulai hosting situs web tanpa menunggu lama. Layanan ini juga dirancang untuk pemula, menyediakan panel kontrol yang simpel.

- Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
  Keamanan aplikasi web yang dihosting ditingkatkan dengan menerapkan protokol HTTPS untuk mengenkripsi data yang dikirimkan.

- Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
  Konfigurasi server untuk hosting gratis ini sederhana, kemungkinan hanya melibatkan penyesuaian versi PHP.