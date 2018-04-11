@section('slider');
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/slider/slide-00.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/slider/slide-01.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/slider/slide-02.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/slider/slide-03.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/slider/slide-04.jpg" alt="">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>