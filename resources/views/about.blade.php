<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Over ons | Dutch VR Community</title>
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
            padding: 90px 2rem 2rem; /* ruimte voor header en wat padding */
            box-sizing: border-box;
        }
        .content-box {
            max-width: 800px;
            text-align: center;
        }
        .title {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 2rem;
            color: #ff2d20;
            text-shadow: 0 2px 16px #0008;
        }
        .content-box p {
            font-size: 1.2rem;
            line-height: 1.7;
            margin-bottom: 1.5em;
            color: #eee;
        }
        .highlight {
            color: #ff2d20;
            font-weight: bold;
        }
        .footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            color: #bbb;
            font-size: 1rem;
            letter-spacing: 1px;
        }
        @media (max-width: 600px) {
            .title { font-size: 2rem; }
            .content-box p { font-size: 1rem; }
            .nav { gap: 1rem; }
            .nav a { font-size: 1rem; }
            .overlay { padding-top: 70px; }
        }
    </style>
</head>
<body>
    <div class="header">
        <nav class="nav">
            <a href="/">Home</a>
            <a href="/over-ons">Over ons</a>
            <a href="/team">Team</a>
            <a href="/#events">Events</a>
            <a href="/#wie-zijn-we">Wie zijn we</a>
        </nav>
    </div>
    <div class="overlay">
        <div class="content-box">
            <div class="title">Over ons</div>
            <p>
                Welkom bij <span class="highlight">Dutch VR Community</span>!<br>
                Wij zijn dé plek voor iedereen die gepassioneerd is over Virtual Reality in Nederland. Onze community brengt VR-liefhebbers, gamers, ontwikkelaars en nieuwsgierigen samen om ervaringen te delen, kennis uit te wisselen en samen de toekomst van VR te ontdekken.
            </p>
            <p>
                <span class="highlight">Onze missie</span> is om een open, gezellige en inspirerende omgeving te bieden waar iedereen zich welkom voelt. Of je nu net begint met VR of al jaren actief bent, bij ons vind je altijd gelijkgestemden en nieuwe uitdagingen.
            </p>
            <p>
                Sluit je aan bij onze evenementen, doe mee aan discussies, of ontdek de nieuwste VR-technologieën samen met ons. Samen bouwen we aan de grootste en leukste VR-community van Nederland!
            </p>
        </div>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Dutch VR Community | Alle rechten voorbehouden
    </div>
</body>
</html>
