@extends('layouts.master')

@section('content')
{{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}
<div class="content-page">
    <div class="content">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">home</a></li>
                            <li class="breadcrumb-item active">Fathers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Fathers</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="{{route('father.create')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Father</a>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Father</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Create Date</th>
                                        <th>Status</th>
                                        <th style="width: 75px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    @foreach($fathers as $parent )
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{$parent->image_path}}" alt="table-user" class="me-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body fw-semibold">{{$parent->name}}</a>
                                        </td>
                                        <td>
                                            {{$parent->mobileNumber}}
                                        </td>
                                        <td>
                                            {{$parent->email}}
                                        </td>
                                        <td>
                                            {{$parent->region}}
                                        </td>
                                        <td>
                                            {{$parent->created_at->format('Y-m-d')}}
                                        </td>
                                        <td>
                                            {{-- <input data-id="{{$parent->id}}" class="toggle-class " type="checkbox"  data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive" {{ $parent->confirmed ? 'checked' : '' }}> --}}

                                            <span  class="badge <?php echo ($parent['confirmed']=='1') ? 'badge-success-lighten' : 'badge-danger-lighten'; ?> "><?php echo ($parent['confirmed']=='1') ? 'Active' : 'Inactive'; ?></span> 
                                        </td>
    
                                        <td>
                                            <a href="{{route('father.edit',$parent->id)}}" type="submit" class="action-icon" > <i class="mdi mdi-square-edit-outline"></i></a>
                                            <form action="{{route('father.destroy',$parent->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"class="btn action-icon"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->


</div> <!-- content-page -->

{{-- ////////////////////////////////////////////////// --}}
{{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<link rel="stylesheet" href="{{ asset("css/Findex.css") }}"> --}}
<div class="bus-container">

    @if( $fathers->count() <1 )
            <img src="{{ asset("assets/images/Parents.svg") }}" width="100%" height="350px" style="margin-top:50px">
            <center style="font-size:20px"> There are no registered <span style="color:#ffc017">parents</span> to show yet </center>
     @endif
            {{-- <div class="row">
                            <div class="col-sm-6">
                                <form action="{{route('father.destroy',$parent->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                             </div>
                             </div>
                        </div>
                    </div>
            </div>
            @endforeach --}}

            </div>
            {{ $fathers->links() }}
            <!-- <button>Show Alert</button> -->
          {{-- <div class="alertw hide">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg">Warning: This is a warning alert!</span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
         </div>
          <div class="alertr hide">
         <span class='fas fa-exclamation-triangle'></span>
         <span class="msg">Warning: This is a warning alert!</span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
         </div> --}}
         @if (session('success'))
         <div class="alertg hide">
         <span class='fas fa-check-circle'></span>
         <span class="msg">{{ session('success') }}</span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
         </div>
         @endif


         <script>
            $(function() {
              $('.toggle-class').change(function() {
                  var confirmed = $(this).prop('checked') == 1 ? 1 : 0;
                  var mid = $(this).data('id');
                  $.ajax({
                      type: "get",
                      dataType: "json",
                      url: '{{ route('changeFatherStatus') }}',
                      data: {
          
                        'confirmed': confirmed, 'mid': mid},
                      success: function(data){
                        console.log(data.success)
                      }
                  });
              })
            })
          </script>

</div>
@endsection
