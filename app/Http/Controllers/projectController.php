<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function store($val ,$id){
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
}
