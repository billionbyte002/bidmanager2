@extends('layout.app')
@section('style')

    <!-- Begin CSS Section -->
    <link href="{{asset('assets/css/light-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/dark-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
     {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom-jquery.bootstrap-touchspin.min.css')}}"> --}}
     <link href="{{asset('assets/css/light-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/light-custom-jquery.bootstrap-touchspin.min.css')}}">

    <link href="{{asset('assets/css/dark-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dark-custom-jquery.bootstrap-touchspin.min.css')}}">
    <!-- End CSS Section -->

@endsection
@section('main_content')


    <div id="content" class="main-content">
    <br>
        <div class="container-fluid">
            <div class="container">
                    <div class="row">

                        <div id="flAutoSizing" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Manage Project Budget</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                    <div class="widget-content widget-content-area">
                                                <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                                                        <strong>Notice!</strong> 
                                                            <ul>
                                                                <li>You will see those projects whose minimum value is equal or greater then your entered value.</li>
                                                                <li>Base currency is USD. For the currencies the budget will be converted as per latest conversion rate.</li>
                                                            </ul>
                                                </div>

                                     @if(session()->has('message'))
                                        <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                        </div>
                                    @endif

                                    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                                        @csrf
                                            <div class="row g-3">
                                                <div class="col-sm-4">
                                                    <label>Min fixed budget (in USD)</label>
                                                    <input type="number" id="inputproject" name="budget" value="{{ old('budget', $lastBudget) }}" class="form-control" min="0" max="10000000" step="1" style="height:45px;width:300px;padding-left:25px;">
                                                </div>
                                        
                                                <div class="col-sm-4">
                                                    <label>Min hourly budget (in USD)</label>
                                                    <input type="number" id="inputproject" name="time" value="{{ old('time', $lastTime) }}" class="form-control" min="0" max="10000" step="1" style="height:45px;width:300px;padding-left:25px;">
                                                </div>
                                                
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <button type="submit" class="btn btn-primary" style="float:right">Submit</button>
                                                </div>
                                            </div>
                                    </form>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>    
                                            
                                    
                                
                            
                        </div>
                    </div>  
            </div> 
        </div>
    </div>        
            
               
                      
                            


    <!-- Begin JS Section -->
     <script src="https://designreset.com/cork/html/src/assets/js/scrollspyNav.js"></script>
     <script src="https://designreset.com/cork/html/src/assets/js/scrollspyNav.js"></script>
    <script src="https://designreset.com/cork/html/src/plugins/src/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="https://designreset.com/cork/html/src/plugins/src/bootstrap-touchspin/custom-bootstrap-touchspin.js"></script>
    <!-- Begin JS Section -->
@endsection