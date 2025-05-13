@extends('layout.app')
@section('style')

 <!-- BEGIN PAGE LEVEL STYLES -->
 <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    
 <link rel="stylesheet" type="text/css" href="{{asset('assets/css/light-dt-global_style.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dark-dt-global_style.css')}}">
<!-- END PAGE LEVEL STYLES -->
 <!--  BEGIN CONTENT AREA  -->

@endsection
@section('main_content')

        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">SKILL</a></li>
                                <li class="breadcrumb-item active" aria-current="page">SETS</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->
    
                    <div class="row layout-top-spacing">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="zero-config" class="table dt-table-hover">
                                    <thead>
                                        <tr>
                                            <th><strong>Name</strong></th>
                                            <th><strong>Skills</strong></th>
                                            <th class="no-content"><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($skills as $item)
                                        <tr>
                                            <td><div class="d-flex">{{ $item->name }}</div></td>
                                            <td><span class="inv-email">{{ $item->skills }}</span></td>
                                           <td>
                                                <a class="badge badge-light-primary text-start me-2 action-edit" href="{{ route('skillsets.edit', $item->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                <form method="POST" action="{{ route('skillsets.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="badge badge-light-danger text-start action-delete;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash" onclick="confirmation(event)">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                    </div>

                </div>

            </div>
        </div>

                <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="https://designreset.com/cork/html/src/plugins/src/table/datatable/datatables.js"></script>
    <script>
    $(document).ready(function() {
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10 
        });
        var newButton = '<a href="{{ route('skillsets.create') }}" class="btn btn-primary">Add Skill Set</a>';
                $('.dt--top-section .justify-content-sm-end').prepend(newButton);
    });
    </script>
          {{-- var newButton = '<a href="{{route('skillsets.create')}}"<button id="newButton" class="btn btn-primary">Add New</button></a>';
          $('.dt--top-section .justify-content-sm-end').prepend(newButton);

          var syncButton = '<a href="{{route('skillsets.create')}}"<button id="syncButton" class="btn btn-primary">Sync Skills</button></a>';
          var syncButton = '<a href="{{ route('skillsets.fetch') }}"><button id="syncButton" class="btn btn-primary">Sync Skills</button></a>';
          $('.dt--top-section .justify-content-sm-end').prepend(syncButton); --}}


        
        
    

    
   
    <!-- END PAGE LEVEL SCRIPTS -->


@endsection   