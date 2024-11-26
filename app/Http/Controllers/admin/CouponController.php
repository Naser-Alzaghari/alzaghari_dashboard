<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::where('deleted_at', null)->get();
        return view('admin.coupons.index', compact('coupons'));
    }

    public function create()
    {
        return view('admin.coupons.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'coupon_code' => 'required|string|unique:coupons,coupon_code',
        //     'discount_percentage' => 'required|integer|between:1,100',
        //     'expiration_date' => 'required|date|after:today',
        //     'usage_limit' => 'nullable|integer|min:0',
        //     'coupon_status' => 'required|in:active,inactive',
        // ]);

        Coupon::create($request->all());
        return redirect()->route('admin.coupons')->with('success', 'Coupon created successfully.');
    }

    public function show($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('coupons.show', compact('coupon'));
    }

    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('coupons.cerate', compact('coupon'));
    }

    public function update(Request $request, $id)
    {
        $coupon = Coupon::findOrFail($id);

        $request->validate([
            'coupon_code' => 'required|string|unique:coupons,coupon_code,' . $coupon->id,
            'discount_percentage' => 'required|integer|between:1,100',
            'expiration_date' => 'required|date|after:today',
            'usage_limit' => 'nullable|integer|min:0',
            'coupon_status' => 'required|in:active,inactive',
        ]);

        $coupon->update($request->all());
        return redirect()->route('admin.coupons')->with('success', 'Coupon updated successfully.');
    }

    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();

        return redirect()->route('admin.coupons')->with('success', 'Coupon deleted successfully.');
    }


    public function toggle(Request $request, Coupon $coupon){
        
        $coupon->coupon_status ? $coupon->coupon_status = 0 : $coupon->coupon_status = 1;
        
        $coupon->save();

        return redirect()->route('admin.coupons')->with('success', 'coupon updated successfully.');
    }
}
