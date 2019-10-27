@extends('layout.app', ['inverted' => 'true'])
@section('body')
<section id="cd-timeline" class="body-wrapper cd-container">
    <div class="cd-timeline-block">
        <div class="cd-timeline-img">
            <img src='../img/icon/initialize.png' alt='initialize'>
        </div>

        <div class="cd-timeline-content">
            <h2>@yield('title-1')</h2>
            <p>@yield('content-1')</p>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img">
            <img src='../img/icon/proposal.png' alt='proposal'>
        </div>

        <div class="cd-timeline-content">
            <h2>@yield('title-2')</h2>
            <p>@yield('content-2')</p>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img">
            <img src='../img/icon/production.png' alt='production'>
        </div>

        <div class="cd-timeline-content">
            <h2>@yield('title-3')</h2>
            <p>@yield('content-3')</p>
        </div>
    </div>

    <div class="cd-timeline-block">
        <div class="cd-timeline-img">
            <img src='../img/icon/package.png' alt='package'>
        </div>

        <div class="cd-timeline-content">
            <h2>@yield('title-4')</h2>
            <p>@yield('content-4')</p>
        </div>
    </div>
</section>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="../css/timeline.css">
@endsection
