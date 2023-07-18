<?php

namespace App\Http\Controllers\Ig;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Offence;
use App\Models\STKPush;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index(){

        $totalUsers = User::count();
        $totalDrivers = Driver::count();
        $revenue = STKPush::sum('amount');
        $chartData = $this->getOffencesChartData();

        $offences = Offence::all();

            $mostCommonOffence = Offence::select('OffenceCommited', DB::raw('count(*) as total'))
                ->groupBy('OffenceCommited')
                ->orderByDesc('total')
                ->first();



        return view('ig.index', compact('totalUsers', 'totalDrivers', 'revenue', 'chartData', 'mostCommonOffence', ));
    }

    public function getOffencesChartData()
{
    $offencesData = DB::table('offences')
    ->select(DB::raw('DATE(created_at) AS date'), DB::raw('COUNT(*) AS count'))
    ->groupBy('date')
    ->orderBy('date', 'asc')
    ->get();

$labels = [];
$data = [];

foreach ($offencesData as $offence) {
    $labels[] = date('Y-m-d', strtotime($offence->date));
    $data[] = $offence->count;
}

return [
    'labels' => $labels,
    'data' => $data,
];
}


}
