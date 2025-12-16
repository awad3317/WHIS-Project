<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Clients;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Services\ImageService;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $projects = Project::with('service')->get();
        return view('pages.Our_Projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.Our_Projects', [
            'projects' => Project::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480',
            'service_id' => 'required|exists:services,id',
            'start_date' => 'required|date',
            'delivery_date' => 'required|date|after_or_equal:start_date',
            'price' => 'required|numeric|min:0',
            'status' => 'required|string|max:100',
        ], [
            'service_id.required' => 'يجب اختيار خدمة',
            'start_date.required' => 'يجب اختيار تاريخ بداية المشروع',
            'delivery_date.required' => 'يجب اختيار تاريخ نهاية المشروع',
            'price.required' => 'يجب إدخال سعر المشروع',
            'status.required' => 'يجب اختيار حالة المشروع',
            'title.required' => 'يجب إدخال عنوان المشروع',
            'type.required' => 'يجب اختيار نوع المشروع',
            'description.required' => 'يجب إدخال وصف المشروع',
            'image.required' => 'يجب إدخال صورة للمشروع',
        ]);
        if ($request->hasFile('image')) {
            $imageService = new ImageService();
            $data['image'] = $imageService->saveImage($request->file('image'), 'projects');
        }


        // if ($request->hasFile('pdf_file')) {
        //     $path = $request->file('pdf_file')->store('projects-pdfs', 'public');
        //     $data['link'] = 'storage/' . $path;
        // }

        Project::create($data);
        return redirect()->route('Our_Projects.index')->with('success', 'تم إضافة المشروع بنجاح');
    }


    public function showPortfolio()
    {
        // جلب المشاريع مع العميل المرتبط
        $projects = Project::with('service')->get();



        // جلب الخدمات
        $services = Service::all();


        return view('welcome', compact('projects', 'services'));
    }
}