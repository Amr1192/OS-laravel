<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OrderController extends Controller
{
    use AuthorizesRequests;

    public function show(Order $order)
    {
        $this->authorize('view', $order);
        return view('order',compact('order'));
    }
}
