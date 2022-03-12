<?php

namespace App\Imports;

use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\Importable;

class InvoiceImport implements ToModel, SkipsEmptyRows
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Invoice([
            'object'     => $row[0],
            'name'    => $row[1],
            'adress'    => $row[2],
            'make_at'    =>Date::excelToDateTimeObject($row['3'])->format('d-m-Y'),
            'paid_at'    => Date::excelToDateTimeObject($row['4'])->format('d-m-Y'),
            'amount'    => $row[5],
            'paid'    => $row[6],
            'debt'    => $row[7],
        ]);
    }
}
