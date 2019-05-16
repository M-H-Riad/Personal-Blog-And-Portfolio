@extends('layouts.home')


@section('article-content')

	
	<div style="background-color: #1abc9c;height: 100%; width: 100%;">
		
		<div class="contenier" style="height: 100%; width: 60%; margin-left: 270px; background-color: #f2f2f2; margin-top: 0px; color: black;">

			@foreach($article as $row)
		   	<div style="margin-left: 15px; margin-top: 10px;">
		   		<br>
                    <table class="table table-hover table-bordered" style="margin-top: 20px;">
			            <tr>
			              <th colspan="2">{{ $row['title']}} <br><small>Posted : {{ $row['created_at']}}</small> || <small>Last Updated : {{ $row['updated_at']}}</small>
			              </th>
			            </tr>
			            <tr>
			              <td colspan="2">{{ $row['description']}}</td>
			            </tr>
			            <tr>
			            	@if (Route::has('login'))
					            <div class="top-right links">
					                @auth
					                    <td><a href="{{action('articleController@edit',$row['id'])}}"><input class="btn btn-warning" type="button" value="Update"></a>
							            </td>
							            <td>
							              <form method="post" action="{{ action('articleController@destroy',$row['id'])}}">
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

@endsection
