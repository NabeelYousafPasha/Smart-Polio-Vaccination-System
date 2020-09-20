@extends('dashboard.layout.app')

@section('stylesheets')
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Children</h2>
            @includeIf('dashboard.globals.breadcrumb.breadcrumbs')
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List of All Children</h5>
                        <div class="ibox-tools">
                                <a
                                    title="add"
                                    class="btn btn-primary btn-xs"
                                    href="{{route('child.create')}}"
                                >
                                    <i class="fa-fw fa fa-plus"></i>
                                </a>
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Name</th>
                                        <th>DOB</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($children ?? [] as $key => $child)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $child->name }}</td>
                                            <td>{{ $child->DOB }}</td>
                                            <td>
                                                {{ $child->created_at->format('d-M-Y') }}
                                            </td>
                            
                                            <td>
                                                <div class="btn-group btn-group-xs">
                                                    <a
                                                        title="view"
                                                        class="btn btn-info btn-xs"
                                                        href="{{ route('child.view', [$child]) }}"
                                                    >
                                                        <i class="fa fa-address-card-o fa-fw"></i>
                                                    </a>
                            
                                                        <a
                                                            title="Edit"
                                                            class="btn btn-primary btn-xs"
                                                            href="{{ route('child.edit', $child) }}"
                                                        >
                                                            <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
                                                        </a>
                                                        <form
                                                            class="child__delete"
                                                            method="POST"
                                                            action="{{ route('child.destroy', $child) }}"
                                                            style="display: inline-block;"
                                                        >
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                title="Delete"
                                                                type ="submit"
                                                                class="btn btn-danger btn-xs"
                                                            >
                                                                <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
                                                            </button>
                                                        </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        {{-- ***************** datatable *************** --}}
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv', title: 'Data'},
                    {extend: 'excel', title: 'Data'},
                    {extend: 'pdf', title: 'Data'},
                    {
                        extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');
                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

        {{-- ***************** action *************** --}}

        // $('.child__delete').on('click', function(e){
        //     e.preventDefault();
        //     var $form = $(this);
        //     $('#modal__global_delete').modal({ backdrop: 'static', keyboard: false })
        //         .on('click', '#delete__btn', function(){
        //             $form.submit();
        //         });
        // });

        // $('.user__switch_to_admin').on('click', function(e){
        //     e.preventDefault();
        //     var $href = $(this);
        //     $('#modal__switch_role').modal({ backdrop: 'static', keyboard: false })
        //         .on('click', '#btn__switch_role', function(){
        //             window.location = $href.attr('href');
        //         });
        // });
    </script>
@endsection
