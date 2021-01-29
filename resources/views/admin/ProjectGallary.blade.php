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

    <form id="experiance-form" action="{{ route('experiance.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="row">
            <!-- Column starts -->
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Academic Degree</h4>
                        <a class="btn btn-outline-primary btn-rounded px-5 btn-sm add_accordion" div="acd_e" >Add</a>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <!-- Column ends -->
            <!-- Column starts -->
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Works Experiance</h4>
                        <a class="btn btn-outline-primary btn-rounded px-5 btn-sm add_accordion" div="works_e">Add</a>
                    </div>
                    <div class="card-body">
                        <h1>hello</h1>
                        <div class="form-group">
                                    <label for="exampleFormControlSelect2"> Multiple select category</label>
                                    <select id="cat_select" name=""  multiple class="form-control" id="exampleFormControlSelect2">



                                        <option name="id" value="">hello</option>
                                        <option name="id" value="">hello</option>
                                        <option name="id" value="">hello</option>
                                        <option name="id" value="">hello</option>
                                        <option name="id" value="">hello</option>



                                    </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>




@endsection
