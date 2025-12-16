<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('welcome', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Contact_us', [
            'orders' => Order::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'number' => 'required|numeric',
            // 'service_id' => 'required|exists:services,id',
            'message' => 'required|string',
            'email' => 'required|email|max:255',
        ], [
            'customer_name.required' => 'حقل الاسم مطلوب',
            'number.required' => 'حقل الهاتف مطلوب',
            // 'service_id.required' => 'يجب اختيار خدمة',
            'message.required' => 'يجب ادخال وصف المشروع',
            'email.required' => 'حقل البريد الإلكتروني مطلوب',
        ]);

        Order::query()->create($validated);

        return redirect()->back()->with('success','تم إرسال الطلب بنجاح شكرا لاستخدامك خدمتنا!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}