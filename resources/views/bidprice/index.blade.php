@extends('layout.app')

@section('style')

@section('style')
<style>
    /* General card styling */
    .card {
        border-radius: 8px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Card header styling */
    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    /* Card body padding */
    .card-body {
        padding: 24px;
    }

    /* Alert box styling */
    .alert {
        background-color: #fff3cd;
        border: 1px solid #ffeeba;
        color: #856404;
        border-radius: 4px;
        padding: 16px;
    }

    .alert h5 {
        margin-top: 16px;
        font-weight: bold;
    }

    /* Form input styling */
    .form-control {
        border-radius: 4px;
        border: 1px solid #ced4da;
        padding: 10px;
        font-size: 16px;
    }

    /* Label styling */
    label {
        font-weight: 500;
        margin-bottom: 8px;
    }

    /* Submit button styling */
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        padding: 9px 20px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 4px;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    
    /* Aligning input fields on the same line */
    .row.g-3 > .col-sm-6 {
        margin-bottom: 16px;
    }
    
    /* Making the form responsive */
    @media (max-width: 768px) {
        .col-sm-6 {
            width: 100%;
            padding: 0;
        }
    }

</style>
@endsection

@endsection

@section('main_content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container-fluid">
            <br>
            <div class="card">
                <div class="card-header">
                    <h3>Manage Bid Price</h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning">
                        <strong>Notice!</strong><br>
                        <ul>
                            <li>Default value is 100 for lower and higher.</li>
                            <li>Base bid price is average of project budget.</li>
                            <li>Values are in %.</li>
                        </ul>
                        <h5 class="para" style="color: #856404;">Explanation:</h5>
                        <p class="para" style="color: #856404;">If Project budget is 250-750 USD.</p>
                        <ul>
                            <li>If you are using default values, bid price will be 500 USD.</li>
                            <li>If lower=100 and higher=150, bid price will be between 500-750 USD.</li>
                            <li>If lower=50 and higher=100, bid price will be between 250-500 USD.</li>
                            <li>If lower=50 and higher=150, bid price will be between 250-750 USD.</li>
                        </ul>
                    </div>

                    <form method="POST" action="{{ route('bidprice.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="lower">Lower than average (in %)</label>
                                <input type="number" class="form-control" id="lower" name="lower" value="{{ $lastLower }}">
                            </div>
                            <div class="col-sm-6">
                                <label for="higher">Higher than average (in %)</label>
                                <input type="number" class="form-control" id="higher" name="higher" value="{{ $lastHigher }}">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
