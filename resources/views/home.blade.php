@extends('layouts.app')

@section('title', 'Beranda — EUROPA')

@section('content')
<div class="container">
    <section class="hero">
        <div class="hero-content">
            <p class="eyebrow">A Vintage Travel Journal</p>
            <h1>Discover<br>Europe.</h1>
            <p>
                One journey. A thousand stories.
                Jelajahi keindahan Eropa.
            </p>

            <a href="{{ route('destinasi.index') }}" class="btn">
                Jelajahi Destinasi
            </a>
        </div>
    </section>
</div>
@endsection