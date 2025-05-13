@extends('layout.app')

@section('main_content')


<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-users"></i> Module List</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="{{ route('module.index') }}">Modules</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                        @php
                            $permissions = Session::get('permissions');
                        @endphp
                     @if($permissions && is_array($permissions) && in_array('module_store', $permissions))
                    <div class="row">
                        <div class="col-md-12 pb-4 text-right">
                            <a href="{{ URL::to('module/create') }}" class="btn btn-info pl-5 pr-5">Add</a>
                        </div>
                    </div>
                    @endif
                    <table class="table table-hover table-bordered" id="userTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th width="180px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($modules)
                            @foreach($modules as $module)
                            <tr>
                                <td>{{ $module->name }}</td>
                                <td>{{ $module->display_name }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm" href="{{ route('module.show',$module->id) }}">View Details</a>
                                    @if(in_array('module_update', Session::get('permissions')->toArray()))
                                    <a class="btn btn-primary btn-sm" href="{{ route('module.edit',$module->id) }}">Edit</a>
                                    @endif

                                    {{--<!-- <form action="{{ route('module.destroy',$module->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="confirm_delete();" class="btn btn-danger btn-sm">Delete</button>
                                    </form> -->--}}

                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>



<!-- Data table plugin-->
<script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/sweetalert.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/confirm_delete.js') }}"></script>
<script>
    $('#userTable').DataTable({
        'columnDefs': [{
            'targets': [1],
            'orderable': false
        }]
    });
</script>
@endsection