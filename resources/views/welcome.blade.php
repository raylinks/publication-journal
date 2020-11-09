@extends('layouts.blueprint')

@section('mytitle', 'Home')

@section('content')
    <div class="home-content">
        <div class="d-flex justify-content-end">
            <a href="" class="btn btn-md buttonless"> <i class="fas fa-book mr-1"></i> Recent Publications</a>
        </div>
        <div class="row mt-5">
            <div class="col-md-8 col-sm-8 offset-md-2 offset-sm-2">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('images/logo.gif')}}" alt="School logo" class="img-responsive img-fluid" width="100" height="100">
                </div>
                <div class="text-center text-capitalize font-weight-bold mt-2" style="color:beige">
                    welcome to journal of research and review in science
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card content-writeup shadow-lg p-3 mb-5 rounded">
                            <div class="card-body" style="padding-bottom:15%">
                                Journal of Research and Review in Science (JRRS) is a publication of the Faculty of Science, Lagos State University (LASU). <br> 
                                <p></p>
                                JRRS is an academic journal interested in publishing outputs of innovative science based research. <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card content-writeup shadow-lg p-3 mb-5 rounded">
                            <div class="card-body">
                                The journal prides itself in quality and has an editorial team with wealth of experience and expertise in scientific research.
                                <p></p>
                                The journal welcomes the submission of manuscripts that meet the general criteria of significance and academic excellence.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
            
        
    </div>
    
@endsection

