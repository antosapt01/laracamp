@extends('layout.master')

@section('content')


<section class="pricing m-0">
    <div class="container">
        <div class="row pb-70">
            <div class="col-lg-5 col-12 header-wrap copywriting">
                <p class="story">
                    GOOD INVESTMENT
                </p>
                <h2 class="primary-header text-white">
                    Start Your Journey
                </h2>
                <p class="support">
                    Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-thirdty me-3">
                        View Syllabus
                    </a>
                </p>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    @foreach($data as $key => $camp)
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing">
                            <p class="story text-center">
                                {{$camp->title}}
                            </p>
                            <h1 class="price text-center">
                                ${{$camp->price}}K
                            </h1>
                            @foreach($camp->camp_benefits as $data)
                            <div class="item-benefit-pricing mb-4">
                                <img src="assets/images/ic_check.svg" alt="">
                                <p>
                                    {{$data->name }}
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            @endforeach
                            <p>
                                <a href="/checkout/{{$camp->slug}}" class="btn btn-master btn-primary w-100 mt-3">
                                    {{$camp->tag}}
                                </a>
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="row pb-70">
            <div class="col-lg-12 col-12 text-center">
                <img src="assets/images/brands.png" height="30" alt="">
            </div>
        </div>
    </div>
</section>

@endsection