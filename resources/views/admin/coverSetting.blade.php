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


    <form id="slider-form" action="{{ route('store.slider') }}" method="POST" enctype="multipart/form-data">
    @csrf


        <div class="row ">
            <div class="col-sm-4">
                <div class="card d-flex flex-xl-column flex-sm-column flex-md-row flex-column">
                    <div class="card-body text-center border-bottom profile-bx">
                        <div class=" mb-4">

                            <label  for="pro_pic"><img id="up_44" width="150px" height="150px" style="cursor: pointer; border-radius: 50%; border: 5px solid #40189D; padding: 4px;" src="{{ URL::to('/') }}/media/home/{{ $cover_data -> pro_photo }}" width="150px" alt=""></label>
                            <input name="pro_pic" id="pro_pic" class="upload_image" code="up_44"  type="file" style="display: none">
                            <input name="old_pro_pic" type="text" value="{{ $cover_data -> pro_photo }}" style="display: none">
                            <input  type='text' id="new_up_44" name="new_pro" value="0" style="display: none">

                        </div>

                        <div class="form-group input-primary">

                            <input name="Cover_titel" type="text" value="{{ $cover_data -> title }}" class="form-control input-rounded" placeholder="Name">
                        </div>
                        <div class="center">

                            <label for="add_cover_pc"><img id="up_33" style="cursor: pointer; border-radius: 5px;" src="{{ URL::to('/') }}/media/home/{{ $cover_data -> cover_photo }}" class="w-75 h-50" alt=""></label>
                            <input name="cover_pic" id="add_cover_pc"  class="upload_image" code="up_33"  type="file"  style="display: none">
                            <input name="old_cover_pic" value="{{ $cover_data -> cover_photo }}" type="text" style="display: none">
                            <input  type='text' id="new_up_33" name="new_cover" value="0" style="display: none">


                        </div>
                        <div class="row form-group">
                            <div class="col-5">
                                <input  type="text" name="color_top" value="{{ $cover_data -> color_top }}" class="form-control input-rounded">
                            </div>
                            <div class="col-2 mt-2">
                                <a href="" id="reset_color" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-refresh"></i></a>
                            </div>

                            <div class="col-5">
                                <input  type="text" name="color_bottom" value="{{ $cover_data -> color_bottom }}" class="form-control input-rounded">
                            </div>


                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8">
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

                                        <th><strong>Font Awesome</strong></th>
                                        <th><strong>name</strong></th>
                                        <th><strong>URL</strong></th>

                                    </tr>
                                </thead>
                                <tbody id="link-container">

                                    @foreach ($cover_data -> social_link as $data)
                                        <tr id="div_{{ $data -> section_id }}">
                                            <td><input type="text" value="{{ $data -> logo }}" class="form-control input-rounded border-info" name="logo[]" placeholder="logo"></td>
                                            <td><input type="text" value="{{ $data -> name }}" class="form-control input-rounded border-info" name="name[]" placeholder="Name"></td>
                                            <td><input type="text" value="{{ $data -> url }}" class="form-control input-rounded border-info" name="url[]" placeholder="url"></td>
                                            <td><input type="hidden" name="id[]" value="{{ $data -> section_id }}"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="" link_id="{{ $data -> section_id }}" class="del btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slider Moto </h4>
                        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm" id="add_moto">Add</a>
                    </div>
                    <div class="card-body">
                        <div id="moto-container">

                            @foreach ($cover_data -> moto as $data)

                            <div id="div_{{ $data -> section_id }}" class="row">
                                <div class="col-sm-8">
                                    <div class="form-group input-info">
                                       <input type="text" class="form-control input-rounded" value="{{ $data -> name }}" name="moto[]" placeholder="moto">
                                       <input type="hidden" name="moto_id[]" value="{{ $data -> section_id }}">
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <a href="" link_id="{{ $data -> section_id }}" class="del btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                            @endforeach



                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slider Moto </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">

                                <div class="form-group input-info">
                                    <textarea name="about_text" style="border-radius: 10px;"  class="form-control" rows="8">{{$cover_data ->  about_text}}</textarea>
                                </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>




@endsection
