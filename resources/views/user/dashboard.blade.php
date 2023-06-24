@extends('layouts.app')
@section('content')
<style>
   
</style>
<div class="container">
  <div class="row justify-content-center p-3 p-md-5 m-2 m-lg-5">
    <div class="col-md-10">
    @if(auth()->user()->kv == 0)
                <div class="alert alert-info" role="alert">
                  <h4 class="alert-heading">@lang('KYC Verification required')</h4>
                  <hr>
                  <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam.  <a href="{{ route('user.kyc.form') }}">@lang('Click Here to Verify')</a></p>
                </div>
                @elseif(auth()->user()->kv == 2)
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">@lang('KYC Verification pending')</h4>
                    <hr>
                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic officia quod natus, non dicta perspiciatis, quae repellendus ea illum aut debitis sint amet? Ratione voluptates beatae numquam.  <a href="{{ route('user.kyc.data') }}">@lang('See KYC Data')</a></p>
                  </div>
    @endif
      <div class="card bg-secondary">
        <div class="card-header bg-primary">
             <h5 class="text-center text-white">Dashboard</h5>
        </div>
        <div class="card-body"> 
             <p class="text-white p-3 p-md-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum sunt ducimus laboriosam commodi nesciunt accusamus? Sunt in, minus ex, a eveniet inventore facilis doloribus placeat corrupti repudiandae sint esse nesciunt. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum unde, vitae esse eum perspiciatis consectetur nisi, atque repellendus, cumque magnam ab a inventore quis nobis quod quisquam omnis. In, possimus!</p>
        </div>  
      </div>
    </div>
  </div>
</div>
@endsection