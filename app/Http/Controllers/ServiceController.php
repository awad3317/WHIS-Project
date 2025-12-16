<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Clients;
use Illuminate\Http\Request;
use App\Services\ImageService;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('welcome', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        return view('pages.Services', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'icon_service' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480',

        ]);
        if ($request->hasFile('icon_service')) {
            $imageService = new ImageService();
            $data['icon_service'] = $imageService->saveImage($request->file('icon_service'), 'services');
        }
        Service::create($data);
        return redirect()->back()->with('success', 'تم إرسال الطلب بنجاح شكرا لاستخدامك خدمتنا!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}