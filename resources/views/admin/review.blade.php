@section('header')
<div class="row">
    <div class="dashboard_bar col-sm-6">
        Reviews
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


    <form id="slider-form" action="" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Academic Degree</h4>
                        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm" id="add_degree">Add</a>
                    </div>
                    <div class="card-body">
                        <!-- Default accordion -->
                        <div id="accordion-one" class="accordion accordion-primary">
                            <div class="accordion__item">
                                <div class="accordion__header rounded-lg collapsed" data-toggle="collapse" data-target="#default_collapseOne" aria-expanded="false">
                                    <span class="accordion__header--text">Accordion Header One</span>
                                    <button id="" style="margin-right: 30px" remove_id="accordion-one" class="close">&times;</button>
                                    <span class="accordion__header--indicator"></span>
                                </div>
                                <div id="default_collapseOne" class="accordion__body collapse" data-parent="#accordion-one" style="">
                                    <div class="accordion__body--text bg-primary-light">
                                        <div class="form-row input-info ">
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control input-rounded" placeholder="Degree name">
                                            </div>
                                            <div class="col mt-2 mt-sm-0">
                                                <input type="text" class="form-control input-rounded" placeholder="Start">
                                            </div>
                                            <div class="col mt-2 mt-sm-0">
                                                <input type="text" class="form-control input-rounded" placeholder="End">
                                            </div>
                                        </div>
                                        <div class="form-row input-info  mt-3">
                                            <div class="col mt-2 mt-sm-0">
                                                <textarea name="about_text" style="border-radius: 10px;"  class="form-control" placeholder="Course Details" rows="4"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>




@endsection
