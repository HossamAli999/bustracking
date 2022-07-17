@extends('layouts.master')

@section('content')

<div class="content-page">
  <div class="content">
      
      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box">
                  <div class="page-title-right">
                      <ol class="breadcrumb m-0">
                          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                          <li class="breadcrumb-item"><a href="{{route('father.index')}}">Father</a></li>
                          <li class="breadcrumb-item active">Create</li>
                      </ol>
                  </div>
                  <h4 class="page-title">Create Father</h4>
              </div>
          </div>
      </div>
      {{-- <!-- end page title --> --}}

      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">

                     
                      {{-- <!-- Steps Information --> --}}
                      <div class="tab-content">

                          {{-- <!-- father Content--> --}}
                          <div class="tab-pane show active" id="father-information">
                              <div class="row">
                                  <div class="col-lg-8">
                                      <h4 class="mt-2">Father information</h4>

                                      <p class="text-muted mb-4">Fill the form below in order to add new Father.</p>

                                      <form action="{{route('father.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="mb-3">
                                                      <label for="name" class="form-label">Name</label>
                                                      <input class="form-control" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter name" id="name" />
                                                  </div>
                                              </div>
                                          </div> <!-- end row -->
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="mb-3">
                                                      <label for="password" class="form-label">password</label>
                                                      <input class="form-control" name="password" type="password" placeholder="Enter password" id="password" />
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="mb-3">
                                                      <label for="password_confirmation" class="form-label">password_confirmation</label>
                                                      <input class="form-control" name="password_confirmation" type="password" placeholder="Enter name" id="password_confirmation" />
                                                  </div>
                                              </div>
                                          </div> <!-- end row -->
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="mb-3">
                                                      <label for="billing-email-address" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                      <input class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email" id="billing-email-address" />
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="mb-3">
                                                      <label for="billing-phone" class="form-label">Phone <span class="text-danger">*</span></label>
                                                      <input class="form-control" name="mobileNumber" value="{{ old('mobileNumber') }}" required autocomplete="mobileNumber" type="text" placeholder="(xx) xxx xxxx xxx" id="billing-phone" />
                                                  </div>
                                              </div>
                                          </div> <!-- end row -->
                                         


                                          <div class="row mt-4">
                                              <div class="col-sm-6">
                                                  <a href="{{route('father.index')}}" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                      <i class="mdi mdi-arrow-left"></i> Back to Fathers </a>
                                              </div> <!-- end col -->
                                              <div class="col-sm-6">
                                                  <div class="text-sm-end">
                                                      <button href="apps-ecommerce-checkout.html" type="submit" class="btn btn-danger">
                                                          <i class="mdi mdi-truck-fast me-1"></i> Proceed to Shipping </button>
                                                  </div>
                                              </div> <!-- end col -->
                                          </div> <!-- end row -->
                                      </form>
                                  </div>
                                
                              </div> <!-- end row-->
                          </div>

                      </div> <!-- end tab content-->

                  </div> <!-- end card-body-->
              </div> <!-- end card-->
          </div> <!-- end col -->

</div> <!-- content-page -->


                  {{-- alert from backend --}}
            <!-- <button>Show Alert</button> -->
           @if ($message = Session::get('error'))
            @foreach($message as $messages)
            <div class="alertr hide">
              <span class='fas fa-exclamation-triangle'></span>
              <span class="msg">{{$messages}}</span>
              <div class="close-btn">
                 <span class="fas fa-times"></span>
              </div>
              </div> 
            
           @endforeach
           @endif 
@endsection
