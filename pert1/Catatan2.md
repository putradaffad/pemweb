# 📌 Catatan Pembelajaran Hari Ini  

## 1. Apa yang Dipelajari  
Hari ini belajar tentang **website** dan bagaimana cara melakukan **set up** untuk membuat sebuah website menggunakan **HTML**.  

## 2. Apa Itu Website & HTML?  
### 🔹 Website  
Website adalah kumpulan halaman web yang dapat diakses melalui internet menggunakan browser. Website bisa berisi teks, gambar, video, atau elemen interaktif lainnya. Secara umum, website dibagi menjadi dua jenis utama:  
- **Website Statis** → Dibangun menggunakan HTML, CSS, dan JavaScript tanpa backend yang kompleks.  
- **Website Dinamis** → Memiliki backend (server, database) untuk menyimpan dan mengolah data pengguna, biasanya menggunakan PHP, Python, atau Node.js.  

### 🔹 HTML (HyperText Markup Language)  
HTML adalah bahasa markup yang digunakan untuk membuat struktur dasar dari sebuah website. HTML tidak bersifat pemrograman seperti Python atau JavaScript, tetapi digunakan untuk menyusun elemen-elemen pada halaman web seperti:  
- **Teks & Heading** → `<p>`, `<h1>` sampai `<h6>`  
- **Gambar & Link** → `<img>` dan `<a>`  
- **Tabel & Formulir** → `<table>`, `<form>`, `<input>`  
- **Layout & Struktur** → `<div>`, `<section>`, `<article>`  

## 3. Setup yang Dilakukan  
Agar website bisa berjalan dengan baik, beberapa konfigurasi dan struktur folder dibuat, antara lain:  

### 🔹 Membuat File Konfigurasi  
- **`docker-compose.yml`** → Digunakan untuk mengatur layanan yang dibutuhkan dalam pengembangan web, seperti server web (Nginx) dan environment lainnya.  
- **`.env`** → File ini menyimpan variabel lingkungan (environment variables) yang dibutuhkan dalam aplikasi.  

### 🔹 Menggunakan Nginx sebagai Web Server  
- **Nginx** dipakai untuk menangani request dari user dan mengarahkan ke halaman HTML yang dibuat.  
- Konfigurasi Nginx disesuaikan agar bisa melayani file statis dari folder proyek.  

### 🔹 Struktur Folder untuk Menyimpan Proyek  
- **`src/`** → Folder ini digunakan untuk menyimpan file HTML, CSS, dan JavaScript yang dibuat untuk proyek website.  
- **`nginx/`** → Menyimpan konfigurasi Nginx yang mengatur bagaimana web server merespons permintaan user.  

## 4. Kesimpulan  
- Memahami konsep dasar **website** sebelum mulai membangun proyek sangat penting.  
- **HTML** adalah dasar dalam pembuatan website, tetapi perlu dikombinasikan dengan **CSS & JavaScript** agar lebih menarik dan interaktif.  
- **Docker + Nginx** adalah kombinasi yang bagus untuk menjalankan website dengan konfigurasi yang lebih fleksibel.  
- Menyusun struktur folder yang rapi akan membantu dalam pengelolaan proyek di masa depan.  

Pembelajaran ini jadi langkah awal untuk lebih memahami pengembangan web, dan ke depannya bisa lanjut dengan menambahkan fitur interaktif menggunakan **CSS & JavaScript**! 🚀  
