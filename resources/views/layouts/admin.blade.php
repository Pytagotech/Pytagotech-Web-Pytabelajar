<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin Pytabelajar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('icon/pytabelajar.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8FAFC;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background: #CBD5E1;
            border-radius: 4px;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes popUp {
            0% {
                transform: scale(0.95);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate-slide-left {
            animation: slideInLeft 0.5s ease-out;
        }

        .animate-fade {
            animation: fadeIn 0.6s ease-out;
        }

        .animate-popup {
            animation: popUp 0.4s ease-out;
        }

        .transition-base {
            transition: all 0.25s ease-in-out;
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

<body class="flex min-h-screen text-slate-800">

    @include('partials.admin.sidebar')

    <div class="flex-1 flex flex-col animate-fade">

        <header class="animate-popup">
            @include('partials.admin.navbar')
        </header>

        <main class="flex-1 p-8 overflow-y-auto animate-popup">
            @yield('content')
        </main>

        <footer class="animate-fade">
            @include('partials.admin.footer')
        </footer>

    </div>

</body>

</html>
