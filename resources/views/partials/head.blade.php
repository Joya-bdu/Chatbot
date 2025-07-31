<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance