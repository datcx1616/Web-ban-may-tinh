 <div class="container-fluid ">
     <div class="row pb-1 " style="padding-left:50px; padding-right:50px">
         <section id="carouselExampleControls" class="container-fluid carousel slide" data-ride="carousel"
             data-interval="2000">
             <ol class="carousel-indicators">
                 @foreach ($slides as $key => $slide)
                     <li data-target="#carouselExampleControls" data-slide-to="{{ $key }}"
                         class="{{ $key == 0 ? 'active' : '' }}"></li>
                 @endforeach

             </ol>
             <a href="{{ route('shop.index') }}">
                 <div class="carousel-inner" style="border-radius: 10px">
                     @foreach ($slides as $key => $slide)
                         <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                             <img class="first-slide w-100" src="{{ $slide->image }}" alt="First slide">
                             <!-- <div class="carousel-caption d-none d-md-block text-left">

                </div> -->
                         </div>
                     @endforeach
                 </div>
             </a>
             <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
             </a>
         </section>
     </div>
 </div>
