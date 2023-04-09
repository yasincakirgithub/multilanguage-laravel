 <!-- slider section -->
 <section class="slider_section">
     <div class="play_btn">
         <a href="">
             <img src="images/play.png" alt="">
         </a>
     </div>

     <div class="container">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
                 @foreach ($slider_objects as $index => $slider_object)
                     <li class="@if ($index == 0) active @endif"
                         data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}">
                         {{ $index }}</li>
                 @endforeach

             </ol>
             <div class="carousel-inner">

                 @foreach ($slider_objects as $index => $slider_object)
                     <div class="carousel-item @if ($index == 0) active @endif">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="detail-box">
                                     <h1>
                                         {{ $slider_object->title }}
                                     </h1>
                                     <p>
                                         {{ $slider_object->description }}
                                     </p>
                                     <div class="btn-box">
                                         <a href="" class="btn-1">
                                             Read More
                                         </a>
                                         <a href="" class="btn-2">
                                             Contact us
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6 img-container">
                                 <div class="img-box">
                                     <img src="{{ $slider_object->image }}" alt="">
                                 </div>
                             </div>
                         </div>
                     </div>
                 @endforeach

             </div>
         </div>
     </div>
 </section>
 <!-- end slider section -->
