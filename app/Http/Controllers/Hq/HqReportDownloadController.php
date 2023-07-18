<?php

namespace App\Http\Controllers\hq;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Offence;
use App\Models\Offencelist;
use App\Models\Receipt;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HqReportDownloadController extends Controller
{
    public function index(){
        return view('hq.reports.index');
    }

    public function downloadOffence()
    {
        $data = Offence::all();

        $csvData = $this->generateCsvDataOffence($data);
        $currentTime = date('Y-m-d H:i:s');
        $fileName = 'offences_data.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        return Response::make($csvData, 200, $headers);
    }

    private function generateCsvDataOffence($data)
    {
        $output = fopen('php://temp', 'w');
        fputcsv($output, ['TicketId',
        'DriverName',
        'DriverLicenceNumber',
        'DriverCarRegNo',
        'DriverPhoneNumber',
        'OffenceCommited',
        'PlaceOfOffence',
        'InspectorBadgeNumber',
    ]);

    foreach ($data as $item) {
        fputcsv($output, [
            $item->TicketId,
            $item->DriverName,
            $item->DriverLicenceNumber,
            $item->DriverCarRegNo,
            $item->DriverPhoneNumber,
            $item->OffenceCommited,
            $item->PlaceOfOffence,
            $item->InspectorBadgeNumber,
        ]);
    }
    rewind($output);
        $csvData = stream_get_contents($output);
        fclose($output);

        return $csvData;
    }
    public function downloadOffencelists()
    {
        $data = Offencelist::all();

        $csvData = $this->generateCsvDataOffencelists($data);
        $currentTime = date('Y-m-d H:i:s');
        $fileName = 'offenceslists_data.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        return Response::make($csvData, 200, $headers);
    }

    private function generateCsvDataOffencelists($data)
    {
        $output = fopen('php://temp', 'w');
        fputcsv($output, ['offencename',
        'offencetype',
        'offencefine',
        'createdby',
        
    ]);

    foreach ($data as $item) {
        fputcsv($output, [
            $item->offencename,
            $item->offencetype,
            $item->offencefine,
            $item->createdby,
           
        ]);
    }
    rewind($output);
        $csvData = stream_get_contents($output);
        fclose($output);

        return $csvData;
    }

    public function downloadReceipts()
    {
        $data =Receipt::all();

        $csvData = $this->generateCsvDataReceipts($data);
        $currentTime = date('Y-m-d H:i:s');
        $fileName = 'Receipts_Data.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        return Response::make($csvData, 200, $headers);
    }

    private function generateCsvDataReceipts($data)
    {
        $output = fopen('php://temp', 'w');
        fputcsv($output, [
            'receipt_number',
            'transaction_id',
            'payment_date',
            'amount',
            'ticket_id',
            'driver_name',
            'driver_phone_number',
            'driver_email',
            'driver_id_number',
            'driver_licence_number',
            'OffenceCommited',
            'InspectorBadgeNumber',
    ]);

    foreach ($data as $item) {
        fputcsv($output, [
            
            $item->receipt_number,
            $item->transaction_id,
            $item->payment_date,
            $item->amount,
            $item->ticket_id,
            $item->driver_name,
            $item->driver_phone_number,
            $item->driver_email,
            $item->driver_id_number,
            $item->driver_licence_number,
            $item->OffenceCommited,
            $item->InspectorBadgeNumber,
           
        ]);
    }
    rewind($output);
        $csvData = stream_get_contents($output);
        fclose($output);

        return $csvData;
    }
    public function downloadDrivers()
    {
        $data =Driver::all();

        $csvData = $this->generateCsvDataDrivers($data);
        $currentTime = date('Y-m-d H:i:s');
        $fileName = 'Drivers_Data.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        return Response::make($csvData, 200, $headers);
    }

    private function generateCsvDataDrivers($data)
    {
        $output = fopen('php://temp', 'w');
        fputcsv($output, [
            'name',
            'licencenumber',
            'idnumber',
            'phonenumber',
            'dob',
            'bloodgroup',
            'email',
        
    ]);

    foreach ($data as $item) {
        fputcsv($output, [
            
            
            $item->name,
            $item->licencenumber,
            $item->idnumber,
            $item->phonenumber,
            $item->dob,
            $item->bloodgroup,
            $item->email,
            
        
           
        ]);
    }
    rewind($output);
        $csvData = stream_get_contents($output);
        fclose($output);

        return $csvData;
    }

    public function downloadTransactions()
    {
        $data =Transaction::all();

        $csvData = $this->generateCsvDataTransactions($data);
        $currentTime = date('Y-m-d H:i:s');
        $fileName = 'Transactions_Data.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ];

        return Response::make($csvData, 200, $headers);
    }

    private function generateCsvDataTransactions($data)
    {
        $output = fopen('php://temp', 'w');
        fputcsv($output, [
            'transaction_id',
            'amount',
            'status',
            'TicketId',
            'created_at',
        
    ]);

    foreach ($data as $item) {
        fputcsv($output, [
            
            
            $item->transaction_id,
            $item->amount,
            $item->status,
            $item->TicketId,
            $item->created_at,
            
            
        
           
        ]);
    }
    rewind($output);
        $csvData = stream_get_contents($output);
        fclose($output);

        return $csvData;
    }

}

