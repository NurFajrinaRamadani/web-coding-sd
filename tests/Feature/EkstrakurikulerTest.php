<?php

namespace Tests\Feature;

use Tests\TestCase;

class EkstrakurikulerTest extends TestCase
{
    /**
     * Test menu ekstrakurikuler di beranda memiliki tautan ke pendaftaran ekstrakurikuler.
     */
    public function test_menu_beranda_memiliki_dropdown_daftar_ekskul(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Ekstrakurikuler');
        $response->assertSee('/daftar-ekstrakurikuler');
    }

    /**
     * Test halaman pendaftaran ekstrakurikuler dapat dibuka.
     */
    public function test_halaman_pendaftaran_ekskul_berhasil_dibuka(): void
    {
        $response = $this->get('/daftar-ekstrakurikuler');

        $response->assertStatus(200);
        $response->assertSee('Daftar Ekstrakurikuler');
        $response->assertSee('Junior Tech Explorer');
        $response->assertSee('Young Tech Leaders');
        $response->assertSee('Form Pendaftaran Ekstrakurikuler');
    }

    /**
     * Test submit pendaftaran untuk kemitraan sekolah.
     */
    public function test_submit_pendaftaran_sekolah_berhasil(): void
    {
        $payload = [
            'tipe_pendaftar' => 'sekolah',
            'nama_pic' => 'Bapak Ahmad',
            'jabatan' => 'Wakasek Kesiswaan',
            'nama_sekolah' => 'SD Negeri 01 Jakarta',
            'kota' => 'Jakarta Selatan',
            'whatsapp' => '08123456789',
            'program' => 'AI & Game Creator (Kelas 4 - 6 SD)',
            'estimasi_siswa' => '21 - 40 Siswa (2 Kelas)',
            'catatan' => 'Mohon dijadwalkan demo di sekolah.',
        ];

        $response = $this->post('/daftar-ekstrakurikuler', $payload);

        $response->assertRedirect();
        $response->assertSessionHas('success');
    }

    /**
     * Test submit pendaftaran untuk siswa / orang tua.
     */
    public function test_submit_pendaftaran_siswa_berhasil(): void
    {
        $payload = [
            'tipe_pendaftar' => 'siswa',
            'nama_siswa' => 'Rayhan',
            'usia_kelas' => '9 Tahun / Kelas 4 SD',
            'nama_wali' => 'Ibu Ratna',
            'asal_sekolah' => 'SD Al-Azhar',
            'whatsapp' => '08987654321',
            'program' => 'Junior Tech Explorer (Kelas 1 - 3 SD)',
            'catatan' => 'Tertarik kelas hari Sabtu.',
        ];

        $response = $this->post('/daftar-ekstrakurikuler', $payload);

        $response->assertRedirect();
        $response->assertSessionHas('success');
    }
}
