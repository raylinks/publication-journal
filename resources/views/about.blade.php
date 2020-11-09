@extends('layouts.pages-class')

@section('mytitle', 'About Us')

@section('content')
    <div class="home-content">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active  about-link text-prima" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">About JRRS</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link about-link text-prima" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Submission Guide</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link about-link text-prima" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Journal-team</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card shadow-lg p-3 mb-5 rounded content-writeup">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 text-center">
                                        Journal of Research and Review in Science (JRRS) 
                                        is a publication of the Faculty of Science, Lagos State University (LASU).
                                        <p></p>
                                        JRRS is an academic journal interested in publishing outputs of innovative science based research outputs. 
                                        <p></p>
                                        The journal prides itself in quality and has an editorial team with wealth of experience and expertise in scientific research.
                                        <p></p>
                                        JRRS would consider, for publication, high quality solicited and unsolicited articles in all areas of science and allied fields including Biochemistry, Biology, Biosystematics, Botany, Plant Breeding, Chemistry, Computer Science, Ecology, Engineering, Entomology, Environmental Microbiology, Food Microbiology, Genetics, Horticulture, Industrial chemistry, Mathematics, Statistics, Medical Microbiology, 
                                        Medical Science, Parasitology and Public Health, Pharmacology, Physics, Zoology etc.
                                        <p></p>
                                        The journal welcomes the submission of manuscripts that meet the general criteria of significance and academic excellence.
                                    </div>
                                    <div class="col-md-4">
                                        {{-- <div class="content-writeup p-1 mb-5 font-weight-bold text-center"> Scope</div> --}}
                                        <div class="content-white-writeup p-1 mb-5 text-center"> Agricultural Sciences</div>
                                        <div class="content-white-writeup p-1 mb-5 text-center"> Botany</div>
                                        <div class="content-white-writeup p-1 mb-5 text-center"> Chemistry</div>
                                        <div class="content-white-writeup p-1 mb-5 text-center"> Computer Science</div>
                                        <div class="content-white-writeup p-1 mb-5 text-center"> Fisheries</div>
                                        <div class="content-white-writeup p-1 mb-5 text-center"> Mathematics</div>
                                        <div class="content-white-writeup p-1 mb-5 text-center"> Microbiology</div>
                                        <div class="content-white-writeup p-1  text-center"> Physics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
        
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-4">
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active text-prima" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Author Guidelines</a>
                        <a class="nav-link text-prima" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Submission of papers</a>
                        <a class="nav-link text-prima" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Review Process</a>
                        <a class="nav-link text-prima" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Enquiries</a>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="text-prima font-weight-bold mb-2">
                                <h3> Instructions for Authors </h3>
                            </div>
                            <div style="line-height: 2.5rem;">
                                Journal of Research and Review in Science would publish high quality solicited and unsolicited articles in all areas of science and allied fields 
                                including Biochemistry, Botany, Genetics, Plant Breeding, Horticulture, Computer Science, Chemistry, Industrial chemistry, Mathematics, Statistics, Biology, Food Microbiology, Environmental Microbiology, Medical Microbiology, Pharmacology, 
                                Ecology, Entomology, Parasitology and Public Health, Biosystematics, Zoology, Medical Science, Engineering etc. The journal welcomes the submission of manuscripts that meet the general criteria of significance and academic excellence. 
                            </div>
                            <div class="article-types mt-3">
                                @include('article-types')
                            </div>
                            <div class="manuscript-format mt-3">
                                @include('manuscript-format')
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div style="line-height: 2.5rem;">
                                Authors will be required to submit the manuscript using the online submission platform of the journal of research and Review in Science. 
                                The website for submission will be opened on 10th October 2017 or shortly before then. 
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div style="line-height: 2.5rem;">
                                All manuscripts will be screened by an editor and members of the Editorial Board to ensure that they are within the scope of JRRS. 
                                Then each manuscript will be assigned to a reviewer who is an expert in the relevant field of the study. The review process will be double blind for the purpose of confidentiality. 
                                All authors are advised to avoid plagiarism as submitted manuscripts may be checked with a plagiarism application to ensure compliance with standard global practices. 

                                <p></p>
                                Decisions on the acceptance or rejection of a submitted manuscript will be made as rapidly as possible, and the journal would strive to return reviewers’ comments to authors as soon as possible. 
                                It is the goal of Journal of Research and Review in Science to publish manuscripts twice in a year.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div>
                                Editor- in -Chief, <br>
                                Journal of Research and Review in Science, <br>
                                Faculty of Science, LASU, PMB 0001 LASU Post Office, Ojo. <br>
                                <a href="mailto:editor.jrrs@lasu.edu.ng">editor.jrrs@lasu.edu.ng</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                @include('editor')
            </div>
          </div>

        
    </div>
@endsection

