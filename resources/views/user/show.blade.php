@extends('layout.app')
@section('main_content')


<div id="content" class="main-content">
    
        <div class="layout-px-spacing">
                    
            <div class="container-xxl p-0">

                        <div id="card_2" class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 layout-spacing layout-top-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="margin-top:1rem; margin-left:1rem;">
                                                    <h4>Profile</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
        
                                            <div class="row">
                                                
                                                <div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12 col-sm-8 mx-auto">
                                            
                                                    <div class="card">
                                                        <div class="card-body">
                                                            @if ($user)
                                                            <h5 class="card-title">Name : {{ $user->name }}</h5>
                                                            <p class="mb-0">Email : {{ $user->email }}</p>
                                                            <p class="mb-0">Mobile : {{ $user->mobile }}</p>
                                                            @else
                                                            <p>User data not available.</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
                        </div>
            </div>
        </div>
    
</div>
        @endsection
        
       