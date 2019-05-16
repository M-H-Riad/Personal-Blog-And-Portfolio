@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h3><b>Write A New Article</b></h3></div>

                <div class="card-body">    
                    <form method="post" action="{{url('article')}}">
                        {{ csrf_field() }}
                        <table class="table table-hover">
                            <tr>
                                <td>Title of Article</td>
                                <td><input type="text" name="title" placeholder="Give a title" style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Description of Article</td>
                                <td><input type="comment" name="description" placeholder="Give a Description" style="height: 80px; width: 250px; border-radius: 5px;"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Upload Article" class="btn btn-primary"></td>
                            </tr>
                        </table>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
