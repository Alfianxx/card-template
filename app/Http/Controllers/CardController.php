<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\PngEncoder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{

    public function generate(Request $request)
    {
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        $nip = $request->nip;

        $manager = new ImageManager(new Driver());

        $img = $manager->read(public_path('template.png'));

        // Tambah Jabatan
        $img->text("JABATAN : {$jabatan}", 120, 340, function ($font) {
            $font->filename(public_path('fonts/arial.ttf'));
            $font->size(20);
            $font->color('#000000');
            $font->align('left');
        });

        // Tambah Nama
        $img->text("NAMA      : {$nama}", 120, 360, function ($font) {
            $font->filename(public_path('fonts/arial.ttf'));
            $font->size(20);
            $font->color('#000000');
            $font->align('left');
        });

        // Tambah NIP
        $img->text("NIP          : {$nip}", 120, 380, function ($font) {
            $font->filename(public_path('fonts/arial.ttf'));
            $font->size(20);
            $font->color('#000000');
            $font->align('left');
        });

        // Pastikan folder ada
        Storage::disk('public')->makeDirectory('cards');


        // Nama file unik
        $fileName = 'kartu-' . Str::random(8) . '.png';
        $path = storage_path('app/public/cards/' . $fileName);

        // Simpan gambar ke storage
        $img->encode(new PngEncoder())->save($path);

        // Kirim ke view untuk preview
        return view('card-preview', [
            'fileName' => $fileName
        ]);
    }

    public function download($fileName)
    {
        $path = storage_path('app/public/cards/' . $fileName);

        if (file_exists($path)) {
            return response()->download($path, 'kartu-nama.png');
        }

        abort(404);
    }
}
