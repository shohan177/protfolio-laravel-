@section('fav_tex')
Projects
@endsection
@section('header')
<div class="row">
    <div class="dashboard_bar col-sm-6">
        Projects
     </div>
     {{-- <div class="col-sm-6">
        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm" id="experiance_submit">UPDATE</a>
     </div> --}}
</div>
@endsection
@extends("admin.layouts.app")
@section('body')


<div class="container-fluid">
    {{-- notification  --}}
    @if (Session::has('success'))
    <div id="notification" class="alert alert-secondary alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
        <strong>Done!</strong> {{ Session::get('success') }}.
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif



        <div class="row">
            <!-- Column starts -->
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add new project</h4>
                        <a class="btn btn-outline-primary btn-rounded px-5 btn-sm " id="project_submit" >SAVE</a>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="form-row input-primary">

                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-rounded" placeholder="Name">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control input-rounded" placeholder="Batch">
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <input type="text" class="form-control input-rounded" placeholder="https://www.google.com">
                                    </div>


                            </div>
                        </div>
                        <div class="col-4">
                            <label  for="pro_pic"><img id="pro_44" width="200px" height="150px" style="cursor: pointer; border-radius: 2%; border: 5px solid #8d8a96; padding: 4px;" src="{{ URL::to('/') }}/media/logo/camera.png" width="150px" alt=""></label>
                            <input name="photo" id="pro_pic" class="upload_image" code="pro_44"  type="file" style="display: none">
                        </div>
                    </div>
                        <div class="form-row">
                            <div class="col-sm-12 mt-3">
                                <textarea name="" id="project_details" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column ends -->
            <!-- Column starts -->

            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        {{-- <h4 class="card-title">Works Experiance</h4>
                        <a class="btn btn-outline-primary btn-rounded px-5 btn-sm add_accordion" div="works_e">Add</a> --}}
                        <div class="input-group mb-3">
                            <input type="text" id="cat_valu" placeholder="Add Catagory" class="form-control border-primary">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm" id="cat_save" type="button">ADD</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlSelect2"> Multiple select category</label>
                            <div class="" id="cat_select">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>




@endsection
