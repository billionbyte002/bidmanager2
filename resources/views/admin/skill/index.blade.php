@extends('layout.app')
@section('style')

<!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
<link href="{{asset('assets/css/dark-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/light-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL CUSTOM STYLES -->

  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
  <!-- END PAGE LEVEL PLUGINS -->
  
  <!--  BEGIN CUSTOM STYLE FILE  -->
  <link href="{{asset('assets/css/light-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/light-carousel.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/light-modal.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/light-tabs.css')}}" rel="stylesheet" type="text/css">
  
  <link href="{{asset('assets/css/dark-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/dark-carousel.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/dark-modal.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/dark-tabs.css')}}" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{asset('assets/css/filepond.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/FilePondPluginImagePreview.min.css')}}">    
  <link href="{{asset('assets/css/light-filepond/custom-filepond.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/dark-filepond/custom-filepond.css')}}" rel="stylesheet" type="text/css" />
  <!--  END CUSTOM STYLE FILE  -->

  
   <!-- BEGIN PAGE LEVEL STYLES -->
   <link href="{{asset('assets/css/dragula.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/css/light-example.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/css/dark-example.css')}}" rel="stylesheet" type="text/css" />
   <!-- END PAGE LEVEL STYLES -->  

@endsection
    

  


@section('main_content')

<div id="content" class="main-content">
    <div class="container-fluid">
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                                    <h4>Manage Included Skills</h4>


                                            <div class="priority">
                                                <button type="button" class="btn btn-primary mb-2 me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">Set Priority</button>
                                            </div>
        
                                </div>

                                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="mySmallModalLabel">Set Priority</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        
                                                            
                                                               
                                                            <div class="row" id="cancel-row">
                                                                {{-- <div class="col-lg-12 layout-spacing layout-top-spacing"> --}}
                                                                    {{-- <div class="statbox widget box box-shadow"> --}}
                                                                        
                                                                        {{-- <div class="widget-content widget-content-area"> --}}
                                        
                                                                            <div class='parent ex-1'>
                                                                                <div class="row">
                                            
                                                                                    <div class=" col-12">
                                                                                        <div id='left-defaults' class='dragula'>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                
                                                                                                <div class="media-body">
                                                                                                   
                                                                                                        
                                                                                                            <h6 class="text" style="text-align:center">JAVA</h6>
                                                                                                        
                                                                                                    
                                                                                                </div>
                                                                                            </div>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                        
                                                                                                <div class="media-body">
                                                                                                   
                                                                                                            <h6 class="text" style="text-align:center">CSS</h6>
                                                                                                           
                                                                                                       
                                                                                                        
                                                                                                    
                                                                                                </div>
                                                                                            </div>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                                <div class="media-body">
                                                                                                            <h6 class="text" style="text-align:center">LARAVEL</h6>
                                                                                                </div>         
                                                                                            </div>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                                <div class="media-body">
                                                                                                            <h6 class="text" style="text-align:center">HTML</h6>
                                                                                                </div>         
                                                                                            </div>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                                <div class="media-body">
                                                                                                            <h6 class="text" style="text-align:center">Project Lead Pickup</h6>
                                                                                                </div> 
                                                                                            </div>
                                            
                                                                                        </div>
                                                                                    </div>
                                            
                                                                                    
                                            
                                                                                </div>
                                                                            </div>
                                                                        {{-- </div> --}}
                                                                    {{-- </div> --}}
                                                                {{-- </div> --}}
                                                            </div>
                                                                
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                                            <button type="button" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sync">
                                                <button type="button" class="btn btn-success mb-2 me-4" >Sync Skill</button>
                                            </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                                <strong>Notice!</strong> You will see any project for these countries, and these project will always be ignored when auto bidding is enabled.
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            
                                            <th class="text-center" scope="col">Sales</th>
                                            <th class="text-center" scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Shaun Park</td>
                                            
                                            <td class="text-center">320</td>
                                            <td class="text-center">
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alma Clarke</td>
                                            
                                            <td class="text-center">110</td>
                                            <td class="text-center">
                                                <span class="badge badge-light-secondary">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vincent Carpenter</td>
                                           
                                            <td class="text-center">210</td>
                                            <td class="text-center">
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Xavier</td>
                                            
                                            <td class="text-center">784</td>
                                            <td class="text-center">
                                                <span class="badge badge-light-info">In Progress</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

   
        <div class="container">
            <div class="row layout-top-spacing">
                <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                                    <h4>Manage Excluded Skills</h4>


                                            <div class="priority">
                                                <button type="button" class="btn btn-primary mb-2 me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">Set Priority</button>
                                            </div>
        
                                            </div>

                                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="mySmallModalLabel">Set Priority</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        
                                                            
                                                               
                                                            <div class="row" id="cancel-row">
                                                                {{-- <div class="col-lg-12 layout-spacing layout-top-spacing"> --}}
                                                                    {{-- <div class="statbox widget box box-shadow"> --}}
                                                                        
                                                                        {{-- <div class="widget-content widget-content-area"> --}}
                                        
                                                                            <div class='parent ex-1'>
                                                                                <div class="row">
                                            
                                                                                    <div class=" col-12">
                                                                                        <div id='left-defaults' class='dragula'>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                
                                                                                                <div class="media-body">
                                                                                                   
                                                                                                        
                                                                                                            <h6 class="text" style="text-align:center">JAVA</h6>
                                                                                                        
                                                                                                    
                                                                                                </div>
                                                                                            </div>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                        
                                                                                                <div class="media-body">
                                                                                                   
                                                                                                            <h6 class="text" style="text-align:center">CSS</h6>
                                                                                                           
                                                                                                       
                                                                                                        
                                                                                                    
                                                                                                </div>
                                                                                            </div>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                                <div class="media-body">
                                                                                                            <h6 class="text" style="text-align:center">LARAVEL</h6>
                                                                                                </div>         
                                                                                            </div>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                                <div class="media-body">
                                                                                                            <h6 class="text" style="text-align:center">HTML</h6>
                                                                                                </div>         
                                                                                            </div>
                                            
                                                                                            <div class="media  d-md-flex d-block">
                                                                                                <div class="media-body">
                                                                                                            <h6 class="text" style="text-align:center">Project Lead Pickup</h6>
                                                                                                </div> 
                                                                                            </div>
                                            
                                                                                        </div>
                                                                                    </div>
                                            
                                                                                    
                                            
                                                                                </div>
                                                                            </div>
                                                                        {{-- </div> --}}
                                                                    {{-- </div> --}}
                                                                {{-- </div> --}}
                                                            </div>
                                                                
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                                            <button type="button" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sync">
                                                <button type="button" class="btn btn-success mb-2 me-4" >Sync Skill</button>
                                            </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                                <strong>Notice!</strong> You will see any project for these countries, and these project will always be ignored when auto bidding is enabled.
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            
                                            <th class="text-center" scope="col">Sales</th>
                                            <th class="text-center" scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Shaun Park</td>
                                            
                                            <td class="text-center">320</td>
                                            <td class="text-center">
                                                <span class="badge badge-light-success">Approved</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alma Clarke</td>
                                            
                                            <td class="text-center">110</td>
                                            <td class="text-center">
                                                <span class="badge badge-light-secondary">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vincent Carpenter</td>
                                           
                                            <td class="text-center">210</td>
                                            <td class="text-center">
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Xavier</td>
                                            
                                            <td class="text-center">784</td>
                                            <td class="text-center">
                                                <span class="badge badge-light-info">In Progress</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--  BEGIN CUSTOM SCRIPT FILE  -->

    <script src="{{asset('assets/js/datatables.js')}}"></script>
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


    <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>

    <script src="{{asset('assets/js/filepond.min.js')}}"></script>
    <script src="{{asset('assets/js/FilePondPluginFileValidateType.min.js')}}"></script>
    <script src="{{asset('assets/js/FilePondPluginImageExifOrientation.min.js')}}"></script>
    <script src="{{asset('assets/js/FilePondPluginImagePreview.min.js')}}"></script>
    <script src="{{asset('assets/js/FilePondPluginImageCrop.min.js')}}"></script>
    <script src="{{asset('assets/js/FilePondPluginImageResize.min.js')}}"></script>
    <script src="{{asset('assets/js/FilePondPluginImageTransform.min.js')}}"></script>
    <script src="{{asset('assets/js/filepondPluginFileValidateSize.min.js')}}"></script>
    
    <script>

        
$(document).ready(function() {
    function addVideoInModal(btnSelector, videoSource, modalSelector, iframeHeight, iframeWidth, iframeContainer) {
            var myModal = new bootstrap.Modal(document.getElementById(modalSelector), {
                keyboard: false
            })            
            document.querySelector(btnSelector).addEventListener('click', function() {
                var src = videoSource;
                myModal.show('show');
                var ifrm = document.createElement("iframe");
                ifrm.setAttribute("src", src);
                ifrm.setAttribute('width', iframeWidth);
                ifrm.setAttribute('height', iframeHeight);
                ifrm.style.border = "0";
                ifrm.setAttribute("allow", "encrypted-media");
                document.querySelector(iframeContainer).appendChild(ifrm);
            })

        }
        
        addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560', '.yt-container')
        
        addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560', '.vimeo-container')




        /**
         * ==================
         * Single File Upload
         * ==================
        */

        // We register the plugins required to do 
        // image previews, cropping, resizing, etc.
        FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginImageExifOrientation,
        FilePondPluginImagePreview,
        FilePondPluginImageCrop,
        FilePondPluginImageResize,
        FilePondPluginImageTransform,
        //   FilePondPluginImageEdit
        );

        // Select the file input and use 
        // create() to turn it into a pond
        var modalImage = FilePond.create(
        document.querySelector('.filepond'),
        {
            // labelIdle: `<span class="no-image-placeholder"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span> <p class="drag-para">Drag & Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></p>`,
            imagePreviewHeight: 170,
            imageCropAspectRatio: '1:1',
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            stylePanelLayout: 'compact circle',
            styleLoadIndicatorPosition: 'center bottom',
            styleProgressIndicatorPosition: 'right bottom',
            styleButtonRemoveItemPosition: 'left bottom',
            styleButtonProcessItemPosition: 'right bottom',
        }
        );

        const myModalEl = document.getElementById('profileModal')
        myModalEl.addEventListener('shown.bs.modal', event => {
            modalImage.addFiles('../src/assets/img/drag-1.jpeg');
        })
    });

    </script>    
    <!--  END CUSTOM SCRIPT FILE  -->

     <!-- BEGIN PAGE LEVEL SCRIPTS -->
     <script src="{{asset('assets/js/dragula.min.js')}}"></script>
     <script src="{{asset('assets/js/custom-dragula.js')}}"></script>

     <script>
        $(document).ready(function() {
            dragula([$('left-defaults'), $('right-defaults')])
        .on('drag', function (el) {
            console.log(el);
            el.className += ' el-drag-ex-1';
        }).on('drop', function (el) {
            console.log(el);
            el.className = el.className.replace('el-drag-ex-1', '');
        }).on('cancel', function (el) {
            console.log(el);
            el.className = el.className.replace('el-drag-ex-1', '');
        });
        });

     </script>
     <!-- END PAGE LEVEL SCRIPTS -->

@endsection