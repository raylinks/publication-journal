@extends('layouts.blueprint')

@section('mytitle', 'Publications')

@section('content')
    <div class="home-content" style="min-height: 40rem">
        <div class="row mb-5" style="padding-top: 50px">
            <div class="col-md-4">
            @php
            $count18 = \App\Models\Publication::where('year', '2018')->count();
            $count19 = \App\Models\Publication::where('year', '2019')->count();
            $count20 = \App\Models\Publication::where('year', '2020')->count();
           
            @endphp
                <div class="card text-center p-2 card-counter">
                    <div class="card-body text-prima">
                        <a href="/view-publication/?year=2018"  class="text-prima" style="text-decoration: none">
                            <div class=" mb-2"> <strong class="counter">{{$count18}}</strong> Publications</div>
                            <div class=" mb-2">
                                <strong> (2018)</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-2 card-counter">
                    <div class="card-body text-prima">
                        <a href="/view-publication/?year=2019" class="text-prima" style="text-decoration: none">
                            <div class=" mb-2"> <strong class="counter">{{ $count19}}</strong> Publications</div>
                            <div class="mb-2">
                                <strong>(2019)</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-2 card-counter">
                    <div class="card-body text-prima">
                        <a href="/view-publication/?year=2020" class="text-prima" style="text-decoration: none">
                            <div class=" mb-2"> <strong class="counter">{{ $count20}}</strong> Publications</div>
                            <div class="mb-2">
                                <strong> (2020)</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <div class="spinner-grow text-sec mt-5 mb-5" role="status" >
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    
@endsection