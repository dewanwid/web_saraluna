<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePageSaraluna</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
  <nav class="navbar navbar-light bg-dark py-0">
  <div class="container-fluid px-5" style="background-color: #A1EEBD;">
    <!-- logo dan identitas -->
      <a class="navbar-brand row py-3" href="#">
        <div class="col-4 col-md-2 d-flex justify-content-start">
          <img src="<?= base_url('assets/image/logo.png')?>" alt="" width="100%"  class="d-inline-block align-text-top">     
        </div>

        <div class="col-8 col-md-10 d-flex justify-content-start">
            <span class="col-6 col-md-8 fw-bold"> Saraluna <br> PUSAT KEGIATAN BELAJAR MASYARAKAT</span>
        </div>
      </a>
    </div>
  </nav>
           <!-- menu -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark py-0">
    <div class="container-fluid px-5 py-3  margin: 0 auto" style="background-color: #F0F69F;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav  mx-auto mb-2 mb-lg-0">
            <li class="nav-item mx-4">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="identitas.php">Identitas</a></li>
                <li><a class="dropdown-item" href="#">Kata Pengantar</a></li>
                <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                <li><a class="dropdown-item" href="#">Logo & Moto</a></li>
                <li><a class="dropdown-item" href="#">Gedung</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown mx-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Paket</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Paket B & C</a></li>
                </ul>
            </li>
            <li class="nav-item  mx-4">
              <a class="nav-link active" aria-current="page" href="#">Sarana Prasarana</a>
            </li>
            <li class="nav-item dropdown  mx-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kegiatan & Galeri
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Galeri Foto</a></li>
                <li><a class="dropdown-item" href="#">Video</a></li>
                <li><a class="dropdown-item" href="#">File Download</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown  mx-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Informasi
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Berita</a></li>
                <li><a class="dropdown-item" href="#">Pengumuman Kelulusan</a></li>
              </ul>
            </li>
            <li class="nav-item  mx-4">
              <a class="nav-link active" aria-current="page" href="#">Kontak</a>
            </li>
            <li class="nav-item  mx-4">
              <a class="nav-link active" aria-current="page" href="#">PPDB PKBM</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>

  <div class="">
    <img src="<?= base_url('assets/image/banner.jpg')?>" alt="" width="100%"> 
  </div>
  <div class="container-fluid px-5 py-4" style="background-color: #F0F69F;"></div>
  <div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
  
  <div class="container-fluid px-5">
      <div class="row">
        <div class="col text-center fw-bold py-3" style="background-color: #A1EEBD; border-radius:  30px 0px 30px 0px;">
        PUSAT KEGIATAN BELAJAR MASYARAKAT
        </div>
        <div class="col"></div>
      </div>
  </div> 

<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
<div class="container-fluid px-5">
  <div class="row">
    <div class="col">
          <div class="container-fluid">
            <div class="row">Kata Pengantar</div>
            <div class="row">Bismillahirrohmanirrohim</div>
            <div class="row">
              <div class="container-fluid">
                <div class="row">
                      <div class="col-4">
                      <img src="<?= base_url('assets/image/pengantar.jpg')?>" alt="" width="100%" srcset=""> 
                      </div>
                      <div class="col-8">
                        <p class="fs-6 font-justify text-justify" style="text-align: justify;">  Alhamdulillahirabbil'alamin, puji dan syukur kami panjatkan ke hadirat Allah SWT, atas rahmat dan karunia-Nya sehingga kami dapat meluncurkan situs web resmi PKBM SARALUNA.
                        Pendidikan adalah hak setiap anak bangsa, namun, pandemi Covid-19 telah memberikan dampak yang sangat besar terhadap dunia pendidikan, terutama bagi anak-anak di pedesaan dan keluarga kurang mampu. Pembelajaran Jarak Jauh (PJJ) yang diterapkan selama pandemi ternyata menjadi tantangan berat bagi mereka yang tidak memiliki akses internet ataupun perangkat belajar yang memadai. Akibatnya, banyak anak yang terpaksa putus sekolah karena kesulitan mengikuti sistem PJJ.
                        </p>
                      </div>
                </div>
              </div>
            </div>
                  <div class="row">
                    <p class="fs-6 font-justify text-justify" style="text-align: justify;">
                    Keprihatinan terhadap kondisi ini mendorong kami untuk bertindak. Sejak akhir tahun 2020, PKBM SARALUNA hadir sebagai bagian dari Yayasan Talita Peduli Indonesia hadir sebagai bentuk kepedulian terhadap masa depan anak bangsa. Kami melihat banyak remaja, khususnya remaja putri, yang kehilangan kesempatan belajar dan akhirnya harus bekerja serabutan demi bertahan hidup. Mereka terpaksa bekerja sebagai pembantu rumah tangga atau buruh cuci dengan upah rendah.
                    </p>
                  </div>
                  <div class="row">
                    <p class="fs-6 font-justify text-justify" style="text-align: justify;">
                    Dengan latar belakang pendidikan dan pengalaman lebih dari 17 tahun di industri hospitality, saya, Elisa Tri Wahyuni, bersama tim berupaya menciptakan solusi nyata bagi anak-anak yang kurang beruntung. Melalui yayasan ini, kami berkomitmen untuk membekali mereka dengan keterampilan yang dapat membantu mereka mandiri dan memiliki masa depan yang lebih baik.
                    PKBM SARALUNA berada di bawah naungan Yayasan Talita Peduli Indonesia, yang telah memiliki legalitas berdasarkan Akta Notaris No. 3 serta SK Menteri Kehakiman dan HAM RI No. C943 HT.03.02. Kami berharap kehadiran website ini dapat menjadi sumber informasi serta jembatan bagi mereka yang ingin berkontribusi dalam misi mulia ini.
                    Kami mengajak semua pihak untuk bersama-sama mendukung pendidikan anak bangsa agar mereka dapat memiliki masa depan yang lebih cerah.<br>
                    Wassalamu`alaikum Wr.Wb.

                    </p>
                  </div>

                  <div class="row">
                    <p class="fw-bold">
                    Salam hormat, <br>
                    Elisa Tri Wahyuni <br>
                    Pendiri PKBM SARALUNA & Yayasan Talita Peduli Indonesia

                    </p>
                  </div>
          </div>
     </div>
    <div class="col">
    <img src="<?= base_url('assets/image/ppdbsaraluna.png')?>" alt="" width="100%"> 
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
        <div class="col">
            <img src="<?= base_url('assets/image/banner1.jpg')?>" alt="" width="100%" srcset=""> 
        </div>
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/banner2.jpg')?>" alt="" width="100%" srcset=""> 
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/banner3.jpg')?>" alt="" width="100%" srcset=""> 
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container-fluid px-5">
      <div class="row">
        <div class="col text-center fw-bold py-3" style="background-color: #A1EEBD;">
        VISI DAN MISI  PUSAT KEGIATAN BELAJAR  MASYARAKAT SARALUNA
        </div>
      </div>
</div> 

<div class="container-fluid px-5">
  <div class="row">
    <div class="col">
          <div class="container-fluid">
          <div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
            <div class="row fw-bold">VISI</div>
            <div class="row">MENJADI LEMBAGA AKSELERASI PENDIDDIKAN YANG INOVATIF DI JAWA BARAT <br>
                            TURUT SERTA MENCERDASKAN KEHIDUPAN BANGSA <br>
                            MEMBANTU MENGENTASKAN KEMISKINAN
            </div>
                  <div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
            <div class="row fw-bold">MISI</div>
            <div class="row">1. MELATIH ANAK-ANAK PRA SEJAHTERA DENGAN KETERAMPILAN USAHA <br>
                              2. MENGADAKAN PELATIHAN-PELATIHAN YANG SESUAI DENGAN KEBUTUHAN IDUKA<br>
                              3. MENGAJAK MASYARAKAT PRA SEJAHTERA DAN PUTUS SEKOLAH UNTUK MELANJUTKAN IMPIAN MELALUI PROGRAM PENDIDIKAN<br>
                              4. MENGGANDENG PEMERINTAH SETEMPAT UNTUK MENYEDIAKAN SARANA DAN PRASARANA PELATIHAN<br>
                              5. MENCIPTAKAN LAPANGAN KERJA BAGI PENGANGGURAN DI DAERAH BUNGURSARI<br>
                              6. BEKERJASAMA DENGAN BANYAK IDUKA DAN LEMBAGA MASYARAKAT LAIN UNTUK PENEMPATAN KERJA ANAK-ANAK PRA SEJAHTERA
              </div>
          </div>
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container-fluid px-5">
      <div class="row">
        <div class="col text-center fw-bold py-3" style="background-color: #A1EEBD;">
        FASILITAS PUSAT KEGIATAN BELAJAR  MASYARAKAT  SARALUNA
        </div>
      </div>
</div> 
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
<div class="container-fluid px-5">
  <div class="row">
    <div class="col">
          <div class="container-fluid">
            <div class="row ">1. RUANG GURU</div>
            <div class="row ">2. RUANG KELAS</div>
            <div class="row ">3. RUANG IBADAH</div>
            <div class="row ">4. RUANG TOILET</div>
            <div class="row ">5. RUANG BANGUNAN</div>
            <div class="row ">6. DLL</div>
          </div>
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <div class="container-fluid px-5">
        <div class="row">
        <div class="col text-center fw-bold py-2" style="background-color: #A1EEBD; border-radius:  30px 0px 30px 0px;">
        Program/Kompetensi  Keahlian
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
    </div>
  </div>
</div>

<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
<div class="container">
  <div class="row">
    <div class="col-5">
    <img src="<?= base_url('assets/image/fotokegiatan1.jpg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    </div>
    <div class="col-5">
    <img src="<?= base_url('assets/image/salon.jpg')?>" alt="" width="100%" srcset="">
    </div>
  </div>
</div>

<div class="container-fluid px-4 py-2" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col-5 fw-bold text-center">
    Administrasi
    </div>
    <div class="col">
    </div>
    <div class="col-5 fw-bold text-center">
    Salon
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<!-- jumlah guru & siswa-->
<!-- Link Bootstrap dan Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Statistik Section -->
<div class="container-fluid py-4" style="background-color: #A1EEBD;">
  <div class="row justify-content-center text-center align-items-center">

    <!-- Guru -->
    <div class="col-md-5 mb-3 mb-md-0">
      <i class="bi bi-people-fill" style="font-size: 2.5rem;"></i>
      <h4 class="mb-0">5+</h4>
      <small class="fw-bold" style="font-size: 1.5rem;">Guru</small>
    </div>

    <!-- Garis pembatas vertikal -->
    <div class="col-md-1 d-none d-md-block">
      <div style="border-left: 2px solid black; height: 70px; margin: auto;"></div>
    </div>

    <!-- Siswa -->
    <div class="col-md-5">
      <i class="bi bi-people-fill" style="font-size: 2.5rem;"></i>
      <h4 class="mb-0" >64+</h4>
      <small class="fw-bold" style="font-size: 1.5rem;">Siswa</small>
    </div>

  </div>
</div>
<!--end-->
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <div class="container-fluid px-5">
        <div class="row">
        <div class="col text-center fw-bold py-2" style="background-color: #A1EEBD; border-radius:  30px 0px 30px 0px;">
        BERITA DAN ARTIKEL
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
<div class="container">
  <div class="row">
    <div class="col">
    <img src="<?= base_url('assets/image/berita1.jpg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/berita2.jpg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/berita3.jpg')?>" alt="" width="100%" srcset="">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <div class="container-fluid px-5">
        <div class="row">
        <div class="col text-center fw-bold py-2" style="background-color: #A1EEBD; border-radius:  0px 0px 0px 0px;">
        BERITA LAINNYA
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <div class="container-fluid px-5">
        <div class="row">
        <div class="col text-center fw-bold py-2" style="background-color: #A1EEBD; border-radius:  30px 0px 30px 0px;">
        GALERI FOTO
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
<div class="container">
  <div class="row">
    <div class="col">
    <img src="<?= base_url('assets/image/fotokegiatan1.jpg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/fotokegiatan2.jpg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/fotokegiatan3.jpg')?>" alt="" width="100%" srcset="">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
    <img src="<?= base_url('assets/image/fotokegiatan4.jpg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/fotokegiatan5.jpg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/fotokegiatan6.jpg')?>" alt="" width="100%" srcset="">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <div class="container-fluid px-5">
        <div class="row">
        <div class="col text-center fw-bold py-2" style="background-color: #A1EEBD; border-radius:  0px 0px 0px 0px;">
        FOTO LAINNYA
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <div class="container-fluid px-5">
        <div class="row">
        <div class="col text-center fw-bold py-2" style="background-color: #A1EEBD; border-radius:  30px 0px 30px 0px;">
        DATA SDM
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-1" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <div class="container-fluid px-5">
        <div class="row">
        <div class="col text-center py-2">
        Pimpinan, Guru dan Staf
        </div>
        </div>
      </div> 
    </div>
    <div class="col">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-3" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
    <img src="<?= base_url('assets/image/buelisa.jpg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/burisda.jpg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/buwinda.jpg')?>" alt="" width="100%" srcset="">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-1" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col text-center">
    Elisa Tri Wahyuni, S.Sos.  
    </div>
    <div class="col text-center">
    Risdayanti Octavia, S.Pd.
    </div>
    <div class="col text-center">
    Winda Hamidah, S.Kom.
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
<div class="container-fluid px-2">
      <div class="row">
      <div class="col"></div>
        <div class="col text-center fw-bold py-2" style="">
        MITRA KERJASAMA DUNIA USAHA DAN INDUSTRI
        </div>
        <div class="col"></div>
      </div>
</div> 
<div class="container-fluid px-2">
      <div class="row">
      <div class="col"></div>
        <div class="col text-center  py-0" style="">
        Berikut ini perusahaan perusahaan yang bekerjasama dengan  SARALUNA
        </div>
        <div class="col"></div>
      </div>
</div> 
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>
<div class="container">
  <div class="row">
    <div class="col ">
    <img src="<?= base_url('assets/image/Talita-Logo-1.png')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/bk.jpeg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/kp.jpeg')?>" alt="" width="100%" srcset="">
    </div>
    <div class="col">
    <img src="<?= base_url('assets/image/evrenbeauty.jpg')?>" alt="" width="100%" srcset="">
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class=" justify-content-center">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15829.613391594368!2d108.195758!3d-7.308501999999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f515568792345%3A0x6a5c60f0fa3a37c5!2sPKBM%20SARALUNA!5e0!3m2!1sen!2sid!4v1744683957806!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
<div class="px-5 py-5" style="background-color: #FFFFFF;"></div>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="px-5 py-3 h-100" style="background-color: #A1E3F9; border-radius:  20px 20px 20px 20px;">
        <h6><i class="bi bi-geo-alt-fill"></i> LOKASI SEKOLAH</h6>
          <p>Perum Almna Regency Jl. Letnan Harun, Sukarindik, Kec. Bungursari,<br>
             Kab. Tasikmalaya, Jawa Barat 46141</p>
      </div>
    </div>
    <div class="col">
      <div class="px-5 py-3 h-100" style="background-color: #A1E3F9; border-radius:  20px 20px 20px 20px;">
        <h6><i class="bi bi-telephone-fill"></i> HUBUNGI KAMI</h6>
          <p> 0811-1111-420</p>
      </div>
    </div>
    <div class="col">
      <div class="px-5 py-3 h-100" style="background-color: #A1E3F9; border-radius:  20px 20px 20px 20px;">
        <h6><i class="bi bi-envelope-fill"></i> Email</h6>
          <p>saralunaschool@gmail.com<br>atau silahkan chat kami saat online</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid px-5 py-5" style="background-color: #A1EEBD; ">
  <div class="row">
    <div class="col">
        <div class="container-fluid px-5" >
            <a class="navbar-brand row py-3" href="#">
                <div class="col-1 col-md-0 justify-content-start">
                    <img src="<?= base_url('assets/image/logo.png')?>" alt="" width="100%"  class="d-inline-block align-text-top">     
                </div>

                <div class="col-8 col-md-10 d-flex justify-content-start">
                  <span class="col-6 col-md-8 fw-bold"> Saraluna <br> PUSAT KEGIATAN BELAJAR MASYARAKAT</span>
                </div>
            </a>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="">
          <h5>VISI</h5>
            <ul>
              <li>Menjadi lembaga akselerasi pendidikan yang inovatif di Jawa Barat</li>
              <li>Turut serta mencerdaskan kehidupan bangsa</li>
              <li>Membantu mengentaskan kemiskinan</li>
            </ul>
      </div>
          <div class="text-center mt-4">
            <a href="#" class="btn btn-primary action-btn">PPDB ONLINE</a>
            <a href="#" class="btn btn-success action-btn">CHAT VIA WHATSAPP</a>
            <a href="#" class="btn btn-warning action-btn text-dark">LOGIN AREA</a>
          </div>
    </div>
  </div>
</div>
<div class="container-fluid px-5 py-4" style="background-color: #F0F69F;"></div>

  
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
 
</body>
</html>