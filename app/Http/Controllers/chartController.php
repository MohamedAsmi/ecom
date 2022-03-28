<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\customer_chart;
class chartController extends Controller
{
    public function customerChart(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'cu_msg' => ['required', 'string']
        ]);

        if ($Validator->fails()) {
            $er_msg = $Validator->messages()->all();
            $msg = '';
            foreach ($er_msg as $value) {
                $msg .= '<li>' . $value . "</li>";
            }
            $msg = str_replace('_', ' ', $msg);
        } else {
            // date_default_timezone_set("Asia/Kuala_Lumpur");
            // $data = array('cherts' => $request->cu_msg, "rol" => $request->rol, "on_date" => date("j\-F\-Y h:i:s A"));
            // $status = DB::table('customer_charts')->insert($data);
            // if ($status) {
            //     $last_record = customer_chart::latest('id')->first();
            //     $commit_data = array('user_id' => $request->user_id, 'shop_id' => $request->shop_id, 'review_id' => $last_record->id, 'rol_type' => 'chart');
            //     DB::table('commit_tables')->insert($commit_data);
            //     $msg = ['success','Thank you! for your feedback'];
            // } else {
            //     $msg = ['error','Something went wrong! Please try again!!'];
            // }
        }
        $chart_details = DB::table('commit_tables')
        ->where('shop_id', $request->shop_id)
        ->where('user_id', $request->user_id)
        ->where('rol_type' , 'chart')
        ->leftJoin('users', 'commit_tables.user_id', '=', 'users.id')
        ->leftJoin('customer_charts', 'commit_tables.review_id', '=', 'customer_charts.id')
        ->orderBy('customer_charts.on_date', 'ASC')
        ->get();
        return $chart_details;
    }
}
