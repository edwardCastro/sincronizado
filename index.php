
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Mini página de perfil</title>
  <style>
    :root { --bg:#f7f7f9; --card:#fff; --text:#222; --accent:#4f46e5; }
    [data-theme="dark"] { --bg:#0f1724; --card:#0b1220; --text:#e6eef8; --accent:#7c93ff; }
    body{margin:0;font-family:system-ui,Segoe UI,Roboto,Arial;background:var(--bg);color:var(--text);display:flex;align-items:center;justify-content:center;height:100vh}
    .card{background:var(--card);padding:20px;border-radius:12px;box-shadow:0 6px 18px rgba(11,12,20,.08);width:320px}
    .header{display:flex;align-items:center;gap:12px}
    .avatar{width:56px;height:56px;border-radius:10px;background:linear-gradient(135deg,var(--accent),#06b6d4);display:flex;align-items:center;justify-content:center;color:white;font-weight:700}
    h1{font-size:18px;margin:0}
    p{margin:.4rem 0 1rem;font-size:13px;color:inherit;opacity:.9}
    .btn{background:transparent;border:1px solid var(--accent);color:var(--accent);padding:6px 10px;border-radius:8px;cursor:pointer;font-size:13px}
    .meta{display:flex;gap:8px;font-size:13px;justify-content:space-between;align-items:center;margin-top:12px}
    a{color:var(--accent);text-decoration:none}
  </style>
</head>
<body>
  <div class="card" id="root">
    <div class="header">
      <div class="avatar">EC</div>
      <div>
        <h1>Edward Castro</h1>
        <p>Desarrollador web · JavaScript · HTML/CSS</p>
      </div>
    </div>

    <p>Hola 👋 — este es un ejemplo pequeño de una tarjeta de perfil con modo claro/oscuro.</p>

    <div class="meta">
      <a href="https://github.com/edwardCastro" target="_blank">GitHub</a>
      <button class="btn" id="themeBtn">Cambiar tema</button>
    </div>
  </div>

  <script>
    const btn = document.getElementById('themeBtn');
    const html = document.documentElement;
    // Mantener preferencia simple en localStorage
    if (localStorage.theme === 'dark') html.setAttribute('data-theme','dark');

    btn.addEventListener('click', () => {
      const isDark = html.getAttribute('data-theme') === 'dark';
      if (isDark) {
        html.removeAttribute('data-theme');
        localStorage.theme = 'light';
      } else {
        html.setAttribute('data-theme','dark');
        localStorage.theme = 'dark';
      }
    });
  </script>
</body>
</html>

