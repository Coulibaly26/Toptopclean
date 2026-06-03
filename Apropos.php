<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - TopTop Clean KD</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Fichier CSS personnalisé -->
    <link rel="stylesheet" href="style/apropo.css">
    <?php include "header.php"; ?>
</head>
<body>

    <!-- HERO SECTION AVEC SLIDER -->
    <header class="hero-header">
    <div id="topTopCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="image/cart2.png" class="d-block w-100 hero-img" alt="Nettoyage Bureau">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="image/cart3.png" class="d-block w-100 hero-img" alt="Expertise Propreté">
            </div>
        </div>

        <div class="hero-info-card shadow">
            <div class="info-wrapper">
                <div class="info-content">
                    <h2 class="info-title">À Propos de Nous</h2>
                    <div class="info-badges">
                        <span class="badge-item">Nettoyage de Bureaux</span>
                        <span class="badge-item">Entretien de Locaux</span>
                        <span class="badge-item">Nettoyage Profond</span>
                    </div>
                </div>
                <div class="info-action">
                    <a href="#contact" class="btn-contact-hero">
                        <i class="bi bi-send-fill me-2"></i>Contactez-Nous
                    </a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#topTopCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#topTopCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</header>



<section class="presentation-section">
    <div class="container">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-6 col-12">
                <div class="image-stack-container">
                    <div class="image-box-top">
                        <img src="image/cart2.png" alt="Nettoyage de surfaces délicates" class="img-fluid presentation-img">
                    </div>
                    <div class="image-box-bottom">
                        <img src="image/cart3.png" alt="Agent de nettoyage qualifié" class="img-fluid presentation-img">
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-12">
                <div class="content-box-presentation">
                    <h2 class="presentation-title">Notre Expertise & Engagement</h2>
                    
                    <p class="presentation-text">
                        TopTop Clean KD est née d'une ambition simple : offrir un service de propreté d'exception à Paris et dans toute sa région. Spécialisée dans l’entretien des espaces privés et professionnels, notre agence se distingue par sa maîtrise technique des revêtements les plus délicats, tels que le marbre précieux ou le parquet massif. Nous avons bâti notre réputation sur la rigueur de nos interventions et la confiance de nos clients, en transformant chaque chantier en une vitrine de notre savoir-faire.
                    </p>
                    
                    <p class="presentation-text">
                        Qu’il s’agisse d’une remise en état après travaux, d’un lessivage complet des murs ou de l’entretien régulier de bureaux, nos agents de nettoyage qualifiés sont prêts à intervenir sur tous les types de chantiers. Chaque mission commence par l’élaboration d’un devis complet et précis, garantissant une transparence totale sur nos prestations. Aujourd'hui, TopTop Clean KD collabore avec plus de 1400 clients qui ont choisi l'alliance d'un service qualitatif et d'un prix attractif.
                    </p>
                    
                    <p class="presentation-text eco-highlight">
                        La satisfaction de nos clients est notre seule priorité, et cela passe aussi par le respect de leur environnement de santé. C'est pourquoi TopTop Clean KD propose, sur simple demande, un nettoyage écologique intégral. Nous utilisons des produits certifiés respectueux de la planète pour entretenir vos locaux, et nous le faisons sans aucun surcoût. C'est notre manière de conjuguer propreté impeccable et responsabilité durable.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>


<section class="metiers-section">
    <div class="container">
        
        <!-- En-tête de la section (Toute la largeur) -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="metiers-main-title">
                    Nos métiers du nettoyage, de la propreté & de l’hygiène
                    <span class="sub-title">dédiés aux secteurs</span>
                </h2>
                <p class="metiers-intro-text">
                    TopTop Clean KD est née d'une ambition simple : offrir un service de propreté d'exception à Paris et dans toute sa région. Spécialisée dans l’entretien des espaces privés et professionnels, notre agence se distingue par sa maîtrise technique des revêtements les plus délicats, tels que le marbre précieux ou le parquet massif. Nous avons bâti notre réputation sur la rigueur de nos interventions et la confiance de nos clients, en transformant chaque chantier en une vitrine de notre savoir-faire.
                </p>
            </div>
        </div>

        <!-- Grille des cartes de métiers (Style Colonnes Verticales Arrondies) -->
        <div class="row g-4 justify-content-center">
            
            <!-- Carte 1 : Bureaux & Tertiaire -->
            <div class="col-xl-3 col-md-6 col-sm-10">
                <div class="metier-card" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 60%, rgba(0,0,0,0) 100%), url('image/cart2.png');">
                    <div class="metier-card-content">
                        <h3>Nettoyage bureaux, tertiaire & sièges sociaux</h3>
                        <p>Préserver l'hygiène de votre environnement de travail au quotidien.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 2 : Surfaces Commerciales -->
            <div class="col-xl-3 col-md-6 col-sm-10">
                <div class="metier-card card-offset-1" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 60%, rgba(0,0,0,0) 100%), url('image/cart3.png');">
                    <div class="metier-card-content">
                        <h3>Nettoyage surfaces commerciales</h3>
                        <p>Assurer le nettoyage et la désinfection de vos espaces de vente.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 3 : Espaces Privés / Rénovation -->
            <div class="col-xl-3 col-md-6 col-sm-10">
                <div class="metier-card card-offset-2" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 60%, rgba(0,0,0,0) 100%), url('image/cart2.png');">
                    <div class="metier-card-content">
                        <h3>Nettoyage fin de chantier & rénovation</h3>
                        <p>Une remise en état complète après vos travaux avec rigueur d'intervention.</p>
                    </div>
                </div>
            </div>

            <!-- Carte 4 : Sols Délicats -->
            <div class="col-xl-3 col-md-6 col-sm-10">
                <div class="metier-card card-offset-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 60%, rgba(0,0,0,0) 100%), url('image/cart3.png');">
                    <div class="metier-card-content">
                        <h3>Traitement des sols précieux</h3>
                        <p>Maîtrise technique absolue du marbre précieux et du parquet massif.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="histoire-section">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-7 col-12 order-lg-1 order-2">
                <div class="carte-blanche-histoire shadow-sm">
                    <h2 class="histoire-title">Notre Histoire</h2>
                    <p class="histoire-text">
                        TopTop Clean KD est née d'une ambition simple : offrir un service de propreté d'exception à Paris et dans toute sa région. Spécialisée dans l’entretien des espaces privés et professionnels, notre agence se distingue par sa maîtrise technique des revêtements les plus délicats, tels que le marbre précieux ou le parquet massif. Nous avons bâti notre réputation sur la rigueur de nos interventions et la confiance de nos clients, en transformant chaque chantier en une vitrine de notre savoir-faire.
                    </p>
                </div>
            </div>

            <div class="col-lg-5 col-12 order-lg-2 order-1">
                <div class="histoire-stack-container">
                    <div class="histoire-box-top">
                        <img src="image/cart2.png" alt="Nettoyage premium" class="img-fluid histoire-img">
                    </div>
                    <div class="histoire-box-bottom">
                        <img src="image/cart3.png" alt="Entretien de surfaces" class="img-fluid histoire-img">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<footer class="custom-footer">
    <!-- La forme courbée en haut -->
    <div class="footer-wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="container footer-content">
        <div class="row align-items-center">
            
            <!-- Gauche : Infos Contact -->
            <div class="col-lg-4 text-start footer-contact-info">
                <h2 class="name-text">  Diarra <span class="surname-text">Kande</span></h2>
                <p class="position-text">Fondatrice TopTop_Clean</p>
                <hr class="footer-divider">
                <ul class="list-unstyled contact-list">
                    <li><i class="bi bi-telephone-fill"></i> 06 12 34 56 78</li>
                    <li><i class="bi bi-envelope-fill"></i> contact@toptopclean.fr</li>
                    <li><i class="bi bi-globe"></i> www.toptopclean.fr</li>
                </ul>
            </div>

            <!-- Milieu : Photo de Profil Circulaire -->
            <div class="col-lg-4 text-center">
                <div class="footer-avatar-wrapper">
                    <img src="image/logo.png" alt="Profile" class="footer-profile-img">
                </div>
            </div>

            <!-- Droite : Branding -->
            <div class="col-lg-4 text-end footer-brand">
                <div class="brand-logo-circle">
                    <i class="bi bi-stars"></i>
                </div>
                <h3 class="brand-name">TOPTOP <span class="clean-text">CLEAN KD</span></h3>
                <p class="tagline">L'excellence au service de votre intérieur</p>
                <div class="social-icons">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-linkedin"></i>
                </div>
            </div>

        </div>
    </div>
    
    <!-- Copyright -->
    <div class="footer-bottom">
        <p>&copy; 2024 TopTop_Clean. Tous droits réservés.</p>
    </div>
</footer>



</body>
</html>