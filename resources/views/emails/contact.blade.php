<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; background: #faf6f3; margin: 0; padding: 32px; }
        .card { background: white; border-radius: 16px; padding: 32px; max-width: 520px; margin: auto; }
        .label { font-size: 11px; text-transform: uppercase; letter-spacing: 0.15em; color: #999; margin-bottom: 4px; }
        .value { font-size: 15px; color: #1a1a1a; margin-bottom: 20px; }
        .message-box { background: #faf6f3; border-radius: 10px; padding: 16px; color: #1a1a1a; font-size: 15px; line-height: 1.6; }
    </style>
</head>
<body>
<div class="card">
    <p class="label">Nom</p>
    <p class="value">{{ $nom }}</p>

    <p class="label">Email</p>
    <p class="value">{{ $email }}</p>

    <p class="label">Sujet</p>
    <p class="value">{{ $sujet }}</p>

    <p class="label">Message</p>
    <div class="message-box">{{ $corps }}</div>
</div>
</body>
</html>
