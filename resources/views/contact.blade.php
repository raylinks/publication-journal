@extends('layouts.pages-class')

@section('mytitle', 'Contact Us')

@section('content')
    <div class="home-content">
        <h3 class="font-weight-bold text-prima text-center mt-5 mb-5"> <strong>Contact Us </strong></h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center p-2 content-contact-card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <input type="email" class="form-control mb-3" placeholder="Email" required>
                                <input type="text" class="form-control mb-3" placeholder="Subject" required>
                                <textarea name="" id="" cols="30" rows="10" class="form-control mb-3" placeholder="Message" required></textarea>
                                <button class="btn buttonless float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-center p-2 content-contact-card">
                    <div class="card-body text-prima">
                        <i class="fas fa-map-marker "></i> Lagos State University, Ojo, Lagos Nigeria
                    </div>
                </div>
                <div class="card text-center p-2 content-contact-card mt-2">
                    <div class="card-body text-prima">
                        <i class="fas fa-phone "></i> (+234) 810404 1253 
                    </div>
                </div>
                <div class="card text-center p-2 content-contact-card mt-2">
                    <div class="card-body text-prima">
                        <i class="fas fa-envelope "></i> <a href="mailto:chiefeditor.jrrs@lasu.edu.ng "> chiefeditor.jrrs@lasu.edu.ng </a>
                    </div>
                </div>

                <div class="mt-3">
                    <iframe class="text-center" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15857.83240105387!2d3.2008312!3d6.463502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf27b47e41fad6dab!2sLagos+State+University!5e0!3m2!1sen!2s!4v1508951868299" style="border:0" allowfullscreen="" width="100%"  height="45%" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

