@extends('layouts.dashboard')

@section('header', '- Publications - Create')

@section('title', 'Journal - Lagos State University')

@section('page-title')
    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h2 class="font-weight-semibold">Create Publications</h2>
            </div>
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
                <a href="{{ route('index') }}" class="breadcrumb-item">
                    Journals
                </a>
                <span class="breadcrumb-item active">Create Journal</span>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Create Publication</h6>
                </div>

                <div class="card-body">
                    <form action="{{route('store')}}" method="POST"  enctype="multipart/form-data" >
                        @csrf
                       
                        <div class="form-group">
                            <label>Publication title:</label>
                            <input type="text" required  class="form-control" name="title"
                                   placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label>Author:</label>
                            <input type="text" class="form-control"  name="author" placeholder="Enter author">
                        </div>
                        <div class="form-group">
                            <label>Publication PDF:</label>
                            <input type="file" class="form-control"  name="image"  id="image" >
                        </div>
                        <div class="form-group ">
                            <label class="d-block">Publication Year</label>
                            <select class="form-control " style="opacity:1 !important;" name="year" data-fouc>
                        
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                    
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="d-block">Publication Status</label>
                            <select class="form-control " style="opacity:1 !important;" name="status" data-fouc>
                        
                                <option value="inactive">inactive</option>
                             
                    
                            </select>
                        </div>
                       
                        <div class="d-flex justify-content-start align-items-center">
                            <a href="{{ route('index') }}" class="btn btn-light">Cancel</a>
                            <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop


@section('custom-scripts')
    <script>
        $('#business').addClass('active');
        var checkBox = document.getElementById("custom_checkbox_stacked_unchecked");
        $('input[name=is_developer]').change(function(){
            checkBox.value = checkBox.checked == true ? 1 : 0;
        });

    </script>
@stop
