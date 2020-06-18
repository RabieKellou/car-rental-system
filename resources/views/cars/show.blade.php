@extends('layouts.master')

@section('content')
<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
    <div class="container mt-5">
        <div class="row">
            <!-- Car List Content Start -->
            <div class="col-lg-8">
                <div class="car-details-content">
                    <h2>{{ $car->brand  }} {{ $car->model }} <span class="price">Rent: <b>DH{{ $car->price }}</b></span>
                    </h2>
                    <div class="car-preview-crousel">
                        <div class="single-car-preview">
                            <img src="{{ asset('img/car/car-5.jpg')}}" alt="JSOFT">
                        </div>
                        <div class="single-car-preview">
                            <img src="{{ asset('img/car/car-1.jpg')}}" alt="JSOFT">
                        </div>
                        <div class="single-car-preview">
                            <img src="{{ asset('img/car/car-6.jpg')}}" alt="JSOFT">
                        </div>
                    </div>
                    <div class="car-details-info">
                        <h4>Additional Info</h4>
                        <p>{{ $car->car_desc }}</p>
                        <div class="technical-info">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tech-info-table">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Class</th>
                                                <td>{{ $car->category->cat_label }}</td>
                                            </tr>
                                            <tr>
                                                <th>Fuel</th>
                                                <td>{{ $car->fuelType }}</td>
                                            </tr>
                                            <tr>
                                                <th>Doors</th>
                                                <td>{{ $car->doorCount }}</td>
                                            </tr>
                                            <tr>
                                                <th>Seats</th>
                                                <td>{{ $car->seatCount }}</td>
                                            </tr>
                                            <tr>
                                                <th>GearBox</th>
                                                <td>{{ $car->gearBoxType }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="tech-info-list">
                                        <ul>
                                            @foreach ($car->features as $feature)
                                            <li class="m-1">{{ $feature->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="review-area">
                            <h3>Be the first to review “{{ $car->brand . ' ' . $car->model }}”</h3>
                            <div class="review-star">

                                <p class="rating" id="rating-area">
                                    <i class="fa fa-star" data-value="1"></i>
                                    <i class="fa fa-star unmark" data-value="2"></i>
                                    <i class="fa fa-star unmark" data-value="3"></i>
                                    <i class="fa fa-star unmark" data-value="4"></i>
                                    <i class="fa fa-star unmark" data-value="5"></i>
                                </p>
                            </div>
                            <div class="review-form">
                                <form method="POST" action="{{ route('reviews.store') }}" id="review-form">
                                    {{-- <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="name-input">
                                                <input type="text" placeholder="Full Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="email-input">
                                                <input type="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div> --}}

                                    @csrf
                                    <input type="hidden" name="car_id" value="{{ $car->id }}">
                                    <input type="hidden" name="rating" value="1" id="rating">
                                    <div class="message-input">
                                        <textarea name="content" cols="30" rows="5"
                                            placeholder="Write Your Feedback Here!">{{ old('content') }}</textarea>
                                    </div>
                                    @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="input-submit">
                                        <button type="submit">Submit</button>
                                        <button type="reset">Clear</button>
                                    </div>
                                </form>
                            </div>

                            <x-review-list :carId="$car->id"></x-review-list>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Car List Content End -->

            <!-- Sidebar Area Start -->
            <div class="col-lg-4">
                <div class="sidebar-content-wrap m-t-50">
                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>For More Informations</h3>

                        <div class="sidebar-body">
                            <p><i class="fa fa-mobile"></i> +8801816 277 243</p>
                            <p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
                        </div>
                    </div>
                    <!-- Single Sidebar End -->

                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>Rental Tips</h3>

                        <div class="sidebar-body">
                            <ul class="recent-tips">
                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="assets/img/we-do/service1-img.png" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="assets/img/we-do/service2-img.png" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>

                                <li class="single-recent-tips">
                                    <div class="recent-tip-thum">
                                        <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
                                    </div>
                                    <div class="recent-tip-body">
                                        <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                        <span class="date">February 5, 2018</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Sidebar End -->

                    <!-- Single Sidebar Start -->
                    <div class="single-sidebar">
                        <h3>Connect with Us</h3>

                        <div class="sidebar-body">
                            <div class="social-icons text-center">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar End -->
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</section>
<!--== Car List Area End ==-->
<script>
    let ratingArea = document.getElementById('rating-area');
    let ratings = document.querySelectorAll('#rating-area');
    let rating=1;
    let ratingInput = document.querySelector('#rating');
    console.log(ratingArea);

    ratings.forEach(e=>{
        e.addEventListener('click',(e)=>{
            let ratingHTML='',i=1;
            console.log(e.target.dataset);
            rating=e.target.dataset.value;
            while(i<=5){
                if(i<=rating){
                    ratingHTML+=`<i class="fa fa-star" data-value="${i}"> </i> `;
                }
                else{
                    ratingHTML+=`<i class="fa fa-star unmark" data-value="${i}"> </i> `;
                }

                i++;
            }
            ratingInput.value=rating;
            console.log(ratingInput.value);
            ratingArea.innerHTML = ratingHTML;
        });
    });

</script>
@endsection
