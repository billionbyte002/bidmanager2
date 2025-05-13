@extends('layout.app')

@section('style')
    <link href="{{asset('assets/css/light-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/dark-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.bootstrap-touchspin.min.css')}}">
@endsection

@section('main_content')
<div id="content" class="main-content">
    <div class="container-fluid">
        <div class="container">
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
                                <strong>Notice!</strong> You will see your projects on the search page regardless of these filters. However, these projects will always be ignored when auto bidding is enabled.

                                @if(session('flash_message'))
                                    <div class="alert alert-success">
                                        {{ session('flash_message') }}
                                    </div>
                                @endif

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <form action="{{ route('client.store') }}" method="POST" class="row g-3">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-sm-4">
                                        <label>Payment Verified</label>
                                        <select class="form-select" name="payment">
                                            <option {{ old('payment') == 'Does not matter' ? 'selected' : '' }}>Does not matter</option>
                                            <option {{ old('payment') == 'Yes, verified only' ? 'selected' : '' }}>Yes, verified only</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Email Verified</label>
                                        <select class="form-select" name="email">
                                            <option {{ old('email') == 'Does not matter' ? 'selected' : '' }}>Does not matter</option>
                                            <option {{ old('email') == 'Yes, verified only' ? 'selected' : '' }}>Yes, verified only</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Deposit Made</label>
                                        <select class="form-select" name="deposit">
                                            <option {{ old('deposit') == 'Does not matter' ? 'selected' : '' }}>Does not matter</option>
                                            <option {{ old('deposit') == 'Yes, verified only' ? 'selected' : '' }}>Yes, verified only</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Minimum Rating</label>
                                        <select class="form-select" name="rating">
                                            <option {{ old('rating') == 'Does not matter' ? 'selected' : '' }}>Does not matter</option>
                                            <option {{ old('rating') == 'Atleast 1 star' ? 'selected' : '' }}>Atleast 1 star</option>
                                            <option {{ old('rating') == 'Atleast 2 star' ? 'selected' : '' }}>Atleast 2 star</option>
                                            <option {{ old('rating') == 'Atleast 3 star' ? 'selected' : '' }}>Atleast 3 star</option>
                                            <option {{ old('rating') == 'Atleast 4 star' ? 'selected' : '' }}>Atleast 4 star</option>
                                            <option {{ old('rating') == 'Atleast 5 star' ? 'selected' : '' }}>Atleast 5 star</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Minimum Projects</label>
                                        <input type="number" class="form-control" name="project" min="0" max="100000" value="{{ old('project', 0) }}">
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
@endsection
