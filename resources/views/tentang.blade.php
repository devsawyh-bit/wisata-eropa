
@extends('layouts.app')

@section('title', 'Tentang — EUROPA')

@section('content')
<div class="container">
    <p class="eyebrow">Our story</p>
    <h1>Tentang EUROPA.</h1>

    <p>
        EUROPA — A Vintage Travel Journal adalah website informasi
        wisata yang mengajak pengunjung mengenal berbagai destinasi
        menarik di Eropa.
    </p>

    <p>
        Website ini menggunakan konsep vintage film travel dengan
        warna maroon, burgundy, dan emas antik untuk menghadirkan
        suasana seperti jurnal perjalanan klasik.
    </p>

    <h2 style="margin-top: 35px;">Enam Negara, Banyak Cerita</h2>

    <p>
        Finlandia, Skotlandia, Spanyol, Prancis, Inggris, dan Norwegia
        menjadi destinasi pilihan dalam jurnal perjalanan ini.
    </p>

    <a href="{{ route('destinasi.index') }}" class="btn">
        Temukan Destinasi
    </a>
</div>
@endsection
