<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{env('APP_NAME')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/cropped-Bidmanager-180x180.png')}}">
   
  @include('include.header-code')
  @yield('style')
</head>
<body class="layout-boxed">
  @include('include.topbar')
  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    @include('include.sidebar')

  
    @if (request()->route()->getName() === 'freelancer.connection')
    @else
      @php
          $user = Auth::user(); // Get the currently authenticated user\
      @endphp

    @if (is_null($user->freelancer_id) || $user->freelancer_id == "")
        <script>
           window.location.href = "{{ route('freelancer.connection') }}";
        </script>
    @endif
@endif
    @yield('main_content')
    
    @include('include.footer-code')
  </div>
  <!--  END MAIN CONTAINER  -->

  
@yield('js')
<script type="text/javascript">
  function confirmation(ev) {
    ev.preventDefault();
    var form = ev.target.closest('form');
    swal({
      title: "Are you sure you want to delete this?",
      text: "You won't be able to revert this delete",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willCancel) => {
      if (willCancel) {
        form.submit();
      }
    });
  }
</script>
</body>
</html>