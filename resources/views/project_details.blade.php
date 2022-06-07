@extends('layouts.front')

@section('style')
    <style>
        .modal-content iframe {
            margin: 0 auto;
            display: block;
        }
    </style>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="project-carousel owl-carousel">
        @foreach($works as $work)
            <div class="project-carousel-item" style="background:url({{ asset('images/works/' . $work->image) }}); background-repeat: no-repeat; background-size: cover;">
                <div>
                    <div class="inner-content">
                        <div class="container">
                            <div class="row">
                                <div class="project-detail-info col-md-6">
                                    <div class="project-detail-content">
                                        <h3 class="project-detail-title">{{ app()->getLocale() == 'en' ? $work->project_name : $work->project_name_ar }}</h3>
                                        <p class="project-detail-text">{{ app()->getLocale() == 'en' ? $work->description : $work->description_ar }}</p>
                                        <ul class="project-detail-list text-dark">
                                            <li>
                                                <span class="left">Clients:</span>
                                                <span class="right">{{ app()->getLocale() == 'en' ? $work->client : $work->category->client_ar }}</span>
                                            </li>
                                            <li>
                                                <span class="left">Date:</span>
                                                <span class="right">{{ $work->date }}</span>
                                            </li>
                                            <li>
                                                <span class="left">Project Type:</span>
                                                <span class="right">{{ app()->getLocale() == 'en' ? $work->project_type : $work->category->project_type_ar }}</span>
                                            </li>
                                            @if(isset($work->youtube))
                                            <li>
                                                <span class="left">Video:</span>
                                                <span class="right">
                                                    <a href="#youtube_tag" data-toggle="modal">
                                                        Watch Video
                                                    </a>
                                                </span>
                                            </li>
                                            @endif
                                        </ul>
                                        <div class="project-detail-meta">
                                            <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                            <div class="social-list pull-sm-right">
                                                @if(isset($contact->twitter))
                                                    <a href="{{ $contact->twitter }}" class="icon ion-social-twitter" target="_blank"></a>
                                                @endif
                                                @if(isset($contact->facebook))
                                                    <a href="{{ $contact->facebook }}" class="icon ion-social-facebook" target="_blank"></a>
                                                @endif
                                                @if(isset($contact->google))
                                                    <a href="mailto:{{ $contact->google }}" class="icon ion-email"></a>
                                                @endif
                                                @if(isset($contact->linkedin))
                                                    <a href="{{ $contact->linkedin }}" class="icon ion-social-linkedin" target="_blank"></a>
                                                @endif
                                                @if(isset($contact->instagram))
                                                    <a href="{{ $contact->instagram }}" class="fa fa-instagram"></a>
                                                @endif
                                                @if(isset($contact->phone))
                                                    <a href="tel:{{ $contact->phone }}" class="fa fa-mobile-phone" target="_blank"></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div id="youtube_tag" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="youtube_iframe" width="450" height="350"
                        src="{{ $work->youtube }}"
{{--                        src="{{ $work->youtube }}?autoplay=1"  Play Auto when Loading--}}
                        frameborder="0" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        var url = $("#youtube_iframe").attr('src');
        $("#youtube_tag").on('hide.bs.modal', function() {
            $("#youtube_iframe").attr('src', '');
        });
        $("#youtube_tag").on('show.bs.modal', function() {
            $("#youtube_iframe").attr('src', url);
        });
    });
</script>
@endsection
