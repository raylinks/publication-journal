@extends('layouts.dashboard')

@section('header', 'Publications')

@section('title', 'Publication - Journal')

@section('page-title')
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <a type="button" href="{{route('show.create')}}" class="btn btn-primary text-white mb-2 mt-2">Create Publications</a>
        </div>
    </div>
@stop

@section('breadcrumbs')
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="" class="breadcrumb-item">
                    <i class="icon-home2 mr-2"></i> Home
                </a>
                <span class="breadcrumb-item active">Publications</span>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table datatable-basic table-hover">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Image</th>
                        <th>Year</th>
                        <th>Status</th>
                        <th>Date Created</th>
                        <th data-orderable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($publications as $request)
                        <tr>
                            <td></td>
                            <td>{{ $request->title }}</td>
                            <td>{{ $request->author }}</td>
                            <td>{{ $request->image }}</a></td>
                            <td>{{$request->year}}</span>
                            </td>
                            <td>{{$request->status}}</span>
                            </td>
                            <td>{{ $request->created_at->format('jS F, Y')}}</td>
                            <td class="text">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href=""
                                               class="dropdown-item">
                                                View more
                                            </a>
                                            <a href=""
                                               class="dropdown-item"> Update business</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('custom-scripts')
    <script>
        $('#business').addClass('active');
        $('.datatable-basic').DataTable();
    </script>
@stop
