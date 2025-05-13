@extends('layout.app')
@section('style')


    <!-- CSS SECTION -->
    <link href="{{asset('assets/css/light-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/dark-scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <!-- END CSS SECTION -->
@endsection
@section('main_content')


        <div id="content" class="main-content" >

            <div class="container-fluid" style="margin-top:2rem;">
                <div class="container">

                    <div id="tableCheckbox" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="margin-top:1rem; margin-bottom:1rem; margin-left:1rem">
                                            <h4>Manage Project Period</h4>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('period.store') }}"  method="POST" enctype="multipart/form-data" class="row g-3" >
                                @csrf
                                <div class="widget-content widget-content-area">

                                            <div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
                                                    <strong>Notice!</strong> 
                                                        <ul>
                                                            <li>You will see those projects whose minimum value is equal or greater then your entered value.</li>
                                                            <li>If you bid price does not fall in any range, it will use default project period</li>
                                                        </ul>
                                            </div>
                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="checkbox-area" scope="col">
                                                        No.
                                                    </th>
                                                    <th scope="col">Lower Bid Price</th>
                                                    <th scope="col">Higher Bid Price</th>
                                                    <th scope="col">Project Period</th>
                                                    <th class="checkbox-area" scope="col" >
                                                        
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <input type="number" id="inputproject" name="lower" class="form-control" min="0" max="10000" step="1" value="0" style="height:45px; width:220px; padding-left:25px; border: 1px solid #bfc9d4; color: #3b3f5c; background-color: #fff; border-radius: 6px;">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <input type="number" id="inputproject" name="higher" class="form-control" min="0" max="10000" step="1" value="0" style="height:45px; width:220px; padding-left:25px; border: 1px solid #bfc9d4; color: #3b3f5c; background-color: #fff; border-radius: 6px;">
                                                        </div>
                                                    </td>
                                                    <td><div class="col-sm-12">
                                                        <input type="number" id="inputproject" name="period" class="form-control" min="0" max="10000" step="1" value="0" style="height:45px; width:220px; padding-left:25px; border: 1px solid #bfc9d4; color: #3b3f5c; background-color: #fff; border-radius: 6px;">
                                                        </div></td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div> 
                                     
                                </div>
                                       
                                                    <div class="widget-header">                                
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="margin-top:1rem; margin-bottom:1rem;">
                                                            <button type="submit" class="btn btn-success" style="float:right">Submit</button>
                                                            <button type="submit" class="btn btn-primary" style="float:left">Add Range</button>
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
                    
                                
    <!--JS SECTION -->
    <script src="https://designreset.com/cork/html/src/assets/js/scrollspyNav.js"></script>
    <script>
        checkall('checkbox_parent_all', 'checkbox_child');
        checkall('hover_parent_all', 'hover_child');
        checkall('striped_parent_all', 'striped_child');
        checkall('bordered_parent_all', 'bordered_child');
        checkall('mixed_parent_all', 'mixed_child');
        checkall('noSpacing_parent_all', 'noSpacing_child');
        checkall('custom_mixed_parent_all', 'custom_mixed_child');
    </script>
    <!-- END JS SECTION -->

@endsection