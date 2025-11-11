<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Perpustakaan | Perpustakaan Digital</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <style>
      body {
        font-family: "Inter", sans-serif;
        background-color: #f8fafc;
        background-image: radial-gradient(#d3d3d3 1px, transparent 1px);
        background-size: 20px 20px;
        color: #212529;
      }

      .hero-section {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      .hero-icon svg {
        width: 80px;
        height: 80px;
        color: #6366f1;
        margin-bottom: 1.5rem;
      }

      .btn-primary-custom {
        background-color: #6366f1;
        border-color: #6366f1;
        color: white;
        font-weight: 600;
        padding: 0.75rem 3rem;
        border-radius: 1rem;
        transition: transform 0.2s ease, background-color 0.2s ease;
      }

      .btn-primary-custom:hover {
        background-color: #4f46e5;
        transform: scale(1.05);
      }

      .btn-outline-custom {
        border: 2px solid #6366f1;
        color: #6366f1;
        font-weight: 600;
        padding: 0.75rem 3rem;
        border-radius: 1rem;
        transition: all 0.2s ease;
      }

      .btn-outline-custom:hover {
        background-color: #eef2ff;
        transform: scale(1.05);
      }

      .nav-link-custom {
        font-weight: 600;
        color: #374151;
      }

      .nav-link-custom:hover {
        color: #4f46e5;
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <header class="p-3 position-absolute top-0 end-0 w-100">
      <nav class="container d-flex justify-content-end align-items-center gap-3">
        <a href="{{ route('login') }}" class="nav-link-custom text-decoration-none">
          Masuk (Login)
        </a>
        <a href="{{ route('register') }}" class="btn btn-primary-custom shadow-sm">
          Daftar Sekarang
        </a>
      </nav>
    </header>

    <!-- Hero Section -->
    <main class="hero-section container">
      <div class="hero-icon">
        <!-- Ikon -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14h2v2h-2zm0-8h2v6h-2z"
            fill="#ffffffff"
          ></path>
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 15s2 1 8 1 8-1 8-1M4 9s2 1 8 1 8-1 8-1M4 3s2 1 8 1 8-1 8-1"
          ></path>
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 19v-2m16 2v-2"
          ></path>
        </svg>
      </div>

      <h1 class="fw-bold display-5 mb-4">Admin Perpustakaan Online</h1>

      <div class="d-flex flex-wrap justify-content-center gap-4">
        <a href="{{ route('register') }}" class="btn btn-primary-custom shadow">
          Mulai Sekarang
        </a>
        <a href="{{ route('login') }}" class="btn btn-outline-custom">
          Sudah Punya Akun?
        </a>
      </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
