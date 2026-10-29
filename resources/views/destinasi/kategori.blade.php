
@extends('layouts.app')

@section('title', 'Kategori Wisata — EUROPA')

@section('content')
<div class="container">
    <p class="eyebrow">Find your journey</p>
    <h1>Kategori Wisata.</h1>

    <p>Pilih jenis perjalanan yang ingin kamu jelajahi.</p>

    <div class="grid" style="margin-top: 35px;">
        @foreach (collect($destinasi)->groupBy('kategori') as $namaKategori => $daftar)
            <article class="card">
                <p class="eyebrow">Travel Collection</p>
                <h2>{{ $namaKategori }}</h2>

                <p>
                    {{ $daftar->count() }} destinasi dalam kategori ini.
                </p>

                @foreach ($daftar as $wisata)
                    <p>
                        <a href="{{ route('destinasi.detail', $wisata['id']) }}"
                           style="color: var(--paper);">
                            {{ $wisata['nama'] }} — {{ $wisata['kota'] }}
                        </a>
                    </p>
                @endforeach
            </article>
        @endforeach
    </div>
</div>
@endsection
