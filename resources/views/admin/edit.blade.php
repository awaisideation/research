@extends('admin.app')
@section('content')
    <section class="content">
        <form method="POST" action="{{ route('collab.update') , $collab->id}}">
            @csrf
            @method('PUT')
            <input name="_method" type="hidden" value="PUT">
            <input type="text" value="{{$collab->id}}">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$collab->name}}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{--<input type="text" name="name" value="{{$collab->description}}" class="form-control" placeholder="Name">--}}

                    <textarea class="form-control" name="description"  placeholder="">{{$collab->description}}</textarea>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
    </section>
@endsection