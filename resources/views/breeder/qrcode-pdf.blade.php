<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>QR Code - {{ $animal->qr_code }}</title>
    <style>
        @page { margin: 20px; }
        body {
            font-family: 'DejaVu Sans', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border: 3px solid #1B5E20;
            border-radius: 15px;
            padding: 30px;
            background: #ffffff;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #2E7D32;
            padding-bottom: 20px;
        }
        .logo {
            font-size: 32px;
            font-weight: bold;
            color: #1B5E20;
            margin-bottom: 5px;
        }
        .tagline {
            font-size: 14px;
            color: #666;
            font-style: italic;
        }
        .qr-section {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background: #f5f5f5;
            border-radius: 10px;
        }
        .qr-code {
            width: 300px;
            height: 300px;
            margin: 0 auto;
            display: block;
        }
        .qr-label {
            font-size: 18px;
            font-weight: bold;
            color: #1B5E20;
            margin-top: 15px;
            letter-spacing: 2px;
        }
        .animal-info {
            margin-top: 30px;
            padding: 20px;
            background: #E8F5E9;
            border-radius: 10px;
        }
        .info-title {
            font-size: 20px;
            font-weight: bold;
            color: #1B5E20;
            margin-bottom: 15px;
            text-align: center;
        }
        .info-row {
            display: table;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #C8E6C9;
        }
        .info-label {
            display: table-cell;
            width: 40%;
            font-weight: bold;
            color: #2E7D32;
        }
        .info-value {
            display: table-cell;
            width: 60%;
            color: #333;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #2E7D32;
            text-align: center;
        }
        .company-name {
            font-size: 24px;
            font-weight: bold;
            color: #F97316;
            margin-bottom: 5px;
        }
        .scan-instruction {
            font-size: 12px;
            color: #666;
            margin-top: 10px;
        }
        .verification-url {
            font-size: 10px;
            color: #999;
            margin-top: 5px;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">🐄 SahelTrace</div>
            <div class="tagline">Traçabilité Moderne du Bétail</div>
        </div>

        <div class="qr-section">
            <img src="data:image/png;base64,{{ $qrCode }}" class="qr-code" alt="QR Code">
            <div class="qr-label">{{ $animal->qr_code }}</div>
        </div>

        <div class="animal-info">
            <div class="info-title">📋 Informations de l'Animal</div>
            
            @if($animal->name)
            <div class="info-row">
                <div class="info-label">Nom:</div>
                <div class="info-value">{{ $animal->name }}</div>
            </div>
            @endif

            @if($animal->species)
            <div class="info-row">
                <div class="info-label">Espèce:</div>
                <div class="info-value">{{ $animal->species }}</div>
            </div>
            @endif

            @if($animal->breed)
            <div class="info-row">
                <div class="info-label">Race:</div>
                <div class="info-value">{{ $animal->breed }}</div>
            </div>
            @endif

            @if($animal->age)
            <div class="info-row">
                <div class="info-label">Âge:</div>
                <div class="info-value">{{ $animal->age }} ans</div>
            </div>
            @endif

            @if($animal->weight)
            <div class="info-row">
                <div class="info-label">Poids:</div>
                <div class="info-value">{{ $animal->weight }} kg</div>
            </div>
            @endif

            @if($animal->color)
            <div class="info-row">
                <div class="info-label">Couleur:</div>
                <div class="info-value">{{ $animal->color }}</div>
            </div>
            @endif

            <div class="info-row">
                <div class="info-label">Date d'enregistrement:</div>
                <div class="info-value">{{ $animal->created_at->format('d/m/Y') }}</div>
            </div>
        </div>

        <div class="footer">
            <div class="company-name">SahelTrace</div>
            <div class="scan-instruction">
                📱 Scannez ce code QR pour vérifier l'authenticité et consulter l'historique complet
            </div>
            <div class="verification-url">
                URL: {{ route('public.verify', $animal->qr_code) }}
            </div>
        </div>
    </div>
</body>
</html>
