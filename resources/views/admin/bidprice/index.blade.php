@extends('layout.app')

@section('mai_content')
<div class="container">
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
            </div>
            <div>
                <h5>Explanation:</h5>
                <p>If Project budget is 250-750 USD.</p>
                <ul>
                    <li>If you are using default values, bid price will be 500 USD.</li>
                    <li>If lower=100 and higher=150, bid price will be between 500-750 USD.</li>
                    <li>If lower=50 and higher=100, bid price will be between 250-500 USD.</li>
                    <li>If lower=50 and higher=150, bid price will be between 250-750 USD.</li>
                </ul>
            </div>

            <form method="POST" action="{{ route('manage.bid.price.submit') }}">
                @csrf
                <div class="form-group row">
                    <label for="lower" class="col-sm-4 col-form-label">Lower than average (in %)</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="lower" name="lower" value="100">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="higher" class="col-sm-4 col-form-label">Higher than average (in %)</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="higher" name="higher" value="100">
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
@endsection
