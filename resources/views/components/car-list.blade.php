<!--== Choose Car Area Start ==-->
<section id="choose-car" class="section-padding">
    <div class="container mt-5">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Choose your Car</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <!-- Choose Area Content Start -->
            <div class="col-lg-12">
                <div class="choose-content-wrap">
                    <!-- Choose Area Tab Menu -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab"
                                aria-selected="true">popular Cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab"
                                aria-selected="false">newest cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab"
                                aria-selected="false">Our Office</a>
                        </li>
                    </ul>
                    <!-- Choose Area Tab Menu -->

                    <!-- Choose Area Tab content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- Popular Cars Tab Start -->
                        <div class="tab-pane fade show active" id="popular_cars" role="tabpanel"
                            aria-labelledby="home-tab">
                            <!-- Popular Cars Content Wrapper Start -->
                            <div class="popular-cars-wrap">
                                <!-- Filtering Menu -->
                                {{-- <div class="popucar-menu text-center">
                                    <a href="#" data-filter="*" class="active">all</a>
                                    <a href="#" data-filter=".con">Conver</a>
                                    <a href="#" data-filter=".hat">Truck</a>
                                    <a href="#" data-filter=".mpv">MPV</a>
                                    <a href="#" data-filter=".sedan">Sedan</a>
                                    <a href="#" data-filter=".suv">SUV</a>
                                </div> --}}
                                <div class="popucar-menu text-center">
                                    <a href="#" data-filter="*" class="active">all</a>
                                    @forelse ($categories as $category)

                                    <a href="#" data-filter=".{{ $category->cat_label }}">{{ $category->cat_label }}</a>
                                    @empty

                                    @endforelse
                                    {{-- <a href="#" data-filter=".hat">Truck</a>
                                    <a href="#" data-filter=".mpv">MPV</a>
                                    <a href="#" data-filter=".sedan">Sedan</a>
                                    <a href="#" data-filter=".suv">SUV</a> --}}
                                </div>
                                <!-- Filtering Menu -->

                                <!-- PopularCars Tab Content Start -->
                                <div class="row popular-car-gird">
                                    <!-- Single Popular Car Start -->
                                    @forelse ($cars as $car)


                                    <div class="col-lg-4 col-md-6 {{ $car->category->cat_label }}">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="img/car/car-1.jpg">
                                                    <img src="img/car/car-1.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="{{ route('cars.show',['car'=>$car->id]) }}">{{ $car->brand  }}
                                                        {{ $car->model }}</a>
                                                    <span class="price"><i class="fa fa-tag"></i>
                                                        ${{ $car->price }}/day</span>
                                                </h3>

                                                <h5>{{ $car->category->cat_label }}</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">{{ $car->purchase_date }}</a>
                                                    @forelse ($car->features as $feature)
                                                    <a href="#">{{ $feature->name }}</a>
                                                    @empty
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Popular Car End -->
                                    @empty
                                    <p>no cars found</p>
                                    @endforelse

                                </div>
                                <!-- PopularCars Tab Content End -->
                            </div>
                            <!-- Popular Cars Content Wrapper End -->
                        </div>
                        <!-- Popular Cars Tab End -->

                        <!-- Newest Cars Tab Start -->
                        <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Newest Cars Content Wrapper Start -->
                            <div class="popular-cars-wrap">
                                <!-- Filtering Menu -->
                                <div class="newcar-menu text-center">
                                    <a href="#" data-filter="*" class="active">all</a>
                                    <a href="#" data-filter=".toyota">toyota</a>
                                    <a href="#" data-filter=".bmw">bmw</a>
                                    <a href="#" data-filter=".audi">audi</a>
                                    <a href="#" data-filter=".tata">Tata</a>
                                </div>

                                <!-- Filtering Menu -->

                                <!-- NewestCars Tab Content Start -->
                                <div class="row newest-car-gird">
                                    <!-- Single Newest Car Start -->
                                    <div class="col-lg-4 col-md-6 tata audi">
                                        <div class="single-new-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-6.jpg">
                                                    <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Toyota RAV4 EV</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                </h3>

                                                <h5>Toyota</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2018</a>
                                                    <a href="#">Auto</a>
                                                    <a href="#">Non AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Newest Car End -->

                                    <!-- Single Newest Car Start -->
                                    <div class="col-lg-4 col-md-6 bmw tata toyota">
                                        <div class="single-new-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-5.jpg">
                                                    <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Toyota RAV4 EV</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                </h3>

                                                <h5>Toyota</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2018</a>
                                                    <a href="#">Auto</a>
                                                    <a href="#">Non AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Newest Car End -->

                                    <!-- Single Newest Car Start -->
                                    <div class="col-lg-4 col-md-6 bmw">
                                        <div class="single-new-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                    <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="#">Toyota RAV4 EV</a>
                                                    <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                </h3>

                                                <h5>Toyota</h5>

                                                <div class="p-car-feature">
                                                    <a href="#">2018</a>
                                                    <a href="#">Auto</a>
                                                    <a href="#">Non AIR CONDITION</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Newest Car End -->
                                </div>
                                <!-- NewestCars Tab Content End -->
                            </div>
                            <!-- Newest Cars Content Wrapper End -->
                        </div>
                        <!-- Newest Cars Tab End -->

                        <!-- Office Map Tab -->
                        <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="map-area">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6538067244583!2d90.37092511435942!3d23.79533919297639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cce3251ab1%3A0x7a2aa979862a9643!2sJSoft!5e0!3m2!1sen!2sbd!4v1516771096779"></iframe>
                            </div>
                        </div>
                        <!-- Office Map Tab -->
                    </div>
                    <!-- Choose Area Tab content -->
                </div>
            </div>
            <!-- Choose Area Content End -->
        </div>
    </div>
</section>
<!--== Choose Car Area End ==-->
