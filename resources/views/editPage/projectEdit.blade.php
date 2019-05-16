@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3><b>Write A New Article</b></h3></div>

                <div class="card-body">    
                    <form method="POST" enctype="multipart/form-data" action="{{ action('projectController@update',$id) }}">
                        {{ csrf_field() }}
                        <table class="table table-hover">
                            <tr>
                                <td>Title of Project</td>
                                <td><input type="text" name="title" value="{{$project->title}}" style="width: 250px;">
                                    @if($errors->has('title'))
                                    <p class="help-block" style="color: red;">
                                        *{{ $errors->first('title') }}
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Description of Project</td>
                                <td><input type="comment" name="description" value="{{$project->description}}" style="height: 80px; width: 250px; border-radius: 5px;">
                                    @if($errors->has('description'))
                                    <p class="help-block" style="color: red;">
                                        *{{ $errors->first('description') }}
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><b>Start Date</b></td>
                                <td>
                                    <input type="date" name="start_date" placeholder="Give a project title" value="{{$project->start_date}}"> 
                                    @if($errors->has('start_date'))
                                    <p class="help-block" style="color: red;">
                                        *{{ $errors->first('start_date') }}
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><b>End Date</b></td>
                                <td>
                                    <input type="date" name="end_date" placeholder="Give a project title" value="{{$project->end_date}}">
                                    @if($errors->has('start_date'))
                                    <p class="help-block" style="color: red;">
                                        *{{ $errors->first('end_date') }}
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><b>Language</b></td>
                                <td>
                                    <label><input type="radio" name="language" value="php" required="required">PHP</label>
                                    <label><input type="radio" name="language" value="java" required="required">JAVA</label>
                                    <label><input type="radio" name="language" value="c#" required="required">C#</label>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Technology</b></td>
                                <td>
                                    <label><input type="radio" name="technology" value="asp.Net" required="required">ASP.Net(MVC)</label>
                                    <label><input type="radio" name="technology" value="Laravel" required="required">Laravel</label>
                                    <label><input type="radio" name="technology" value="Spring" required="required">Spring</label>
                                </td>
                            </tr>
                            <tr>
                                <td><b>IDE</b></td>
                                <td>
                                    <label><input type="radio" name="ide" value="php Strome" required="required">php Strome</label>
                                    <label><input type="radio" name="ide" value="Microsoft Visual Studio" required="required">Visual Studio</label>
                                    <label><input type="radio" name="ide" value="Other" required="required">Other</label>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Documentation </b><small>(Doc/Docx/pdf file only)</small></td>
                                <td>
                                    <input type="file" name="document" placeholder="upload project document" value="{{ $project->document }}">
                                    @if($errors->has('document'))
                                    <p class="help-block" style="color: red;">
                                        *{{ $errors->first('document') }}
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><b>Presentation </b><small>(pptx file only)</small></td>
                                <td>
                                    <input type="file" name="presentation" placeholder="upload project presentation" value="{{ $project->presentation }}">
                                    @if($errors->has('presentation'))
                                    <p class="help-block" style="color: red;">
                                        *{{ $errors->first('presentation') }}
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><b>Overview </b><small>(Image only)</small></td>
                                <td>
                                    <input type="file" name="image" placeholder="upload project overview images" value="{{ $project->presentation }}">
                                    @if($errors->has('image'))
                                    <p class="help-block" style="color: red;">
                                        *{{ $errors->first('image') }}
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            {{ method_field('PUT') }}
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Update Project" class="btn btn-primary"></td>
                            </tr>
                        </table>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
