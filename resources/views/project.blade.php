@extends('layouts.home')


@section('project-content')
	
	@if(count($errors) > 0)
          <div class="alert alert-danger">
            @foreach($errors->all as $error)
              <li>{{ $error }}</li>
            @endforeach
          </div>

    @endif

	<div style="background-color: #1abc9c;height: 100%; width: 100%;">
	 <div class="contenier" style="height: 100%; width: 60%; margin-left: 270px;  background-color: #f2f2f2; color: black;">

		<div class="project" style="border: 5px solid white; border-radius: 4px;">
			@foreach($project as $row)
		   	<div style="margin-left: 15px; margin-top: 10px;">
		   		<br>
                    <table class="table table-hover" style="margin-top: 20px;">
			            <tr>
			              <th colspan="3">
			              	{{ $row['title']}} 
			              </th>
			            </tr>
			            <tr>
			            	<td>
			            		<small>Posted : {{ $row['created_at']}}</small> || <small>Last Updated : {{ $row['updated_at']}}</small>
			            	</td>
			            </tr>
			            <tr>
			              <td colspan="2">{{ $row['description']}}</td>
			            </tr>
			            <tr>
			            	<td>
			            		<a href="/project/{{ $row['id'] }}"><input class="btn btn-primary" type="button" value="Show Details"></a>
			            	</td>
			            </tr>
			            <tr>
			            	@if (Route::has('login'))
					            <div class="top-right links">
					                @auth
					                    <td><a href="{{action('projectController@edit',$row['id'])}}"><input class="btn btn-warning" type="button" value="Update"></a>
							            </td>
							            <td>
							              <form method="post" action="{{ action('projectController@destroy',$row['id'])}}">
							                    {{ csrf_field() }}
							                    <input type="hidden" name="_method" value="Delete">
							                    <button type="submit" class="btn btn-danger" >Delete</button>
							              </form>

							              </td>
					                @else
					                    
					                @endauth
					            </div>
					        @endif
			            	
			            </tr>

           			</table><br>
		   		<hr>
		   	</div>
		   	@endforeach
			
			
		</div>
		
	 </div>
	</div> 


@endsection
