<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6NQE76SZ2N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6NQE76SZ2N');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>بايتات للحلول التقنية | تطوير تطبيقات – تصميم مواقع – خدمات تقنية</title>

    <!-- normalize -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- template -->
    <link rel="stylesheet" href="{{ asset('assets/css/devspa.css') }}">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&family=Cairo:wght@200..1000&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- SEO: Description -->
    <meta name="description"
        content="بايتات للحلول التقنية تقدم خدمات تطوير التطبيقات، تصميم وبرمجة المواقع، إنشاء الهويات البصرية، وتصميم واجهات وتجارب المستخدم. حلول تقنية مبتكرة لتحويل أفكارك إلى منتجات رقمية احترافية.">

    <!-- SEO: Keywords -->
    <meta name="keywords"
        content="بايتات, تطوير تطبيقات, تصميم مواقع, برمجة مواقع, UI UX, تصميم جرافيك, هوية بصرية, حلول تقنية, شركة تقنية, خدمات رقمية, برمجة تطبيقات, تصاميم احترافية, خدمات تقنية, تكنولوجيا">

    <meta name="author" content="Baytat Tech Solutions">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="بايتات للحلول التقنية | تطبيقات – مواقع – تصاميم – حلول رقمية">
    <meta property="og:description"
        content="نحوّل أفكارك إلى مشاريع رقمية: تطوير تطبيقات، برمجة مواقع، تصميمات احترافية، وهويات بصرية. بايتات — التقنية كما يجب أن تكون.">
    <meta property="og:image" content="{{ asset('favicons/favicon-96x96.png') }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="بايتات للحلول التقنية | حلول رقمية متكاملة">
    <meta name="twitter:description"
        content="تطبيقات، مواقع، تصاميم وهويات بصرية — حلول مبتكرة تلائم الشركات والمشاريع الناشئة.">

    <!-- Icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicons/favicon.ico') }}">

    <!-- SVG Favicon (مدعوم في المتصفحات الحديثة) -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicons/favicon.svg') }}">

    <!-- PNG Favicon (96x96) -->
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">

    <!-- Apple Touch Icon (iPhone / iPad) -->
    <link rel="apple-touch-icon" href="{{ asset('favicons/apple-touch-icon.png') }}">

    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">

    <!-- Android / Web App Icons (192px + 512px) -->
    <link rel="icon" sizes="192x192" href="{{ asset('favicons/web-app-manifest-192x192.png') }}">
    <link rel="icon" sizes="512x512" href="{{ asset('favicons/web-app-manifest-512x512.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/favicon-96x96.png') }}">
    <meta name="msapplication-TileColor" content="#00C4FF">
<meta name="google-site-verification" content="HecNCaLVj3an-KrrJEOeCaHzqbGihvknZc6zPve6n24" />
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>


<style>
    body {
        background-image: url('{{ asset('assets/images/test.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed; /* اختياري */
    }
</style>
<body>

    <!-- start header  -->
    @include('pages.Navbar')

    <!-- end header  -->
    <!-- start landing -->
    @if (session('success') || session('error'))
        <div class="toast-message {{ session('success') ? 'success' : 'error' }}">
            <i class="fas {{ session('success') ? 'fa-check-circle' : 'fa-exclamation-circle' }}"></i>
            <span>{{ session('success') ?? session('error') }}</span>
        </div>
    @endif
    <!-- start home -->
    @include('pages.Home')
    <!-- end home -->
    <!-- end landing -->
    <!-- start about -->
    @include('pages.About_us')
    <!-- end about -->
    <!-- start our vlaues  -->
    @include('pages.Values')
    <!-- end our vlaues  -->
    <!-- start services  -->
    @include('pages.Services', ['services' => $services])
    <!-- end services  -->

    <!-- start our projects  -->
    @include('pages.Our_Projects', ['projects' => $projects])
    <!-- end our projects  -->

    <!-- start contact  -->
    @include('pages.Contact_us')
    <!-- end contact  -->
    <!-- start footer  -->
    @include('pages.Footer')
    <!-- end footer  -->
</body>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 2000,
        once: true
    });
</script>

</html>
