@extends('layout.app')
@section('style')

        <!--  CSS SECTION  -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/tagify.css')}}">
        <link href="{{asset('assets/css/light-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/light-custom-tagify.css')}}">
    
        <link href="{{asset('assets/css/dark-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom-tagify.cs')}}s">
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
                                    <form action="{{ route('skillsets.store') }}"  method="POST" enctype="multipart/form-data" class="row g-3" style="margin-left:2rem; margin-right:2rem;">
                                      @csrf  
                                        <div class="col-md-6">
                                            <label for="inputName" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputeskills" class="form-label">Skills</label>
                                            <input name='skills' value='Java, Laravel'>
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
            $(document).ready(function() {
            
            
            var inputElm = document.querySelector('input[name=skills]');
            
            function tagTemplate(tagData){
                return `
                    <tag title="${tagData.email}"
                            contenteditable='false'
                            spellcheck='false'
                            tabIndex="-1"
                            class="tagify__tag ${tagData.class ? tagData.class : ""}"
                            ${this.getAttributes(tagData)}>
                        <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                        <div>
                            <div class='tagify__tag__avatar-wrap'>
                                <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                            </div>
                            <span class='tagify__tag-text'>${tagData.name}</span>
                        </div>
                    </tag>
                `
            }
            
            function suggestionItemTemplate(tagData){
                return `
                    <div ${this.getAttributes(tagData)}
                        class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
                        tabindex="0"
                        role="option">
                        
                        <strong>${tagData.name}</strong>
                    </div>
                `
            }
            
            // initialize Tagify on the above input node reference
            var usrList = new Tagify(inputElm, {
                tagTextProp: 'name', // very important since a custom template is used with this property as text
                enforceWhitelist: true,
                skipInvalid: true, // do not remporarily add invalid tags
                dropdown: {
                    closeOnSelect: false,
                    enabled: 0,
                    classname: 'users-list',
                    searchKeys: ['name']  // very important to set by which keys to search for suggesttions when typing
                },
                templates: {
                    tag: tagTemplate,
                    dropdownItem: suggestionItemTemplate
                },
                whitelist: [
                    {
                        "value": 1,
                        "name": "Java",
                        // "avatar": "https://i.pravatar.cc/80?img=1",
                        // "email": "jhattersley0@ucsd.edu"
                    },
                    {
                        "value": 2,
                        "name": "C++",
                        // "avatar": "https://i.pravatar.cc/80?img=2",
                        // "email": "aesson1@ning.com"
                    },
                    {
                        "value": 3,
                        "name": "C#",
                        // "avatar": "https://i.pravatar.cc/80?img=3",
                        // "email": "abatisse2@nih.gov"
                    },
                    {
                        "value": 4,
                        "name": "Python",
                        // "avatar": "https://i.pravatar.cc/80?img=4",
                        // "email": "gyellowley3@behance.net"
                    },
                    {
                        "value": 5,
                        "name": "SQL",
                        // "avatar": "https://i.pravatar.cc/80?img=5",
                        // "email": "dwilford4@jugem.jp"
                    },
                    {
                        "value": 6,
                        "name": "Mongo DB",
                        // "avatar": "https://i.pravatar.cc/80?img=6",
                        // "email": "corwin5@meetup.com"
                    },
                    {
                        "value": 7,
                        "name": "Laravel",
                        // "avatar": "https://i.pravatar.cc/80?img=7",
                        // "email": "smain6@techcrunch.com"
                    },
                    {
                        "value": 8,
                        "name": "PHP",
                        // "avatar": "https://i.pravatar.cc/80?img=8",
                        // "email": "ghaysman7@mashable.com"
                    },
                    {
                        "value": 9,
                        "name": "React",
                        // "avatar": "https://i.pravatar.cc/80?img=9",
                        // "email": "mmandrake8@sourceforge.net"
                    },
                    {
                        "value": 10,
                        "name": "Swift",
                        // "avatar": "https://i.pravatar.cc/80?img=10",
                        // "email": "ctidey9@youtube.com"
                    },
                    {
                        "value": 11,
                        "name": "HTML",
                        // "avatar": "https://i.pravatar.cc/80?img=11",
                        // "email": "foo@bar.com"
                    },
                    {
                        "value": 12,
                        "name": "foo",
                        // "avatar": "https://i.pravatar.cc/80?img=12",
                        // "email": "foo.aaa@foo.com"
                    },
                ]
            })
            
            usrList.on('dropdown:show dropdown:updated', onDropdownShow)
            usrList.on('dropdown:select', onSelectSuggestion)
            
            var addAllSuggestionsElm;
            
            function onDropdownShow(e){
                var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;
            
                if( usrList.suggestedListItems.length > 1 ){
                    addAllSuggestionsElm = getAddAllSuggestionsElm();
            
                   
                    dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
                }
            }
            
            function onSelectSuggestion(e){
                if( e.detail.elm == addAllSuggestionsElm )
                    usrList.dropdown.selectAll();
            }
        
            function getAddAllSuggestionsElm(){
                
                return usrList.parseTemplate('dropdownItem', [{
                        class: "addAll",
                        name: "Add all",
                        email: usrList.whitelist.reduce(function(remainingSuggestions, item){
                            return usrList.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
                        }, 0) + " Members"
                    }]
                    )
            }
            });
        </script>
        <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
        <script src="{{asset('assets/js/tagify.min.js')}}"></script>
        <script src="{{asset('assets/js/custom-tagify.js')}}"></script>
        <!--  jS ENDSECTION  -->

@endsection


