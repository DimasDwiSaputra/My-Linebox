<?php

namespace App\Imports;

use App\ReportPcs;
use Maatwebsite\Excel\Concerns\ToModel;

class LaporanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ReportPcs([
            // return new Siswa([
            'nama' => $row[0],
            'sabtu' => $row[1], 
            'senin' => $row[2],
            'selasa' => $row[3],
            'rabu' => $row[4],
            'kamis' => $row[5],
            'jumat' => $row[6],
           
        
        ]);
    }
}
