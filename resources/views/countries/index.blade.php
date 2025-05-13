/@extends('layout.app')
@section('main_content')
    <!-- Begin CSS STYLES -->
    <link href="https://designreset.com/cork/html/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://designreset.com/cork/html/src/assets/css/light/forms/switches.css">
    <link href="https://designreset.com/cork/html/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://designreset.com/cork/html/src/assets/css/dark/forms/switches.css">

    <style>


        td {
            border: 0.3px solid rgba(176, 171, 171, 0.918)
            width: 1px
        }

        .checkbox-wrapper-34 {
            --blue: #0D7EFF;
            --g08: #db0e0e;
            --g04: #ffffff;
            display: flex;
        }

        .checkbox-wrapper-34 .tgl {
            display: none;
        }

        .checkbox-wrapper-34 .tgl + .tgl-btn {
            outline: 0;
            display: block;
            width: 77px; /* Increased width slightly */
            height: 27px; /* Slightly larger for more padding */
            position: relative;
            cursor: pointer;
            user-select: none;
            font-size: 12px;
            font-weight: 400;
            color: #fff;
            border-radius: 20rem;
            background: var(--g08);
            padding: 1.5px;
            transition: all 0.4s ease;
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.1);
        }

        .checkbox-wrapper-34 .tgl + .tgl-btn:after {
            content: "";
            position: absolute;
            width: 31%; /* Adjust width */
            height: 87%;
            background: #fff;
            border-radius: 50%;
            transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
            left: 2px; /* Adjust starting position */
        }

        .checkbox-wrapper-34 .tgl + .tgl-btn:before {
            content: "Exclude";
            position: absolute;
            top: 6px;
            right: 5px;
            color: var(--g04);
            font-size: 10px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .checkbox-wrapper-34 .tgl:checked + .tgl-btn {
            background: var(--blue);
        }

        .checkbox-wrapper-34 .tgl:checked + .tgl-btn:before {
            content: "Include";
            left: 7px;
            color: #fff;
            right: auto; /* Reset right alignment */
            font-weight: bold;
            margin-top: 0.5px;
        }

        .checkbox-wrapper-34 .tgl:checked + .tgl-btn:after {
            left: calc(100% - 26px); /* Align the circle to the right */
        }

        .country-label1 {
            display: inline-flex;
            margin-left: 10px;
        }

    </style>
    <!-- END CSS STYLES -->

    <div id="content" class="main-content">
        <div class="container">
            <div class="container-fluid">
                <div class="row layout-top-spacing">
                    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <div>
                                    <h4 class="head" style="color:rgb(76, 76, 252)"> Manage Excluded Countries</h4>
                                </div><br>
                                <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                                    <strong>Notice!</strong> You will not see any projects from these countries, and these projects will always be ignored when auto bidding is enabled.
                                </div>

                                <div class="table-responsive" style="border:1px solid;">
                                    <table class="table table-bordered">
                                        <tbody>
                                            @php
                                                $excluded = explode(',', auth()->user()->excluded_country_ids ?? '');
                                            @endphp

                                            @foreach($countries as $country)
                                                @if($loop->index % 3 == 0)
                                                    <tr>
                                                @endif

                                                <td>
                                                    <div class="col-md-6 text-center">
                                                        <div class="checkbox-wrapper-34">
                                                            <input class="tgl tgl-ios" id="form-custom-switch-{{ $country['id'] }}" type="checkbox"
                                                            onchange="handleCountryToggle(this)"  {{ in_array($country['id'], $excluded) ? '' : 'checked' }} >
                                                            <label class="tgl-btn" for="form-custom-switch-{{ $country['id'] }}"></label>
                                                            <div class="country-label1">{{ $country['name'] }}</div>
                                                        </div>
                                                    </div>

                                                </td>

                                                @if($loop->iteration % 3 == 0)
                                                    </tr>
                                                @endif
                                            @endforeach
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

    {{-- BEGIN JS SECTION --}}
    <script>
        function toggleClass(element, className) {
            element.classList.toggle(className);
        }

        function handleCountryToggle(checkbox) {
        checkbox.closest('.checkbox-wrapper-34').classList.toggle('show', checkbox.checked);

        const checkboxes = document.querySelectorAll('.checkbox-wrapper-34 input[type="checkbox"]');
        const uncheckedIds = [];

        checkboxes.forEach((cb) => {
            if (!cb.checked) {
                const id = cb.id.replace('form-custom-switch-', '');
                uncheckedIds.push(id);
            }
        });

        // Send AJAX to update user profile
        fetch('/user/countries', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ excluded_country_ids: uncheckedIds })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Saved:', data);
        })
        .catch(error => {
            console.error('Save error:', error);
        });
    }
    </script>
@endsection
