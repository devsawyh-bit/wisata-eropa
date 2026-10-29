
@extends('layouts.app')

@section('title', $destinasi['nama'] . ' — EUROPA')

@section('content')
<div class="container">
    <p class="eyebrow">
        {{ $destinasi['kategori'] }} · Travel Journal
    </p>

    <h1>{{ $destinasi['nama'] }}.</h1>

    <p>{{ $destinasi['kota'] }}, Eropa</p>

    <img
        src="{{ $destinasi['gambar'] }}"
        alt="Pemandangan {{ $destinasi['nama'] }}"
        style="width: 100%; max-height: 500px; object-fit: cover; border: 1px solid var(--gold);"
    >

    <section style="margin-top: 30px;">
        <h2>Discover the Story</h2>

        <p>{{ $destinasi['deskripsi'] }}</p>

        <p>
            Jadikan {{ $destinasi['nama'] }} bagian dari perjalananmu
            dan temukan pengalaman baru di setiap sudutnya.
        </p>

        <a href="{{ route('destinasi.index') }}" class="btn">
            ← Kembali ke Destinasi
        </a>
    </section>
</div>
@endsection