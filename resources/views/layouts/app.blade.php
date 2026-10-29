
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'EUROPA — A Vintage Travel Journal')</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --noir: #201A19;
            --burgundy: #3A2527;
            --maroon: #8C3038;
            --gold: #D5B98C;
            --paper: #F0E5D2;
            --taupe: #B8A99A;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: var(--noir);
            color: var(--paper);
            font-family: 'Poppins', sans-serif;
            line-height: 1.7;
        }

        nav {
            background: var(--burgundy);
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            border-bottom: 1px solid var(--gold);
        }

        .brand {
            color: var(--gold);
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 700;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: var(--paper);
            text-decoration: none;
            font-size: 14px;
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        .container {
            width: 84%;
            max-width: 1200px;
            margin: 45px auto;
        }

        .eyebrow {
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 12px;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            line-height: 1.25;
        }

        h1 {
            font-size: clamp(40px, 6vw, 72px);
            margin: 15px 0 20px;
        }

        h2 {
            font-size: 32px;
            margin-bottom: 18px;
        }

        p {
            color: var(--taupe);
            margin-bottom: 16px;
        }

        .btn {
            display: inline-block;
            background: var(--maroon);
            color: var(--paper);
            text-decoration: none;
            padding: 12px 24px;
            margin-top: 12px;
            border: 1px solid var(--gold);
        }

        .btn:hover {
            background: var(--gold);
            color: var(--noir);
        }

        .hero {
            min-height: 480px;
            display: flex;
            align-items: center;
            padding: 50px;
            background:
                linear-gradient(90deg, rgba(32,26,25,.95), rgba(32,26,25,.3)),
                url('https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&w=1800&q=85')
                center/cover;
            border: 1px solid var(--gold);
        }

        .hero-content {
            max-width: 650px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 24px;
        }

        .card {
            background: var(--burgundy);
            border: 1px solid #55403D;
            padding: 18px;
        }

        .card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            margin-bottom: 16px;
        }

        .card h3 {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .tag {
            color: var(--gold);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        footer {
            margin-top: 70px;
            padding: 28px 8%;
            background: var(--burgundy);
            color: var(--taupe);
            text-align: center;
            border-top: 1px solid var(--gold);
            font-size: 13px;
        }

        @media (max-width: 600px) {
            nav {
                padding: 18px 5%;
            }

            .container {
                width: 90%;
                margin: 30px auto;
            }

            .hero {
                padding: 25px;
                min-height: 400px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <a class="brand" href="{{ route('home') }}">EUROPA.</a>

        <div class="nav-links">
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('destinasi.index') }}">Destinasi</a>
            <a href="{{ route('kategori') }}">Kategori</a>
            <a href="{{ route('tentang') }}">Tentang</a>
        </div>
    </nav>

    @yield('content')

    <footer>
        EUROPA — A Vintage Travel Journal
        <br>
        A journey through Europe's timeless beauty.
    </footer>
</body>
</html>
