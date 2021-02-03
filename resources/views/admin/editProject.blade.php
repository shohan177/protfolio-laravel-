@section('fav_tex')
Edit project
@endsection
@section('header')
<div class="row">
    <div class="dashboard_bar col-sm-6">
        Edit
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


    <form action="{{ route('update.project') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Column starts -->
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Project Edit</h4>
                        <a class="btn btn-outline-primary btn-rounded px-5 btn-sm " id="project_submit" >SAVE</a>
                    </div>
                    <div class="card-body">
                        @php
                            $p_data = json_decode($project_data -> json_data);
                            $project_cat = ($p_data -> categorys);
                            $pro_cat = "";
                            foreach ($project_cat as $value) {
                                $pro_cat .= $value -> name." ";
                            }

                        @endphp
                    <div class="row">
                        <div class="col-8">
                            <div class="form-row input-primary">

                                    <div class="col-sm-7">
                                        <input type="text" value="{{ $p_data -> name }}" name="name" class="form-control input-rounded" placeholder="Name">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" value="{{ $p_data -> batch }}" name="batch" class="form-control input-rounded" placeholder="Batch">
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <input type="text" value="{{ $p_data -> url }}" name="url" class="form-control input-rounded" placeholder="https://url">
                                    </div>


                            </div>
                        </div>
                        <div class="col-4">
                            <label  for="pro_pic"><img class="shadow" id="pro_44" width="200px" height="150px" style="cursor: pointer; border-radius: 2%; padding: 4px;" src="{{ URL::to('/') }}/media/projects/{{ $p_data -> photo }}" width="150px" alt=""></label>
                            <input name="photo" id="pro_pic" class="upload_image" code="pro_44"  type="file" style="display: none">
                            <input name="newphoto" value="{{ $p_data -> photo }}" type="text" style="display: none">
                        </div>
                    </div>
                        <div class="form-row">
                            <div class="col-sm-12 mt-3">
                                <textarea name="deatils" id="project_details" cols="30" rows="10"></textarea>
                                <textarea id="old_details" style="display: none">{{ $p_data -> deatils }}</textarea>
                                <textarea name="id" style="display: none">{{ $project_data -> id }}</textarea>
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
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlSelect2"> Multiple select category</label>
                            <select multiple class="form-control" name="cat[]" aria-label="Default select example">
                                @if (str_contains($pro_cat ,"000"))
                                    <option selected value="000">uncategorized</option>
                                @endif
                                @foreach ($category_data  as $item)
                                    @php
                                        $val = json_decode($item -> json_data);
                                        $ss = (str_contains($pro_cat ,$val -> r_id)) ? "selected" : "" ;
                                    @endphp
                                    <option {{ $ss }} value="{{ $val -> r_id }}">{{ $val -> val }}</option>
                                @endforeach



                              </select>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary"  value="save" name="" id="">
        </div>
    </form>


</div>




@endsection
