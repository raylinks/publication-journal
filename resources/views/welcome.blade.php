@extends('layouts.blueprint')

@section('mytitle', 'Home')

@section('content')
    <div class="home-content">
        <div class="d-flex justify-content-end">
            <a href="/publications" class="btn btn-md buttonless"> <i class="fas fa-book mr-1"></i> Recent Publications</a>
        </div>
        <div class="row mt-5">
            <div class="col-md-8 col-sm-8 offset-md-2 offset-sm-2">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('images/logo.gif')}}" alt="School logo" class="img-responsive img-fluid" width="100" height="100">
                </div>
                <div class="text-center font-weight-bold mt-2" style="color:beige">
                    LASU JOURNAL OF PHILOSOPHY [LAJOP] <p></p>
                    A Journal of the Department of Philosophy, <br>
                    Lagos State University, Ojo, Lagos, Nigeria <br>
                    ISSN: 2705-215X
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card content-writeup shadow-lg p-3 mb-5 rounded">
                            <div class="card-body" style="padding-bottom:15%">
                                LASU   Journal   of   Philosophy   (LAJOP)   is   an   annual   publication   of   the   Department   of Philosophy,   Lagos   State   University,   Ojo,   Lagos,   Nigeria.
                                <p></p>
                                The   Journal   is   interested   in publishing   original   articles   in   traditional   and   emerging   fields   of   philosophy. <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card content-writeup shadow-lg p-3 mb-5 rounded">
                            <div class="card-body mb-1">
                                The Department of Philosophy, Lagos State University, retains the copyright to the articles published in the journal.                                
                                <p></p>
                                However, the contributors are responsible for the views and claims expressed in their papers. <br>
                                All submissions are subject to blind-review by two/three reviewers.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
            
        
    </div>
    
@endsection

