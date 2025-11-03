<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil — {{ $nama ?? 'Profil' }}</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
    
    :root {
      --bg-color: #0d1117;
      --card-bg: #161b22;
      --text-main: #c9d1d9;
      --text-muted: #8b949e;
      --accent-color: #58a6ff;
      --accent-secondary: #008080; /* Teal color for a change */
    }
    
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      margin: 0;
      background-color: var(--bg-color);
      color: var(--text-main);
      -webkit-font-smoothing: antialiased;
      line-height: 1.6;
    }
    
    .container {
      max-width: 820px;
      margin: 48px auto;
      padding: 28px;
    }
    
    .card {
      background-color: var(--card-bg);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 32px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }
    
    h1 {
      margin: 0;
      font-size: 24px;
      letter-spacing: 0.2px;
      font-weight: 600;
    }
    
    .tag {
      color: var(--accent-color);
      font-weight: 500;
      margin-top: 6px;
    }
    
    .meta {
      display: flex;
      gap: 16px;
      margin-top: 14px;
      color: var(--text-muted);
      font-size: 14px;
    }

    .meta strong {
      color: var(--text-main);
    }
    
    p.bio {
      margin: 18px 0;
      line-height: 1.6;
      color: var(--text-main);
    }
    
    .chips {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-top: 10px;
    }
    
    .chip {
      background: rgba(255, 255, 255, 0.05);
      padding: 6px 12px;
      border-radius: 999px;
      font-size: 13px;
      color: var(--text-muted);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    a.github {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 16px;
      border-radius: 8px;
      background-color: var(--accent-color);
      color: var(--text-main);
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }
    
    a.github:hover {
      background-color: #4da2ff;
    }
    
    footer {
      margin-top: 24px;
      color: var(--text-muted);
      font-size: 13px;
    }
    
    @media (max-width: 520px) {
      .container {
        margin: 22px 16px;
        padding: 18px;
      }
      .card {
        padding: 24px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <header>
        <h1>{{ $nama }}</h1>
        <div class="tag">{{ $tagline }}</div>
        <div class="meta">
          <div>NIM • <strong>{{ $nim }}</strong></div>
          <div style="color:var(--text-muted);">|</div>
          <div>{{ $email ?? '—' }}</div>
        </div>
      </header>

      <p class="bio">{{ $bio }}</p>

      @if(!empty($fav_tools) && is_array($fav_tools))
        <div style="margin-top:20px;color:var(--text-muted);font-size:14px">My lowkey collaborators:</div>
        <div class="chips">
          @foreach($fav_tools as $tool)
            <div class="chip">{{ $tool }}</div>
          @endforeach
        </div>
      @endif

      @if(!empty($github))
        <a class="github" href="https://{{ Str::startsWith($github, ['http://','https://']) ? $github : 'https://' . $github }}" target="_blank" rel="noopener noreferrer">Visit GitHub • {{ str_replace(['https://','http://'], '', $github) }}</a>
      @endif

      <footer>Simple. Quiet. Honest. — built with Laravel</footer>
    </div>
  </div>
</body>
</html>