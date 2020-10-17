@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Batches</h3>
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
                            <form action="{{ route('admin.Master.BatchesStore') }}" method="post" class="add_form">
                                {{ csrf_field() }}
                                <div class="card-body row"> 
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputEmail1">Batch No.</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="batch_no" id="code" class="form-control" placeholder="Enter Batch No." maxlength="100">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">For Date</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="date" name="for_date" id="" class="form-control">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">from Time</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="form_time" id="" class="form-control" maxlength="4">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="exampleInputPassword1">TO Time</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="to_time" id="" class="form-control" maxlength="4">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="exampleInputPassword1">Total Person</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="total_person" id="" class="form-control" maxlength="4">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="exampleInputPassword1">Batch Strength</label>
                                        <span class="fa fa-asterisk"></span>
                                        <input type="text" name="batch_strength" id="" class="form-control" maxlength="4">
                                    </div> 
                                </div> 
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-primary" id="district_table"> 
                             <table id="district_datatable" class="table table-striped table-hover control-label">
                                 <thead>
                                     <tr>
                                         <th>Name</th>
                                         <th>Address</th>
                                         <th>Mobile No.</th>
                                         <th>Total Person</th> 
                                     </tr>
                                 </thead>
                                 <tbody>
                                    
                                 </tbody>
                             </table>
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

