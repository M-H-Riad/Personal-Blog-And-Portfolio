@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3><b>List of Old Articles</b></h3></div>

                <div class="card-body">
                    @foreach($article as $row)
                    <table class="table table-hover table-bordered" style="margin-top: 20px;">
			            <tr>
			              <th colspan="2">{{ $row['title']}} <br><small>Posted : {{ $row['created_at']}}</small> || <small>Last Updated : {{ $row['updated_at']}}</small></th>
			            </tr>
			            <tr>
			              <td colspan="2">{{ $row['description']}}</td>
			            </tr>
			            <tr>
			            	<td><a href="{{action('articleController@edit',$row['id'])}}"><input class="btn btn-warning" type="button" value="Update"></a>
			            </td>
			            <td>
			              <form method="post" action="{{ action('articleController@destroy',$row['id'])}}">
			                    {{ csrf_field() }}
			                    <input type="hidden" name="_method" value="Delete">
			                    <button type="submit" class="btn btn-danger" >Delete</button>
			              </form>

			              </td>
			            </tr>
           			</table><br>
           			@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
