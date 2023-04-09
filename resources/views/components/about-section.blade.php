<!-- about section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            {{$about -> title}}
                        </h2>

                    </div>
                    <p>
                        {{$about -> description}}
                    </p>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{$about -> image}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about section -->