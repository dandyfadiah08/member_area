@extends('layouts.layout')

@section('content')
	<div class="col-md-12 padding-0">
                        <div class="col-md-8 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Orders</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>{{$order}}</h1>
                                        <p>Count Orders</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              <form>
                    <div class="col-md-12">
                        <div class="panel">
                                        @if($message = Session::get('success'))
                        <div class="alert alert-success">
                          <p>{{ $message }}</p>
                        </div>
                      @endif
                    <div class="panel-heading"><h3> Order History</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Order No</th>
                          <th>Total</th>
                          <th>Value</th>
                          <th>Mobile Number</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($orders as $order)
                        <tr>
                          <td>{{ $order->Order_No }}</td>
                          <td>{{ $order->total }}</td>
                          <td>{{ $order->value }}</td>
                          <td>{{ $order->mobile }}</td>
                          <td><a class="btn btn-info" href="#">Pay Now</a></td>
                        </tr>
                  @endforeach
                      </tbody>
                        </table>
                      </div>
                  </div>
                    </div>
                </div>
              </form>
            </div>

@endsection