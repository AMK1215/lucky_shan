@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">

    <!-- DataTables CSS -->
    {{-- <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet"> --}}
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">GSC GameList</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end mb-3">
                        {{-- <a href="{{ route('admin.player.create') }}" class="btn btn-success " style="width: 100px;"><i
                                class="fas fa-plus text-white  mr-2"></i>Back</a> --}}
                    </div>
                    <div class="card " style="border-radius: 20px;">
                        <div class="card-header">
                            <h5 class="mb-0">Game List Dashboards
                                <span>
                                    <p>
                                        All Total Running Games on Site: {{ count($games) }}
                                    </p>
                                </span>
                            </h5>
                        </div>
                        <div class="card-body">
                            @can('admin_access')
                                <table id="mytable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="bg-success text-white">Game Type</th>
                                            <th class="bg-danger text-white">Product</th>
                                            <th class="bg-info text-white">Game Name</th>
                                            <th class="bg-warning text-white">Image</th>
                                            <th class="bg-success text-white">Status</th>
                                            <th class="bg-info text-white">Hot Status</th>
                                            <th class="bg-warning text-white">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            @endcan
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <!-- jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script src="{{ asset('admin_app/assets/js/jquery.min.js') }}"></script> --}}
    <!-- DataTables JS -->
    {{-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script> --}}
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#mytable')) {
                $('#mytable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin.gameLists.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'game_type',
                            name: 'gameType.name'
                        },
                        {
                            data: 'product',
                            name: 'product.name'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'image_url',
                            name: 'image_url',
                            render: function(data, type, full, meta) {
                                return '<img src="' + data + '" width="100px">';
                            }
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'hot_status',
                            name: 'hot_status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ],
                    language: {
                        paginate: {
                            next: '<i class="fas fa-angle-right"></i>', // or '→'
                            previous: '<i class="fas fa-angle-left"></i>' // or '←'
                        }
                    },
                    pageLength: 7
                });
            }
        });
    </script>

    {{-- <script>
        $(document).ready(function() {
            $('#mytable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.gameLists.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'game_type',
                        name: 'gameType.name'
                    },
                    {
                        data: 'product',
                        name: 'product.name'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'image_url',
                        name: 'image_url',
                        render: function(data, type, full, meta) {
                            return '<img src="' + data + '" width="100px">';
                        }
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'hot_status',
                        name: 'hot_status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                language: {
                    paginate: {
                        next: '<i class="fas fa-angle-right"></i>', // or '→'
                        previous: '<i class="fas fa-angle-left"></i>' // or '←'
                    }
                },
                pageLength: 7, // Adjust this to your preference
            });
        });
    </script> --}}
@endsection
