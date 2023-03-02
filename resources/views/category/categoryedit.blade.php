@extends('layouts.app')

@section('title')
Admin | Edit Category
@endsection

@section('content')

<?php 
$page = Request::segment(2);
$pg = ucfirst($page);
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-outline">
            <div class="card-header"></div>
            <div class="card-body">
              @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                  <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
              @endif
              @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
                </div>
              @endif
              @if($message = Session::get('error'))
                <div class="alert alert-warning alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
                </div>
              @endif
              <br>
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <form id="quickForm" method="post" action="{{route('category.update',$category->id)}}" >
                      @csrf
                      @method('put')
                      <div class="card-body">
                        <div class="form-group">
                          <label for="FirstName">Category Name</label>
                          <input type="text" required  name="category_name" value="{{$category->category_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <section>
</div>


@endsection