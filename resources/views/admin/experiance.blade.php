@section('header')
<div class="row">
    <div class="dashboard_bar col-sm-6">
        Experiance
     </div>
     <div class="col-sm-6">
        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm" id="experiance_submit">UPDATE</a>
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

    <form id="experiance-form" action="{{ route('experiance.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="row">
            <!-- Column starts -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Academic Degree</h4>
                        <a class="btn btn-outline-primary btn-rounded px-5 btn-sm add_accordion" div="acd_e" >Add</a>
                    </div>
                    <div class="card-body" id="acd_e">
                        <!-- Default accordion -->
                        @foreach ($experiance_data -> academi as $val)

                        <div id="accordion-{{ $val -> rendom_id }}" class="accordion accordion-primary">

                                <div class="accordion__item">
                                    <div class="accordion__header rounded-lg collapsed" data-toggle="collapse" data-target="#default_{{ $val -> rendom_id }}" aria-expanded="false">
                                        <span class="accordion__header--text">{{ $val -> name }}</span>
                                        <button id="" style="margin-right: 30px" remove_id="accordion-{{ $val -> rendom_id }}" class="close close-item">&times;</button>
                                        <span class="accordion__header--indicator"></span>
                                    </div>
                                    <div id="default_{{ $val -> rendom_id }}" class="accordion__body collapse" data-parent="#accordion-{{ $val -> rendom_id }}" style="">
                                        <div class="accordion__body--text bg-primary-light">
                                            <div class="form-row input-info ">
                                                <div class="col-sm-7">
                                                    <input type="text" value="{{ $val -> name }}" class="form-control input-rounded" name="acd_e_name[]" placeholder="Degree name">
                                                    <input type="hidden" value="{{ $val -> rendom_id }}"  name="acd_e_id[]">

                                                </div>
                                                <div class="col mt-2 mt-sm-0">
                                                    <input type="text" value="{{ $val -> start }}" class="form-control input-rounded" name="acd_e_start[]" placeholder="Start">
                                                </div>
                                                <div class="col mt-2 mt-sm-0">
                                                    <input type="text" value="{{ $val -> end }}" class="form-control input-rounded" name="acd_e_end[]" placeholder="End">
                                                </div>
                                            </div>
                                            <div class="form-row input-info  mt-3">
                                                <div class="col mt-2 mt-sm-0">
                                                    <textarea name="acd_e_about_text[]" style="border-radius: 10px;"  class="form-control" placeholder="Course Details" rows="4">{{ $val -> about }}</textarea>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                         @endforeach
                    </div>
                </div>
            </div>
            <!-- Column ends -->
            <!-- Column starts -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Works Experiance</h4>
                        <a class="btn btn-outline-primary btn-rounded px-5 btn-sm add_accordion" div="works_e">Add</a>
                    </div>
                    <div class="card-body" id="works_e">
                        <!-- Default accordion -->
                        @foreach ($experiance_data -> works as $val)

                            <div id="accordion-{{ $val -> rendom_id }}" class="accordion accordion-danger">
                            <div class="accordion__item">
                                <div class="accordion__header rounded-lg collapsed" data-toggle="collapse" data-target="#default_{{ $val -> rendom_id }}" aria-expanded="false">
                                    <span class="accordion__header--text">{{ $val -> name }}</span>
                                    <button id="remove_slide" style="margin-right: 30px" remove_id="accordion-{{ $val -> rendom_id }}" class="close close-item">&times;</button>
                                    <span class="accordion__header--indicator"></span>
                                </div>
                                <div id="default_{{ $val -> rendom_id }}" class="accordion__body collapse" data-parent="#accordion-{{ $val -> rendom_id }}" style="">
                                    <div class="accordion__body--text bg-warning-light">
                                        <div class="form-row input-info ">
                                            <div class="col-sm-7">
                                                <input type="text" value="{{ $val -> name }}" class="form-control input-rounded" name="works_e_name[]" placeholder="Degree name">
                                                <input type="hidden" value="{{ $val -> rendom_id }}"  name="works_e_id[]">

                                            </div>
                                            <div class="col mt-2 mt-sm-0">
                                                <input type="text" value="{{ $val -> start }}" class="form-control input-rounded" name="works_e_start[]" placeholder="Start">
                                            </div>
                                            <div class="col mt-2 mt-sm-0">
                                                <input type="text" value="{{ $val -> end }}" class="form-control input-rounded" name="works_e_end[]" placeholder="End">
                                            </div>
                                        </div>
                                        <div class="form-row input-info  mt-3">
                                            <div class="col mt-2 mt-sm-0">
                                                <textarea name="works_e_about_text[]" style="border-radius: 10px;"  class="form-control" placeholder="Course Details" rows="4">{{ $val -> about }}</textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach


                    </div>
                </div>
            </div>
        </div>

    </form>
</div>




@endsection
