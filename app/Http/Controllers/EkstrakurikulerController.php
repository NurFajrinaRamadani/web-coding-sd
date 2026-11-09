<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EkstrakurikulerController extends Controller
{
    /**
     * Menampilkan halaman pendaftaran ekstrakurikuler.
     */
    public function index(): View
    {
        return view('pendaftaran-ekskul');
    }

    /**
     * Memproses formulir pendaftaran ekstrakurikuler.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'tipe_pendaftar' => ['required', 'in:sekolah,siswa'],
            'nama_pic' => ['nullable', 'string', 'max:100'],
            'nama_sekolah' => ['nullable', 'string', 'max:150'],
            'nama_siswa' => ['nullable', 'string', 'max:100'],
            'nama_wali' => ['nullable', 'string', 'max:100'],
            'whatsapp' => ['required', 'string', 'max:30'],
            'program' => ['required', 'string', 'max:100'],
            'kota' => ['nullable', 'string', 'max:100'],
            'estimasi_siswa' => ['nullable', 'string', 'max:50'],
            'catatan' => ['nullable', 'string', 'max:500'],
        ]);

        $nama = $validated['tipe_pendaftar'] === 'sekolah'
            ? ($validated['nama_pic'] ?? $validated['nama_sekolah'] ?? 'Pendaftar')
            : ($validated['nama_siswa'] ?? 'Siswa');

        return back()->with([
            'success' => "Terima kasih, {$nama}! Pendaftaran ekstrakurikuler berhasil kami terima. Tim Rakit AI akan segera menghubungi nomor WhatsApp Anda dalam kurun waktu 1x24 jam kerja.",
            'submitted_data' => $validated,
        ]);
    }
}
