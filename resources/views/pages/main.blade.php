@extends('template.temp')

@section('content')
@include('partials.elements.eventcountdown')
<hr class="separator"/>
<section class="sectback">
    <div class="row clearmargin clearpadding articlesection">
        <div class="col-xs-12 col-sm-6 col-md-6 clearmargin clearpadding col-sm-push-6"><img src="assets/img/office-front.jpeg" style="width:100%;"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6" style="padding:20px;">
            <h1>Heading</h1>
            <hr>
            <p class="articletext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel lorem a lectus finibus bibendum ut sagittis diam. Nunc egestas nulla in elit congue, id pellentesque ex semper. Aenean euismod tellus tincidunt massa eleifend, a efficitur
                lectus ultricies. Aliquam bibendum et leo quis consectetur. Integer consequat consequat mauris, id porttitor sem feugiat eu. Proin ac neque eu nisi viverra mattis. Curabitur molestie lectus ac sollicitudin faucibus. Duis congue ipsum
                eget justo egestas blandit.</p>
            <div style="text-align:center"><button type="button" class="btn btn-outline-info btnsize">Lorem </button></div>
        </div>
    </div>
    <div class="row clearmargin clearpadding articlesection">
        <div class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6" style="padding:20px;">
            <h1>Heading</h1>
            <hr>
            <p class="articletext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel lorem a lectus finibus bibendum ut sagittis diam. Nunc egestas nulla in elit congue, id pellentesque ex semper. Aenean euismod tellus tincidunt massa eleifend, a efficitur
                lectus ultricies. Aliquam bibendum et leo quis consectetur. Integer consequat consequat mauris, id porttitor sem feugiat eu. Proin ac neque eu nisi viverra mattis. Curabitur molestie lectus ac sollicitudin faucibus. Duis congue ipsum
                eget justo egestas blandit.</p>
            <div style="text-align:center"><button type="button" class="btn btn-outline-info btnsize">Lorem </button></div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 clearmargin clearpadding col-sm-push-6"><img src="assets/img/office-front.jpeg" style="width:100%;"></div>
    </div>
    <div class="row clearmargin clearpadding articlesection">
        <div class="col-xs-12 col-sm-6 col-md-6 clearmargin clearpadding col-sm-push-6"><img src="assets/img/office-front.jpeg" style="width:100%;"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6" style="padding:20px;">
            <h1>Heading</h1>
            <hr>
            <p class="articletext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel lorem a lectus finibus bibendum ut sagittis diam. Nunc egestas nulla in elit congue, id pellentesque ex semper. Aenean euismod tellus tincidunt massa eleifend, a efficitur
                lectus ultricies. Aliquam bibendum et leo quis consectetur. Integer consequat consequat mauris, id porttitor sem feugiat eu. Proin ac neque eu nisi viverra mattis. Curabitur molestie lectus ac sollicitudin faucibus. Duis congue ipsum
                eget justo egestas blandit.</p>
            <div style="text-align:center"><button type="button" class="btn btn-outline-info btnsize">Lorem </button></div>
        </div>
    </div>
    <hr class="separatordark"/>
<div class="testimonials">
        <div class="row centerme">
            <h1>TESTIMONIALS HEADING</h1>
        </div>
        <div class="row">
            <div class="col-md-6 pad30">
                <div class="vidcontainer">
                    <div class="vplayer" data-v="fUis9yny_lI">
                        <div class="plybtn"></div>
                    </div>
                </div><a href="#"></a>
                <h3 class="name">Testimony Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
            </div>
            <div class="col-md-6 pad30">
                <div class="vidcontainer">
                    <div class="vplayer" data-v="fUis9yny_lI">
                        <div class="plybtn"></div>
                    </div>
                </div><a href="#"></a>
                <h3 class="name">Testimony Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
            </div>
        </div>
    </div>
</section>
    <hr class="separator"/>
    @include('partials.elements.eventcountdown')
@endsection