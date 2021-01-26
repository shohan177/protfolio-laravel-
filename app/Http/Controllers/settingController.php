<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class settingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * photo uplode finaction
     */
    public function photoUplode($photo, $old_photo=""){
        if (isset($photo)) {
             $img = $photo;
            $u_img = md5(time().rand()).'.'.$img -> getClientOriginalExtension();
            $img -> move(public_path('media/home/'),$u_img);
            if (!empty($old_photo)) {
             unlink('media/home/'. $old_photo);
            }
            return $u_img;
        }else{
            return "";
        }

    }
    /**
     * show admin cover setting page
     */
    public function sliderSetting(){
        $data = Setting::find(1);
        $cover_data = json_decode($data -> setting_data);
        return view('admin.coverSetting',compact('cover_data'));
    }
    /**
     * store cover data
     */
    public function sliderDataStore(Request $request){
        //manage pro photo upload
        if ( $request -> new_pro == 1) {
           $pro_pic = $this-> photoUplode($request -> pro_pic, $request -> old_pro_pic);
        }else{
            $pro_pic = $request -> old_pro_pic;
        }

        //manage cover photo
        if ( $request -> new_cover == 1) {
            $cover_pic = $this-> photoUplode($request -> cover_pic,$request -> old_cover_pic);
         }else{
             $cover_pic = $request -> old_cover_pic;
         }


        $count_socail = count($request -> logo);
        $count_moto = count($request -> moto);

        //social links
        $socail_array =[];
        for ($i=0; $i < $count_socail; $i++) {
            $array = [
                'logo' => $request -> logo[$i],
                'name' => $request -> name[$i],
                'url' => $request -> url[$i],
                'section_id' => $request -> id[$i],
            ];
        array_push( $socail_array,$array);
        }

        $moto_array = [];
        for ($i=0; $i < $count_moto; $i++) {
           $array = [
               'name' => $request -> moto[$i],
               'section_id' => $request -> moto_id[$i],
           ];
        array_push($moto_array,$array);
        }

        $cover_data = [
            'color_top' => $request -> color_top,
            'color_bottom' => $request -> color_bottom,
            'title' => $request -> Cover_titel,
            'pro_photo' => $pro_pic,
            'cover_photo' => $cover_pic,
            'social_link' => $socail_array,
            'moto' => $moto_array,
            'about_text' => $request -> about_text
        ];

        $cover_json_data = json_encode($cover_data);



        $setting_table = Setting::find(1);

        $setting_table -> setting_data =  $cover_json_data;

        $setting_table -> update();

        return back() -> with('success','Info Update successful');


    }

    /**
     * show admin experiance page
     */
    public function showExperiancePage(){
        $setting_table = Setting::find(1);
        $experiance_data = json_decode($setting_table -> experience);
        return view('admin.experiance',compact('experiance_data'));
    }
    /**
     * show admin review page
     */
    public function showReviewPage(){
        return view('admin.review');
    }

    /**
     * store Experiance data
     */
    public function storeExperiance(Request $request){

        $acd_count = count($request -> acd_e_id);
        $works_count = count($request -> works_e_id);

        //Academi experiance array
        $academi_arry = [];
        for ($i=0; $i < $acd_count; $i++) {
            $array = [
                'name' => $request -> acd_e_name[$i],
                'start' => $request -> acd_e_start[$i],
                'end' => $request -> acd_e_end[$i],
                'about' => $request -> acd_e_about_text[$i],
                'rendom_id' => $request ->acd_e_id[$i],

            ];
            array_push($academi_arry,$array);
        }

        //work experiance
        $works_array = [];
        for ($i=0; $i < $works_count; $i++) {
            $array = [
                'name' => $request -> works_e_name[$i],
                'start' => $request -> works_e_start[$i],
                'end' => $request -> works_e_end[$i],
                'about' => $request -> works_e_about_text[$i],
                'rendom_id' => $request -> works_e_id[$i],

            ];
            array_push($works_array,$array);
        }

        $experiance = [
            'academi' =>  $academi_arry,
            'works' =>  $works_array
        ];

        $json_data = json_encode($experiance);

        $setting_table = Setting::find(1);

        $setting_table -> experience =  $json_data;

        $setting_table -> update();

        return back() -> with('success','Info Update successful');


    }

    /**
     * update service data
     */
    public function updateServiceData(Request $request){

        $array_lenth = count($request -> name);
        $services = [];
        for ($i=0; $i < $array_lenth; $i++) {
            if ($request -> new_logo[$i] == 1) {
               $photo = $this -> photoUplode($request -> logo[$i],$request -> old_logo[$i] );
            }else{
                $photo = $request -> old_logo[$i];
            }

            $array = [
                'color' => $request -> color[$i],
                'name' => $request -> name[$i],
                'r_id' => $request -> r_id[$i],
                'about' => $request -> about_text[$i],
                'logo' => $photo
            ];
            array_push( $services,$array);
        }

        $json_data = json_encode($services);



        $setting_table = Setting::find(1);

        $setting_table -> service =  $json_data;

        $setting_table -> update();

        return back() -> with('success','Info Update successful');
    }
}
