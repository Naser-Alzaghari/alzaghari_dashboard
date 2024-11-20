<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch data for the dashboard
        $subscribers = User::count(); // Total visitors
        $orders = Order::count(); // Total orders
        $totalSales = Order::sum('total_amount');
        

        $sales = Order::selectRaw('MONTH(order_date) as month, SUM(total_amount) as sales')
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('sales', 'month')
        ->toArray();

        $salesData = [];
        for ($i = 1; $i <= 12; $i++) {
            $salesData[] = $sales[$i] ?? 0; // Fill missing months with 0
        }


        // Pass data to the dashboard view
        return view('admin.dashboard', compact('totalSales','subscribers', 'orders', 'salesData'));
    }
}
