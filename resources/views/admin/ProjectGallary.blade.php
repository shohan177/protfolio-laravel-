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
    <div id="notification" class="alert alert-danger solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
        <strong>Done</strong>  {{ Session::get('success') }}.
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif
    {{-- <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">All</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Wordpress</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Html</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">laravel</a></li>
        </ol>
    </div> --}}
    <div class="row">
    @php
        $data =  App\Models\Project::latest() -> get();
    @endphp
    @foreach ($data as $item)
        @php
            $val = json_decode( $item-> json_data);
            $type ="";
            foreach ($val -> categorys as  $value) {
                $type .= $value -> name." /";
            }
        @endphp

        <div class="col-lg-12 col-xl-6">
            <div class="card">
                <div class="d-flex" style="margin-left:90%">
                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                    <a href="{{ URL::to('delete-project/') }}/{{ $item -> id }}" id="item_del" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                </div>
                <div class="card-body">
                    <div class="row m-b-30">
                        <div class="col-md-5 col-xxl-12">
                            <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                <div class="new-arrivals-img-contnent">
                                    <img class="img-fluid" style="height: 200px; width:380px"  src="{{ URL::to('/') }}/media/projects/{{ $val -> photo }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-xxl-12">
                            <div class="new-arrival-content position-relative">

                                <p class="price">{{ $val -> name }}</p>
                                {{-- <p>Category: <span class="item"> {{ $type }} <i class="fa fa-check-circle text-success"></i></span></p> --}}

                                <p>Category: <span class="item">{{ $val -> batch }}</span></p>
                                <p class="text-content"></p>{!! Str::of(htmlspecialchars_decode($val -> deatils)) -> words('20','...') !!}<p>
                                <div class="comment-review star-rating text-right">

                                    <span class="review-text">(34 views)  </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

    </div>
</div>




@endsection
