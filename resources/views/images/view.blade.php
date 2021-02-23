@extends('admin.app')
@section('content')
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Event Information
                            {{--<small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small>--}}
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="feven">Create</a></li>
                                    <li><a href="{{route('eduevent.showx')}}">View Events</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{$event->id}}</td>
                                    <td>{{$event->title}}</td>
                                    <td>{{Str::limit($event->description, 10)}}</td>
                                    <td><img src="/education/public/upload/{{$event->image}}" style="width:50px; height: "></td>

                                    <td>
                                        <form action="{{ route('event.destroy', $event->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger" type="submit" value="Delete" />
                                            <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Show</a>
                                        </form>
                                        {{--<a href="{{ route('collab.edit', $collab->id)}}">Edit</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection