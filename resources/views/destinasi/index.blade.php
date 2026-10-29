
@extends('layouts.app')

@section('title', 'Destinasi Eropa — EUROPA')

@section('content')
<div class="container">
    <p class="eyebrow">The European Collection</p>
    <h1>Explore Europe.</h1>

    <p>
        Enam negara, enam cerita berbeda.
        Temukan destinasi pilihanmu dalam jurnal perjalanan ini.
    </p>

    <div class="grid" style="margin-top: 35px;">
        @foreach ($destinasi as $wisata)
            <article class="card">
                <img src="{{ $wisata['gambar'] }}"
                     alt="Pemandangan {{ $wisata['nama'] }}">

                <p class="tag">{{ $wisata['kategori'] }}</p>

                <h3>{{ $wisata['nama'] }}</h3>

                <p>{{ $wisata['kota'] }}</p>

                <p>{{ $wisata['deskripsi'] }}</p>

                <a href="{{ route('destinasi.detail', $wisata['id']) }}"
                   class="btn">
                    Lihat Detail →
                </a>
            </article>
        @endforeach
    </div>
</div>
@endsection
