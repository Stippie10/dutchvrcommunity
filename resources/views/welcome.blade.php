<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij Dutch VR Community</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .video-bg {
            position: fixed;
            top: 0; left: 0;
            width: 100vw; height: 100vh;
            object-fit: cover;
            z-index: -2;
        }
        .overlay {
            position: fixed;
            top: 0; left: 0;
            width: 100vw; height: 100vh;
            background: rgba(30, 41, 59, 0.7); /* blauw-transparant */
            z-index: -1;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">
    <!-- Video achtergrond -->
    <video class="video-bg" autoplay loop muted playsinline>
        <source src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4">
        Je browser ondersteunt geen video achtergrond.
    </video>
    <div class="overlay"></div>

    <!-- Content -->
    <div class="bg-white bg-opacity-90 rounded-xl shadow-2xl p-10 max-w-xl w-full text-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="Dutch VR Community Logo" class="mx-auto mb-6 w-24 h-24 rounded-full shadow-lg border-4 border-blue-600">
        <h1 class="text-4xl font-extrabold text-blue-800 mb-3">Welkom bij Dutch VR Community</h1>
        <p class="text-lg text-gray-700 mb-6">
            Sluit je aan bij dé Nederlandse community voor Virtual Reality! Deel ervaringen, ontdek het laatste nieuws, en ontmoet andere VR-liefhebbers.
        </p>
        <a href="{{ route('register') }}" class="inline-block bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold text-lg shadow hover:bg-blue-800 transition">
            Word gratis lid
        </a>
        <div class="mt-6 text-gray-600">
            <span>Al lid?</span>
            <a href="{{ route('login') }}" class="text-blue-700 font-semibold underline hover:text-blue-900">Log in</a>
        </div>
        <hr class="my-8">
        <div class="text-sm text-gray-500">
            <strong>Waarom Dutch VR Community?</strong>
            <ul class="list-disc list-inside mt-2 text-left mx-auto max-w-xs">
                <li>Actieve forums & evenementen</li>
                <li>Laatste VR-nieuws en reviews</li>
                <li>Support van andere leden</li>
            </ul>
        </div>
    </div>
</body>
</html>