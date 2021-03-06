@extends('admin.app')
@section('content')
    <section class="content">
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    VERTICAL LAYOUT
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">


                <form method="POST" action="{{ route('collab.create') }}" enctype="multipart/form-data" >
                    @csrf
                    <label for="name">Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Enter your name">
                        </div>
                    </div>

                    <label for="description">Description</label>
                    <div class="form-group">
                        <div class="form-line">
                            {{--<input type="text" id="name" class="form-control" placeholder="Enter your name">--}}
                            <textarea class="form-control" placeholder="Enter description" name="description"></textarea>
                        </div>
                    </div>
                    <label for="description">Picture</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" name="image" value="">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" >Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
    </section>
    @endsection