@extends('layout.app')

@section('style')
    <style>
        .checkbox-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .checkbox-container {
            display: inline-flex;
            align-items: center;
            background-color: #f1f1f1;
            color: #333;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            border: 1px solid #ccc;
            transition: background-color 0.3s, color 0.3s;
        }

        .checkbox-container input:checked ::after{
            display: inline-flex;
            align-items: center;
            background-color: #00ab55;
            color: #ffffff;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            border: 1px solid #ccc;
            transition: background-color 0.3s, color 0.3s;
        }

        .checkbox-container input {
            display: none; /* Hide the default checkbox */
        }

        .checkbox-container input:checked {
            display: none; /* Hide the default checkbox */
        }


        .checkbox-container .checkmark {
            display: inline-block;
            width: 18px;
            height: 18px;
            background-color: white;
            border-radius: 3px;
            margin-right: 8px;
            position: relative;
            border: 1px solid #ccc;
        }

        .checkbox-container input:checked + .checkmark {
            background-color: #28a745;
            border-color: #28a745;
        }
        
        .checkbox-container input:checked + .checkmark:before {
            content: '\2714'; /* Unicode checkmark */
            position: absolute;
            top: 1px;
            left: 4px;
            color: white; /* White checkmark */
            font-size: 10px;
        }



    </style>
@endsection
@section('main_content')

        <!--  CSS SECTION  -->
           
        <!--  CSS ENDSECTION  -->


        <div id="content" class="main-content">
            <br>
                <div class="container-fluid">
                    <div class="row">
                        <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Add Template</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
            
                                <div class="widget-content widget-content-area">
                                <br>
                                <form action="{{ route('templates.store') }}" method="POST" enctype="multipart/form-data" class="row g-3" style="margin-left:2rem; margin-right:2rem;">
                                    @csrf  
                                    <div class="col-md-6">
                                        <label for="inputName" class="form-label">Category</label>
                                        <select class="form-select" name="category" id="category" required>
                                            <option value="">--Please Select--</option>
                                            @foreach ($templatecats as $templatecat)
                                                <option value="{{ $templatecat->name }}">{{ ucfirst($templatecat->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="inputcontent" class="form-label">Content</label>
                                        <textarea class="form-control" name="content" placeholder="Enter Content" rows="5"></textarea>
                                    </div>
                                    
                                    @if (!$skillsets->isEmpty())
                                    <div class="col-md-6">
                                        <label for="inputSkill" class="form-label">Skill Sets</label><br>
                                        @foreach ($skillsets as $skillset)
                                            <button type="button" id="{{ $skillset->skills }}" class="btn btn-primary check-skill-btn">
                                                {{ $skillset->name }}
                                            </button>
                                        @endforeach
                                    </div>
                                    @endif
                                    <div class="col-md-12">
                                        <label for="inputApplication" class="form-label">Application Skills</label><br>
                                        <button type="button" class="btn btn-success" id="checkAll">Check All</button>
                                        <button type="button" class="btn btn-danger" id="uncheckAll">Uncheck All</button>
                                    </div>
                                    
                                    <div class="checkbox-group">
                                        @foreach($skills as $skill)
                                            <label class="checkbox-container">
                                                <input type="checkbox" class="skill-checkbox" name="skills[]" value="{{$skill->name}}">
                                                <span class="checkmark"></span>
                                                {{$skill->name}}
                                            </label>
                                        @endforeach
                                    </div>
                                    <div class="widget-footer">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success" style="float:right;">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            
</div>
@endsection

@section('js')

        <!--  JS SECTION  -->
        <script>
            document.getElementById('checkAll').addEventListener('click', function() {
                let checkboxes = document.querySelectorAll('.skill-checkbox');
                checkboxes.forEach(checkbox => checkbox.checked = true);
            });
        
            document.getElementById('uncheckAll').addEventListener('click', function() {
                let checkboxes = document.querySelectorAll('.skill-checkbox');
                checkboxes.forEach(checkbox => checkbox.checked = false);
            });

            document.addEventListener('DOMContentLoaded', function() {
                // Select all the skill set buttons
                const buttons = document.querySelectorAll('.check-skill-btn');

                buttons.forEach(button => {
                    button.addEventListener('click', function() {
                        // Get the comma-separated skills stored in the button's id
                        const skillsToCheck = this.id.split(', ');  // Split by comma and space

                        // Loop through the checkboxes and check those that match the skills in the button
                        document.querySelectorAll('.skill-checkbox').forEach(checkbox => {
                            if (skillsToCheck.includes(checkbox.value)) {
                                checkbox.checked = true; // Check the box
                            } else {
                                checkbox.checked = false; // Uncheck other boxes
                            }
                        });
                    });
                });
            });


        </script>
        <!--  jS ENDSECTION  -->

@endsection
