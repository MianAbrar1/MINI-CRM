<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Companies</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    /**************************************/
/***************GENERAL****************/
/**************************************/

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  color: #666;
  font-family: "Roboto", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
  font-size: 16px;
  margin: 0;
}

.container {
  margin-right: auto;
  margin-left: auto;
  max-width: 1170px;
  padding-left: 15px;
  padding-right: 15px;
}


/**************************************/
/****************TABLE*****************/
/**************************************/

.table-responsive {
  overflow-x: auto;
}

table {
  border: 1px solid #ddd;
  border-collapse: collapse;
  border-radius: 3px;
  color: #666;
  display: table;
  font-size: 13px;
  max-width: 100%;
  overflow-x: auto;
  position: relative;
  width: 100%;
}

table td,
table th {
  border-top: 1px solid #eee;
  display: table-cell;
  padding: 12px;
  text-align: left;
  vertical-align: middle;
}

table th {
  border-bottom: 2px solid #eee;
  vertical-align: middle;
}

.item-cell {
  padding: 2px 12px;
  /* use for cells containing buttons, sliders, etc. */
}


/**************************************/
/************FORMS & INPUTS************/
/**************************************/

.form-control {
  margin: 0.5rem 0;
  position: relative;
}

input,
select,
textarea {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #ddd;
  border-radius: 3px;
  color: #666;
  display: block;
  font-size: 13px;
  line-height: 1.25;
  max-width: 100%;
  padding: 6px 12px;
  position: relative;
  width: 100%;
}

input::-moz-placeholder,
select::-moz-placeholder,
textarea::-moz-placeholder {
  color: #999;
  opacity: 1;
}

input:focus,
textarea:focus {
  border: 1px solid #40bb93;
  outline: medium none;
}

input:disabled,
textarea:disabled,
select:disabled {
  background-color: #eee;
  color: #999;
  cursor: not-allowed;
  opacity: 1;
}

.inline input,
.inline select,
.inline textarea {
  display: inline-block;
  width: auto;
}

/********** Search Bar **********/
input[type="search"] {
  border-width: 2px;
  display: inline-block;
  padding-left: 2.5em;
  transition: width 0.4s ease-in-out 0s;
  width: 150px;
}

input[type="search"]:focus {
  width: 60%;
}

label[for="search"] {
  bottom: 6px;
  color: #999;
  left: 1em;
  position: absolute;
  z-index: 1;
}

[contenteditable]:hover {
  background-color: #f8f8f8;
  cursor: cell;
}

[contenteditable]:focus {
  background-color: #f8f8f8;
}


/********** Checkbox Sliders **********/
.switch {
  display: inline-block;
  height: 2em;
  position: relative;
  vertical-align: middle;
  width: 3.5em;
}

.switch input {
  display: none;
  margin: 0;
}

.slider {
  background-color: #ccc;
  border-radius: 1em;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: all 0.4s ease 0s;
}

.slider::before {
  background-color: white;
  border-radius: 0.7em;
  bottom: 4px;
  content: "";
  height: 1.4em;
  left: 4px;
  position: absolute;
  transition: all 0.4s ease 0s;
  width: 1.4em;
}

input:checked + .slider {
  background-color: #40bb93;
}

input:checked + .slider:before {
  -webkit-transform: translateX(1.5em);
  -ms-transform: translateX(1.5em);
  transform: translateX(1.5em);
}
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="text" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://source.unsplash.com/900x900/?apple,code" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User Logined</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="text" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>
            </a>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Registeration here
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="companies/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employees/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register as an Employee</p>
                </a>
              </li>
            </li>
        </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="companies" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Companies</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="employees" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Employees</p>
                </a>
              </li>
            </li>
        </ul>
      </nav>
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Companies</h1>
          </div>
          <br>
          <div>
            <button class="btn"><a href="{{ route('companies.create') }}">Create New Company</a></a></button>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- Table Menu -->
      {{-- <!--  <a href="{{ route('employees.create') }}">Create New Employee</a> --> --}}
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <div class="form-control1">
                    <label for="search"><i class="icon-search"></i></label>
                    <input class="table-filter" type="search" data-table="advanced-web-table" placeholder="Search...">
                  </div>
            </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table id="ordering-table" class="advanced-web-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->logo }}</td>
                        <td>{{ $company->website }}</td>
                        <td>
                            <a class="btn btn-block btn-outline-success btn-sm" href="{{ route('companies.edit', $company->id) }}">Edit</a>
                            <form method="post" action="{{ route('companies.destroy', $company->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-block btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>

        <p>No companies found.</p>


    <!-- Include jQuery or other necessary JavaScript libraries -->

    <!-- Additional scripts or footer content -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>
<script>// table search function
    // Light Javascript Table Filter
    // -by Chris Coyier
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
    })(document);</script>
    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
