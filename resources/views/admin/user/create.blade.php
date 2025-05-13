@extends('admin.layout.app')
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
                                        <div class="col-xl-12 col-md-6 col-sm-12 col-12">
                                            <h4>ADD USER</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                
                                <div class="widget-content widget-content-area">
                                <br>

                                @if($errors->any()) {!! implode('', $errors->all('<div class="alert alert-danger" role="alert">:message</div>')) !!} 
                                @endif

                                    <form action="{{ route('user.store') }}"  method="POST" enctype="multipart/form-data" class="row g-3" style="margin-left:2rem; margin-right:2rem;">
                                      @csrf  

                                        <div class="col-md-6">
                                            <label for="inputName" class="form-label">Name</label>
                                            <input type="text" class="form-control add-billing-address-input" name="name" value="{{old('name')}}" required  placeholder="Enter Your Name *" style ="">
                                            <div class="invalid-feedback">
                                                Please provide a valid Name.
                                            </div>
                                            <div class="valid-feedback">
                                                Valid Name
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputemail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{old('email')}}" required  placeholder="Enter Your Email ID *" style ="">
                                            <div class="invalid-feedback">
                                                Please provide a valid Email-ID.
                                            </div>
                                            <div class="valid-feedback">
                                                Valid Email ID
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="country" class="form-label">Country</label>
                                            <select class="form-select" name="country" id="country"  required>
                                                <option value="">--Please Select--</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ ucfirst($country->nicename) }} (+{{ ( $country->phonecode) }})</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Choose Country
                                            </div>
                                            <div class="valid-feedback">
                                                Valid Country
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputmobile" class="form-label">Mobile No.</label>
                                            <input type="text" class="form-control" name="mobile" value="{{old('mobile')}}" required  placeholder="Enter Your Mobile No. *" style ="">
                                            <div class="invalid-feedback">
                                                Please provide a valid Mobile No.
                                            </div>
                                            <div class="valid-feedback">
                                                Valid Mobile No.
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter 8 Digit Password *" value="{{old('password')}}" required minlength="8" style ="">
                                            <div class="invalid-feedback">
                                                Please provide a valid Password
                                            </div>
                                            <div class="valid-feedback">
                                                Valid Password
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
         
<script src="https://designreset.com/cork/html/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://designreset.com/cork/html/src/plugins/src/tomSelect/tom-select.default.min.css">
<link rel="stylesheet" type="text/css" href="https://designreset.com/cork/html/src/plugins/css/light/tomSelect/custom-tomSelect.css">
<link rel="stylesheet" type="text/css" href="https://designreset.com/cork/html/src/plugins/css/dark/tomSelect/custom-tomSelect.css">
<script src="https://designreset.com/cork/html/src/plugins/src/tomSelect/tom-select.base.js"></script>
<script src="https://designreset.com/cork/html/src/plugins/src/tomSelect/custom-tom-select.js"></script>


<script>
    
window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
}, false);

new TomSelect("#country",{
    create: true,
    sortField: {
        field: "text",
        direction: "asc"
    }
});
</script>
<style>
    .ts-wrapper.form-control,.ts-wrapper.form-select {
    padding: 6px 0!important;
    }
    </style>

        <!--  jS ENDSECTION  -->

@endsection


