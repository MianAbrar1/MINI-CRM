@extends('applayout')
@section('title')
    Company
@endsection

@section('form')
<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add New</h3>
        </div>
<form id="my-form">
    @csrf <!-- CSRF protection --><div class="card-body">
        <div class="form-group">
        <label for="first_name">Name:</label>
        <input type="text" id="name" class="form-control" name="name">
        </div>
        <div class="form-group">
        <label for="website">Website:</label>
        <input type="text" id="website" class="form-control" name="website">
        </div>
        <!-- Other employee details: Company, Email, Phone -->
        <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" class="form-control" name="email">
        </div>
        <div class="form-group">
    <label for="logo">logo:</label>
    <input type="file" id="file" class="form-control" name="file">
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary" id="btnSubmit">Add Company</button>
        </div>
    </div>
</form>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Logo</th>
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
                   url:"{{ route('addCompany')}}",
                   data:data,
                   processData:false,
                   contentType:false,
                   success:function(data){
                       $("#output").text(data.res);
                       $("#btnSubmit").prop("disable",false);
                       $("input[type='text']").val('');
                       $("input[type='email']").val('');
                       $("input[type='file']").val('');
                       $("input[type='website']").val('');
                    },
                    error:function(e){
                        $("#output").text(e.responseText);
                        $("#btnSubmit").prop("disable",false);
                        $("input[type='text']").val('');
                        $("input[type='email']").val('');
                        $("input[type='file']").val('');
                        $("input[type='website']").val('');
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
        ajax: "{{ route('companies.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'website', name: 'website'},
            {data: 'logo', name: 'logo'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
    </script>
@endsection
