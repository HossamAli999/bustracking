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
                          <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
                          <li class="breadcrumb-item active">Profile</li>
                      </ol>
                  </div>
                  <h4 class="page-title">Profile</h4>
              </div>
          </div>
      </div>     
      <!-- end page title --> 

      <div class="row">
          <div class="col-xl-4 col-lg-5">
              <div class="card text-center">
                  <div class="card-body">
                      <img src="{{asset('upload/admin/'.Auth::user()->image_path)}}" class="rounded-circle avatar-lg img-thumbnail"
                      alt="profile-image">

                      <h4 class="mb-0 mt-2">{{ Auth::user()->name }} </h4>
                      <p class="text-muted font-14">Founder</p>
                      <div class="text-start mt-3">
                          <h4 class="font-13 text-uppercase">About Me :</h4>
                          <p class="text-muted font-13 mb-3">
                              Hi I'm {{ Auth::user()->name }},has been the industry's standard dummy text ever since the
                              {{ Auth::user()->created_at->format('Y') }} s, when an unknown printer took a galley of type.
                          </p>
                          <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ Auth::user()->name }}</span></p>

                          <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">(123)
                                  123 1234</span></p>

                          <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 ">{{ Auth::user()->email }}</span></p>

                          <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">EG</span></p>
                      </div>

                      <ul class="social-list list-inline mt-3 mb-0">
                          <li class="list-inline-item">
                              <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                      class="mdi mdi-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                      class="mdi mdi-google"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                      class="mdi mdi-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
                                      class="mdi mdi-github"></i></a>
                          </li>
                      </ul>
                  </div> <!-- end card-body -->
              </div> <!-- end card -->
          </div> <!-- end col-->

      </div>
      <!-- end row-->
      
  </div> <!-- End Content -->




{{-- 
<div class="profile-page">
      
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3 profile-left">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="{{asset('upload/admin/'.Auth::user()->image_path)}} " alt="Admin photo" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4>{{ Auth::user()->name }} </h4>
                {{-- <p class="text-secondary mb-1">Full Stack Developer</p> 
                <p class="text-muted font-size-sm">{{ Auth::user()->email }} </p>
                  <div class="col-sm-12">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                         class="btn trackingBtn" >{{ __('Logout') }}
                         <form id="logout-form" action="{{ route('logout') }}" method="POST"
                         class="d-none">
                         @csrf
                     </form>
                        
                        </a>
                  </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-8 profile-right">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ Auth::user()->name }} 
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ Auth::user()->email }} 
              </div>
            </div>
       
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">School Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                @if ($schools == Null)
                  You don't join to  any school yet.
                @else
                {{ $schools->name  }} 
                @endif
                
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Created At</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ Auth::user()->created_at->format('Y-m-d') }} 
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Updated At</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                {{ Auth::user()->updated_at->format('Y-m-d')  }} 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
@if (session('success'))
<div class="alertg hide">
<span class='fas fa-check-circle'></span>
<span class="msg">{{ session('success') }}</span>
<div class="close-btn">
   <span class="fas fa-times"></span>
</div>
</div>
@endif   --}}
@endsection