@extends('layouts.pages-class')

@section('mytitle', 'About Us')

@section('content')
    <div class="home-content">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active  about-link text-prima" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">About LAJOP</a>
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
                        <div class="card shadow-lg p-5 mb-5 rounded content-writeup">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        LASU Journal of Philosophy (LAJOP) is an interdisciplinary annual publication of the Department of Philosophy, Lagos State University, Ojo, Lagos, Nigeria.
                                        <p></p>
                                        The Journal is interested in publishing original articles in traditional and emerging fields of philosophy, including interdisciplinary research in related fields with a philosophical approach.
                                        <p></p>It aims at publishing research findings, exploring not only the various thematic dimensions of philosophy, 
                                        history of philosophy and from different philosophical traditions, but also themes that illuminate the practical relevance of philosophy to the different aspects of the individual and social existence. 
                                        <p></p>
                                        The Department of Philosophy, Lagos State University, retains the copyright to the articles published in the journal. 
                                        However, the contributors are responsible for the views and claims expressed in their papers. Papers for publication in the journal are accepted throughout the year. 
                                        All submissions are subject to blind-review by two/three reviewers.
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
                        <a class="nav-link active text-prima" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Submission Guidelines</a>
                        <a class="nav-link text-prima" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Enquiries</a>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="manuscript-format mt-3">
                                @include('manuscript-format')
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div>
                                Department of Philosophy <br>
                                Faculty of Arts <br>
                                Lagos State University <br>
                                Main Campus, KM 15, Badagry Expressway, Ojo, <br>
                                PMB 0001, LASU Post Office, Ojo, Lagos, Nigeria. <br>
                                Email: <a href="mailto:philosophy@lasu.edu.ng">philosophy@lasu.edu.ng</a> |
                                <a href="mailto:ljp.philosophy@lasu.edu.ng">ljp.philosophy@lasu.edu.ng</a>
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

