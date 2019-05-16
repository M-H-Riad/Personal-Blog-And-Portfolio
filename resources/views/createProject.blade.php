@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3><b>Create A New Project</b></h3></div>

                <div class="card-body">
                    
                    <form method="post" enctype="multipart/form-data" action="{{url('project')}}">
                        {{ csrf_field() }}
                        <table class="table table-hover">
                            <tr>
                                <td><b>Project Title</b></td>
                                <td>
                                    <input type="text" name="title" placeholder="Give a project title"  value="{{ Input::old('title') }}">
                                    @if($errors->has('title'))
                                    <p class="help-block" style="color: red;">
                                        *{{ $errors->first('title') }}
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><b>Description</b></td>
                                <td>
                                    <input type="text" name="description" placeholder="Give a project description" value="{{ Input::old('description') }}">
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
                                    <input type="date" name="start_date" placeholder="Give a project title" value="{{ Input::old('start_date') }}">
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
                                    <input type="date" name="end_date" placeholder="Give a project title" value="{{ Input::old('end_date') }}">
                                    @if($errors->has('end_date'))
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
                                    <input type="file" name="document" placeholder="upload project document" value="{{ Input::old('document') }}">
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
                                    <input type="file" name="presentation" placeholder="upload project presentation" value="{{ Input::old('presentation') }}">
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
                                    <input type="file" name="image" placeholder="upload project overview images" value="{{ Input::old('image') }}">
                                    @if($errors->has('image'))
                                    <p class="help-block" style="color: red;">
                                        *{{ $errors->first('image') }}
                                    </p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Upload Project" class="btn btn-primary"></td>
                            </tr>
                        </table>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
