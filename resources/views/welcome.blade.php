<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dutch VR Community</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Figtree', sans-serif;
            min-height: 100vh;
            background: linear-gradient(120deg, #1a1a2e 0%, #16213e 100%), url('https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat;
            color: #fff;
        }
        .header {
            width: 100%;
            background: rgba(26,26,46,0.95);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.5rem 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10;
            box-shadow: 0 2px 12px #0004;
        }
        .nav {
            display: flex;
            gap: 2rem;
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 0.3rem 0.7rem;
            border-radius: 8px;
            transition: background 0.2s, color 0.2s;
        }
        .nav a:hover {
            background: #ff2d20;
            color: #fff;
        }
        .overlay {
            background: rgba(26,26,46,0.85);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 90px; /* ruimte voor header */
        }
        .logo {
            width: 120px;
            height: 120px;
            background: #fff2;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
        }
        .title {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            color: #ff2d20;
            text-shadow: 0 2px 16px #0008;
        }
        .subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 2rem;
            color: #fff;
            text-shadow: 0 2px 8px #0006;
        }
        .cta-btn {
            background: #ff2d20;
            color: #fff;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 24px #ff2d2040;
            transition: background 0.2s;
            text-decoration: none;
        }
        .cta-btn:hover {
            background: #e0261b;
        }
        .footer {
            position: absolute;
            bottom: 30px;
            width: 100%;
            text-align: center;
            color: #bbb;
            font-size: 1rem;
            letter-spacing: 1px;
        }
        @media (max-width: 600px) {
            .title { font-size: 2rem; }
            .subtitle { font-size: 1rem; }
            .logo { width: 80px; height: 80px; }
            .nav { gap: 1rem; }
            .nav a { font-size: 1rem; }
            .overlay { padding-top: 70px; }
        }
    </style>
</head>
<body>
    <div class="header">
        <nav class="nav">
            <a href="#over-ons">Over ons</a>
            <a href="#events">Events</a>
            <a href="#wie-zijn-we">Wie zijn we</a>
        </nav>
    </div>
    <div class="overlay">
        <div class="logo">
            <img src="{{ asset('images/vrlogo.gif') }}" alt="Dutch VR Community Logo" style="width:100px; height:100px; object-fit:contain;">
        </div>
        <div class="title">Welkom bij de Dutch VR Community</div>
        <div class="subtitle">
            Dé plek voor Nederlandse VR-liefhebbers!<br>
            Ontdek, deel en beleef samen de nieuwste Virtual Reality ervaringen.<br>
            Word lid en ontmoet andere enthousiastelingen!
        </div>
        <a href="{{ route('register') }}" class="cta-btn">Word lid</a>
        <!-- Dummy sections for anchor links -->
        <div id="over-ons" style="margin-top:120px"></div>
        <div id="events" style="margin-top:120px"></div>
        <div id="wie-zijn-we" style="margin-top:120px"></div>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Dutch VR Community | Alle rechten voorbehouden
        <br>
        <a href="https://discord.gg/jouw-discord-link" target="_blank" style="color:#7289da;text-decoration:none;font-weight:600; margin-right:16px;">
            <svg style="vertical-align:middle;" width="20" height="20" viewBox="0 0 245 240" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="122.5" cy="120" r="120" fill="#7289da"/>
                <path d="M104.4 104.6c-5.7 0-10.2 5-10.2 11.1 0 6.1 4.6 11.1 10.2 11.1 5.7 0 10.2-5 10.2-11.1.1-6.1-4.5-11.1-10.2-11.1zm36.2 0c-5.7 0-10.2 5-10.2 11.1 0 6.1 4.6 11.1 10.2 11.1 5.7 0 10.2-5 10.2-11.1 0-6.1-4.5-11.1-10.2-11.1z" fill="#fff"/>
                <path d="M189.5 20h-134C34.6 20 20 34.6 20 55.5v129c0 20.9 14.6 35.5 35.5 35.5h113.2l-5.3-18.5 12.8 11.9 12.1 11.2c10.1-1.4 19.7-5.2 27.2-12.7 10.1-10.1 15.5-23.5 15.5-38.1v-129C225 34.6 210.4 20 189.5 20zm-38.1 145.7s-3.6-4.3-6.6-8.1c13.1-3.7 18.1-12 18.1-12-4.1 2.7-8 4.6-11.5 5.9-5 2.1-9.8 3.5-14.5 4.3-9.6 1.8-18.4 1.3-25.9-.1-5.7-1.1-10.6-2.6-14.7-4.3-2.3-.9-4.8-2-7.3-3.4-.3-.2-.6-.3-.9-.5-.2-.1-.3-.2-.5-.3-2.2-1.2-3.4-2-3.4-2s4.8 8 17.5 11.9c-3 3.8-6.7 8.3-6.7 8.3-22.1-.7-30.5-15.2-30.5-15.2 0-32.2 14.4-58.3 14.4-58.3 14.4-10.8 28.1-10.5 28.1-10.5l1 1.2c-18 5.2-26.3 13.1-26.3 13.1s2.2-1.2 5.9-2.9c10.7-4.7 19.2-6 22.7-6.3.6-.1 1.1-.2 1.7-.2 6.1-.8 13-1 20.2-.2 9.5 1.1 19.7 3.9 30.1 9.6 0 0-7.9-7.5-24.9-12.7l1.4-1.6s13.7-.3 28.1 10.5c0 0 14.4 26.1 14.4 58.3 0 .1-8.4 14.5-30.5 15.2z" fill="#fff"/>
            </svg>
            &nbsp;Discord
        </a>
        <a href="https://www.tiktok.com/@jouw-tiktok" target="_blank" style="color:#fff;text-decoration:none;font-weight:600; margin-right:16px;">
            <svg style="vertical-align:middle;" width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="48" height="48" rx="12" fill="#000"/>
                <path d="M34.5 20.5c-2.5 0-4.5-2-4.5-4.5V10h-4v18.5c0 2-1.5 3.5-3.5 3.5s-3.5-1.5-3.5-3.5 1.5-3.5 3.5-3.5c.3 0 .7 0 1 .1v-4c-.3 0-.7-.1-1-.1-4.1 0-7.5 3.4-7.5 7.5s3.4 7.5 7.5 7.5 7.5-3.4 7.5-7.5V24c1.2 1 2.8 1.5 4.5 1.5v-5z" fill="#fff"/>
                <path d="M34.5 20.5c-2.5 0-4.5-2-4.5-4.5V10h-4v18.5c0 2-1.5 3.5-3.5 3.5s-3.5-1.5-3.5-3.5 1.5-3.5 3.5-3.5c.3 0 .7 0 1 .1v-4c-.3 0-.7-.1-1-.1-4.1 0-7.5 3.4-7.5 7.5s3.4 7.5 7.5 7.5 7.5-3.4 7.5-7.5V24c1.2 1 2.8 1.5 4.5 1.5v-5z" fill="#25F4EE"/>
                <path d="M34.5 20.5c-2.5 0-4.5-2-4.5-4.5V10h-4v18.5c0 2-1.5 3.5-3.5 3.5s-3.5-1.5-3.5-3.5 1.5-3.5 3.5-3.5c.3 0 .7 0 1 .1v-4c-.3 0-.7-.1-1-.1-4.1 0-7.5 3.4-7.5 7.5s3.4 7.5 7.5 7.5 7.5-3.4 7.5-7.5V24c1.2 1 2.8 1.5 4.5 1.5v-5z" fill="#FE2C55"/>
            </svg>
            &nbsp;TikTok
        </a>
        <a href="https://www.youtube.com/@jouw-youtube" target="_blank" style="color:#ff0000;text-decoration:none;font-weight:600;">
            <svg style="vertical-align:middle;" width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="48" height="48" rx="12" fill="#ff0000"/>
                <path d="M20 31V17l13 7-13 7z" fill="#fff"/>
            </svg>
            &nbsp;YouTube
        </a>
    </div>
</body>
</html>