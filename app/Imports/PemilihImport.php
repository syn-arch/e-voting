<?php

namespace App\Imports;

use App\Pemilih;
use Maatwebsite\Excel\Concerns\ToModel;

class PemilihImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pemilih([
            'id_pemilih' => $row[0],
            'id_kelas' => $row[1],
            'id_jurusan' => $row[2],
            'nm_pemilih' => $row[3],
            'nis' => $row[4],
            'password' => $row[5],
            'jk' => $row[6],
            'alamat' => $row[7],
            'telepon' => $row[8],
            'status' => $row[9]
        ]);
    }
}
