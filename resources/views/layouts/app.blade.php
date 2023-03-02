<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('/admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('/admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('/admin/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('/admin/plugins/toastr/toastr.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
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
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          
          @can('pages-list')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('pages-list')

              <li class="nav-item">
                <a href="{{route('pages.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Pages</p>
                </a>
              </li>
              @endcan

              <li class="nav-item">
                <a href="{{route('sections.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Section</p>
                </a>
              </li>
            </ul>
          </li> 
          @endcan
          <li class="nav-item">
          @can('role-list')
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Roles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          @endcan
            <ul class="nav nav-treeview">
            @can('role-list')
            
            <li class="nav-item">
              <a href="{{route('roles.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>List Roles</p>
              </a>
            </li>
            @endcan
            
            @can('role-create')
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Role</p>
              </a>
            </li>
            @endcan
          </ul>
        </li> 
          @can('user-list')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('user-list')
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Users</p>
                </a>
              </li>
              @endcan
              @can('user-create')
              <li class="nav-item">
                <a href="{{route('users.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Users</p>
                </a>
              </li>
              @endcan
            </ul>
          </li> 
          @endcan
          @can('permission-list')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Permissions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('permission-list')
              <li class="nav-item">
                <a href="{{route('permission.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Permissions</p>
                </a>
              </li>
              @endcan
              @can('permission-create')
              <li class="nav-item">
                <a href="{{route('permission.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Permission</p>
                </a>
              </li>
              @endcan
            </ul>
          </li> 
          @endcan
          @can('package-list')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Packages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('package-list')
              <!-- @can('permission-list') -->
              <li class="nav-item">
                <a href="{{route('packages.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Packages</p>
                </a>
              </li>
              @endcan
              <!-- @endcan -->
              @can('package-create')
              <li class="nav-item">
                <a href="{{route('packages.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Packages</p>
                </a>
              </li>
              @endcan
            </ul>
          </li> 
          @endcan
          @can('category-list')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('category-list')
              <!-- @can('permission-list') -->
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Categories</p>
                </a>
              </li>
              @endcan
              <!-- @endcan -->
              @can('category-create')
              <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add category</p>
                </a>
              </li>
              @endcan
            </ul>
          </li> 
          @endcan

          @can('subcategory-list')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Sub Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('subcategory-list')
              <!-- @can('permission-list') -->
              <li class="nav-item">
                <a href="{{route('subcategory.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Sub Categories</p>
                </a>
              </li>
              @endcan
              <!-- @endcan -->
              @can('subcategory-create')
              <li class="nav-item">
                <a href="{{route('subcategory.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sub Category</p>
                </a>
              </li>
              @endcan
            </ul>
          </li> 
          @endcan
          @can('product-list')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @can('product-list')

              <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Products</p>
                </a>
              </li>
              @endcan

              @can('product-create')
              <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              @endcan
            </ul>
          </li> 
          @endcan
          @can('order-list')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('orders.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Orders</p>
                </a>
              </li>
            </ul>
          </li> 
          @endcan
          @can('general_setting')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage General Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('general_setting.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Setting</p>
                </a>
              </li>
            </ul>
          </li> 
          @endcan
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Account Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- @can('permission-list') -->
              <li class="nav-item">
                <a href="{{route('profile.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <!-- @endcan -->
              <li class="nav-item">
                <a href="{{route('change_password')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item">
            <a href="{{url('/logout')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('/admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('/admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/admin/dist/js/adminlte.js')}}"></script>

<!-- geo Location -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDqnUWO38RJMjRlwsY1imxqB1WI8ZWsU3M"></script>

<!-- Change password -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$('.validatedForm').validate({
  rules : {
    password : {
      minlength : 8
    },
    password_confirmation : {
      minlength : 8,
      equalTo : "#password"
    }
  }
});

$('button').click(function(){
  $('.validatedForm').valid();
});

</script>

<!-- DataTables  & Plugins -->
<script src="{{asset('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('/admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
$(function (){
  $('#summernote').summernote();
  $('#summernote1').summernote();

  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": true,
    "buttons": ["csv", "excel", "pdf", "print"]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});

var searchInput = 'search_input';

$(document).ready(function () {
  var autocomplete;
  autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
    types: ['geocode'],
    componentRestrictions: {
      country: "PK"
    }
  });	
    
  google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var near_place = autocomplete.getPlace();
    debugger
    document.getElementById('loc_lat').value = near_place.geometry.location.lat();
    document.getElementById('loc_long').value = near_place.geometry.location.lng();
  });
});
</script>

<!-- Toastr -->
<script src="{{asset('/admin/plugins/toastr/toastr.min.js')}}"></script>
<script>
@if(session('success'))
  toastr.success("{{session('success')}}");
@endif
@if(session('error'))
  toastr.error("{{session('error')}}")
@endif
@if($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error("{{$error}}")
    @endforeach
@endif
</script>
</body>
</html>
