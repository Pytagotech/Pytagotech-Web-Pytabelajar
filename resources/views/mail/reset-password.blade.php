<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

        /* Ikon Kunci Pas di Tengah */
        .icon-circle {
            background-color: #16a34a;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            margin: 0 auto 15px;
        }

        /* Karena email client sulit baca flexbox, kita pakai gaya table untuk center */
        .icon-container {
            margin: 0 auto 15px;
            width: 60px;
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
            <div class="icon-container">
                <div class="icon-circle">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: block; margin: 15px auto;">
                        <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3y-3.5z"></path>
                    </svg>
                </div>
            </div>
            <span class="brand-name">Pytabelajar</span>
        </div>

        <div class="container">
            <h1>Halo!</h1>
            
            <p>Anda menerima email ini karena kami menerima permintaan atur ulang kata sandi (reset password) untuk akun Anda.</p>

            <div class="button-wrapper">
                <a href="{{ $url }}" class="button">
                    Atur Ulang Password
                </a>
            </div>

            <p>Tautan reset password ini akan kedaluwarsa dalam 60 menit.</p>
            <p>Jika Anda tidak merasa meminta pengaturan ulang password, tidak ada tindakan lebih lanjut yang diperlukan.</p>
            
            <p>Salam,<br>Tim Pytabelajar</p>

            <div class="subcopy">
                <p>Jika Anda kesulitan mengklik tombol "Atur Ulang Password", salin dan tempel URL di bawah ini ke browser Anda:</p>
                <p class="break-all"><a href="{{ $url }}" style="color: #3869d4;">{{ $url }}</a></p>
            </div>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Pytabelajar. All rights reserved.</p>
        </div>
    </div>
</body>
</html>