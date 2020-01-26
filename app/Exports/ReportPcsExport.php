<?php

namespace App\Exports;

use App\ReportPcs;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReportPcsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ReportPcs::all();
    }
}
