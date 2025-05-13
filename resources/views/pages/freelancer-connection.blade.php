@extends('layout.app')

@section('style')
<style>
    /* Hero Section Styles */
    .hero {
        background: url('https://via.placeholder.com/1200x400') no-repeat center center/cover;
        padding: 100px 0;
        text-align: center;
        color: #fff;
        position: relative;
    }

    .hero::after {
        content: "";
        position: absolute;
        top: 0; 
        left: 0;
        width: 100%; 
        height: 100%;
        background: rgba(201, 201, 201, 0.5);
        z-index: 1;
    }

    .hero .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero h1 {
        font-size: 48px;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .hero .btn {
        background: #28a745;
        padding: 12px 30px;
        border-radius: 4px;
        color: #fff;
        font-weight: 600;
        text-decoration: none;
    }

    /* Step Cards */
    .step {
        background: #fff;
        border: 1px solid #eaeaea;
        padding: 30px;
        border-radius: 4px;
        text-align: center;
    }

    .step h3 {
        margin-bottom: 15px;
        font-size: 20px;
    }

    .step p {
        font-size: 14px;
    }

    .btn-connect {
        padding: 12px 24px;
        background-color: #007bff;
        color: #fff;
        font-weight: 600;
        border-radius: 4px;
        text-decoration: none;
        display: inline-block;
    }

</style>
@endsection

@section('main_content')
<div id="content" class="main-content">
    <div class="container-fluid">
        <!-- Hero Section -->
        <div class="hero">
            <div class="container hero-content">
                <h1>Connect Your Freelancer Account</h1>
                <p>Link your Freelancer account using secure OAuth login</p>
                <a href="{{ route('freelancer.redirect') }}" class="btn">Get Started</a>
            </div>
        </div>

        <!-- Instructions & Connect Button Section -->
        <div class="container py-5" id="instructions">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="mb-3">How to Connect</h2>
                    <p class="text-muted">Follow the steps below to link your Freelancer account.</p>
                </div>
            </div>

            <!-- Steps -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="step">
                        <h3>Step 1</h3>
                        <p>Click the button below to securely log in to your Freelancer account.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="step">
                        <h3>Step 2</h3>
                        <p>Authorize our app to access your Freelancer data.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="step">
                        <h3>Step 3</h3>
                        <p>You'll be redirected back here once connected successfully.</p>
                    </div>
                </div>
            </div>

            <!-- OAuth Connect Button -->
            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a href="{{ route('freelancer.redirect') }}" class="btn-connect">
                        Connect with Freelancer
                    </a>
                </div>
            </div>

            @if (session('apiData'))
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="text-center">Fetched Data from Freelancer API:</h3>
                    <pre>{{ json_encode(session('apiData'), JSON_PRETTY_PRINT) }}</pre>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // Add any additional JS here if needed
</script>
@endsection
