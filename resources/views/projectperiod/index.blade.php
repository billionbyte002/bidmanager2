@extends('layout.app')

@section('style')
<!-- CSS SECTION -->
<link href="{{ asset('assets/css/light-scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/dark-scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('main_content')
<div id="content" class="main-content">
    <div class="container-fluid" style="margin-top:2rem;">
        <div class="container">
            <div id="tableCheckbox" class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="margin-top:1rem; margin-bottom:1rem; margin-left:1rem">
                                <h4>Manage Project Period</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area container-fluid">
                        <form action="{{ route('period.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                            @csrf

                            <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                                <strong>Notice!</strong>
                                <ul>
                                    <li>You will see those projects whose minimum value is equal or greater than your entered value.</li>
                                    <li>If your bid price does not fall in any range, it will use the default project period.</li>
                                </ul>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-area">No.</th>
                                            <th>Lower Bid Price</th>
                                            <th>Higher Bid Price</th>
                                            <th>Project Period</th>
                                            <th class="checkbox-area"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="range-body">
                                        @foreach($period as $index => $row)
                                        <tr data-id="{{ $row->id }}">
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <input type="number" name="lower[]" class="form-control" min="0" max="10000" step="1" value="{{ $row->lower }}" style="height:45px; width:220px; padding-left:25px; border:1px solid #bfc9d4; color:#3b3f5c; background-color:#fff; border-radius:6px;">
                                            </td>
                                            <td>
                                                <input type="number" name="higher[]" class="form-control" min="0" max="10000" step="1" value="{{ $row->higher }}" style="height:45px; width:220px; padding-left:25px; border:1px solid #bfc9d4; color:#3b3f5c; background-color:#fff; border-radius:6px;">
                                            </td>
                                            <td>
                                                <input type="number" name="period[]" class="form-control" min="0" max="10000" step="1" value="{{ $row->period }}" style="height:45px; width:220px; padding-left:25px; border:1px solid #bfc9d4; color:#3b3f5c; background-color:#fff; border-radius:6px;">
                                            </td>
                                            <td>
                                                <button type="button" class="btn-close btn-close-red delete-btn" aria-label="Close" data-id="{{ $row->id }}"></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success" style="float:right">Submit</button>
                                <button type="button" class="btn btn-primary" style="float:left" onclick="addRange()">Add Range</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS SECTION -->
<script src="https://designreset.com/cork/html/src/assets/js/scrollspyNav.js"></script>

<script>
    function handleCloseRow(event) {
        const row = event.target.closest('tr');
        const periodId = row.getAttribute('data-id');

        if (periodId) {
            if (confirm('Are you sure you want to delete this period?')) {
                fetch(`/user/period/${periodId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                })
                .then(response => {
                    if (response.ok) {
                        row.remove();
                        console.log('Deleted successfully');
                    } else {
                        return response.json().then(data => {
                            console.error('Failed to delete period:', data.message);
                        });
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        } else {
            row.remove();
        }
    }

    function addRange() {
        const tbody = document.getElementById('range-body');
        const rowCount = tbody.rows.length + 1;

        const newRow = document.createElement('tr');

        newRow.innerHTML = `
            <td>${rowCount}</td>
            <td>
                <input type="number" name="lower[]" class="form-control" min="0" max="10000" step="1" style="height:45px; width:220px; padding-left:25px; border:1px solid #bfc9d4; color:#3b3f5c; background-color:#fff; border-radius:6px;">
            </td>
            <td>
                <input type="number" name="higher[]" class="form-control" min="0" max="10000" step="1" style="height:45px; width:220px; padding-left:25px; border:1px solid #bfc9d4; color:#3b3f5c; background-color:#fff; border-radius:6px;">
            </td>
            <td>
                <input type="number" name="period[]" class="form-control" min="0" max="10000" step="1" style="height:45px; width:220px; padding-left:25px; border:1px solid #bfc9d4; color:#3b3f5c; background-color:#fff; border-radius:6px;">
            </td>
            <td>
                <button type="button" class="btn-close btn-close-red delete-btn" aria-label="Close"></button>
            </td>
        `;

        tbody.appendChild(newRow);
    }

    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-btn')) {
            handleCloseRow(event);
        }
    });
</script>
<!-- END JS SECTION -->

@endsection
