<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.addProject');
    }

    public function storecategory($val ,$id){
        $array = [
            'val' => $val,
            'r_id' => $id
        ];

        $json_data = json_encode($array);

        Category::create([
            'json_data' => $json_data,
            'status' => 1
        ]);

        return "done";
    }

    public function showCategory(){
        $data = Category::all();
        ?>
    <select  name="Cat[]"  multiple class="form-control" id="exampleFormControlSelect2">
    <option value="000" selected>uncategorized<i class="fa fa-close color-danger"></i></option>
        <?php
       foreach ($data as  $value) {
            $val = json_decode($value -> json_data);
            ?>

            <option value="<?php echo $val -> r_id ?>"><?php echo $val -> val ?><i class="fa fa-close color-danger"></i></option>



    <?php
    }
    ?>

    </select>
    <?php
    }

    public function storeProject(Request $request){

        if ($request -> hasFile('photo')) {

            $img = $request -> photo;
            $u_img = md5(time().rand()).'.'.$img -> getClientOriginalExtension();
            $img -> move(public_path('media/projects/'),$u_img);

        } else {
            $u_img = "camera.png";
        }



        $all_cat = count($request -> Cat );
        // manage category
        $category = [];
        for ($i=0; $i < $all_cat; $i++) {
           $arry = [
                'name' => $request -> Cat[$i]
           ];
           array_push($category,$arry);
        }

        $data = [
            'name' => $request -> name,
            'url' => $request -> url,
            'batch' => $request -> batch,
            'deatils' => $request -> deatils,
            'photo' => $u_img,
            'categorys' => $category,
        ];

        Project::create([
            'json_data' => json_encode($data),
            'status' => 1,
        ]);

        return redirect('/project-gallery')-> with('success','Project Added successful');

    }

    /**
     * delete project
     */
    public function deleteProject($id){
        $data = Project::find($id);
        $data -> delete();
        return back() -> with('success','Project delete successful');
    }

    /**
     * edit project
     */
    public function editShow($id){
        $project_data = Project::find($id);
        $category_data = Category:: all();

        return view('admin.editProject',compact('project_data','category_data'));
    }

    /**
     * update project
     */
    public function updateproject(Request $request){
        return $request -> all();
    }
}
