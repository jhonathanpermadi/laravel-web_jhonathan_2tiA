<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Konfirmasi Pertanyaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f1f4f9;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .response-card {
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 90%;
            text-align: center;
        }

        .response-title {
            color: #3989f9;
            font-weight: bold;
        }

        .question-box {
            background: #f8f9fa;
            border-left: 4px solid #3989f9;
            padding: 18px;
            margin: 20px 0;
            overflow-wrap: anywhere;
        }
    </style>
</head>

<body>
    <div class="response-card">
        <h2 class="response-title">
            Terima Kasih, {{ $nama }}!
        </h2>

        <p class="text-secondary">
            Pertanyaan Anda telah berhasil dikirim.
        </p>

        <div class="question-box">
            <strong>Pertanyaan Anda:</strong>
            <p class="mb-0 mt-2">{{ $pertanyaan }}</p>
        </div>

        <p class="text-secondary">
            <em>
                Pertanyaan Anda akan segera kami tanggapi
                dan balas melalui email
                <strong>{{ $email }}</strong>.
            </em>
        </p>

        <p class="text-secondary">
            <em>
                Mohon cek kotak masuk atau folder spam Anda secara berkala.
            </em>
        </p>

        <a href="{{ url('/') }}" class="btn btn-primary mt-3">
            Kembali ke Beranda
        </a>
    </div>
</body>
</html>
