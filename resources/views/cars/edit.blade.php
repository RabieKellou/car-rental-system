@extends('layouts.master')
@section('content')
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Modifier Une Voiture</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>

                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--==  Page Area Start ==-->
<div class="contact-page-wrao section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="contact-form">
                    <x-car-form action="{{ route('cars.update',['car'=>$car->id]) }}" editing="true" :car="$car">
                    </x-car-form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==  Page Area End ==-->


@endsection
