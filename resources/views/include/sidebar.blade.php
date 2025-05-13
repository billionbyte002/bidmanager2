<style>
    /* CSS for fixed sidebar */
    .sidebar-wrapper {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        width: 250px; /* Adjust width as per your design */
        background-color: #fff; /* Adjust background color as needed */
        border-right: 1px solid #ddd; /* Optional: add border for separation */
        z-index: 1000; /* Ensure it stays above other content */
    }

    .locked {
    pointer-events: none;  /* Disable all click events */
    opacity: 0.5;         /* Visually indicate it's disabled */
    }
    

    </style>




<!--  BEGIN SIDEBAR  -->

@php
    $freelancer_username = Auth::user()->freelancer_username ?? null;
@endphp

{{-- @php
dd($freelancer_username);
@endphp  --}}
<div class="sidebar-wrapper sidebar-theme">
    @if(Auth::check() && Auth::user()->id)
    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="#">
                        <img src="{{ asset('assets/img/Bidmanager-removebg-preview2.png') }}" class="navbar-logo" alt="logo" style="width: 150px; height: auto;">
                    </a>
                    
                </div>

            </div>
            <div class="nav-item sidebar-toggle">
                {{-- <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div> --}}
            </div>
        </div>

        <div class="profile-info">
            <div class="user-info">
                <div class="profile-img">
                    <img src="{{ asset('assets/img/user.png') }}" alt="avatar">
                </div>
                <div class="profile-content">
                    <h6 class="">{{ preg_replace('/(?<!^)([A-Z])/', ' $1', $freelancer_username) }}</h6>
                    <p class="">Project Leader</p>
                </div>
            </div>
        </div>

        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="dashboard">
            <li class="menu {{ request()->routeIs('dashboard2') ? 'active' : '' }}">
                <a href="{{ route('dashboard2') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-navigation"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>
                        <span>Bid Now</span>
                    </div>
                </a>
            </li>

            <li class="menu menu-heading">

            </li>

            <li class="menu {{ request()->routeIs('skills.index') ? 'active' : '' }}">
                <a href="{{route('skills.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-pen-tool">
                            <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                            <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                            <path d="M2 2l7.586 7.586"></path>
                            <circle cx="11" cy="11" r="2"></circle>
                        </svg>
                        <span>Skill</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ request()->routeIs('skillsets.index') ? 'active' : '' }}">
                <a href="{{ route('skillsets.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-folder-plus">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                            </path>
                            <line x1="12" y1="11" x2="12" y2="17"></line>
                            <line x1="9" y1="14" x2="15" y2="14"></line>
                        </svg>

                        <span>Skill Sets</span>
                    </div>
                </a>
            </li>


            <li class="menu {{ request()->routeIs('countries') ? 'active' : '' }}">
                <a href="{{ route('countries') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-globe">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                            </path>
                        </svg>
                        <span>Countries</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ request()->routeIs('client.index') ? 'active' : '' }}">
                <a href="{{ route('client.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-bar-chart-2">
                            <line x1="18" y1="20" x2="18" y2="10"></line>
                            <line x1="12" y1="20" x2="12" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="14"></line>
                        </svg>
                        <span>Client Stats</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ request()->routeIs('project.index') ? 'active' : '' }}">
                <a href="{{ route('project.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>

                        <span>Project Budget</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ request()->routeIs('bidprice.index') ? 'active' : '' }}">
                <a href="{{ route('bidprice.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-shopping-cart">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span>Bid Price</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ request()->routeIs('period.index') ? 'active' : '' }}">
                <a href="{{ route('period.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-clock">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>Project Period</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ request()->routeIs('templatecat.index') ? 'active' : '' }}">
                <a href="{{ route('templatecat.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-grid">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        <span>Template Category</span>
                    </div>
                </a>
            </li>

            @php
                $item = (object) ['id' => 1]; // This should ideally be dynamic or passed to the view
            @endphp
            
            <li class="menu {{ request()->routeIs('templates.index') || request()->routeIs('templates.edit', $item->id) ? 'active' : '' }}">
                <a href="{{ route('templates.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-database">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                        <span>Templates</span>
                    </div>
                </a>
            </li>
        </ul>
        @else
            <!-- Redirect or show a message -->
            <script>
                window.location.href = 'http://127.0.0.1:8000/FreelancerConnection';
            </script>
        @endif
    </nav>
</div>
<!--  END SIDEBAR  -->

{{-- <script>
    async function fetchFreelancerData() {
        const freelancerToken = "{{ $freelancer_token }}"; // Blade variable rendered as JS string

        try {
            const response = await fetch('https://www.freelancer-sandbox.com/api/users/0.1/self/?jobs=true', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'freelancer-oauth-v1': freelancerToken
                }
            });


            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            const data = await response.json();

            if (data.status === 'success') {
                const username = data.result.username.split(" ");
                console.log("Username:", username);

                // Set username in the HTML
                document.getElementById('username-display').innerText = username;

                // Optional: initials logic if you want to use it somewhere
                const initials = username
                    .match(/[A-Z]/g)
                    ?.join('') || username.slice(0, 2).toUpperCase();

                console.log("Initials (All Caps):", initials);
            } else {
                console.error("API response was not successful:", data);
            }
        } catch (error) {
            console.error("Error fetching Freelancer data:", error);
        }
    }

    fetchFreelancerData();
</script> --}}

