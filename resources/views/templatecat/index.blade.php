@extends('layout.app')

@section('style')
    <!-- BEGIN CSS SECTION -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/light-dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dark-dt-global_style.css') }}">
    <!-- END CSS SECTION -->
@endsection

@section('main_content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="z-n0 widget-content widget-content-area br-8">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="margin-top:1rem; margin-bottom:1rem;">
                                    <h4 class="cat" style="margin-left:1rem;">Template Categories
                                        <a href="{{ route('templatecat.create') }}">
                                            <button type="button" class="btn btn-primary mb-2 me-4" style="margin-left:1rem; float:right;">Add Category</button>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th><strong>ID</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Always include?</strong></th>
                                    <th class="button-area" scope="col" style="width:20%"><strong>Actions</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($templatecat as $key => $item)
                                    <tr id="row-{{ $key }}">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td><span class="inv-email">{{ $item->include }}</span></td>
                                        <td>
                                            <div class="btn-group mb-2 me-4" role="group">
                                                <button id="btndefault" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    Action
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btndefault">
                                                    <a href="javascript:void(0);" class="dropdown-item move-up" data-row="{{ $key }}"><i class="flaticon-home-fill-1 mr-1"></i> Move UP</a>
                                                    <a href="javascript:void(0);" class="dropdown-item move-down" data-row="{{ $key }}"><i class="flaticon-gear-fill mr-1"></i> Move Down</a>
                                                    <hr>
                                        
                                                    <!-- NEW: Edit Link -->
                                                    <a href="{{ route('templatecat.edit', $item->id) }}" class="dropdown-item">
                                                        <i class="flaticon-edit mr-1"></i> Edit
                                                    </a>
                                        
                                                    <!-- Delete Form -->
                                                    <form action="{{ route('templatecat.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this category?')">
                                                            <i class="flaticon-trash mr-1"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No Template Categories Found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN JS SECTION -->
<script src="https://designreset.com/cork/html/src/plugins/src/table/datatable/datatables.js"></script>

<script>
    $('#zero-config').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
               "<'table-responsive'tr>" +
               "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" ...></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" ...></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" ...></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Show _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 10
    });
</script>

<script>
    $(document).ready(function() {
        // Move Up
        $('.move-up').on('click', function() {
            var rowKey = $(this).data('row');
            var currentRow = $('#row-' + rowKey);
            var prevRow = currentRow.prev();
            if (prevRow.length !== 0) {
                currentRow.insertBefore(prevRow);
                updateRowPositions();
            }
        });

        // Move Down
        $('.move-down').on('click', function() {
            var rowKey = $(this).data('row');
            var currentRow = $('#row-' + rowKey);
            var nextRow = currentRow.next();
            if (nextRow.length !== 0) {
                currentRow.insertAfter(nextRow);
                updateRowPositions();
            }
        });

        // Update positions AJAX
        function updateRowPositions() {
            var positions = [];
            $('tbody tr').each(function(index, row) {
                positions.push($(row).attr('id').replace('row-', ''));
            });

            $.ajax({
                url: "{{ route('templates.update-position') }}",
                method: 'POST',
                data: {
                    positions: positions,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.status === 'success') {
                        console.log('Positions updated successfully');
                    }
                },
                error: function(xhr) {
                    console.log('Error occurred while updating positions');
                }
            });
        }
    });
</script>
<!-- END JS SECTION -->

@endsection
