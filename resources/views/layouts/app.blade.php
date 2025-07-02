<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platinum Bird Nest - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --black: #0a0a0a;
            --dark-gray: #1a1a1a;
            --silver: #e0e0e0;
            --white: #f5f5f5;
            --gold: #d4af37;
            --gold-light: #e6c567;
            --gold-glow: rgba(212, 175, 55, 0.4);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: var(--black);
            color: var(--silver);
            line-height: 1.7;
        }
        
        .admin-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: var(--dark-gray);
            border-radius: 10px;
            box-shadow: var(--shadow);
        }
        
        .btn-gold {
            background: var(--gold);
            color: var(--black);
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .btn-gold:hover {
            background: var(--gold-light);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px var(--gold-glow);
        }
        
        .text-gold {
            color: var(--gold);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fas fa-dove me-2"></i>
                Platinum<span style="color: var(--gold)">Nest</span> Admin
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('testimonials.index') }}">Testimonial</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="admin-container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>