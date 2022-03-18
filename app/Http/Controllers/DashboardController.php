<?php

namespace App\Http\Controllers;

use App\Models\Attach;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $activeUsers = User::whereNotNull('email_verified_at')->get();
        $activeProducts = Product::where('status', 'active')->get();
        $activeAttachedProducts = Attach::with('product')->get();
        $activeUsersCount = $activeUsers->count();
        $activeProductsCount = $activeProducts->count();
        $count = 0;
        $price = 0;
        $perUser = [];
        
        foreach ($activeAttachedProducts as $activeAttachedProduct) {
            if($activeAttachedProduct->product->status == Product::STATUS_ACTIVE) {
                $count += $activeAttachedProduct->quantity;
                $price += $activeAttachedProduct->quantity * $activeAttachedProduct->price;
            }
        }
        
        foreach ($activeUsers as $activeUser) {
            $actives = Attach::where('user_id', $activeUser->id)->get();
            $sum = 0;
            foreach ($actives as $active) {
                $sum += $active->quantity * $active->price;
            }
            $perUser[] = [
                'name'  => $activeUser->name,
                'price' => $sum
            ];
        }
        
        return view('dashboard', [
            'activeUsers' => $activeUsersCount, 
            'activeProducts' => $activeProductsCount, 
            'activeAttachedProducts' => $count,
            'activeAttachedProductsPrice' => $price,
            'perUser' => $perUser]);
    }

}