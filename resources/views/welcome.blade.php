
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
        .overlay {
            background: rgba(26,26,46,0.85);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="logo">
            <!-- Je kunt hier je eigen SVG of logo plaatsen -->
            <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" width="70" height="70">
                <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253Z" fill="#FF2D20"/>
            </svg>
        </div>
        <div class="title">Welkom bij de Dutch VR Community</div>
        <div class="subtitle">
            Dé plek voor Nederlandse VR-liefhebbers!<br>
            Ontdek, deel en beleef samen de nieuwste Virtual Reality ervaringen.<br>
            Word lid en ontmoet andere enthousiastelingen!
        </div>
        <a href="{{ route('register') }}" class="cta-btn">Word lid</a>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Dutch VR Community | Alle rechten voorbehouden
    </div>
</body>
</html>