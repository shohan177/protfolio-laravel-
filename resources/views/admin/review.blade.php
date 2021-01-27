@section('fav_tex')
    Review
@endsection
@section('header')
<div class="row">
    <div class="dashboard_bar col-sm-6">
        Reviews
     </div>
     <div class="col-sm-6">
        <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm" data-toggle="modal" data-target="#modalGrid">ADD</a>
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

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Media list</h4>
                </div>
                <div class="card-body ">
                    <div class="bootstrap-media" >
                        <ul class="list-unstyled" id="review_container">


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalGrid">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Review</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form id="review_form" action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-row input-warning ">

                            <div class="form-group col-md-4">
                                <label  for="pro_pic"><img id="up_44" width="150px" height="150px" style="cursor: pointer; border-radius: 50%; border: 5px solid #40189D; padding: 4px;" src="{{ URL::to('/') }}/media/logo/camera.png" width="150px" alt=""></label>
                                <input name="photo" id="pro_pic" class="upload_image" code="up_44"  type="file" style="display: none">

                            </div>
                            <div class="form-group col-md-8">
                                <label>Name</label>
                                <input type="text" class="form-control input-rounded" name="name" placeholder="your name here"><br>
                                <label>Country</label>
                                <input type="text" class="form-control input-rounded" name="country" placeholder="your countery">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Comment</label>
                                <textarea style="border-radius: 10px;" name="comment" class="form-control" id="" cols="30" rows="10"></textarea>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light btn-rounded  px-5 btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-rounded  px-5 btn-sm">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>


</div>




@endsection
