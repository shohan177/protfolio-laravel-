@section('header')
<div class="row">
    <div class="dashboard_bar col-sm-12">
        My Skills
     </div>
</div>
@endsection

@extends("admin.layouts.app")

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">


                            <h4 class="card-title">Services</h4>
                            <a class="btn btn-outline-primary btn-rounded  px-5 btn-sm" id="add_service_btn">Add</a>




                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>

                                    <th><strong>Logo</strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>


                                    <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""></div></td>
                                    <td>Wordpress</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Successful</div></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""></div></td>
                                    <td>Wordpress</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Successful</div></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>


                                    <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""></div></td>
                                    <td>Wordpress</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Successful</div></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

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

<!-- BEGIN MODAL ADD SERVICE -->
<div class="modal fade none-border"  id="add_service">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add Service</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="modal-body">

                <form id="service_form" method="POST">
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" class="form-control input-rounded border-info bg-info-light" placeholder="    Name">
                    </div>
                    <div class="form-group">
                        <input name="level" type="text" class="form-control input-rounded border-info bg-info-light" placeholder="    Level">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="SAVE" class="btn btn-info btn-rounded px-5 btn-sm float-right">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
