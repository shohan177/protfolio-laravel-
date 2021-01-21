@section('header')
<div class="row">
    <div class="dashboard_bar col-sm-4">
        slider
     </div>
     <div class="col-sm-8">
        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm" id="slider_submit">UPDATE</a>
     </div>
</div>
@endsection
@extends("admin.layouts.app")
@section('body')
<form id="slider-form" action="{{ route('store.slider') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slider Title</h4>

                    </div>
                    <div class="card-body">



                        <div class="center">

                            <label  for="pro_pic"><img id="up_44" style="cursor: pointer; border-radius: 50%; border: 5px solid #40189D; padding: 4px;" src="/3.jpg" width="150px" alt=""></label>
                            <input name="pro_pic" id="pro_pic" class="upload_image" code="up_44"  type="file" style="display: none">
                            <input name="old_pro_pic" type="text" style="display: none">
                            <input  type='text' id="new_pro_pic" value="1st" style="display: none">


                        </div>
                        <div class="form-group input-primary mt-lg-2">

                            <input name="Cover_titel" type="text" class="form-control input-rounded" placeholder="Name">
                        </div>
                        <div class="center">
                            <label for="">Cover Photo</label>
                            <label for="add_cover_pc"><img id="up_33" style="cursor: pointer; border-radius: 5px;" src="/shohan.jpg" class="w-75" alt=""></label>
                            <input name="cover_pic" id="add_cover_pc"  class="upload_image" code="up_33"  type="file"  style="display: none">
                            <input name="old_cover_pic" type="text" style="display: none">
                            <input  type='text' id="new_cover_pic" value="1st" style="display: none">


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Social Links</h4>
                        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm" id="add_socal_link">Add</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead >
                                    <tr>

                                        <th><strong>Logo</strong></th>
                                        <th><strong>name</strong></th>
                                        <th><strong>URL</strong></th>

                                    </tr>
                                </thead>
                                <tbody id="link-container">


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slider Moto </h4>
                        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm" id="add_moto">Add</a>
                    </div>
                    <div class="card-body">
                        <div id="moto-container">

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>


</form>




@endsection
