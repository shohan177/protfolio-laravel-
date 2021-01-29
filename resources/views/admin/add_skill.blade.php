@section('header')
<div class="row">
    <div class="dashboard_bar col-sm-12">
        My Skills
     </div>
</div>
@endsection
@section('fav_tex')
    Service
@endsection

@extends("admin.layouts.app")

@section('body')
<div class="container-fluid">
    @if (Session::has('success'))
    <div id="notification" class="alert alert-secondary alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
        <strong>Done!</strong> {{ Session::get('success') }}.
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif
    <div class="row">

         <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Services</h4>
                    <div class="btn-group">



                        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm ml-1" id="form_submit_service">UPDATE</a>
                        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm ml-1" id="add_service">Add</a>

                    </div>

                </div>
                <form id="service_form" action="{{ route('sevice.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card-body " id="service_container">
                    @foreach ($services as $val)
                        <div id="accordion-{{ $val -> r_id }}" class="accordion accordion-danger-solid">
                            <div class="accordion__item">
                                <div class="accordion__header rounded-lg collapsed" data-toggle="collapse" data-target="#default_{{ $val -> r_id }}" aria-expanded="false">
                                    <span class="accordion__header--text">{{ $val -> name }}</span>
                                    <button id="" style="margin-right: 30px" remove_id="accordion-{{ $val -> r_id }}" class="close close-item">&times;</button>
                                    <span class="accordion__header--indicator"></span>
                                </div>
                                <div id="default_{{ $val -> r_id }}" class="accordion__body collapse" data-parent="#accordion-{{ $val -> r_id }}" style="">
                                    <div class="accordion__body--text">
                                        <div class="form-row input-info ">
                                            <div class="col-sm-5">
                                                <input type="text" value="{{ $val -> name }}" name="name[]" class="form-control input-rounded" placeholder="Service name">

                                            </div>
                                            <div class="col-sm-2">
                                                <input type="color" class="form-control input-rounded" id="favcolor" name="color[]" value="{{ $val -> color }}">
                                            </div>
                                            <div class="col mt-5 mt-sm-0 ml-lg-2">
                                                <label for="add_{{ $val -> r_id }}"><img id="{{ $val -> r_id }}" style="cursor: pointer; border-radius: 5px;" src="{{ URL::to('/') }}/media/home/{{ $val -> logo}}" class="w-75 h-50" alt=""></label>
                                                <input name="logo[]" id="add_{{ $val -> r_id }}"  class="upload_image" code="{{ $val -> r_id }}"  type="file"  style="display: none">
                                                <input name="old_logo[]" value="{{ $val -> logo}}" type="text" style="display: none">
                                                <input name="r_id[]" value="{{ $val -> r_id }}" type="text" style="display: none">
                                                <input  type='text' id="new_{{ $val -> r_id }}" name="new_logo[]" value="0" style="display: none">
                                            </div>
                                        </div>
                                        <div class="form-row input-info  mt-3">
                                            <div class="col mt-2 mt-sm-0">
                                                <textarea name="about_text[]" value="{{ $val -> about }}" style="border-radius: 10px;"  class="form-control" placeholder="Service Details" rows="3">{{ $val -> about }}</textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    <!-- Default accordion -->

                </div>

                </form>
            </div>


        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">skills</h4>
                    <a class="btn btn-outline-warning btn-rounded  px-5 btn-sm"  id="add_skill_btn">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Task</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="skill_body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>

<!-- BEGIN MODAL ADD SKILL -->
<div class="modal fade none-border"  id="add_skill">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add Skill</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="modal-body">

                <form id="skill_form" method="post">
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" class="form-control input-rounded border-warning bg-info-light" placeholder="    Name">
                    </div>
                    <div class="form-group">
                        <input name="level" type="text" class="form-control input-rounded border-warning bg-info-light" placeholder="    Level">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="SAVE" class="btn btn-warning btn-rounded  px-5 btn-sm float-right">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection
