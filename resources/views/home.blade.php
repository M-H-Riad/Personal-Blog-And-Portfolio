@extends('layouts.admin')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3><b>Admin Panel Dashboard.</b></h3></div>
                	<div style="margin-top: 100px; margin-bottom: 100px;">
                		@if(count($errors) > 0)
				          <div class="alert alert-danger">
				            @foreach($errors->all as $error)
				              <li>{{ $error }}</li>
				            @endforeach
				          </div>
				        @endif
				        
                		@if(\Session::has('success'))
				          <div class="alert alert-success">
				            <p>{{ \Session::get('success')  }}</p>
				          </div>
				        @endif
                	</div>
                
            </div>
        </div>
    </div>
</div>
 
@endsection
