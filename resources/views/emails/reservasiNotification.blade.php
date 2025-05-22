<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Konfirmasi Reservasi - Medvet Animal Clinic</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f6f9fc;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            margin: 40px auto;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #2a4365;
            margin: 0;
            font-size: 24px;
        }
        .content p {
            font-size: 16px;
            color: #4a5568;
            line-height: 1.6;
        }
        .details {
            margin: 20px 0;
            padding: 20px;
            background-color: #f0f4f8;
            border-left: 4px solid #3182ce;
            border-radius: 5px;
        }
        .details li {
            margin-bottom: 10px;
            font-size: 15px;
            color: #2d3748;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #a0aec0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Konfirmasi Reservasi Anda</h1>
        </div>
        <div class="content">
            <p>Halo <strong>{{ $reservasi->user->name }}</strong>,</p>
            <p>Ini adalah pengingat untuk jadwal perawatan hewan peliharaan Anda yang telah terdaftar dengan detail berikut:</p>

            <ul class="details">
                <li><strong>Nama Hewan:</strong> {{ $reservasi->hewan->nama }}</li>
                <li><strong>Jenis Kelamin:</strong> {{ $reservasi->hewan->jenis_kelamin }}</li>
                <li><strong>Spesies:</strong> {{ $reservasi->hewan->spesies }}</li>
                <li><strong>Perawatan:</strong> {{ $reservasi->perawatan->nama }}</li>
                <li><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($reservasi->tanggal)->format('d-m-Y') }}</li>
                <li><strong>Waktu:</strong> {{ $reservasi->waktu }}</li>
            </ul>

            <p>Mohon datang tepat waktu sesuai jadwal untuk memastikan layanan berjalan lancar.</p>

            <p>Terima kasih telah mempercayakan layanan kami.<br>Salam hangat,<br>Medved Animal Clinic</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Medvet Animal Clinic. All rights reserved.
        </div>
    </div>
</body>
</html>
