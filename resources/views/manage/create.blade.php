@extends('layout.app')
@section('main_content')

        <!--  CSS SECTION  -->
           
        <!--  CSS ENDSECTION  -->


<div id="content" class="main-content">
<br>
            
                <div class="container">
                    <div class="row">

                        <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>ADD USER</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                
                                <div class="widget-content widget-content-area">
                                <br>
                                    <form action="{{ route('manage.store') }}"  method="POST" enctype="multipart/form-data" class="row g-3" style="margin-left:2rem; margin-right:2rem;">
                                      @csrf  
                                        <div class="col-md-6">
                                            <label for="inputName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputemail" class="form-label">email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputPhone" class="form-label">Mobile</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Mobile No." style="width:49%;">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputFreelancerid" class="form-label">Freelancer ID</label>
                                            <input type="text" class="form-control" id="inputfreelancerid" name="freelancerid" placeholder="Enter Your Freelancer ID" style="width:49%;">
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-bottom:2rem;">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
</div>


        <!--  JS SECTION  -->
        <!--  jS ENDSECTION  -->

@endsection


