<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke Portal SEPAK</title>
    <style>
        * { 
        box-sizing: border-box; 
         margin: 0; 
        padding: 0; 
        font-family: 
        system-ui, 
        sans-serif; }

        body { 
        background: #0f172a; 
        display: flex; 
        min-height: 100vh; 
        align-items: center; 
        justify-content: center; 
        padding: 20px; }

        .box { 
        background: white; 
        border-radius: 12px; 
        width: 100%; 
        max-width: 800px; 
        display: grid; 
        grid-template-columns: 1fr 1fr; 
        overflow: hidden; 
        box-shadow: 0 10px 25px rgba(0,0,0,0.3); }

        .left-banner { 
        background: #2563eb; 
        color: white; 
        padding: 40px 30px; 
        display: flex; 
        flex-direction: 
        column; justify-content: 
        space-between; }

        .right-form { 
        padding: 40px 30px; 
        display: flex; 
        flex-direction: column; 
        justify-content: center; }

        .btn-sso { 
        width: 100%; 
        padding: 10px; 
        border: 1px solid #cbd5e1; 
        background: white; 
        border-radius: 6px; 
        font-weight: 600; 
        font-size: 13px; 
        cursor: pointer; 
        margin-bottom: 16px; 
        color: #334155; }

        .btn-submit { 
        width: 100%;
         padding: 10px; 
         background: #2563eb; 
         color: white; 
         border: none; 
         border-radius: 6px; 
         font-weight: 600; 
         font-size: 13px; 
         cursor: pointer; }

        .form-group { 
        margin-bottom: 14px; }

        .form-label { 
        display: block; 
        font-size: 12px; 
        font-weight: 600; 
        margin-bottom: 4px; 
        color: #334155; }

        .form-input { 
        width: 100%; 
        padding: 9px; 
        border: 1px solid #cbd5e1; 
        border-radius: 6px; 
        font-size: 13px; 
        outline: none; }

        .divider { 
        text-align: center; 
        font-size: 11px; 
        color: #94a3b8; 
        margin: 12px 0; }

        @media (max-width: 650px) { .login-box { grid-template-columns: 1fr; } .left-banner { display: none; } }
    </style>
</head>
<body>
    <div class="box">
        <div class="left-banner">
            <div>
                <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">SEPAK</h2>
                <p style="font-size: 13px; opacity: 0.9; leading-height: 1.5;">Kelola & Pinjam Inventaris Kantor Lebih Cepat dan Terdata</p>
            </div>
            <div style="font-size: 11px; opacity: 0.8;">Integrated with Single Sign-On (SSO)</div>
        </div>
        <div class="right-form">
            <h3 style="font-size: 18px; margin-bottom: 4px; color: #1e293b;">Masuk ke Portal</h3>
            <p style="font-size: 12px; color: #64748b; margin-bottom: 20px;">Gunakan NIP/Email korporat atau SSO</p>

            <button class="btn-sso">Masuk dengan Email korporat</button>
            <div class="divider">Atau masuk manual</div>

        </div>
    </div>
</body>
</html>