<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPTOP_CLEAN - Nettoyage professionnel</title>
    <!-- Bootstrap CSS + Icons + Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        /* ===== THÈME NETTOYAGE (BLEU FRAIS) ===== */
        .navbar {
            background: linear-gradient(135deg, #0B5E7E 0%, #1A7F9E 100%);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            padding: 0.4rem 1rem;
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        /* Logo */
        .navbar-brand img {
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
            transition: transform 0.2s;
        }
        .navbar-brand:hover img {
            transform: scale(1.02);
        }
        /* Liens de navigation avec icônes */
        .navbar-nav .nav-link {
            color: #F0F9FF !important;
            font-weight: 500;
            margin: 0 0.2rem;
            padding: 0.5rem 0.9rem;
            border-radius: 40px;
            transition: all 0.2s ease;
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        /* Soulignement animé */
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: #FFE484;
            transition: all 0.3s;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 70%;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #FFE484 !important;
            background-color: rgba(255,255,255,0.12);
        }
        /* Téléphone spécifique */
        .navbar-nav .nav-link.phone-link {
            background-color: rgba(255,255,255,0.2);
            border-radius: 40px;
            padding: 0.5rem 1rem;
            margin-left: 0.3rem;
            font-weight: 600;
        }
        .navbar-nav .nav-link.phone-link:hover {
            background-color: #FFE484;
            color: #0B5E7E !important;
        }
        .navbar-nav .nav-link.phone-link:hover::after {
            display: none;
        }
        /* Bouton Contact */
        .btn-contact {
            background: linear-gradient(95deg, #f4c861, #e7ce51);
            color: white;
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.25s;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-contact i {
            font-size: 1.1rem;
        }
        .btn-contact:hover {
            background: linear-gradient(95deg, #E76F51, #D55B3E);
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.2);
            color: #FFF3E6;
        }
        .btn-contact:active {
            transform: translateY(1px);
        }
        /* Responsive mobile */
        @media (max-width: 991.98px) {
            .navbar-collapse .d-flex {
                flex-direction: column !important;
                align-items: stretch !important;
                gap: 1rem !important;
                margin-top: 1rem;
            }
            .navbar-nav {
                flex-direction: column !important;
                text-align: center;
            }
            .navbar-nav .nav-link {
                justify-content: center;
            }
            .navbar-nav .nav-link.phone-link {
                width: fit-content;
                margin: 0 auto;
            }
            .btn-contact {
                width: 100%;
                justify-content: center;
            }
            .navbar-nav .nav-link::after {
                display: none;
            }
        }
        /* Fixe en haut */
        body {
            padding-top: 76px;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="image/logo.png" alt="Logo TOPTOP_CLEAN" width="80" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ms-auto align-items-center gap-4">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#accueil">
                                <i class="bi bi-house-door-fill"></i> Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Apropos.php">
                                <i class="bi bi-info-circle-fill"></i> À propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">
                                <i class="bi bi-brush-fill"></i> Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link phone-link" href="tel:0612345678">
                                <i class="bi bi-telephone-inbound-fill"></i> 06 12 34 56 78
                            </a>
                        </li>
                    </ul>
                    <button class="btn btn-contact" type="button">
                        <a href="#contact" class="text-decoration-none text-white">
                        <i class="bi bi-chat-right-quote-fill"></i> Contactez-nous
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>