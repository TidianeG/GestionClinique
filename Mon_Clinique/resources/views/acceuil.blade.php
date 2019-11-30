@extends('layouts.app')
    <!-- ***** Hero Area Start ***** -->
    @section('content')
            <section class="hero-area">
                <div class="hero-slides owl-carousel">
                    <!-- Single Hero Slide -->
                    <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/hero1.jpg);">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <div class="hero-slides-content">
                                        <h2 data-animation="fadeInUp" data-delay="100ms">Des Services Medicaux 100% <br>Digne de Confiance</h2>
                                        <h6 data-animation="fadeInUp" data-delay="400ms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</h6>
                                        <button  type="button" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="70ms" data-toggle="modal" data-target="#exampleModalCenter" id="buton">Se Connecter à mon espace <span>-></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide -->
                    <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(../img/bg-img/breadcumb3.jpg);">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <div class="hero-slides-content">
                                        <h2 data-animation="fadeInUp" data-delay="100ms">Des Services Medicaux 100% <br>Digne de Confiance</h2>
                                        <h6 data-animation="fadeInUp" data-delay="400ms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</h6>
                                        <button type="button" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="70ms" data-toggle="modal" data-target="#exampleModalCenter" id="buton">Se Connecter à mon espace <span>-></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide -->
                    <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(../img/bg-img/breadcumb1.jpg);">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <div class="hero-slides-content">
                                        <h2 data-animation="fadeInUp" data-delay="100ms">Des Services Medicaux 100% <br>Digne de Confiance</h2>
                                        <h6 data-animation="fadeInUp" data-delay="400ms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</h6>
                                        <button class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="70ms" data-toggle="modal" data-target="#exampleModalCenter" type="button" id="buton">Se Connecter à mon espace <span>-></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Hero Area End ***** -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
    @endsection
    