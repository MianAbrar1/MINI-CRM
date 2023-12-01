@extends('applayout')
@section('title')
    Employess
@endsection

@section('form')
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add New Employee
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Employee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="my-form">
                @csrf <!-- CSRF protection --><div class="card-body">
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" id="first_name" class="form-control" name="first_name">
                        </div>
                        <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" id="last_name" class="form-control" name="last_name">
                        </div>
                        <!-- Other employee details: Company, Email, Phone -->

                        <!-- Example: Company selection -->

                        <div class="form-group">
                    <label for="company">Company:</label>
                    <input type="text" id="company" class="form-control" name="company_name">
                        </div>
                        <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" class="form-control" name="phone">
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="btnSubmit">Add Employee</button>
                        </div>
                </div>
            </form>
            <span id="output"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('table')
<div class="container">
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-bordered user_datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First_Name</th>
                        <th>Last_Name</th>
                        <th>Company_Name</th>
                        <th>Email</th>
                        <th>Phone#</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('js1')
    <script>
         $(document).ready(function(){
            $("#my-form").submit(function(event){
                event.preventDefault();
               var form = $("#my-form")[0];
               var data = new FormData(form);
               $("#btnSubmit").prop("disable",true);
               $.ajax({
                   type:"POST",
                   url:"{{ route('addEmployee')}}",
                   data:data,
                   processData:false,
                   contentType:false,
                   success:function(data){
                       $("#output").text(data.res);
                       $("#btnSubmit").prop("disable",false);
                       $("input[type='text']").val('');
                       $("input[type='email']").val('');
                    },
                    error:function(e){
                        $("#output").text(e.responseText);
                        $("#btnSubmit").prop("disable",false);
                        $("input[type='text']").val('');
                        $("input[type='email']").val('');
                    }
                })
            });
        });
    </script>
@endsection
@section('js2')
    <script type="text/javascript">
         $(function () {
    var table = $('.user_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('employees.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'company_name', name: 'company_name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
    </script>
@endsection
