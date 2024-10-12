@extends('layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">GSC Win/Lose</li>
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

                </div>
                <div class="card " style="border-radius: 20px;">
                    <div class="card-header">
                        <h3>GSC Win/Lose Lists </h3>
                    </div>
                    <form role="form" class="text-start" action="{{ route('admin.GscReport.index') }}" method="GET">
                        <div class="row ml-5">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label text-dark fw-bold" for="inputEmail1">From Date</label>
                                    <input type="date" class="form-control border border-1 border-secondary px-2"
                                        id="inputEmail1" name="start_date">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label text-dark fw-bold" for="inputEmail1">To Date</label>
                                    <input type="date" class="form-control border border-1 border-secondary px-2"
                                        id="inputEmail1" name="end_date">
                                </div>
                            </div>
                            <div class="col-log-3">
                                <button type="submit" class="btn btn-primary" style="margin-top: 32px;">Search</button>
                                <a href="{{ route('admin.GscReport.index') }}" class="btn btn-warning" style="margin-top: 32px;">Refresh</a>
                            </div>
                        </div>
                    </form>
                    <div class="card-body">

                        <table id="mytable" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Total Record</th>
                                    <th>Total Bet</th>
                                    <th>Total Valid Bet</th>
                                    <th>Total Progressive JP</th>
                                    <th>Total Payout</th>
                                    <th>Total Win/Loss</th>
                                    {{-- <th>Member Commission</th> --}}
                                    <th>Upline Commission</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $report)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.Reportproduct.details', $report->product_name) }}"
                                            style="color: blue;">
                                            {{ $report->product_name }}
                                        </a>
                                    </td>

                                    <td>{{ $report->total_record }}</td>
                                    <td>{{ $report->total_bet }}</td>
                                    <td>{{ $report->total_valid_bet }}</td>
                                    <td>{{ $report->total_prog_jp }}</td>
                                    <td>{{ $report->total_payout }}</td>
                                    {{-- <td>{{ $report->total_win_lose }}</td> --}}
                                    <td>
                                        @if ($report->total_win_lose < 0)
                                            <span style="color: red;">-{{ abs($report->total_win_lose) }}</span>
                                            @else
                                            <span style="color: green;">+{{ $report->total_win_lose }}</span>
                                            @endif
                                    </td>
                                    {{-- <td>{{ $report->member_comm }}</td> --}}
                                    <td>{{ $report->upline_comm }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
@endsection