@extends('layout.app')
@section('style')
    <!-- BEGIN CSS SETION -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/light-dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dark-dt-global_style.css') }}">


    <link href="{{ asset('assets/css/light-scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/light-carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/light-modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/light-tabs.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/dark-scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/dark-carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/dark-modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/dark-tabs.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/FilePondPluginImagePreview.min.css') }}">
    <link href="{{ asset('assets/css/light-custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/dark-custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <!-- END CSS SETION -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .th {
            font-size: medium;
        }
    </style>
    <!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('main_content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing"
                        style="padding-left: 35px; padding-right: 35px;">

                        <div class="widget-content widget-content-area br-8">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="margin-top:1rem;">
                                        <h4 class="cat" style="margin-left:1rem;">Templates
                                            <a href="{{ route('templates.create') }}" <button type="button"
                                                class="btn btn-primary mb-2 me-4 " style="margin-left:1rem;float:right;">Add
                                                Templates</button></a>
                                        </h4>

                                    </div>
                                </div>
                            </div>
                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="name-area" scope="col" style="width:20%"><strong>Category<strong></th>
                                        <th><strong>Content<strong></th>
                                        <th class="badge-area" scope="col" style="width:15%"><strong>Skills<strong></th>
                                        <th class="button-area" scope="col" style="width:15%"><strong>Actions<strong>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($templates as $key => $item)
                                        <tr id="row-{{ $key }}">
                                            <td class="th">{{ $item->category }}</td>
                                            <td class="th">{{ $item->content }}</td>
                                            <td class="th">
                                                @php
                                                    $totalSkills = sizeof($skills, 0);
                                                    $skillsCount = count(explode(',', $item->skills));
                                                    $displayText =
                                                        $skillsCount == $totalSkills
                                                            ? 'All skills'
                                                            : "$skillsCount of $totalSkills skills"; // Replace '3' with your dynamic count
                                                @endphp
                                                <button type="button"
                                                    class="btn {{ $skillsCount == $totalSkills ? 'btn-success' : 'btn-primary' }}" style="padding: revert;">
                                                    {{ $displayText }}
                                                </button>
                                            </td>
                                            <td>
                                                <div class="btn-group mb-2 me-4" role="group">
                                                    <button id="btndefault" type="button"
                                                        class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="true">
                                                        Action <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btndefault">
                                                        {{-- <a href="javascript:void(0);" class="dropdown-item move-up" data-row="{{ $key }}"><i class="flaticon-home-fill-1 mr-1"></i>Move UP</a>
                                                        <a href="javascript:void(0);" class="dropdown-item move-down" data-row="{{ $key }}"><i class="flaticon-gear-fill mr-1"></i>Move Down</a>
                                                        <hr> --}}
                                                        <a href="{{ route('templates.edit', $item->id) }}"
                                                            class="dropdown-item"><i
                                                                class="flaticon-bell-fill-2 mr-1"></i>Edit</a>
                                                                <form action="{{ route('templates.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this template?')">
                                                                        <i class="flaticon-dots mr-1"></i> Delete
                                                                    </button>
                                                                </form>                                                                
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>



                <div class="container-fluid">
                    <div class="container">

                        <div class="row">

                            <div id="flAutoSizing" class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Skill Stat</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">

                                        <div class="row" style="margin-top:2rem;margin-left:1rem;margin-right:1rem;">
                                            @foreach ($skills as $skill)
                                                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title" style="color:#005aff; font-weight:900">
                                                                {{ $skill->name }}</h5>
                                                          
                                                                
                                                                
                                                                {{-- $templateCatCount = sizeof($templatecats, 0); --}}

                                                            <p class="mb-0" style="font-size:18px;">
                                                                <b></b> templates
                                                                {{-- {{-- in <b>{{$templateCatCount}}</b>--}} categories 
                                                            </p>


                                                            <div class="text"
                                                                style="margin-top:1rem;margin-bottom:0rem;">
                                                                <button type="button" class="btn btn-primary mb-2 me-4"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal-{{ $skill->id }}">Generate Bid</button>
                                                            </div>

                                                            <div class="modal fade" id="modal-{{ $skill->id }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="myLargeModalLabel-{{ $skill->id }}"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="myLargeModalLabel-{{ $skill->id }}">
                                                                                {{ $skill->name }}
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <svg aria-hidden="true"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-x">
                                                                                    <line x1="18" y1="6"
                                                                                        x2="6" y2="18">
                                                                                    </line>
                                                                                    <line x1="6" y1="6"
                                                                                        x2="18" y2="18">
                                                                                    </line>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <button type="button" id="#"
                                                                                class="btn btn-primary check-skill-btn">
                                                                                Generate another bid
                                                                            </button>

                                                                            <div class="row"
                                                                                style="margin-top:2rem;margin-left:1rem;margin-right:1rem;">
                                                                                @foreach ($templatecats as $templates)
                                                                                    <div
                                                                                        class="col-xl-2 col-lg-4 col-md-4 col-sm-4 mb-2">
                                                                                        <div class="card">
                                                                                            <div class="card-body1">
                                                                                                <p class="card-title"
                                                                                                    style="color:#005aff; font-weight:900; text-align:center">
                                                                                                    {{ $templates->name }}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-light-dark"
                                                                                data-bs-dismiss="modal">Discard</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary">Save</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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


    <!-- BEGIN JS SECTION -->
    <script src="https://designreset.com/cork/html/src/plugins/src/table/datatable/datatables.js"></script>
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
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





    <script src="https://designreset.com/cork/html/src/assets/js/scrollspyNav.js"></script>

    <script src="https://designreset.com/cork/html/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="https://designreset.com/cork/html/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="https://designreset.com/cork/html/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js">
    </script>
    <script src="https://designreset.com/cork/html/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="https://designreset.com/cork/html/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="https://designreset.com/cork/html/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="https://designreset.com/cork/html/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="https://designreset.com/cork/html/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>

    <script>
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

        addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560',
            '.yt-container')

        addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560',
            '.vimeo-container')




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
            document.querySelector('.filepond'), {
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
            modalImage.addFiles('https://designreset.com/cork/html/src/assets/img/drag-1.jpeg');
        })
    </script>

    <script></script>
    <!-- END JS SECTION -->
@endsection
