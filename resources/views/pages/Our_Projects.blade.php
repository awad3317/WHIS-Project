
<div class="projects" id="projects">
    <div class="main-heading">
        <div class="address">
            <h2 data-aos="fade-left">أعمالنا</h2>
            <img src="{{ asset('assets/images/our service icon.svg') }}" alt="projects" data-aos="fade-right">
        </div>
    </div>

    <div class="container">
        <div class="container-project">
            @if (!empty($projects) && count($projects) > 0)
                @foreach ($projects as $project)
                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}">
                        <div class="text">
                            <h3>{{ $project->title }}</h3>
                            <p>{{ $project->description }}</p>
                            <p><strong>النوع:</strong> {{ $project->type }}</p>
                            {{-- <p><strong>السعر:</strong> {{ number_format($project->price, 2) }} ر.س</p> --}}
                            <p><strong>الحالة:</strong>
                                @if ($project->status === 'completed')
                                    مكتمل
                                @elseif($project->status === 'in_progress')
                                    قيد التنفيذ
                                @else
                                    غير محدد
                                @endif
                            </p>
                            @if ($project->link)
                                <a href="{{ $project->link }}" target="_blank" class="btn btn-primary">عرض العمل</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-info-circle me-2"></i> لا توجد أعمال متاحة حالياً
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
