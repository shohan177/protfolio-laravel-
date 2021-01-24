<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class skillController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting_data = Setting::find(1);
       $services = json_decode($setting_data -> service);
       return view('admin.add_skill',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Skill::create([
            'name' => $request -> name,
            'level' => $request -> level,
        ]);

        return $request -> name;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAllSkill(){
        $s_data = Skill::latest() -> get();
        foreach ($s_data as  $val) {

           if (30 >= $val->level) {
              $retVal = "danger";
           } elseif (50 >= $val->level) {
            $retVal = "warning";
           }else {
            $retVal = "success";
           }

           $date = strtotime($val -> updated_at)

            ?>

            <tr>
            <td><?php echo $val -> name?></td>
            <td>
                <div class="progress bgl-<?php echo $retVal?>">
                    <div class="progress-bar bg-<?php echo $retVal?>" style="width:<?php echo $val -> level?><?php echo "px"?>" role="progressbar"><span class="sr-only"><?php echo $val -> level?></span>
                    </div>
                </div>
            </td>

            <td><span class="badge badge-<?php echo $retVal?>"><?php echo $val -> level?> %</span>
            <td><?php echo date('d. M .Y',$date)?></td>
            </td>
            <td><span><a href="#" id="skill_edit" skill_edit_id="<?php echo $val -> id ?>" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
            </td>
        </tr>

        <?php
        }
    }
}
