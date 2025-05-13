@extends('layout.app')
@section('style')
    <!--  CSS SECTION  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tagify.css') }}">
    <link href="{{ asset('assets/css/light-scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/light-custom-tagify.css') }}">
    <link href="{{ asset('assets/css/dark-scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom-tagify.css') }}">
    <!--  CSS ENDSECTION  -->
@endsection

@section('main_content')
<div id="content" class="main-content">
    <br>
    <div class="container-fluid">
        <div class="row">
            <div id="flLoginForm" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add Skills</h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <br>
                        <form action="{{ route('skillsets.store') }}" method="POST" enctype="multipart/form-data" class="row g-3" style="margin-left:2rem; margin-right:2rem;">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                            </div>
                            <div class="col-md-6">
                                <label for="inputeskills" class="form-label">Skills</label>
                                <input name="skills" value="">
                            </div>
                            <div class="col-12" style="margin-bottom:2rem;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  JS SECTION  -->
<script>
    $(document).ready(function () {
        var inputElm = document.querySelector('input[name=skills]');

        function tagTemplate(tagData) {
            return `
                <tag title="${tagData.email}"
                     contenteditable='false'
                     spellcheck='false'
                     tabIndex="-1"
                     class="tagify__tag ${tagData.class ? tagData.class : ''}"
                     ${this.getAttributes(tagData)}>
                    <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                    <div>
                        <div class='tagify__tag__avatar-wrap'>
                            <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                        </div>
                        <span class='tagify__tag-text'>${tagData.name}</span>
                    </div>
                </tag>
            `;
        }

        function suggestionItemTemplate(tagData) {
            return `
                <div ${this.getAttributes(tagData)}
                     class='tagify__dropdown__item ${tagData.class ? tagData.class : ''}'
                     tabindex="0"
                     role="option">
                    <strong>${tagData.name}</strong>
                </div>
            `;
        }

        // Initialize Tagify on the above input node reference
        var usrList = new Tagify(inputElm, {
            tagTextProp: 'name', // Custom template property for tag text
            enforceWhitelist: true,
            skipInvalid: true,
            dropdown: {
                closeOnSelect: false,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['name']
            },
            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate
            },
            whitelist: [
                @foreach ($skills as $skill)
                    {
                        "value": "{{ $skill->id }}",
                        "name": "{{ $skill->name }}",
                        // Optionally, you can add more fields such as "avatar" or "email"
                        // "avatar": "https://i.pravatar.cc/80?img={{ $skill->id }}",
                        // "email": "example@domain.com"
                    },
                @endforeach
            ]
        });

        usrList.on('dropdown:show dropdown:updated', onDropdownShow);
        usrList.on('dropdown:select', onSelectSuggestion);

        var addAllSuggestionsElm;

        function onDropdownShow(e) {
            var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

            if (usrList.suggestedListItems.length > 1) {
                addAllSuggestionsElm = getAddAllSuggestionsElm();
                dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild);
            }
        }

        function onSelectSuggestion(e) {
            if (e.detail.elm == addAllSuggestionsElm)
                usrList.dropdown.selectAll();
        }

        function getAddAllSuggestionsElm() {
            return usrList.parseTemplate('dropdownItem', [{
                class: "addAll",
                name: "Add all",
                email: usrList.whitelist.reduce(function (remainingSuggestions, item) {
                    return usrList.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
                }, 0) + " Skills"
            }]);
        }
    });
</script>

<script src="{{ asset('assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('assets/js/tagify.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-tagify.js') }}"></script>
<!--  JS ENDSECTION  -->
@endsection
