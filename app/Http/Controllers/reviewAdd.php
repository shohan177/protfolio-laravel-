<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class reviewAdd extends Controller
{
     /**
     * show admin review page
     */
    public function showReviewPage(){
        return view('admin.review');
    }

    public function storeReview(Request $request){

        if ($request -> hasFile('photo')) {

            $img = $request -> photo;
            $u_img = md5(time().rand()).'.'.$img -> getClientOriginalExtension();
            $img -> move(public_path('media/review/'),$u_img);

        } else {
            $u_img = "camera.png";
        }

        $arra =[
            'name' => $request -> name,
            'country' => $request -> country,
            'comment' => $request -> comment,
            'photo' => $u_img,
        ];
        $jsondata = json_encode($arra);
        Reviews::create([
            'json_data' => $jsondata,
            'status' => 1,
        ]);

        return "Thanks For YOur Feedback";
    }

    public function showAllReview(){
        $data = Reviews::latest() -> get();

        foreach ($data as $item) {
            $val = json_decode( $item -> json_data);
         ?>

                            <li class="media mt-4">
                                <img class="mr-3 " style="height: 50px; width: 50px;border-radius: 50%" width="60" src="media/review/<?php echo  $val-> photo ?>" alt="DexignZone">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="mt-0"><?php echo $val-> name?></h5>
                                        </div>
                                        <div class="col" style="float: right;">
                                            <!-- <span><a href="#" id="skill_edit" skill_edit_id="" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i>
                                            </a><a id="skill_delete" skill_delete_id="" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a> -->
                                        </span>
                                        </div>
                                    </div>
                                    <p class="mb-0"><?php echo  $val-> comment ?></p>
                                </div>
                            </li>
         <?php
        }
    }
}
