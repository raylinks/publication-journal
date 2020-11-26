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
                        <th>Year</th>
                        <th>Status</th>
                        <th>Date Created</th>
                        <th data-orderable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($publications as $publication)
                        <tr>
                            <td></td>
                            <td>{{ $publication->title }}</td>
                            <td>{{ $publication->author }}</td>
                            <td>{{$publication->year}}</span>
                            </td>
                            <td>{{$publication->status}}</span>
                            </td>
                            <td>{{ $publication->created_at->format('jS F, Y')}}</td>
                            <td class="text">
                            <a href="{{ route('show', $publication->id) }}"
                                               class="dropdown-item">
                                                <i class="icon-eye"></i> Edit & update
                                            </a>
                             <a href="{{route('toggle.status', $publication->id)}}" class="dropdown-item"><i class="icon-accessibility"></i> Update Status</a>
                         
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
