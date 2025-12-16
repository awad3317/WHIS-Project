<div class="services" id="services" >
    <div class="main-heading" >
        <div class="address">
            <h2 data-aos="fade-left">خدماتنا</h2>
            <img src="{{ asset('assets/images/our service icon.svg') }}" alt="services" data-aos="fade-right">
        </div>
    </div>

    <div class="container ">
        <div class="container-service">
            @if (!empty($services) && count($services) > 0)
                @foreach ($services as $service)
                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('assets/images/' . $service->icon_service) }}" alt="{{ $service->name }}">
                        <div class="text">
                            <h3>{{ $service->name }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-info-circle me-2"></i> لا توجد خدمات متاحة حالياً
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
