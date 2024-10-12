<?php

namespace App\Http\Controllers\Shan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin\ReportTransaction;

class ShanReportController extends Controller
{
    public function index()
    {
        $reportTransactions = ReportTransaction::select('report_transactions.user_id', 'users.name', DB::raw('COUNT(report_transactions.id) as transaction_count'), DB::raw('SUM(report_transactions.transaction_amount) as total_transaction_amount'))
            ->join('users', 'report_transactions.user_id', '=', 'users.id')  // Join with the users table
            ->groupBy('report_transactions.user_id', 'users.name')  // Group by user_id and name
            ->orderByDesc('report_transactions.created_at')  // Order by created_at in descending order
            ->get();

        return view('admin.shan.reports.index', compact('reportTransactions'));
    }

    public function show($user_id)
    {
        // Query to get all report transactions for a specific user
        $userTransactions = ReportTransaction::where('user_id', $user_id)
            ->orderByDesc('created_at')
            ->get();

        // Pass the transactions and the user_id to the view
        return view('admin.shan.reports.show', compact('userTransactions', 'user_id'));
    }
}
