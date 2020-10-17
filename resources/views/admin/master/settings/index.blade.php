@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Settings</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                </ol>
            </div>
        </div> 
        <div class="card card-info"> 
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary"> 
                            <form action="{{ route('admin.Master.SettingsStore') }}" method="post" class="add_form">
                                {{ csrf_field() }}
                                <div class="card-body row"> 
                                    <div class="col-lg-6 form-group">
                                        <label for="exampleInputEmail1">Mandir Name</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="mandir_name" id="code" class="form-control" placeholder="Enter Mandir name"maxlength="100">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="exampleInputPassword1">Mandir Adderss</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="mandir_address" id="" class="form-control" placeholder="Enter Mandir Adderss" maxlength="200">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">Authority Name</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="authority_name" id="" class="form-control" placeholder="Enter Authorty Name" maxlength="50">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">Batch Time</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="batch_time" id="" class="form-control"maxlength="4">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">Batch Strength</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="batch_strength" id="zp_ward" class="form-control"maxlength="10">
                                    </div>
                                    
                                </div> 
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div> 
                    </div> 
                </div>
            </div> 
        </div> 
    </section>
    @endsection
    @push('scripts')
    <script type="text/javascript"> 
        $('#district_datatable').DataTable();
    </script>
    @endpush 

