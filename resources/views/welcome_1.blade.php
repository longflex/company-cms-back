@extends('layouts.front_1')

@section('content')
    
@inject('Utilities','App\Http\Utils\Utilities')
<?php
$en = $Utilities->processHighlightText($home->content, $home->highlight);
$ar = $Utilities->processHighlightText($home->content_ar, $home->highlight_ar);
?>
<!--== Home Start ==-->
<section class="parallax-bg fixed-bg xxl-screen pt-0 pb-0" data-parallax-bg-image="{{ asset('images/bg/' . $general->home_bg) }}" data-parallax-speed="0.5" data-parallax-direction="up" id="home">
    <div class="hero-text-wrap xxl-screen">
        <div class="hero-text">
            <div class="text-content-slider slick">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 centerize-col">
                            <div class="all-padding-50 text-center white-color">
                                <p class="font-400">{{ app()->getLocale() == 'en' ? $home->header : $home->header_ar }}</p>
                                <h1 class="raleway-font text-uppercase">{{ app()->getLocale() == 'en' ? $en['first'] : $ar['first'] }}<span class="text-primary">{{ app()->getLocale() == 'en' ? $en['middle'] : $ar['middle'] }}</span>{{app()->getLocale() == 'en' ? $en['last'] : $ar['last']}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Home End ==-->
<?php
$en = $Utilities->processHighlightText($about->content, $about->highlight);
$ar = $Utilities->processHighlightText($about->content_ar, $about->highlight_ar);
?>
<!--== About Start ==-->
<section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80" data-parallax-bg-image="{{ asset('images/bg/' . $general->about_bg) }}" data-parallax-speed="0.5" data-parallax-direction="up" id="about">
    <div class="container-fluid">
        <div class="col-md-6 col-sm-6 ">
            <div class="col-inner spacer text-left">
                <h2 class="raleway-font mt-0 font-20px xs-font-17px default-color">{{ app()->getLocale() == 'en' ? $about->header : $about->header_ar }}</h2>
                <h1 class="raleway-font mt-0 font-50px font-600 xs-font-27px white-color">{{ app()->getLocale() == 'en' ? $en['first'] : $ar['first'] }}<span class="text-primary">{{ app()->getLocale() == 'en' ? $en['middle'] : $ar['middle'] }}</span>{{app()->getLocale() == 'en' ? $en['last'] : $ar['last']}}</h1>
                <p class="mt-30 intro">{{ app()->getLocale() == 'en' ? $about->description : $about->description_ar }}</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 ">
            <div class="col-inner spacer text-left">
                <div class="skillbar-wrap skillbar-style-01">
                    @foreach($skills as $skill)
                    <div class="skillbar" data-percent="{{$skill->amount}}">
                        <span class="skillbar-title white-color font-18px">{{ app()->getLocale() == 'en' ? $skill->title : $skill->title_ar }}</span>
                        <p class="skillbar-bar default-bg"></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--== About End ==-->

<!--== Portfolio Start ==-->
<section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80" data-parallax-bg-image="{{ asset('images/bg/' . $general->work_bg) }}" data-parallax-speed="0.5" data-parallax-direction="up" id="work">
    <div class="container">
        <div class="row">
            <div class="col-md-8 centerize-col text-center">
                <div class="section-title">
                    <h1 class="raleway-font white-color">{{ app()->getLocale() == 'en' ? $work_layout->header : $work_layout->header_ar }}</h1>
                    <hr class="center_line default-bg">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="portfolio-gallery-filter" class="cbp-l-filters-alignCenter text-sm-center mt-50">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item dark">
                        All
                    </div>
                    @foreach($categories as $key => $category)
                    <div data-filter=".{{ app()->getLocale() == 'en' ? $category->name : $category->name_ar }}" class="cbp-filter-item">
                    {{ app()->getLocale() == 'en' ? $category->name : $category->name_ar }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid remove-padding">
        <div class="row mt-50">
            <div class="col-md-12">
                <div id="portfolio-gallery" class="cbp">
                    @foreach($works as $work)
                    <div class="cbp-item {{ app()->getLocale() == 'en' ? $work->category->name : $work->category->name_ar }} col-md-4 col-sm-6">
                        <div class="portfolio gallery-image-hover text-center">
                            <div class="default-overlay folio-overlay"></div>
                            <img src="{{ asset('images/works/' . $work->image) }}" alt="">
                            <div class="portfolio-wrap">
                                <div class="portfolio-description">
                                    <h3 class="portfolio-title mt-0">{{ app()->getLocale() == 'en' ? $work->project_name : $work->project_name_ar }}</h3>
                                    <h6 class="links">{{ app()->getLocale() == 'en' ? $work->category->name : $work->category->name_ar }}</h6>
                                </div>
                                <ul class="portfolio-details">
                                    <li>
                                        <a class="cbp-lightbox" href="{{ asset('images/works/' . $work->image) }}"><i class="icofont icofont-search"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 remove-padding default-bg">
                <p class="mt-0 centerize-col text-center pt-60 pb-60 mb-0">
                    <a href="/project-details" class="btn btn-lg btn-light-outline btn-square">View All Works</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!--== Portfolio End ==-->

<?php
$en = $Utilities->processHighlightText($service_layout->content, $service_layout->highlight);
$ar = $Utilities->processHighlightText($service_layout->content_ar, $service_layout->highlight_ar);
?>

<!--== Services Start ==-->
<section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80" data-parallax-bg-image="{{ asset('images/bg/' . $general->service_bg) }}" data-parallax-speed="0.5" data-parallax-direction="up" id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-8 centerize-col text-center">
                <div class="section-title">
                    <h1 class="raleway-font white-color">{{ app()->getLocale() == 'en' ? $service_layout->sidebar : $service_layout->sidebar_ar }}</h1>
                    <hr class="center_line default-bg">
                </div>
            </div>
        </div>
        <div class="row mt-50">
            @foreach($services as $service)
            <div class="col-md-4 dark feature-box text-left mb-50 col-sm-6 wow fadeInRight" data-wow-delay="0.1s">
                <div class="pull-right white-color">
                    <h4 class="mt-0 font-600 raleway-font">0{{$loop->iteration}}. {{ app()->getLocale() == 'en' ? $service->name : $service->name_ar}}</h4>
                    <p class="font-400">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--== Services End ==-->

<!--== Client Start ==-->
<section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80" data-parallax-bg-image="{{ asset('images/bg/' . $general->client_bg) }}" data-parallax-speed="0.5" data-parallax-direction="up" id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-8 centerize-col text-center">
                <div class="section-title">
                    <h1 class="raleway-font white-color">{{ app()->getLocale() == 'en' ? $client_layout->sidebar : $client_layout->sidebar_ar }}</h1>
                    <hr class="center_line default-bg">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-50">
            @foreach($clients as $client)
            <div class="col-md-3 col-sm-6 col-xs-12 remove-padding">
                <div class="o-team-wrap">
                    <div class="o-team-img">
                        <div class="o-team-media-img">
                            <img alt="{{ $client->name }}" src="{{ asset('images/clients/' . $client->image) }}">
                        </div>
                    </div>
                    <div class="o-tean-content">
                        <div class="o-tean-content-inner">
                            <p class="default-color">Client Name: </p>
                            <h4 class="mt-10 white-color text-uppercase">{{ $client->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Member End ==-->
            @endforeach
        </div>
    </div>
</section>
<!--== Client End ==-->

<!--== Reviews Start ==-->
<section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80" data-parallax-bg-image="{{ asset('images/bg/' . $general->review_bg) }}" data-parallax-speed="0.5" data-parallax-direction="up" id="review">
    <div class="overlay-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 centerize-col text-center">
                <div class="section-title">
                    <h1 class="raleway-font white-color">{{ app()->getLocale() == 'en' ? $review_layout->sidebar : $review_layout->sidebar_ar }}</h1>
                    <hr class="center_line default-bg">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="slick testimonial">
            @foreach($reviews as $review)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!--== Slide ==-->
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <i class="icofont icofont-quote-left font-50px default-color mt-20"></i>
                            <div class="text-center">
                                <h4 class="font-600 mb-0 raleway-font white-color">{{ app()->getLocale() == 'en' ? $review->client_name : $review->client_name_ar }}</h4>
                                <span class="default-color font-14px">{{ app()->getLocale() == 'en' ? $review->client_job : $review->client_job_ar }}</span>
                                <div class="clearfix mb-20"></div>
                                <p class="mt-20 line-height-26 font-14px white-color">{{ app()->getLocale() == 'en' ? $review->content : $review->content_ar }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--== Reviews End ==-->

<!--== Contact Start ==-->
<section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80" data-parallax-bg-image="{{ asset('images/bg/' . $general->contact_bg) }}" data-parallax-speed="0.5" data-parallax-direction="up" id="contact">
    <div class="overlay-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 centerize-col text-center">
                <div class="section-title">
                    <h1 class="raleway-font white-color">{{ __('Get In Touch') }}</h1>
                    <hr class="center_line default-bg">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-70">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form class="js-form" novalidate="novalidate">  
                    <div class="messages"></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="name">Name</label>
                                <input type="text" name="name" class="md-input style-02" id="name" placeholder="Name *" required data-error="Your Name is Required">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="email" name="email" class="md-input style-02" id="email" placeholder="Email *" required data-error="Please Enter Valid Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="subject">Subject (Optinal)</label>
                                <input type="text" name="subject" class="md-input style-02" id="subject" placeholder="Subject (Optinal)">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label class="sr-only" for="message">Message</label>
                                <textarea name="message" class="md-textarea style-02" id="message" rows="7" placeholder="Message *" required data-error="Please, Leave us a message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="text-left">
                            <button type="submit" class="btn btn-lg btn-light-outline btn-square" id="btn_submit">Post Comment</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--== Contact End ==-->
@endsection
