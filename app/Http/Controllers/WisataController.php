<?php

namespace App\Http\Controllers;

class WisataController extends Controller
{
    private $destinasi = [
        [
            'id' => 1,
            'nama' => 'Finlandia',
            'kota' => 'Helsinki',
            'deskripsi' => 'Nikmati danau yang indah, hutan yang luas, dan pesona cahaya utara di Finlandia.',
            'ikon' => '❄️',
            'gambar' => 'https://images.unsplash.com/photo-1516483638261-f4dbaf036963',
            'kategori' => 'Alam'
        ],
        [
            'id' => 2,
            'nama' => 'Skotlandia',
            'kota' => 'Edinburgh',
            'deskripsi' => 'Jelajahi kastil bersejarah, perbukitan hijau, dan suasana klasik Skotlandia.',
            'ikon' => '🏰',
            'gambar' => 'https://images.unsplash.com/photo-1506377585622-bedcbb027afc',
            'kategori' => 'Sejarah'
        ],
        [
            'id' => 3,
            'nama' => 'Spanyol',
            'kota' => 'Barcelona',
            'deskripsi' => 'Temukan arsitektur unik, pantai yang menawan, dan budaya Spanyol yang penuh warna.',
            'ikon' => '☀️',
            'gambar' => 'https://images.unsplash.com/photo-1539037116277-4db20889f2d4',
            'kategori' => 'Budaya'
        ],
        [
            'id' => 4,
            'nama' => 'Prancis',
            'kota' => 'Paris',
            'deskripsi' => 'Rasakan suasana romantis Paris dengan menara ikonik, museum, dan kafe klasik.',
            'ikon' => '🗼',
            'gambar' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34',
            'kategori' => 'Kota'
        ],
        [
            'id' => 5,
            'nama' => 'Inggris',
            'kota' => 'London',
            'deskripsi' => 'Kunjungi landmark terkenal, taman kota, dan bangunan bersejarah di London.',
            'ikon' => '🎡',
            'gambar' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad',
            'kategori' => 'Kota'
        ],
        [
            'id' => 6,
            'nama' => 'Norwegia',
            'kota' => 'Oslo',
            'deskripsi' => 'Jelajahi fjord yang menakjubkan, pegunungan, dan panorama alam Norwegia.',
            'ikon' => '🏔️',
            'gambar' => 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38',
            'kategori' => 'Alam'
        ],
    ];

    public function index()
    {
        $destinasi = $this->destinasi;

        return view('destinasi.index', compact('destinasi'));
    }

    public function kategori()
    {
        $destinasi = $this->destinasi;

        return view('destinasi.kategori', compact('destinasi'));
    }

    public function detail($id)
    {
        $destinasi = collect($this->destinasi)->firstWhere('id', $id);

        if (!$destinasi) {
            abort(404);
        }

        return view('destinasi.detail', compact('destinasi'));
    }
}
