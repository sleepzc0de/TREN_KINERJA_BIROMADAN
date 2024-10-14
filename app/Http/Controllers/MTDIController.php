<?php

namespace App\Http\Controllers;

use App\Models\mtdi_capaian_indeks_pengguna;
use App\Models\mtdi_data_pendaftaran_akun_spse_simpel;
use App\Models\mtdi_list_project_aplikasi;
use Illuminate\Http\Request;

class MTDIController extends Controller
{
    public function trendIndex()
    {
        $data1 = mtdi_capaian_indeks_pengguna::all();
        $data2 = mtdi_data_pendaftaran_akun_spse_simpel::all();
        $data3 = mtdi_list_project_aplikasi::all();

        list($years, $series) = $this->groupDataCapaianIndeksPengguna($data1);
        list($years2, $series2) = $this->groupDataAkunSPSESIMPEL($data2);
        list($years3, $series3, $apps3) = $this->groupDataListAplikasi($data3);

        return view('content.trend_mtdi', compact([
            'series',
            'years',
            'series2',
            'years2',
            'series3',
            'years3',
            'apps3'
        ]));
    }

    private function groupDataListAplikasi($data3)
    {
        $statusAplikasi = [];
        $years = [];

        foreach ($data3 as $item) {
            $year = $item->tahun;
            if (!isset($statusAplikasi[$year])) {
                $statusAplikasi[$year] = [
                    'Pembangunan' => ['count' => 0, 'apps' => []],
                    'Pengembangan' => ['count' => 0, 'apps' => []],
                ];
            }

            // Hitung status aplikasi
            switch ($item->status_aplikasi) {
                case 'Pembangunan':
                    $statusAplikasi[$year]['Pembangunan']['count']++;
                    $statusAplikasi[$year]['Pembangunan']['apps'][] = $item->nama_aplikasi; // Simpan nama aplikasi
                    break;
                case 'Pengembangan':
                    $statusAplikasi[$year]['Pengembangan']['count']++;
                    $statusAplikasi[$year]['Pengembangan']['apps'][] = $item->nama_aplikasi; // Simpan nama aplikasi
                    break;
            }
        }

        $years3 = array_keys($statusAplikasi);

        // Siapkan series untuk chart
        $series3 = [
            ['name' => 'Pembangunan', 'data' => []],
            ['name' => 'Pengembangan', 'data' => []],
        ];

        foreach ($years3 as $year) {
            $series3[0]['data'][] = $statusAplikasi[$year]['Pembangunan']['count']; // Data untuk Pembangunan
            $series3[1]['data'][] = $statusAplikasi[$year]['Pengembangan']['count']; // Data untuk Pengembangan
        }

        // Simpan nama aplikasi untuk tooltip
        $apps3 = [
            'Pembangunan' => [],
            'Pengembangan' => []
        ];

        foreach ($years3 as $year) {
            $apps3['Pembangunan'][$year] = $statusAplikasi[$year]['Pembangunan']['apps'];
            $apps3['Pengembangan'][$year] = $statusAplikasi[$year]['Pengembangan']['apps'];
        }

        return [$years3, $series3, $apps3]; // Kembalikan juga nama aplikasi
    }

    private function groupDataAkunSPSESIMPEL($data2)
    {
        $simpelData = [];
        $spseData = [];
        $years = [];

        foreach ($data2 as $item) {
            $years[] = $item->tahun;  // Asumsi ada kolom 'tahun'
            $this->categorizeDataAkunSPSESIMPEL($item, $simpelData, $spseData);
        }

        $years2 = array_values(array_unique($years)); // Hapus duplikat tahun

        // Siapkan series untuk chart
        $series2 = [
            ['name' => 'SPSE', 'data' => $spseData],
            ['name' => 'SIMPeL', 'data' => $simpelData],
        ];

        return [$years2, $series2];
    }

    private function groupDataCapaianIndeksPengguna($data1)
    {
        $helpdeskData = [];
        $regverData = [];
        $pelatihanData = [];
        $years = [];

        foreach ($data1 as $item) {
            $years[] = $item->tahun;  // Asumsi ada kolom 'tahun'
            $this->categorizeDataCapaianIndeksPengguna($item, $helpdeskData, $regverData, $pelatihanData);
        }

        $years = array_values(array_unique($years)); // Hapus duplikat tahun

        // Siapkan series untuk chart
        $series = [
            ['name' => 'Helpdesk', 'data' => $helpdeskData],
            ['name' => 'Regver', 'data' => $regverData],
            ['name' => 'Pelatihan', 'data' => $pelatihanData]
        ];

        return [$years, $series];
    }


    private function categorizeDataCapaianIndeksPengguna($item, &$helpdeskData, &$regverData, &$pelatihanData)
    {
        switch ($item->kategori) {  // Asumsi ada kolom kategori
            case 'Helpdesk':
                $helpdeskData[] = $item->nilai;  // Asumsi ada kolom nilai
                break;
            case 'Regver':
                $regverData[] = $item->nilai;
                break;
            case 'Pelatihan':
                $pelatihanData[] = $item->nilai;
                break;
        }
    }

    private function categorizeDataAkunSPSESIMPEL($item, &$simpelData, &$spseData)
    {
        switch ($item->kategori) {  // Asumsi ada kolom kategori
            case 'SPSE':
                $spseData[] = $item->jumlah_penyedia;  // Asumsi ada kolom nilai
                break;
            case 'SIMPeL':
                $simpelData[] = $item->jumlah_penyedia;
                break;
        }
    }

    private function categorizeDataListAplikasi($item, &$statusAplikasi)
    {
        $year = $item->tahun;

        if (!isset($statusAplikasi[$year])) {
            $statusAplikasi[$year] = [
                'Pembangunan' => ['count' => 0, 'apps' => []],
                'Pengembangan' => ['count' => 0, 'apps' => []],
            ];
        }

        switch ($item->status_aplikasi) {
            case 'Pembangunan':
                $statusAplikasi[$year]['Pembangunan']['count']++;
                $statusAplikasi[$year]['Pembangunan']['apps'][] = $item->nama_aplikasi; // Simpan nama aplikasi
                break;
            case 'Pengembangan':
                $statusAplikasi[$year]['Pengembangan']['count']++;
                $statusAplikasi[$year]['Pengembangan']['apps'][] = $item->nama_aplikasi; // Simpan nama aplikasi
                break;
        }
    }

}
