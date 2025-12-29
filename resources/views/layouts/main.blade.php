<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title', 'Pytabelajar — Belajar Web Development')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('icon/pytabelajar.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }











         avarara    to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulseSubtle {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.02);
                opacity: 0.95;
            }
        }

        .animate-fade-down {
            animation: fadeInDown 0.6s ease-out;
        }

        .animate-fade-up {
            animation: fadeInUp 0.7s ease-out;
        }

        .animate-pulse-subtle {
            animation: pulseSubtle 3s infinite ease-in-out;
        }

        html,
        body {
            overflow: auto;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>

</head>

<body class="bg-white text-slate-800">

    <div class="animate-fade-down">
        @include('partials.navbar')
    </div>

    <main class="pt-20 animate-fade-up">
        @yield('content')
    </main>

    <footer class="animate-fade-up">
        @include('partials.footer')
    </footer>


    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
