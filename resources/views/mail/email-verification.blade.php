<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="{{ asset('icon/pytabelajar.png') }}">
    <style>
        body {
            background-color: #f8fafc;
            color: #718096;
            margin: 0;
            padding: 0;
            width: 100% !important;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        .wrapper {
            background-color: #edf2f7;
            padding: 45px 0;
            width: 100%;
        }

        .container {
            background-color: #ffffff;
            border: 1px solid #e8e5ef;
            border-radius: 8px;
            max-width: 570px;
            margin: 0 auto;
            padding: 45px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        /* Perbaikan Posisi Ikon agar Pas di Tengah */
        .icon-circle {
            background-color: #16a34a;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex; /* Menggunakan flexbox */
            align-items: center; /* Vertikal center */
            justify-content: center; /* Horisontal center */
            margin: 0 auto 15px; /* Margin auto untuk center */
        }

        .brand-name {
            display: block;
            color: #3d4852;
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
        }

        h1 {
            color: #3d4852;
            font-size: 19px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            color: #718096;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .button-wrapper {
            text-align: center;
            margin: 35px 0;
        }

        .button {
            background-color: #16a34a;
            border-radius: 6px;
            color: #ffffff !important;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 30px;
            text-decoration: none;
        }

        /* Bagian URL Bawah (Plain URL) */
        .subcopy {
            border-top: 1px solid #e8e5ef;
            margin-top: 25px;
            padding-top: 25px;
        }

        .subcopy p {
            font-size: 12px;
        }

        .break-all {
            word-break: break-all;
            color: #3869d4;
        }

        .footer {
            text-align: center;
            padding: 32px;
        }

        .footer p {
            color: #b0adc5;
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="icon-circle">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
            </div>
            <span class="brand-name">Pytabelajar</span>
        </div>

        <div class="container">
            <h1>Halo, {{ $name ?? 'Pelajar' }}!</h1>

            <p>
                @if(isset($introLines) && is_array($introLines))
                    {{ implode(' ', $introLines) }}
                @else
                    {{ $introLines ?? 'Terima kasih telah bergabung di Pytabelajar. Silakan klik tombol di bawah ini untuk memverifikasi alamat email Anda.' }}
                @endif
            </p>

            <div class="button-wrapper">
                <a href="{{ $url }}" class="button">
                    Verifikasi Email
                </a>
            </div>

            <p>Jika Anda tidak merasa melakukan pendaftaran ini, silakan abaikan email ini.</p>

            <p>Salam,<br>Tim Pytabelajar</p>

            <div class="subcopy">
                <p>Jika Anda kesulitan mengklik tombol "Verifikasi Email", salin dan tempel URL di bawah ini ke browser Anda:</p>
                <p class="break-all"><a href="{{ $url }}">{{ $url }}</a></p>
            </div>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Pytabelajar. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
