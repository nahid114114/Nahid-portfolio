<!-- resources/views/home.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Nahid — Portfolio</title>

  <!-- Simple reset & nice fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --bg:#0f1724;
      --card-bg:#0b1220;
      --muted:#9aa4b2;
      --accent1:#ff7a7a;
      --accent2:#ffd36b;
      --accent3:#6be6c9;
      --accent4:#8ea2ff;
      --glass: rgba(255,255,255,0.04);
    }

    *{box-sizing:border-box;font-family:'Inter',system-ui,Segoe UI,Roboto,"Helvetica Neue",Arial;}
    body{margin:0;background:linear-gradient(180deg,#0b1220 0%, #071021 100%);color:#e6eef9;min-height:100vh;padding:32px;}

    .container{max-width:1100px;margin:0 auto;padding:0 16px;}
    header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;gap:12px;}
    .brand{display:flex;gap:12px;align-items:center}
    .logo{
      width:56px;height:56px;border-radius:12px;
      background:linear-gradient(135deg,var(--accent4),var(--accent3));
      display:flex;align-items:center;justify-content:center;font-weight:700;color:#041029;
      box-shadow:0 6px 18px rgba(14,21,40,0.6);
    }
    h1{font-size:20px;margin:0}
    p.lead{margin:0;color:var(--muted);font-size:14px}

    /* Grid */
    .grid{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:18px;
      margin-top:18px;
    }

    /* card */
    .card{
      background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-radius:12px;
      padding:14px;
      min-height:160px;
      display:flex;flex-direction:column;gap:10px;
      box-shadow: 0 6px 24px rgba(2,6,23,0.6);
      transition:transform .22s ease, box-shadow .22s ease;
      border:1px solid rgba(255,255,255,0.03);
    }
    .card:hover{ transform: translateY(-6px); box-shadow: 0 18px 40px rgba(2,6,23,0.7);}

    .thumb{
      height:120px;border-radius:10px;overflow:hidden;background:var(--glass);display:flex;align-items:center;justify-content:center;
    }
    .thumb img{width:100%;height:100%;object-fit:cover;display:block}

    .meta{display:flex;justify-content:space-between;align-items:center;gap:10px}
    .title{font-weight:600;font-size:16px}
    .link{font-size:13px;color:var(--muted);text-decoration:none}
    .desc{font-size:13px;color:var(--muted);line-height:1.4;flex:1;}

    /* colorful tag */
    .tag{
      padding:6px 10px;border-radius:999px;font-weight:600;font-size:12px;color:#071021;
      display:inline-block;
    }
    .t1{background:linear-gradient(90deg,var(--accent1), #ffb3b3)}
    .t2{background:linear-gradient(90deg,var(--accent2), #ffe9a8)}
    .t3{background:linear-gradient(90deg,var(--accent3), #baf3e6)}
    .t4{background:linear-gradient(90deg,var(--accent4), #c9d3ff)}

    /* responsive */
    @media (max-width:980px){ .grid{grid-template-columns:repeat(2,1fr);} }
    @media (max-width:640px){ .grid{grid-template-columns:1fr;} .brand h1{font-size:16px} }
    /* footer */
    footer{margin-top:28px;color:var(--muted);font-size:13px;text-align:center}
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="brand">
        <div class="logo">N</div>
        <div>
          <h1>Nahid — Portfolio</h1>
          <p class="lead">Developer • Designer • Problem solver</p>
        </div>
      </div>

      <nav>
        <a class="link" href="/">Home</a>
        <span style="margin-left:12px"><a class="link" href="/#projects">Projects</a></span>
      </nav>
    </header>

    <section>
      <h2 style="margin:0 0 8px 0">Featured Projects</h2>
      <p style="margin:0;color:var(--muted);font-size:13px;">A few projects I built — click to view live or learn more.</p>

      <div class="grid" id="projects">
        {{-- If you passed $projects from controller, it will loop; otherwise show few placeholders --}}
        @if(isset($projects) && $projects->count())
          @foreach($projects as $i => $project)
            <div class="card">
              <div class="thumb">
                @if($project->image)
                  <img src="{{ asset('storage/'.$project->image) }}" alt="{{ $project->title }}">
                @else
                  <img src="https://picsum.photos/seed/project{{ $project->id }}/800/400" alt="placeholder">
                @endif
              </div>

              <div class="meta">
                <div class="title">{{ $project->title }}</div>
                <div class="tag {{ ['t1','t2','t3','t4'][$i % 4] }}">Project</div>
              </div>

              <div class="desc">{{ \Illuminate\Support\Str::limit($project->description ?? 'No description provided yet.', 120) }}</div>

              <div style="display:flex;gap:8px;align-items:center;margin-top:auto">
                @if($project->link)
                  <a class="link" href="{{ $project->link }}" target="_blank">Live Demo ↗</a>
                @endif
                <a class="link" href="/projects/{{ $project->id }}" style="margin-left:auto;color:var(--muted)">Details</a>
              </div>
            </div>
          @endforeach
        @else
          {{-- placeholders --}}
          @for($i=1;$i<=6;$i++)
            <div class="card">
              <div class="thumb">
                <img src="https://picsum.photos/seed/placeholder{{ $i }}/800/400" alt="placeholder">
              </div>
              <div class="meta">
                <div class="title">Project {{ $i }}</div>
                <div class="tag {{ ['t1','t2','t3','t4'][$i % 4] }}">Demo</div>
              </div>
              <div class="desc">Short description about project {{ $i }}. Replace with your own content from admin.</div>
              <div style="display:flex;gap:8px;align-items:center;margin-top:auto">
                <a class="link" href="#">Live Demo ↗</a>
                <a class="link" href="#" style="margin-left:auto;color:var(--muted)">Details</a>
              </div>
            </div>
          @endfor
        @endif
      </div>
    </section>

    <footer>
      © {{ date('Y') }} Nahid — Built with Laravel • <span style="color:var(--muted)">Customize me</span>
    </footer>
  </div>
</body>
</html>
