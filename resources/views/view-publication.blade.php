@extends('layouts.pages-class')

@section('mytitle', 'View Publication')

@section('content')
    <div class="home-content">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header content-white-writeup" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn text-white" data-toggle="collapse" data-target="#headerOne" aria-expanded="true" aria-controls="headerOne">
                            <strong class="font-weight-bold"> <h5> API ASSISTED SEMANTIC MATCHING FOR SUBJECTIVE ONLINE EXAMINATION SYSTEM </h5></strong>
                          </button>

                          <div class="d-flex justify-content-end">
                              <button class="btn btn-sm buttonless mr-3" data-toggle="modal" data-target="#staticBackdrop">
                                  <i class="fas fa-file mr-1"></i>Abstract
                                </button>
                              <a href="" class="btn btn-sm buttonless mr-3" target="_blank"><i class="fas fa-file-pdf mr-1"></i>PDF</a>
                          </div>
                        </h5>
                      </div>
                  
                      <div id="headerOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body text-center">
                                <strong>
                                    <span>Authors: O. Enikuomehin, U. Dosumu</span>
                                </strong>
                                <br>
                                Publication Year: December, 2018
                            </div>
                        </div>                
                    </div>
                    <div class="card">
                      <div class="card-header content-white-writeup" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn text-white" data-toggle="collapse" data-target="#headerTwo" aria-expanded="true" aria-controls="headerTwo">
                            <strong class="font-weight-bold"> <h5> API ASSISTED SEMANTIC MATCHING FOR SUBJECTIVE ONLINE EXAMINATION SYSTEM </h5></strong>
                          </button>

                          <div class="d-flex justify-content-end">
                              <button class="btn btn-sm buttonless mr-3" data-toggle="modal" data-target="#staticBackdrop">
                                  <i class="fas fa-file mr-1"></i>Abstract
                                </button>
                              <a href="" class="btn btn-sm buttonless mr-3" target="_blank"><i class="fas fa-file-pdf mr-1"></i>PDF</a>
                          </div>
                        </h5>
                      </div>
                  
                      <div id="headerTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body text-center">
                                <strong>
                                    <span>Authors: O. Enikuomehin, U. Dosumu</span>
                                </strong>
                                <br>
                                Publication Year: December, 2018
                            </div>
                        </div>                
                    </div>
                </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        The system is aimed at taking the advantages of web resources to reduce time, cost and other constraints associated with location defined examination. 
                        The development has been limited by the strictness of the examination format vis-�-vis keyword match which are boundary-defined. 
                        This constraint led to poor adoption of online testing systems which are essential in handling the problem associated with large enrollment. 
                        Existing systems do not allow examiners to test for knowledge in ways that they seem due; similar to the conventional classroom testing system. 
                        We leveraged on the advances in Natural Language Processing and the success emerging from same and therefore remodeled the examination system against some known concepts in text summarization, term dependencies, semantic tagging and corporal build-up using a standalone global API for semantic interpretation of answers. 
                        We improve the Levenshtein distance between two strings a, b using the triangular inequality to identify the relationship of two terms as applicable between questions and answers. 
                        The Levenshtein distance was denoted in php with the int levenshtein ( string $str1 , string $str2 ). The output of the research is the development of a subjective examination system that allows the self-grading of essay type question using a web based semantic API. 
                        The complexity of the algorithm is O(m*n), where n and m are the length of str1 and str2 The interface was coded in php with a MySQL supporting backend. 
                    </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection

