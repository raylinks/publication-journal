@extends('layouts.pages-class')
​
@section('mytitle', 'View Publication')
​
@section('content')
<div class="home-content">
    <div class="row">
        <div class="col-md-10 offset-md-1">
                <div class="input-group mb-3 mt-3">
                    @csrf
                    <input type="text" name="publication" id="publication" class="form-control" placeholder="I'm searching for.."
                        aria-label="publication search">
                    <div class="input-group-append">
                        <button class="btn buttonless-button"><i class="fas fa-search"></i></button>
                    </div>

                    <div id="publication_list"></div>  
                </div> 
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-8 offset-md-2">
        <h3 class="text-info">Articles</h3>
        <hr/>
        @foreach($journal as $request)
        <div id="accordion">
   
                    <h5 class="mb-0">
                        <button class="btn text-white" data-toggle="collapse" data-target="#headerOne"
                            aria-expanded="true" aria-controls="headerOne">
                            <strong class="font-weight-bold">
                                
                                <span  class="text-muted"  style="color:black;"> {{$request->author}}</span>
                                <h6   class="text-dark" style="color:black;"> {{$request->title}}</h1>
                            </strong>
                        </button>

                        <div class="d-flex justify-content-end">
                            <!-- <button class="btn btn-sm buttonless mr-3" data-toggle="modal" data-target="#staticBackdrop">
                                            <i class="fas fa-file mr-1"></i>Abstract
                                            </button> -->
                            <a href="{{url('/article/view', $request->id  )}}" class="btn btn-sm buttonless mr-3"
                                target="_blank"><i class="fas fa-file-pdf mr-1"></i>Article PDF</a>

                        </div>
                    </h5>
               
        </div>
        @endforeach


    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    API ASSISTED SEMANTIC MATCHING FOR SUBJECTIVE ONLINE EXAMINATION SYSTEM
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="line-height: 2.5rem">
                Online examination systems exist as an attempt to expand the frontiers of learning and testing.
                The system is aimed at taking the advantages of web resources to reduce time, cost and other constraints
                associated with location defined examination.
                The development has been limited by the strictness of the examination format vis-�-vis keyword match
                which are boundary-defined.
                This constraint led to poor adoption of online testing systems which are essential in handling the
                problem associated with large enrollment.
                Existing systems do not allow examiners to test for knowledge in ways that they seem due; similar to the
                conventional classroom testing system.
                We leveraged on the advances in Natural Language Processing and the success emerging from same and
                therefore remodeled the examination system against some known concepts in text summarization, term
                dependencies, semantic tagging and corporal build-up using a standalone global API for semantic
                interpretation of answers.
                We improve the Levenshtein distance between two strings a, b using the triangular inequality to identify
                the relationship of two terms as applicable between questions and answers.
                The Levenshtein distance was denoted in php with the int levenshtein ( string $str1 , string $str2 ).
                The output of the research is the development of a subjective examination system that allows the
                self-grading of essay type question using a web based semantic API.
                The complexity of the algorithm is O(m*n), where n and m are the length of str1 and str2 The interface
                was coded in php with a MySQL supporting backend.
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript">
            // jQuery wait till the page is fullt loaded
            $(document).ready(function () {
                // keyup function looks at the keys typed on the search box
                $('#publication').click(function(){
                    // the text typed in the input field is assigned to a variable 
                    var query = $(this).val();
                    // call to an ajax function
                    $.ajax({
                        // assign a controller function to perform search action - route name is search
                        url:"{{ route('search') }}",
                        // since we are getting data methos is assigned as GET
                        type:"GET",
                        // data are sent the server
                        data:{'publication':query},
                        // if search is succcessfully done, this callback function is called
                        success:function (data) {
                            // print the search results in the div called country_list(id)
                            $('#publication_list').html(data);
                        }
                    })
                    // end of ajax call
                });

                // initiate a click function on each search result
                $(document).on('click', 'li', function(){
                    // declare the value in the input field to a variable
                    var value = $(this).text();
                    // assign the value to the search box
                    $('#publication').val(value);
                    // after click is done, search results segment is made empty
                    $('#publication_list').html("");
                });
            });
        </script>

@endsection