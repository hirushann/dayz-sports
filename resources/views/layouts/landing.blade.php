<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dayz Sports — Powerful Sports Data APIs for Modern Apps</title>
        <meta name="description" content="Reliable live and historical sports data APIs across 12+ sports — football, basketball, F1, MMA, rugby, NBA, NFL, and more. Built for developers and platforms.">
        <meta property="og:title" content="Dayz Sports — Sports Data API Platform">
        <meta property="og:description" content="Live & historical sports data endpoints, built for developers, betting platforms, fantasy apps, and analytics dashboards.">
        <meta name="twitter:card" content="summary_large_image">

        <!-- Google Fonts: Space Grotesk + JetBrains Mono + Inter -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        @livewireStyles
    </head>
    <body class="antialiased min-h-screen">
        {{ $slot }}
        @livewireScripts
    </body>
</html>
