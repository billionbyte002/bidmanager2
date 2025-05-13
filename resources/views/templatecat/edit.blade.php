@extends('layout.app')

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
                                <h4>Edit Template Category</h4>
                            </div>                                                                        
                        </div>
                    </div>
                    
                    <div class="widget-content widget-content-area">
                        <br>

                        {{-- Form Start --}}
                        <form action="{{ route('templatecat.update', $templatecat->id) }}" method="POST" enctype="multipart/form-data" class="row g-3" style="margin-left:2rem; margin-right:2rem;">
                            @csrf
                            @method('PUT')
                            
                            {{-- Name Field --}}
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $templatecat->name) }}" placeholder="Enter Category Name" required>
                            </div>

                            {{-- Always Include Field --}}
                            <div class="col-md-6">
                                <label for="include" class="form-label">Always Include</label>
                                <select id="include" class="form-select" name="include" style="width:100%;" required>
                                    <option value="Yes" {{ old('include', $templatecat->include) == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    <option value="No" {{ old('include', $templatecat->include) == 'No' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            {{-- Submit Button --}}
                            <div class="col-12" style="margin-bottom:2rem;">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        {{-- Form End --}}

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
