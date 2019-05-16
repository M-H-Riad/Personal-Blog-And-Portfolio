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

		   	<div style="margin-left: 15px; margin-top: 10px;">
		   		<br>
                    <table class="table table-hover" style="margin-top: 20px;">
			            <tr>
			              <th colspan="3">
			              	{{ $project->title }} 
			              </th>
			            </tr>
			            <tr>
			            	<td>
			            		<small>Posted : {{ $project->created_at }}</small> 
			            	</td>
			            	<td>
			            	 <small>Last Updated : {{ $project->updated_at }}</small>
			            	</td>
			            </tr>
			            <tr>
			            	<td colspan="2">
			            		<div class="row-md-4 bg-success" >
			            			<img src="\storage/up_file/{{ $project->image }}" style="height: 350px; width: 750px; overflow: hidden;">
			            		</div>
			            	</td>
			            </tr>
			            <tr>
			            	<td><b>Project Details</b></td>
			              	<td>{{ $project->description }}</td>
			            </tr>
			            <tr>
			            	<td><b>Start Date</b></td>
			              	<td>{{ $project->start_date }}</td>
			            </tr>
			            <tr>
			            	<td><b>End Date</b></td>
			              	<td>{{ $project->end_date }}</td>
			            </tr>
			            <tr>
			            	<td><b>language</b></td>
			              	<td>{{ $project->language }}</td>
			            </tr>
			            <tr>
			            	<td><b>technology</b></td>
			              	<td>{{ $project->technology }}</td>
			            </tr>
			            <tr>
			            	<td><b>ide</b></td>
			              	<td>{{ $project->ide }}</td>
			            </tr>
			            <tr>
			            	<td>
			            		<a href="\storage/up_file/{{ $project->document }}" class="btn btn-primary"><i class="fas fa-download" download="{{ $project->document }}"></i>Download Documentation</a>
			            	</td>
			              	<td>
			            		<a href="\storage/up_file/{{ $project->presentation }}" class="btn btn-warning"><i class="fas fa-download" download="{{ $project->presentation }}"></i>Download Presentartion</a>
			            	</td>
			            </tr>

           			</table><br>
		   		<hr>
		   	</div>

		</div>	
	 </div>
	</div> 


@endsection
