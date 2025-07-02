<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platinum Bird Nest – Sarang Walet Premium Alami</title>
    <meta name="description" content="Produk sarang walet asli, halal, tanpa pengawet. Berdiri sejak 2012. Kualitas premium.">
    <meta name="keywords" content="sarang walet, platinum bird nest, sarang burung walet, organik, halal">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Base Styles & Variables */
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
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', 'Segoe UI', sans-serif;
            background-color: var(--black);
            color: var(--silver);
            line-height: 1.7;
            overflow-x: hidden;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(40, 40, 40, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(40, 40, 40, 0.1) 0%, transparent 20%);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        h1, h2, h3, h4 {
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 1rem;
            color: var(--white);
            letter-spacing: 0.5px;
        }
        
        p {
            margin-bottom: 1.5rem;
            font-weight: 300;
        }
        
        a {
            text-decoration: none;
            color: var(--silver);
            transition: var(--transition);
        }
        
        img {
            max-width: 100%;
            display: block;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .btn {
            display: inline-block;
            padding: 14px 32px;
            background: transparent;
            border: 2px solid var(--gold);
            color: var(--white);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            border-radius: 3px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background: var(--gold);
            z-index: -1;
            transition: var(--transition);
        }
        
        .btn:hover {
            color: var(--black);
            box-shadow: 0 0 20px var(--gold-glow);
        }
        
        .btn:hover::before {
            width: 100%;
        }
        
        .btn-wa {
            background: linear-gradient(135deg, #25D366, #128C7E);
            border: none;
            padding: 16px 40px;
            font-size: 16px;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
        }
        
        .btn-wa:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
        }
        
        section {
            padding: 100px 0;
            position: relative;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            padding-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }
        
        /* Header Styles */
        header {
            background-color: rgba(10, 10, 10, 0.95);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            transition: var(--transition);
            height: 85px;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            height: 100%;
        }
        
        .logo {
            height: 55px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .logo-icon {
            color: var(--gold);
            font-size: 28px;
        }
        
        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: var(--white);
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .logo-highlight {
            color: var(--gold);
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            margin-left: 30px;
        }
        
        .nav-menu a {
            text-transform: uppercase;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 1px;
            position: relative;
            padding: 5px 0;
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gold);
            transition: var(--transition);
        }
        
        .nav-menu a:hover {
            color: var(--gold);
        }
        
        .nav-menu a:hover::after {
            width: 100%;
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
            z-index: 1001;
        }
        
        /* Hero Section */
        .hero {
            min-height: calc(100vh - 85px);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin-top: 85px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(212, 175, 55, 0.05) 0%, transparent 25%),
                radial-gradient(circle at 80% 70%, rgba(212, 175, 55, 0.05) 0%, transparent 25%);
            z-index: -1;
        }
        
        .hero-content {
            max-width: 800px;
            text-align: center;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .hero h1 {
            font-size: 3.8rem;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 3px;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out;
        }
        
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 1s ease-out 0.2s forwards;
            opacity: 0;
        }
        
        .hero .btn {
            animation: fadeInUp 1s ease-out 0.4s forwards;
            opacity: 0;
        }
        
        .floating-bird {
            position: absolute;
            font-size: 3rem;
            color: rgba(255, 255, 255, 0.1);
            animation: float 15s infinite ease-in-out;
            z-index: -1;
        }
        
        .floating-bird:nth-child(1) {
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .floating-bird:nth-child(2) {
            top: 25%;
            right: 15%;
            animation-delay: 2s;
        }
        
        .floating-bird:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        
        .floating-bird:nth-child(4) {
            bottom: 15%;
            right: 10%;
            animation-delay: 6s;
        }
        
        /* Image Grid */
        .image-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin: 60px 0;
        }
        
        .grid-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(212, 175, 55, 0.2);
            transform: translateY(30px);
            opacity: 0;
            background-size: cover;
            background-position: center;
        }
        
        .grid-item.animated {
            transform: translateY(0);
            opacity: 1;
        }
        
        .grid-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(212, 175, 55, 0.25);
            border-color: rgba(212, 175, 55, 0.4);
        }
        
        .grid-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent 70%);
            z-index: 1;
        }
        
        .grid-text {
            position: absolute;
            bottom: 30px;
            left: 30px;
            z-index: 2;
            color: var(--white);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 1.2rem;
        }
        
        /* About Section */
        .about {
            background-color: var(--dark-gray);
            position: relative;
            overflow: hidden;
        }
        
        .about::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
            transform: translate(-50%, -50%);
        }
        
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .about-stats {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 50px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--gold);
            margin-bottom: 10px;
        }
        
        .stat-label {
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
        
        /* Products Section */
        .products {
            position: relative;
            overflow: hidden;
        }
        
        .carousel {
            position: relative;
            max-width: 900px;
            margin: 0 auto 70px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: var(--shadow);
            border: 2px solid var(--gold);
            height: 450px;
        }
        
        .carousel-inner {
            display: flex;
            transition: transform 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
            height: 100%;
        }
        
        .carousel-item {
            min-width: 100%;
            height: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
        }
        
        .carousel-content {
            background: rgba(10, 10, 10, 0.85);
            padding: 40px;
            max-width: 500px;
            border-radius: 8px;
            text-align: center;
            transform: translateY(30px);
            opacity: 0;
            transition: transform 0.8s ease, opacity 0.8s ease;
        }
        
        .carousel-item.active .carousel-content {
            transform: translateY(0);
            opacity: 1;
        }
        
        .carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            padding: 0 20px;
        }
        
        .carousel-btn {
            background: rgba(0, 0, 0, 0.6);
            color: var(--gold);
            border: 2px solid var(--gold);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }
        
        .carousel-btn:hover {
            background: var(--gold);
            color: var(--black);
            transform: scale(1.1);
        }
        
        .carousel-indicators {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }
        
        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .indicator.active {
            background: var(--gold);
            transform: scale(1.2);
        }
        
        /* Single Product Section */
        .single-product {
            max-width: 800px;
            margin: 0 auto;
            background: var(--dark-gray);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
            border: 1px solid rgba(212, 175, 55, 0.2);
            position: relative;
        }
        
        .product-featured {
            display: flex;
            align-items: center;
            gap: 50px;
            width: 100%;
        }
        
        .product-image {
            flex: 1;
            min-height: 300px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: bold;
            color: var(--gold);
            position: relative;
            background-size: cover;
            background-position: center;
        }
        
        .product-details {
            flex: 1;
        }
        
        .product-title {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .product-description {
            margin-bottom: 25px;
            font-size: 1.1rem;
        }
        
        .product-price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--gold);
            margin: 25px 0;
        }
        
        .product-features {
            margin: 30px 0;
            padding-left: 20px;
        }
        
        .product-features li {
            margin-bottom: 12px;
            position: relative;
            padding-left: 25px;
        }
        
        .product-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--gold);
            font-weight: bold;
        }
        
        .product-halal {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: var(--gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
            color: var(--black);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }
        
        /* Testimonials Section */
        .testimonials {
            background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), 
                        radial-gradient(circle at 20% 30%, rgba(212, 175, 55, 0.05) 0%, transparent 25%),
                        radial-gradient(circle at 80% 70%, rgba(212, 175, 55, 0.05) 0%, transparent 25%);
            position: relative;
        }
        
        .testimonials::before {
            content: '"';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 300px;
            color: rgba(212, 175, 55, 0.03);
            font-family: serif;
            z-index: 0;
        }
        
        .testimonials-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            position: relative;
            z-index: 2;
        }
        
        .testimonial {
            background: rgba(30, 30, 30, 0.8);
            padding: 35px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            border-left: 4px solid var(--gold);
            position: relative;
            transform: translateY(30px);
            opacity: 0;
            transition: transform 0.8s ease, opacity 0.8s ease;
        }
        
        .testimonial.animated {
            transform: translateY(0);
            opacity: 1;
        }
        
        .testimonial-content {
            margin-bottom: 25px;
            font-style: italic;
            position: relative;
            z-index: 1;
            font-size: 1.1rem;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-img {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: #333;
            margin-right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--gold);
            font-weight: bold;
            font-size: 24px;
            background-size: cover;
            background-position: center;
        }
        
        .author-info h4 {
            margin-bottom: 5px;
            color: var(--gold);
        }
        
        /* Contact Section */
        .contact {
            text-align: center;
            position: relative;
        }
        
        .contact-content {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .contact p {
            margin-bottom: 35px;
            font-size: 1.2rem;
        }
        
        .wa-icon {
            font-size: 28px;
            margin-right: 12px;
        }
        
        /* Footer */
        footer {
            background: var(--dark-gray);
            padding: 70px 0 30px;
            position: relative;
            margin-top: auto;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }
        
        .footer-logo {
            flex: 1;
            min-width: 250px;
            margin-bottom: 30px;
        }
        
        .footer-logo p {
            max-width: 300px;
            margin-top: 15px;
        }
        
        .footer-links {
            display: flex;
            gap: 60px;
        }
        
        .footer-links h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-links h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--gold);
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a:hover {
            color: var(--gold);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .social-icon:hover {
            background: var(--gold);
            color: var(--black);
            transform: translateY(-5px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
            color: #aaa;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 25px;
        }
        
        .halal-badge {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: bold;
            color: var(--black);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--gold);
            color: var(--black);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            transition: var(--transition);
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            z-index: 999;
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(212, 175, 55, 0.4);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) translateX(0) rotate(0deg);
            }
            25% {
                transform: translateY(-20px) translateX(10px) rotate(5deg);
            }
            50% {
                transform: translateY(-10px) translateX(-10px) rotate(-5deg);
            }
            75% {
                transform: translateY(10px) translateX(15px) rotate(3deg);
            }
            100% {
                transform: translateY(0) translateX(0) rotate(0deg);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 3.2rem;
            }
        }
        
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .image-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .grid-item {
                height: 300px;
            }
            
            .footer-links {
                gap: 40px;
            }
            
            .product-featured {
                flex-direction: column;
                gap: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 85px;
                right: -100%;
                background: var(--dark-gray);
                width: 280px;
                height: calc(100vh - 85px);
                flex-direction: column;
                padding: 50px 0;
                transition: var(--transition);
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.3);
            }
            
            .nav-menu.active {
                right: 0;
            }
            
            .nav-menu li {
                margin: 20px 0;
                text-align: center;
            }
            
            .hamburger {
                display: block;
            }
            
            .hero h1 {
                font-size: 2.4rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .carousel {
                height: 350px;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .footer-links {
                width: 100%;
                margin-top: 40px;
                flex-direction: column;
                gap: 30px;
            }
            
            .single-product {
                padding: 25px;
            }
        }
        
        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
                letter-spacing: 2px;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .about-stats {
                flex-direction: column;
                gap: 30px;
            }
            
            .footer-content {
                flex-direction: column;
            }
            
            .footer-logo {
                margin-bottom: 40px;
            }
            
            .copyright {
                flex-direction: column;
                gap: 20px;
            }
            
            .product-title {
                font-size: 1.8rem;
            }
            
            .product-price {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-dove"></i>
                </div>
                <div class="logo-text">Platinum<span class="logo-highlight">Nest</span></div>
            </div>
            <ul class="nav-menu">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#produk">Produk</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
            <div class="hamburger">
                <i class="fas fa-bars" style="color: white; font-size: 24px;"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="hero">
        <div class="hero-content">
            <h1>Kesehatan Premium dari Sarang Walet Alami Sejak 2012</h1>
            <p>Sarang walet kami diproses secara alami tanpa bahan pengawet, membantu meningkatkan imunitas dan menjaga kecantikan kulit.</p>
            <a href="#produk" class="btn">Lihat Produk</a>
        </div>
        
        <div class="floating-bird"><i class="fas fa-dove"></i></div>
        <div class="floating-bird"><i class="fas fa-feather"></i></div>
        <div class="floating-bird"><i class="fas fa-feather-alt"></i></div>
        <div class="floating-bird"><i class="fas fa-dove"></i></div>
    </section>

    <!-- Image Grid Section -->
    <section class="container">
        <div class="image-grid">
            <!-- Gedung Walet -->
            <div class="grid-item" style="background-image: url('https://i.imgur.com/yBtB1Qk.jpeg');">
                <div class="grid-text">Gedung Walet</div>
            </div>
            
            <!-- Sarang Walet Mentah -->
            <div class="grid-item" style="background-image: url('https://i.imgur.com/rV3zJM0.jpeg');">
                <div class="grid-text">Sarang Walet Mentah</div>
            </div>
            
            <!-- Produk Kemasan -->
            <div class="grid-item" style="background-image: url('https://i.imgur.com/ZRSHI5s.jpeg');">
                <div class="grid-text">Produk Kemasan</div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="about">
        <div class="container">
            <h2 class="section-title">Tentang Kami</h2>
            <div class="about-content">
                <p>Kami adalah perusahaan sarang walet premium yang berdiri sejak tahun 2012. Produk kami dibuat dari sarang walet murni yang dicampur dengan gula batu alami, tanpa tambahan bahan kimia atau pengawet. Semua produk kami bersertifikasi halal dan diolah secara higienis.</p>
            </div>
            
            <div class="about-stats">
                <div class="stat-item">
                    <div class="stat-number">12+</div>
                    <div class="stat-label">Tahun Pengalaman</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Alami & Organik</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
<section id="produk" class="products">
    <div class="container">
        <h2 class="section-title">Produk Platinum Bird Nest</h2>
        
        <div class="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('https://i.imgur.com/li3KXWy.jpeg');">
                    <!-- Tidak ada .carousel-content -->
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('https://i.imgur.com/mg8irdY.png');">
                    <!-- Tidak ada .carousel-content -->
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('https://i.imgur.com/Vmq6Ycg.png');">
                    <!-- Tidak ada .carousel-content -->
                </div>
            </div>
            <div class="carousel-controls">
                <button class="carousel-btn prev"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-btn next"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="carousel-indicators">
                <div class="indicator active"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
            </div>
        </div>
        
        <!-- Single Product Section -->
        <div class="single-product">
            @foreach($products as $product)
            <div class="product-featured">
                <div class="product-image" style="background-image: url('{{ asset('storage/' . $product->image) }}');">
                    <div class="product-halal">HALAL</div>
                </div>
                <div class="product-details">
                    <h3 class="product-title">{{ $product->name }}</h3>
                    <p class="product-description">{{ $product->description }}</p>
                    <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                    <ul class="product-features">
                        @foreach(explode(',', $product->features) as $feature)
                        <li>{{ trim($feature) }}</li>
                        @endforeach
                    </ul>
                    <a href="https://wa.me/6281399471569" class="btn">Pesan via WhatsApp</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


    <!-- Testimonials Section -->
    <section id="testimoni" class="testimonials">
        <div class="container">
            <h2 class="section-title">Apa Kata Mereka</h2>
            <div class="testimonials-container">
                @foreach($testimonials as $testimonial)
                <div class="testimonial">
                    <p class="testimonial-content">“{{ $testimonial->content }}”</p>
                    <div class="testimonial-author">
                        <div class="author-img">{{ $testimonial->author_initial }}</div>
                        <div class="author-info">
                            <h4>{{ $testimonial->author_name }}</h4>
                            <p>{{ $testimonial->author_location }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami Langsung</h2>
            <div class="contact-content">
                <p>Untuk pemesanan dan kerja sama, silakan hubungi kami melalui WhatsApp.</p>
                <a href="https://wa.me/6281399471569" class="btn btn-wa">
                    <i class="fab fa-whatsapp wa-icon"></i>
                    WhatsApp Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo-text" style="font-size: 28px;">Platinum<span class="logo-highlight">Nest</span></div>
                    <p>Sarang Walet Premium Alami sejak 2012</p>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <div class="links-group">
                        <h3>Navigasi</h3>
                        <ul>
                            <li><a href="#beranda">Beranda</a></li>
                            <li><a href="#tentang">Tentang Kami</a></li>
                            <li><a href="#produk">Produk</a></li>
                            <li><a href="#testimoni">Testimoni</a></li>
                            <li><a href="#kontak">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <div>© 2025 Platinum Bird Nest. Hak Cipta Dilindungi.</div>
                <div class="halal-badge">HALAL</div>
            </div>
        </div>
    </footer>
    
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile Navigation Toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            hamburger.querySelector('i').classList.toggle('fa-bars');
            hamburger.querySelector('i').classList.toggle('fa-times');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                hamburger.querySelector('i').classList.add('fa-bars');
                hamburger.querySelector('i').classList.remove('fa-times');
            });
        });
        
        // Carousel Functionality
        const carouselInner = document.querySelector('.carousel-inner');
        const prevBtn = document.querySelector('.carousel-btn.prev');
        const nextBtn = document.querySelector('.carousel-btn.next');
        const indicators = document.querySelectorAll('.indicator');
        let currentIndex = 0;
        
        function updateCarousel() {
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
            
            // Update indicators
            indicators.forEach((indicator, index) => {
                if (index === currentIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }
        
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % 3;
            updateCarousel();
        });
        
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + 3) % 3;
            updateCarousel();
        });
        
        // Click on indicator
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });
        
        // Auto slide
        setInterval(() => {
            currentIndex = (currentIndex + 1) % 3;
            updateCarousel();
        }, 5000);
        
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Animation on scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.grid-item, .testimonial');
            const windowHeight = window.innerHeight;
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementPosition < windowHeight - elementVisible) {
                    element.classList.add('animated');
                }
            });
        };
        
        // Header scroll effect
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.style.backgroundColor = 'rgba(10, 10, 10, 0.98)';
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.5)';
            } else {
                header.style.backgroundColor = 'rgba(10, 10, 10, 0.95)';
                header.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.5)';
            }
            
            // Back to top button
            const backToTop = document.querySelector('.back-to-top');
            if (window.scrollY > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
            
            animateOnScroll();
        });
        
        // Back to top
        const backToTop = document.querySelector('.back-to-top');
        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Initialize animations
        window.addEventListener('load', () => {
            animateOnScroll();
        });
    </script>
</body>
</html>