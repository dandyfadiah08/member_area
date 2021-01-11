@extends('layouts.layout')

@section('content')
<br>
<br>
<div class="col-md-12 padding-0">
                    <div class="col-md-8">
                   	<form action="{{ route('prepaidstore') }}" method="post" enctype="multipart/form-data" >
                      @csrf
                               @if(count ($errors)>0)
                                  @foreach($errors->all() as $error)
                                  <div class="alert alert-success">
                                  <p>{{ $error }}</p>
                                  </div>
                               @endforeach
                              @endif
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Prepaid Balance</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Mobile Number</label>
                              <div class="col-sm-10"><input type="text" name="mobile" class="form-control" placeholder="+62"  required=""></div>
                            </div>
                            <br><br>
                             <div class="form-group"><label class="col-sm-2 control-label text-right">Value</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <select class="form-control" name="isi">
                                    <option value="10000">Rp 10.000</option>
                                    <option value="50000">Rp 50.000</option>
                                    <option value="100000">Rp 100.000</option>
                                  </select>
                                </div>
                               </div>
                            </div>
                          </div >
                                <div class="col-md-6">
                          			<button class="button button2" type="submit">Submit</button>
                      			</div>
                        </div>
                      </div>
                     </form>
                    </div>
                </div>
@endsection