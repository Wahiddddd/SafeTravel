@extends('layouts.info-negara')
@section('sub-judul', 'Informasi Umum')
@section('sub-info-negara')

<h2 class=" text-center">@yield('sub-judul')</h2>
<div class="card my-3 border-0" style="background-color: #E7F4FF">
    <div class="card-body">
        <p> Kode Telepon:<br>
            +44
        </p>
        <p>
            Zona dan Perbedaan Waktu:<br>
            Britania Raya berada di Zona GMT O. Waktu di Britania Raya adalah 7 jam lebih lambat dari
            Jakarta
            (WIB).
            Namun, khusus pada saat
            daylight saving time yang biasanya dimulai dari hari Minggu terakhir di bulan Maret hingga hari
            minggu
            terakhir di bulan Oktober,
            perbedaan waktu antara Britania Raya dan Jakarta (WIB) adalah 6 jam.
        </p>

        <p>Jenis Soket/CoIokan Listrik:<br>
            Tipe G
        </p>

        <p>Alamat KBRI London:<br>
            30 Great Peter St, Westminster, London SWIP 2BU, Britania Raya
        </p>

    </div>
</div>

<style>
    /* Gaya tambahan untuk iframe */
    .map-iframe {
      border-radius: 30px;
      overflow: hidden;
    }
  </style>

  <div class="card mt-3" style="border-radius: 30px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.8864006958065!2d-0.13095029999999996!3d51.49695209999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876052cffffffff%3A0x4a9d929a63064552!2sKedutaan%20Besar%20Republik%20Indonesia%20di%20London!5e0!3m2!1sid!2sid!4v1689954788034!5m2!1sid!2sid"
      style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" class="map-iframe">
    </iframe>
  </div>

<div class="contact-person mt-3">
    <h3>Contact Person</h3>
    <p>Email : london.kbri@kemlu.go.id; kbri@btconnect.com <br>
        No. Telp : +44 20 7499-7661, +44 20 7290 9600
    </p>

</div>


</div>
@endsection
