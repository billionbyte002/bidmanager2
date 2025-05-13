@extends('layout.app')
@section('style')
    

    <link href="{{asset('assets/css/light-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/dark-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.bootstrap-touchspin.min.css')}}">
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
                <div>
                    <div class="row">

                        <div id="flAutoSizing" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Manage Client Stat</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                        <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                                                
                                                <strong>Notice!</strong> You will see your projects on search page reagardless of these filters, however thse projects will always be ignored when auto bidding is enabled.
                                        </div>
                                <form action="{{ route('client.store') }}"  method="POST" enctype="multipart/form-data" class="row g-3" >
                                @csrf
                                    <div class="row g-3">
                                        <div class="col-sm-4" >
                                        <label> Payment Verified</label>
                                           <select id="inputState" class="form-select" name="payment" style="width=100%;">
                                                    <option selected>Does not matter</option>
                                                    <option>Yes, verified only</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4">
                                        <label> Email Verified</label>
                                          <select id="inputState" class="form-select" name="email"style="width=100%;">
                                                    <option selected>Does not matter</option>
                                                    <option>Yes, verified only</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                        <label> Deposit Made</label>
                                          <select id="inputState" class="form-select" name="deposit" style="width=100%;">
                                                    <option selected>Does not matter</option>
                                                    <option>Yes, verified only</option>
                                            </select>
                                        </div>


                                        <div class="row g-3">
                                            <div class="col-sm-4" >
                                            <label> Minimum rating</label>
                                                <select id="inputState" class="form-select" name="rating" style="width=100%;">
                                                        <option selected>Does not matter</option>
                                                        <option>Atleast 1 star</option>
                                                        <option>Atleast 2 star</option>
                                                        <option>Atleast 3 star</option>
                                                        <option>Atleast 4 star</option>
                                                        <option>Atleast 5 star</option>
                                                </select>
                                            </div>
                                           

                                            <div class="col-sm-4">
                                                <label> Minimum projects</label><br>
                                                    {{-- <div class="mb-4"> --}}
                                                        <input type="number" id="inputproject" class="form-control" name="project" min="0" max="100000" step="1" value="0" style="height:45px; width:300px; padding-left:25px;">
                                                        {{-- <div class="buttons">
                                                            <button type="button" id="increase">▲</button>
                                                            <button type="button" id="decrease">▼</button>
                                                        </div> --}}
                                                    {{-- </div> --}}
                                            </div>
                                            
                                        </div>
                                            
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                           <button type="submit" class="btn btn-primary" style="float:right">Submit</button>
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
            
               
                      
                            



     <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
     <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('asset/js/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('custom-bootstrap-touchspin.js')}}"></script>
    <!-- Begin JS Section -->
@endsection