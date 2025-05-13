@extends('layout.app')

@section('style')
<style>
    .toggle-checkbox {
        visibility: hidden;
        display: none;
    }

    /* Custom switch style */
    .toggle-label {
        position: relative;
        display: block;
        width: 40px;
        height: 20px;
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
        transform: translate3d(0, 0, 0);
        margin-right: 0.2rem; /* Related to the space between indicator and the skill name */
    }

    .toggle-label:before {
        content: "";
        position: relative;
        top: 3px;
        left: 3px;
        width: 34px;
        height: 14px;
        display: block;
        background: #9A9999;
        border-radius: 8px;
        transition: background 0.2s ease;
    }

    .toggle-indicator {
        position: absolute;
        top: 0;
        left: 0;
        width: 20px;
        height: 20px;
        display: block;
        background: white;
        border-radius: 10px;
        box-shadow: 0 3px 8px rgba(154, 153, 153, 0.5);
        transition: all 0.2s ease;
    }

    .toggle-indicator:before {
        content: "";
        position: absolute;
        display: block;
        margin: -18px;
        width: 56px;
        height: 56px;
        background: rgba(79, 46, 220, 0.5);
        border-radius: 50%;
        transform: scale(0);
        opacity: 1;
        pointer-events: none;
    }

    .toggle-checkbox:checked + .toggle-label:before {
        background: #7e95e7;
    }

    .toggle-checkbox:checked + .toggle-label .toggle-indicator {
        background: #2a4ef7;
        transform: translateX(20px);
        transition: all 0.2s cubic-bezier(0.8, 0.4, 0.3, 1.25), background 0.15s ease;
        box-shadow: 0 3px 8px rgba(79, 46, 220, 0.2);
    }

    .toggle-checkbox:checked + .toggle-label .toggle-indicator:before {
        transform: scale(1);
        opacity: 0;
        transition: all 0.4s ease;
    }

    /* Grid layout for the skills section */
    .skills-grid {
        display: flex;
        flex-wrap: wrap; /* Ensures the content stays on a single line */
        grid-gap: 0.5rem;
        justify-content: space-between;
        /* overflow-x: auto; Adds horizontal scroll if content overflows */
    }

    .skill-item {
        display: flex;
        flex-basis: calc(33.3% -5px);
        justify-content: start;
        border: 1px solid #ccc; /* Adding border around the cells */
        padding: 0.6rem 0.5rem 0.1rem 0.8rem;
        width: 32%; /* Ensures all skill items have a minimum width */
        flex-shrink: 0; /* Prevents items from shrinking */
        overflow: hidden;
    }

    .skill-name {
        margin-left: 0.7rem;
    }

    /* Common section styling (heading and submit button) */
    .common-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #e6e3e3; /* Light background */
        padding: 0.7rem 1rem 0.7rem 1rem;
        border-bottom: 1px solid #ddd; /* Border at the bottom */
    }

    .common-section h5 {
        margin: 0;
        font-size: 1.25rem;
        color: #333; /* Darker text color */
    }

    /* Button styling */
    .common-section .btn {
        margin-left: 1rem;
    }

    .btn-primary {
        background-color: #68D391; /* Green background */
        border-color: #68D391; /* Green border */
        color: #fff; /* White text */
    }

    .btn-primary:hover {
        background-color: #5baf7f; /* Darker green on hover */
        border-color: #5baf7f; /* Darker green on hover */
    }

    .btn-link {
        color: #f9f9fa; /* Blue text for the link button */
        text-decoration: none;
        font-weight: bold;
    }

    .btn-link:hover {
        color: #2b6cb0; /* Darker blue on hover */
    }

    /* Notice alert styling */
    .alert-notice {
        background-color: #fff3cd; /* Light yellow background */
        border: 1px solid #ffeeba; /* Border matching the background */
        color: #856404; /* Dark yellow text color */
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border-radius: 0.25rem;
    }

    .alert-notice strong {
        font-weight: bold;
    }
    .form-check-labels1{
        margin-left: 1.5rem;
        white-space: nowrap;
        /* margin-top: 4px; */
    }
    .common-section-inline {
        display: flex; /* Flexbox to align items horizontally */
        align-items: center; /* Vertically align button and text */
        justify-content: flex-start; /* Aligns items to the left */
        gap: 1rem; /* Adds space between the button and the text */
    }

    .after-button-text {
        font-size: 1rem; /* Optional: Adjust font size */
        color: #333; /* Optional: Text color */
    }

    #sortableSkills {
    padding-left: 0;
    list-style: none;
    }

    #sortableSkills .list-group-item {
    cursor: move;
    background-color: #f7f7f7;
    margin-bottom: 5px;
    padding: 10px;
    border-radius: 4px;
    }

    .ui-state-highlight {
    height: 2.5em;
    line-height: 1.2em;
    background-color: #ffeeba;
    }

    .container {
    /* display: flex;
    flex-wrap: wrap; */
    /* Other styling */
    }

    .skill-item {
    /* flex: 1 1 200px; /* Adjust width of skill item */
    /*margin: 10px;    Space between skill items */
    /* Other styling */
    }

    

</style>

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {{-- <link href="../src/plugins/src/animate/animate.css" rel="stylesheet" type="text/css" /> --}}
    <!-- END PAGE LEVEL PLUGINS -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">
    
    {{-- <link href="../src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css"> --}}

    {{-- <link rel="stylesheet" href="../src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">    
    <link href="../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" /> --}}

    <!-- BEGIN PAGE LEVEL STYLES -->
   <link href="{{asset('assets/css/dragula.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/css/light-example.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/css/dark-example.css')}}" rel="stylesheet" type="text/css" />
   <!-- END PAGE LEVEL STYLES -->


@endsection

@section('main_content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="container my-5">
                <!-- Manage Included Skills -->
                <div class="card">
                    
                    <div class="common-section">
                        <h5>Manage Included Skills</h5>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">Set Priority</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" >
                                <div class="modal-dialog modal-sm" role="document">
                                  <div class="modal-content" >
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="myExtraLargeModalLabel">Set Priority</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="6" y1="6" x2="10" y2="10"></line></svg>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="row" id="cancel-row">
                                            <div class="parent ex-1">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <!-- Using a Bootstrap grid system to dynamically split into 3 columns -->
                                                        
                                                        @php
                                                            $chunks = $skills->chunk(ceil($skills->count() / 3));
                                                        @endphp

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id='left-defaults' class='dragula' style="display:box">
                                                                    @if(isset($chunks[0]))
                                                                        @foreach($chunks[0] as $item)
                                                                            <div class="media d-md-flex d-block  draggable-item"  style="cursor: move; border: 1px solid #ccc; ">
                                                                                <div class="media-body">
                                                                                    <h6 class="text" style="text-align:center">
                                                                                        <span class="serial-number"></span> {{ $item->name }}
                                                                                    </h6>
                                                                                </div>
                                                                        </div>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                            </div>

   
</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                      <div class="modal-footer">
                                          <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                          <button type="button" class="btn btn-primary">Save</button>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <a href="{{route('skills.fetch')}}" class="btn btn-link">Sync Skills</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="alert-notice">
                            <strong>Notice!</strong> This section only shows skills that are added on your profile. If you don't see correct skills, please press <strong> Sync Skills </storng>button.
                            @if(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                            @endif
                        </div>
                        <div class="skills-grid">
                            @foreach($skills as $item)
                            <div class="skill-item">
                                <input type="checkbox" class="toggle-checkbox" id="{{ $item->name }}" checked>
                                <label for="{{ $item->name }}" class="toggle-label">
                                    <span class="toggle-indicator"></span>
                                </label>
                                <span class="skill-name"><strong>{{ $item->name }}</strong></span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="common-section">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>

                <!-- Manage Excluded Skills -->
                <div class="card mt-5">
                    <div class="common-section">
                        <h5>Manage Excluded Skills</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert-notice">
                            <strong>Notice!</strong> These skills will always be ignored when auto bidding is enabled.
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input type="checkbox" class="toggle-checkbox" id="showProjectSwitch" checked>
                            <label for="showProjectSwitch" class="toggle-label block bg-gray-300 relative cursor-pointer">
                                <span class="toggle-indicator"></span>
                            </label>
                            <label class="form-check-labels1" for="showProjectSwitch">Show project for these skills on search page?(Fast searching when enabled)</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Type here">
                        </div>
                    </div>
                
                    <div class="common-section common-section-inline"> <!-- Updated class -->
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
  <!--  BEGIN CUSTOM SCRIPT FILE  -->
  <script src="../src/assets/js/scrollspyNav.js"></script>

  <script src="../src/plugins/src/filepond/filepond.min.js"></script>
  <script src="../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
  <script src="../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
  <script src="../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
  <script src="../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
  <script src="../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
  <script src="../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
  <script src="../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
  
  <script  type="text/javascript">

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

  </script> 

  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <link rel="stylesheet" href="https://unpkg.com/dragula/dist/dragula.min.css">
  <script src="https://unpkg.com/dragula/dist/dragula.min.js"></script>
  
  <script type="text/javascript">
 $(document).ready(function () {
    var drake = dragula([document.getElementById('left-defaults')], {
        moves: function (el, source, handle, sibling) {
            // Allow entire .media to be draggable
            return el.classList.contains('media') || el.classList.contains('draggable-item');
        }
    })
        .on('drag', function (el) {
            el.classList.add('el-drag-ex-1');
        })
        .on('drop', function (el) {
            el.classList.remove('el-drag-ex-1');
            setTimeout(updateSerialNumbers, 50); // Wait for DOM update
        })
        .on('cancel', function (el) {
            el.classList.remove('el-drag-ex-1');
        });

    updateSerialNumbers();
});

function updateSerialNumbers() {
    $('#left-defaults .media').each(function (index) {
        $(this).find('.serial-number').text((index + 1) + '.');
    });
}
</script>
  <!-- END PAGE LEVEL SCRIPTS -->
@endsection