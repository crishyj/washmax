@extends('layouts.frontend')

@section('content')
<section class="home_carousel">
    <div class="">
        <div id="demo" class="carousel slide" data-ride="carousel">
          
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/washMAX 3000/1 washMAX 3000.gif') }}">                
              </div>

              <div class="carousel-item">
                <img src="{{ asset('assets/img/washMAX 3000/2 washMAX 3000.gif') }}">                
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



<section class="details_section mt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="detail_header">
          <h2>
            WashMAX 3000 Portable Vehicle Washbay – High Duty Cycle
          </h2>               
        </div>

        <div class="detail_body mt-2">
          <p>
            Suitable for High Duty Cycle Applications – up to 1500lt per/hr Water Treatment Capacity  
          </p>
          <p>
            60000kg WLL – heavy industrial transport and earthmoving equipment
          </p>
          <p>
            Self-Contained modular construction – relocatable
          </p>
          <p>
            Meets all current council and EPA requirements 
          </p>
          <p>
            Heavy Duty Rugged Construction – suitable for on-site application
          </p>
          <p>
            Industrial Galvanised Finish – for durability 
          </p>
          <p>
            Internal dimension – 20m x 7m x 4.5m (LxWxH)
          </p>

          <div class="mb-4">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Model Variations Available</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>MWB3010</td>
                    <td>WashMAX 3010 – requires mains service water connection</td>
                  </tr>
                  <tr>
                    <td>MWB3011</td>
                    <td>WashMAX 3011 – C/W Bulk Clean Water Storage for remote applications</td>
                  </tr>
                </tbody>
              </table>
          </div>

          <div class="mb-2 table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="6">
                    Accessories & Options
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Waste water treatment
                  </td>
                  <td>
                    fixed pressure washers
                  </td>
                  <td>
                    internal lighting
                  </td>
                  <td>
                    generator/auxiliary power supply
                  </td>
                  <td>
                    custom access ramp
                  </td>
                  <td>
                    automated self-sump cleaning system
                  </td>
                </tr>
              
              </tbody>
            </table>
          </div>
          
        </div>

      </div>
    </div>
  </div>

</section>



@endsection
