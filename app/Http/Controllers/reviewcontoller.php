<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class reviewcontoller extends Controller
{

    public function store_reviews(Request $request)
    {

        $Validator = Validator::make($request->all(), [
            'username' => ['required', 'string'],
            'user_id' => ['required'],
            'review_stars' => ['required'],
            'review_massege' => ['required', 'string'],
        ]);

        if ($Validator->fails()) {
            $er_msg = $Validator->messages()->all();
            $msg = '';
            foreach ($er_msg as $value) {
                $msg .= '<li>' . $value . "</li>";
            }
            $msg = str_replace('_', ' ', $msg);
            request()->session()->flash('error', '<ul>' . $msg . '</ul>');
        } else {
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $data = array('description' => $request->review_massege, "stars" => $request->review_stars, "on_date" => date("j\-F\-Y h:i:s A"));
            $status = DB::table('reviews')->insert($data);
            if ($status) {
                $last_record = Review::latest('id')->first();
                $commit_data = array('user_id' => $request->user_id, 'shop_id' => $request->shop_id, 'review_id' => $last_record->id,'rol_type'=>'review');
                DB::table('commit_tables')->insert($commit_data);
                request()->session()->flash('success', 'Thank you! for your feedback');
            } else {
                request()->session()->flash('error', 'Something went wrong! Please try again!!');
            }
        }
        return redirect()->back();
    }
}
