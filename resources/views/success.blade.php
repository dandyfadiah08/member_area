@extends('layouts.layout')

@section('content')
<br>
<br>
<div class="col-md-12 padding-0">
             <div class="col-md-12">
                    <div class="col-md-5">
                         <div class="panel">
                            <div class="panel-body">
                            	<h3>Success!!</h3>
                            	<br>
                              <dl class="dl-horizontal">
                                <dt>Order no.</dt>
                                <dd>isi Order no.</dd>
                                <dt>Total</dt>
                                <dd>Isi Total.</dd>
                              </dl>

   					<p>{Product_name}that cost {price} will bw shipped</p>
   					<p>to:</p>
   					<br>
   					<p>{Shipping_address}</p>
   					<br>
   					<p>only after you pay</p>
   					<br>
   					  <div class="col-md-6">
                          	<button class="button button2" type="submit">Pay Now</button>
                      </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection