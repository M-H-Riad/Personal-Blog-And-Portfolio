@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="width: 100%;">
            <div class="card">
                <div class="card-header text-center"><h3><b>List of Users Messages</b></h3></div>

                <div class="card-body">
                    @foreach($message as $row)
                    <table class="table table-hover table-bordered" style="margin-top: 20px;">
			            <tr>
			            	<th>Sl</th>
			            	<th>Name</th>
			            	<th>Email</th>
			            	<th>Topic</th>
			            	<th>Description</th>
			            	<th>Date</th>
			            	<th>Action</th> 
			            </tr>
			            <tr>
			            	<td>{{ $row['id']}}</td>
			            	<td>{{ $row['name']}}</td>
			            	<td>{{ $row['email']}}</td>
			            	<td>{{ $row['topic']}}</td>
			            	<td>{{ $row['description']}}</td>
			            	<td>{{ $row['created_at']}}</td>
			            	<td>
			            		<form method="post" action="{{ action('messageController@destroy',$row['id'])}}">
			                    {{ csrf_field() }}
			                    <input type="hidden" name="_method" value="Delete">
			                    <button type="submit" class="btn btn-danger" >Delete</button>
			              		</form>
			          		</td>
			            </tr>
           			</table>	<br>
           			@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
