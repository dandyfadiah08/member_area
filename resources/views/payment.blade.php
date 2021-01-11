@extends('layouts.layout')

@section('content')
<br>
<br>
<div class="col-md-12 padding-0">
                    <div class="col-md-8">
                   	<form action="{{ route('paymentstore') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @if($message = Session::get('success'))
                        <div class="alert alert-success">
                          <p>{{ $message }}</p>
                        </div>
                      @endif
                        @if(count ($errors)>0)
                          @foreach($errors->all() as $error)
                            <div class="alert alert-success">
                            <p>{{ $error }}</p>
                                  </div>
                          @endforeach
                         @endif
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Pay Order</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Order No</label>
                              <div class="col-sm-10"><input name="Order_No" type="text" class="form-control" placeholder="Order No"></div>
                            </div>
                            <br><br>
                          </div>
                       			<div class="col-md-6">
                          			<button class="button button2" type="submit">Pay Now</button>
                      			</div>
                        </div>
                      </div>
                     </form>
                    </div>
                </div>
@endsection