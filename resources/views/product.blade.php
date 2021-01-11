@extends('layouts.layout')

@section('content')
<br>
<br>
<div class="col-md-12 padding-0">
                    <div class="col-md-8">
                   	<form action="{{ route('productstore') }}" method="post" enctype="multipart/form-data">
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
                         <h4>Product Pages</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Product</label>
                              <div class="col-sm-10"><textarea name="product" type="text" class="form-control" placeholder="Product"></textarea></div>
                            </div>
                            <br><br>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Shipping Address</label>
                              <div class="col-sm-10"><textarea name="Shipping_Address" type="text" class="form-control" placeholder="Shipping Address"></textarea></div>
                            </div>
                            <br><br>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Price</label>
                              <div class="col-sm-10"><input type="number" name="price" class="form-control" placeholder="Price"></div>
                            </div>
                            <br><br>                            
                          </div>
                                <div class="col-md-6">
                          			<button class="button button2" type="submit">Submit</button>
                      			</div>
                        </div>
                      </div>
                     </form>
                    </div>
                </div>
@endsection