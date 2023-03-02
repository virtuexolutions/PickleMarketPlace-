@extends('layouts.app')
@section('page-title')
Orders
@endsection
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
	            <h3 class="card-title">Orders list</h3>
  	        </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>

                    <th>Order Info</th>
                    @can('product-status')
                    <th>Status</th>
                    @endcan
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $pro)
                  
                  <tr>
                    <td>
                      <strong>Order No: </strong>{{$pro->order_no}}<br />
                      <strong>Email: </strong>{{$pro->email}} <br />
                      <strong>Phone: </strong>{{$pro->phone}} <br />     
                      <strong>Created at: </strong>{{$pro->created_at}}
                    </td>
                    @can('product-status')
                    <td>
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" class="custom-control-input switch-input" id="{{$pro->id}}" {{($pro->status==1)?"checked":""}}>
                            <label class="custom-control-label" for="{{$pro->id}}"></label>
                            </div>
                        </div>
                    </td>
                    @endcan
                    <td class="project-actions text-center">
                      @can('product-edit')
                        <a class="btn btn-info btn-sm" href="{{route('orders.show',$pro->id)}}">
                            <i class="fas fa-eye"></i>
                        </a>
                      @endcan
                      @can('product-delete')
                        <form action="{{route('product.destroy',$pro->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want To Delete This.??')" type="submit">
                            <i class="fas fa-trash"></i>
                          </button>
                        </form>
                      @endcan
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
	          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection