@extends('layouts.master')
{{-- @extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
</div>
@endif

You are logged in!
</div>
</div>
</div>
</div>
</div>
@endsection --}}
@section('content')
<!--== Slider Area Start ==-->
<section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="book-a-car">
                        <form action="index.html">
                            <!--== Pick Up Location ==-->
                            <div class="pickup-location book-item">
                                <h4>LOCATION:</h4>
                                <select class="custom-select">
                                    <option selected>sélectionner</option>
                                    <option value="1">Meknes</option>
                                    <option value="2">Rabat</option>
                                    <option value="3">Tanger</option>
                                    <option value="3">Alhoceima</option>
                                    <option value="3">Marrakech</option>

                                </select>
                            </div>
                            <!--== Pick Up Location ==-->

                            <!--== Pick Up Date ==-->
                            <div class="pick-up-date book-item">
                                <h4>Date De Retrait :</h4>
                                <input id="startDate" placeholder="Date De Retrait" />

                                <div class="return-car">
                                    <h4>Date De Retour:</h4>
                                    <input id="endDate" placeholder="Date De Retour" />
                                </div>
                            </div>
                            <!--== Pick Up Location ==-->

                            <!--== Car Choose ==-->
                            <div class="choose-car-type book-item">
                                <h4>TYPE DE VOITURE:</h4>
                                <select class="custom-select">
                                    <option selected>sélectionner</option>
                                    <option value="1">BMW</option>
                                    <option value="2">Audi</option>
                                    <option value="3">Lexus</option>
                                </select>
                            </div>
                            <!--== Car Choose ==-->

                            <div class="book-button text-center">
                                <button class="book-now-btn">chercher</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-7 text-right">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="slider-right-text">
                                <h1> RÉSERVEZ UNE VOITURE AUJOURD'HUI!</h1>
                                <p>POUR LE MEILLEUR PRIX VOUS POUVEZ TROUVER</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== slide Item One ==-->
</section>
<!--== Slider Area End ==-->
<!--== About Us Area Start ==-->
<section id="about-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>About us</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>

                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <!-- About Content Start -->
            <div class="col-lg-6">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="about-content">
                            <p>
                                société de location de voitures nous louons des voitures dans la plupart des villes du
                                pays avec des services premium et de haute qualité dans tous les aspects et en
                                partenariat avec la plupart des 10 entreprises.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Content End -->

            <!-- About Video Start -->
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{asset('img/12.jpg')}}" alt="JSOFT">
                </div>
            </div>
            <!-- About Video End -->
        </div>


    </div>
</section>
<!--== About Us Area End ==-->

<!--== Services Area Start ==-->
<section id="service-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Services</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>

                </div>
            </div>
            <!-- Section Title End -->
        </div>


        <!-- Service Content Start -->
        <div class="row">
            <!-- Single Service Start -->
            <div class="col-lg-4 text-center">
                <div class="service-item">
                    <i class="fa fa-taxi"></i>
                    <h3> Location De Voiture</h3>

                </div>
            </div>
            <!-- Single Service End -->

            <!-- Single Service Start -->
            <div class="col-lg-4 text-center">
                <div class="service-item">
                    <i class="fa fa-cog"></i>
                    <h3>RÉPARATION</h3>

                </div>
            </div>
            <!-- Single Service End -->



            <!-- Single Service Start -->
            <div class="col-lg-4 text-center">
                <div class="service-item">
                    <i class="fa fa-life-ring"></i>
                    <h3>ASSURANCE-VIE</h3>

                </div>
            </div>
            <!-- Single Service End -->




        </div>
        <!-- Service Content End -->
    </div>
</section>
<!--== Services Area End ==-->

<!--== Fun Fact Area Start ==-->
<section id="funfact-area" class="overlay section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-12 m-auto">
                <div class="funfact-content-wrap">
                    <div class="row">
                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-smile-o"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">0</span></p>
                                    <h4>CLIENTS HEUREUX</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->

                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-car"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">100</span></p>
                                    <h4>VOITURES EN STOCK</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->

                        <!-- Single FunFact Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-funfact">
                                <div class="funfact-icon">
                                    <i class="fa fa-bank"></i>
                                </div>
                                <div class="funfact-content">
                                    <p><span class="counter">5</span></p>
                                    <h4>villes</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Single FunFact End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Fun Fact Area End ==-->



<x-car-list></x-car-list>
@endsection
