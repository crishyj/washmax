@extends('layouts.frontend')

@section('content')

<section class="banner">
</section>

<section class="details_section mt-2 py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="detail_header mb-5">
          <h2>
            Contact Us
          </h2>                 
        </div>

        <div class="detail_body ">
         <div class="row">
             <div class="col-md-6 text-center">
                <div class="mt-4 mb-2">
                    <span>Email: </span><a href="mailto:washmax@allflowsystems.com.au">washmax@allflowsystems.com.au</a>
                  </div>
        
                  <div class="mb-2">
                    <span>Phone: </span> <a href="tel:+61 02 6351 2877"> 02 6351 2877 </a>
                  </div>
                 
                  <div class="text-center mb-2">
                    <a href="www.allflowsystems.com.au/washmax">www.allflowsystems.com.au/washmax</a>
                  </div>
        
                  <div class="mb-2">
                    17 Donald Street,
                    Lithgow NSW 2790
                  </div>
             </div>
             <div class="col-md-6">
                 <form action="{{ route('contact_submit') }}" method="POST" class="text-left">
                     @csrf
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" name="name" id="email" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter Your Name">
                         @if ($errors->has('name'))
                         <span class="invalid-feedback" style="display: block;" role="alert">
                             <strong>{{ $errors->first('name') }}</strong>
                         </span>
                     @endif
                     </div>
                   

                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Your Email">
                         @if ($errors->has('email'))
                         <span class="invalid-feedback" style="display: block;" role="alert">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                     @endif
                     </div>

                     <div class="form-group">
                         <label for="comment">Comment</label>
                         <textarea name="comment" id="comment" rows="5" class="form-control {{ $errors->has('comment') ? ' is-invalid' : '' }}" placeholder="Leave Your Comment"></textarea>
                         @if ($errors->has('comment'))
                         <span class="invalid-feedback" style="display: block;" role="alert">
                             <strong>{{ $errors->first('comment') }}</strong>
                         </span>
                     @endif
                     </div>

                     <div class="form-group">
                         <input type="submit" value="Submit" class="btn btn-success">
                     </div>
                 </form>
             </div>
         </div>
          



        </div>
      </div>
    </div>
  </div>

</section>

@endsection
