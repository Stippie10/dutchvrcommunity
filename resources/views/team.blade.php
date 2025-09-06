<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ons Team | Dutch VR Community</title>
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
            padding: 90px 2rem 2rem;
            box-sizing: border-box;
        }
        .content-box {
            max-width: 900px;
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
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .team-member {
            background: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 24px #0002;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 32px #0004;
        }
        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 3px solid #ff2d20;
        }
        .team-member h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 0.5rem;
        }
        .team-member p {
            font-size: 1rem;
            color: #ccc;
            line-height: 1.5;
        }
        .footer {
            position: fixed;
            bottom: 30px;
            width: 100%;
            text-align: center;
            color: #bbb;
            font-size: 1rem;
            letter-spacing: 1px;
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
        </nav>
    </div>
    <div class="overlay">
        <div class="content-box">
            <div class="title">Ons Team</div>
            <div class="team-grid">
                <!-- Voorbeeld Teamlid 1 -->
                <div class="team-member">
                    <img src="https://i.pravatar.cc/150?img=1" alt="Teamlid 1">
                    <h3>Cheesy dragon</h3>
                    <p>Oprichter en VR-enthousiasteling. Altijd op zoek naar de nieuwste hardware en ervaringen of vr ideeën.</p>
                </div>
                <!-- Voorbeeld Teamlid 2 -->
                <div class="team-member">
                    <img src="https://i.pravatar.cc/150?img=2" alt="Teamlid 2">
                    <h3>happyschaap</h3>
                    <p>onze beste happyschaap is onze event manager zonder hem hebben we geen leuke event's in onze community.</p>
                </div>
                <!-- Voorbeeld Teamlid 3 -->
                <div class="team-member">
                    <img src="https://i.pravatar.cc/150?img=3" alt="Teamlid 3">
                    <h3>stippie</h3>
                    <p>onze beste stippie is onze web developer. Hij zorgt ervoor dat onze website altijd up-to-date en gebruiksvriendelijk is.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Dutch VR Community | Alle rechten voorbehouden
    </div>
</body>
</html>
