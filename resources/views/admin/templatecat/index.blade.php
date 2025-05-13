@extends('layout.app')
@section('style')


    <!-- BEGIN CSS SETION -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/light-dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dark-dt-global_style.css')}}">
    <!-- END CSS SETION -->

@endsection
@section('main_content')

        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">
                     <div class="row layout-top-spacing">
                    
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                    
                            <div class="widget-content widget-content-area br-8">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="margin-top:1rem; margin-bottom:1rem;">
                                                    <h4 class="cat" style="margin-left:1rem;">Template Categories  </h4>
                                    
                                                       <a href="{{route('templatecat.create')}}" <button type="button" class="btn btn-primary mb-2 me-4 "  style="margin-left:1rem;">Add Category</button></a>
                                                    
                
                                                </div>
                                            </div>
                                        </div>
                                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th><strong>ID<strong></th>
                                            <th><strong>Name<strong></th>
                                            <th><strong>Always include?<strong></th>
                                            <th class="button-area" scope="col" style="width:20%"><strong>Actions<strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($templatecat as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>
                                            
                                                {{ $item->name }}
                                            
                                            </td>
                                            <td><span class="inv-email">{{ $item->include }}</span></td>
                                            <td>
                                            <div class="btn-group  mb-2 me-4" role="group">
                                                    <button id="btndefault" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                                            <div class="dropdown-menu" aria-labelledby="btndefault">
                                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Move UP</a>
                                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Move Down</a> <hr>
                                                                    <a href="{{ route('templatecat.edit', $item->id) }}" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Edit</a>
                                                                    <a href="{{ route('templatecat.destroy', $item->id) }}" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Delete</a>
                                                            </div>
                                            </div>
                                            </td>
                                        @endforeach
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
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Show  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10 
        });
    </script>
    <!-- END JS SECTION -->
@endsection