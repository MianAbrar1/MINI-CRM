@extends('applayout')
@section('title')
    Employess
@endsection

@section('form')
<center>
    <h1 class="display-4 mb-20 text-blue">EMPLOYEES</h1>
    <a class="btn btn-success" href="javascript:void(0)" id="createNewEmployee"> Add New Employee</a>
    <br><br><br>
        <label for="search"><i class="icon-search">search Employees by Company     </i></label><br>
        <input class="table-filter" type="search" data-table="user_datatable" placeholder="Search...">
      <!--  Table  -->
      <div class="table-responsive">
            <br>
            <br>
</center>
@endsection
@section('table')
<div class="container">
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-bordered user_datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th width="280pxx">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="employeeForm" name="employeeForm" class="form-horizontal">
                   <input type="hidden" name="employee_id" id="employee_id">
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
                <input type="text" id="company_name" class="form-control" name="company_name">
                    </div>
                    <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" class="form-control" name="phone">
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js1')
    <script type="text/javascript">
         $(function(){

            $('#createNewEmployee').click(function () {
        $('#saveBtn').val("create-employee");
        $('#employee_id').val('');
        $('#employeeForm').trigger("reset");
        $('#modelHeading').html("Add New Employee");
        $('#ajaxModel').modal('show');
    });

    $('body').on('click', '.editProduct', function () {
      var employee_id = $(this).data('id');
      $.get("{{ route('employees.index') }}" +'/' + employee_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Employee Profile");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#employee_id').val(data.id);
          $('#first_name').val(data.first_name);
          $('#last_name').val(data.last_name);
          $('#company_name').val(data.company_name);
          $('#email').val(data.email);
          $('#phone').val(data.phone);
      })
    });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');

        $.ajax({
          data: $('#employeeForm').serialize(),
          url: "{{ route('employees.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $('#employeeForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });

    $('body').on('click', '.deleteProduct', function () {

     var employee_id = $(this).data("id");
     confirm("Are You sure want to delete !");

     $.ajax({
         type: "DELETE",
         url: "{{ route('employees.store') }}"+'/'+employee_id,
         success: function (data) {
             table.draw();
         },
         error: function (data) {
             console.log('Error:', data);
         }
     });
 });

        });
    </script>
    <script>

        (function(document) {
            'use strict';
            var LightTableFilter = (function(Arr) {
                var _input;
                function _onInputEvent(e) {
                    _input = e.target;
                var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                Arr.forEach.call(tables, function(table) {
                    Arr.forEach.call(table.tBodies, function(tbody) {
                        Arr.forEach.call(tbody.rows, _filter);
                    });
                });
            }
            function _filter(row) {
                var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
            }
            return {
                init: function() {
                    var inputs = document.getElementsByClassName('table-filter');
                    Arr.forEach.call(inputs, function(input) {
                        input.oninput = _onInputEvent;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                LightTableFilter.init();
            }
        });
    })(document);
</script>
<script>
    function applyFilter() {
        var companyName = $('#company_name_filter').val();

        // Use DataTables API to apply the filter
        $('.user_datatable').DataTable().ajax.url("{{ route('employees.index') }}?company_name=" + companyName).load();
    }
</script>
@endsection
@section('js2')
<script type="text/javascript">
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
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
