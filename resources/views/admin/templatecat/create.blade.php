@extends('layout.app')
@section('main_content')

        <!--  CSS SECTION  -->
           
        <!--  CSS ENDSECTION  -->


<div id="content" class="main-content">
<br>
            
                <div class="container-fluid">
                    <div class="row">

                        <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Add Template Category</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                
                                <div class="widget-content widget-content-area">
                                <br>
                                    <form action="{{ route('templatecat.store') }}"  method="POST" enctype="multipart/form-data" class="row g-3" style="margin-left:2rem; margin-right:2rem;">
                                      @csrf  
                                        <div class="col-md-6">
                                            <label for="inputName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputemail" class="form-label">Always Include</label>
                                            <select id="inputState" class="form-select" name="include" style="width=100%;">
                                                    <option selected>Yes</option>
                                                    <option>No</option>
                                            </select>
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


