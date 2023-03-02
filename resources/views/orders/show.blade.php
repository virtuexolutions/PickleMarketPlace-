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
          <h1>Order Detail</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Order Detail</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <button class="btn btn-default" onclick="window.print()"><i class="fa fa-print"></i></button>
  </section>
<section class="content">
    <div class="container-fluid">
        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
            <div class="card">
                <div class="card-header p-4">
                    <a class="pt-2 d-inline-block" href="index.html" data-abc="true">{{url('/')}}</a>
                    <div class="float-right"> 

                        <h3 class="mb-0">Invoice {{$order->order_no}}</h3>Date: {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', date(now()))->format('d M Y')}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h5 class="mb-3">From:</h5>
                            <h3 class="text-dark mb-1">{{auth::user()->name}}</h3>
                            <div>Email: {{auth::user()->email}}</div>
                            <div>Phone: {{auth::user()->phone}}</div>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="mb-3">To:</h5>
                            <h3 class="text-dark mb-1">{{$order->first_name}} {{$order->last_name}}</h3>
                            <div>{{$order->address_1}}</div>
                            <div>Email: {{$order->email}}</div>
                            <div>Phone: {{$order->phone}}</div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Item</th>
                                    <th>Description</th>
                                    <th class="right">Price</th>
                                    <th class="center">Qty</th>
                                    <th class="right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                $id =1;
                                @endphp
                                @foreach($order->order_items as $row)
                                <tr>
                                    <td class="center">{{$id++}}</td>
                                    <td class="left strong">{{$row->product->product_name}}</td>
                                    <td class="left">{{\Illuminate\Support\Str::limit($row->product->description,100)}}</td>
                                    <td class="right">${{$row->amount}}</td>
                                    <td class="center">{{$row->quantity}}</td>
                                    <td class="right">${{$row->amount * $row->quantity}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"></div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left"><strong class="text-dark">Total</strong></td>
                                        <td class="right">${{$order->payment->amount}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <p class="mb-0">{{$order->address_2}}</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

