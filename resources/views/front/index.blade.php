@extends('layouts.frontend')

@section('content')
<section class="home_carousel">
    <div class="">
        <div id="demo" class="carousel slide" data-ride="carousel">
          
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/carousel1.gif') }}">
                <div class="carousel-caption">
                    <h1>WashMAX 1000 Portable <br> Vehicle Washbay</h1>
                    <h4>Low Duty Cycle</h4>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/carousel2.gif') }}">
                <div class="carousel-caption">
                    <h1>WashMAX 1500 Portable <br> Vehicle Washbay</h1>
                    <h4>Medium Duty Cycle</h4>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/carousel3.gif') }}">
                <div class="carousel-caption">
                    <h1>WashMAX 3000 Portable <br> Vehicle Washbay</h1>
                    <h4>High Duty Cycle</h4>
                  </div>
              </div>
            </div>
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          
          </div>
    </div>
</section>

<section class="py-4">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front home_gallery">
              <div class="gallery">
                <img src="{{ asset('assets/img/home/1.gif') }}" alt="Avatar">
                <div class="gallery_title">
                  <h1> Mobile Vehicle Washbay</h1>
                  <p>Light Duty</p>
                </div>
              </div>
              
            </div>
            <div class="flip-card-back">
              <h1>Mobile Vehicle Washbay</h1>
              <p>Light Duty</p>
              <a href="{{route('washMAX1000')}}">View Detail</a>
            </div>
          </div>
        </div>        
      </div>

      <div class="col-md-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front home_gallery">
              <div class="gallery">
                <img src="{{ asset('assets/img/home/2.gif') }}" alt="Avatar">
                <div class="gallery_title">
                  <h1> Mobile Vehicle Washbay</h1>
                  <p>Medium Duty</p>
                </div>
              </div>
            </div>
            <div class="flip-card-back">
              <h1>Mobile Vehicle Washbay</h1>
              <p>Medium Duty</p>
              <a href="{{ route('washMAX1500') }}">View Detail</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front home_gallery">
              <div class="gallery">
                <img src="{{ asset('assets/img/home/3.gif') }}" alt="Avatar">
                <div class="gallery_title">
                  <h1> Mobile Vehicle Washbay</h1>
                  <p>Heavy Duty</p>
                </div>
              </div>
            </div>
            <div class="flip-card-back">
              <h1>Mobile Vehicle Washbay</h1>
              <p>Heavy Duty</p>
              <a href="{{ route('washMAX3000') }}">View Detail</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front home_gallery">
              <div class="gallery">
                <img src="{{ asset('assets/img/home/4.gif') }}" alt="Avatar">
                <div class="gallery_title">
                  <h1> Mobile Travel-through Vehicle Wash</h1>
                  <p>Light Duty</p>
                </div>
              </div>
            </div>
            <div class="flip-card-back">
              <h1> Mobile Travel-through Vehicle Wash</h1>
              <p>Light Duty</p>
              <a href="{{ route('washMAX6000') }}">View Detail</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front home_gallery">
              <div class="gallery">
                <img src="{{ asset('assets/img/home/5.gif') }}" alt="Avatar">
                <div class="gallery_title">
                  <h1> Mobile Travel-through Vehicle Wash</h1>
                  <p>Medium Duty</p>
                </div>
              </div>
            </div>
            <div class="flip-card-back">
              <h1> Mobile Travel-through Vehicle Wash</h1>
              <p>Medium Duty</p>
              <a href="{{ route('washMAX8000') }}">View Detail</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front home_gallery">
              <div class="gallery">
                <img src="{{ asset('assets/img/home/6.gif') }}" alt="Avatar">
                <div class="gallery_title">
                  <h1> Mobile Travel-through Vehicle Wash</h1>
                  <p>Heavy Duty</p>
                </div>
              </div>
            </div>
            <div class="flip-card-back">
              <h1> Mobile Travel-through Vehicle Wash</h1>
              <p> Heavy Duty</p>
              <a href="{{ route('washMAX9000') }}">View Detail</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front home_gallery">
              <div class="gallery">
                <img src="{{ asset('assets/img/home/7.gif') }}" alt="Avatar">
                <div class="gallery_title">
                  <h1> Vehicle Wash-down Ramp</h1>
                </div>
              </div>              
            </div>
            <div class="flip-card-back">
              <h1> Vehicle Wash-down Ramp</h1>
              <a href="{{ route('washMAX4000') }}">View Detail</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>     
    </div>
  </div>
</section>

<section class="details_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="detail_header">
          <h2>
            Australia’s #1 Supplier of Vehicle Wash Systems
          </h2>
          <h3>
            Solutions You Can TRUST
          </h3>
          <h3>
            32 Years of Industry Experience
          </h3>          
        </div>

        <div class="detail_body">
          <p>
            Thank you for taking the time to visit the Home Page of washMAX – engineering portable vehicle wash systems.
          </p>
          <p>
            Our compassion is in construction. Our directors have always been in the construction industry and know just how challenging this industry can be. We pride ourselves in providing our clients with vehicle wash-down solutions that are simple, cost-efficient and compliant with all current environmental regulations. 
          </p>
          <p>
            WashMAX is a subsidiary company of Allflow Systems & Solutions - designing, suppling, installing and servicing an entire range of vehicle wash-down systems for over 32 years. Our passion is construction - our directors have always been in the construction industry and know just how challenging this industry can be.  
          </p>
          <p>
            Our clients understand that they can trust us – for every step of the way. There is no other company that can provide the same level of experience - we pass this on to our valued clients at no extra cost! 
          </p>
          <p>
            If you have a current need for a wash system please don’t hesitate to be in contact - you can be assured that the service and experience we can offer you will not find elsewhere. We look forward to hearing from you!
          </p>
        </div>
      </div>
    </div>
  </div>

</section>



@endsection
