@extends('layouts.blueprint')

@section('mytitle', 'Publications')

@section('content')
    <div class="home-content" style="min-height: 40rem">
        <div class="row mb-5" style="padding-top: 50px">
            <div class="col-md-4">
                <div class="card text-center p-2 card-counter">
                    <div class="card-body text-prima">
                        <a href="/view-publication/2018" class="text-prima" style="text-decoration: none">
                            <div class=" mb-2"> <strong class="counter">50</strong> Publications</div>
                            <div class="blinking mb-2">
                                <strong>Volume 5 (2018)</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-2 card-counter">
                    <div class="card-body text-prima">
                        <a href="/view-publication/2019" class="text-prima" style="text-decoration: none">
                            <div class=" mb-2"> <strong class="counter">50</strong> Publications</div>
                            <div class="blinking mb-2">
                                <strong>Volume 6 (2019)</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-2 card-counter">
                    <div class="card-body text-prima">
                        <a href="/view-publication/2020" class="text-prima" style="text-decoration: none">
                            <div class=" mb-2"> <strong class="counter">50</strong> Publications</div>
                            <div class="blinking mb-2">
                                <strong>Volume 7 (2020)</strong>
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