<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "header.php"; ?>
    <!-- Google Fonts pour un look pro -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/accueil.css">
</head>
<body>
    <section class="accueil d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center gy-5">
                
                <!-- Partie Texte (Gauche) -->
                <div class="col-lg-7 text-white animate-fade-in">
                    <span class="badge bg-primary mb-3 px-3 py-2">Expert en Nettoyage</span>
                    <h1 class="display-4 fw-bold mb-4">Bienvenue chez <span class="text-warning">TopTop_Clean</span></h1>
                    <h3 class="h4 mb-4">Votre partenaire de confiance pour un nettoyage impeccable !</h3>
                    <p class="lead opacity-90 mb-4">
                        Nous fournissons des services de nettoyage de haute qualité (résidentiel, commercial ou spécialisé) 
                        avec des produits écologiques et des techniques avancées.
                    </p>
                    <div class="features mb-4">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check-circle-fill text-warning me-2"></i> <span>Équipes expérimentées</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check-circle-fill text-warning me-2"></i> <span>Produits Éco-responsables</span>
                        </div>
                    </div>
                    <button class="btn btn-warning btn-lg fw-bold px-4 shadow">
                        <i class="bi bi-chat-right-quote-fill me-2"></i> Contactez-nous
                    </button>
                </div>

                <!-- Partie Formulaire (Droite) -->
                <div class="col-lg-5">
                    <div class="devis-card shadow-lg p-4 p-md-5">
                        <h4 class="form-title">Demandez un devis gratuit</h4>
                        <form action="traitement_devis.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nom</label>
                                    <input type="text" class="form-control" name="nom" required placeholder="Dupont">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Prénom</label>
                                    <input type="text" class="form-control" name="prenom" required placeholder="Jean">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required placeholder="jean@exemple.com">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Service</label>
                                    <select class="form-select" name="service" required>
                                        <option value="" selected disabled>Choisissez un service</option>
                                        <option value="residentiel">Nettoyage résidentiel</option>
                                        <option value="bureau">Bureaux / Locaux pro</option>
                                        <option value="vitrerie">Vitrerie / Façade</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date_souhaitee">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Surface (m²)</label>
                                    <input type="number" class="form-control" name="surface" placeholder="ex: 85">
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-submit w-100 py-3 shadow">
                                        <i class="bi bi-send-check-fill me-2"></i> Envoyer ma demande
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

            <section class="services-section py-5" id="services">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold" style="color: #2a87b5;">Nos Services de Nettoyage</h2>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/wraper.png" alt="Ménage à domicile">
                </div>
                <p>Ménage à domicile</p>
            </div>

            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/grand.png" alt="Grand nettoyage">
                </div>
                <p>Grand nettoyage</p>
            </div>

            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/repassage.png" alt="Repassage">
                </div>
                <p>Repassage à domicile</p>
            </div>

            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/residence.png" alt="Résidence secondaire">
                </div>
                <p>Résidence secondaire</p>
            </div>

            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/printemps.png" alt="Ménage de printemps">
                </div>
                <p>Ménage de printemps</p>
            </div>

            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/demenagement.png" alt="Déménagement">
                </div>
                <p>Emménagement - Déménagement</p>
            </div>

            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/aines.png" alt="Ménage pour aînés">
                </div>
                <p>Ménage pour les aînés</p>
            </div>

            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/travaux.png" alt="Après travaux">
                </div>
                <p>Après travaux</p>
            </div>

            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/location.png" alt="Entre deux locations">
                </div>
                <p>Entre deux locations</p>
            </div>

            <div class="service-card">
                <div class="icon-wrapper">
                    <img src="image/plus.png" alt="Et bien plus encore">
                </div>
                <p>Et bien plus encore !</p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#formulaire" class="btn btn-devis-gold">Je demande un devis</a>
        </div>
    </div>
</section>
  
      <section class="avantages-section py-5">
    <div class="container">
        <div class="avantages-container">
            
            <div class="avantages-card shadow">
                <h2 class="mb-4">La satisfaction client au cœur de nos priorités</h2>
                
                <ul class="avantages-list">
                    <li> Chez TopTop_Clean, votre satisfaction est notre priorité</li>
                    <li>Proximité et relation de confiance forte avec votre intervenant</li>
                    <li>Engagement et professionnalisme</li>
                    <li> Disponibilité et réactivité</li>
                </ul>

                <p class="text-inconvenients mt-4">
                    Des inconvénients ? Aucun avec nous !
                </p>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-gold-devis">Je demande un devis</a>
                    <p class="text-muted small mt-2"><i>C'est gratuit et sans engagement !</i></p>
                </div>
            </div>

            <div class="avantages-image">
                <img src="image/cart2.PNG" alt="Ambiance sereine">
            </div>

        </div>
    </div>
</section>
<section class="process-section py-5">
    <div class="container text-center">
        <h2 class="process-title mb-5">Avec <span class="brand">TopTop_Clean</span>, confier son nettoyage, <span>c'est simple !</span></h2>
        
        <div class="process-line d-none d-lg-block"></div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3 animate-step" style="--delay: 0.1s">
                <div class="step-box">
                    <span class="step-number">01</span>
                    <h3 class="step-name">Contact</h3>
                    <p class="step-desc">Prise de contact avec notre équipe</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 animate-step" style="--delay: 0.3s">
                <div class="step-box">
                    <span class="step-number">02</span>
                    <h3 class="step-name">RDV</h3>
                    <p class="step-desc">Prise de RDV et déplacement gratuit</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 animate-step" style="--delay: 0.5s">
                <div class="step-box">
                    <span class="step-number">03</span>
                    <h3 class="step-name">Devis</h3>
                    <p class="step-desc">Proposition du devis personnalisé</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 animate-step" style="--delay: 0.7s">
                <div class="step-box">
                    <span class="step-number">04</span>
                    <h3 class="step-name">Projet</h3>
                    <p class="step-desc">Mise en place du personnel par nos soins</p>
                </div>
            </div>
        </div>

        <p class="process-footer mt-5">
            Tout est mis en place pour vous simplifier la vie : un seul contact suffit pour lancer la démarche. <br>
            Vous gardez la main, nous nous occupons de l’organisation.
        </p>
    </div>
</section>
 

<section class="slider-section py-5">
    <div class="container text-center">
        <h2 class="section-title color-white mb-5">Envie d'autre chose en ménage ?</h2>
        
        <div class="slider-container">
            <button class="nav-btn prev" id="btn-prev">
                <i class="bi bi-chevron-left"></i>
            </button>
            
            <div class="slider-track" id="slider-track">
                
                <div class="slide-card">
                    <div class="card-img-wrapper">
                        <img src="image/cart2.PNG" alt="Ménage déménagement">
                    </div>
                    <div class="card-footer-text">Ménage déménagement</div>
                </div>

                <div class="slide-card">
                    <div class="card-img-wrapper">
                        <img src="image/cart2.PNG" alt="Lavage vitres">
                    </div>
                    <div class="card-footer-text">Lavage vitres</div>
                </div>

                <div class="slide-card">
                    <div class="card-img-wrapper">
                        <img src="image/cart2.PNG" alt="Ménage ponctuel">
                    </div>
                    <div class="card-footer-text">Ménage ponctuel</div>
                </div>

                <div class="slide-card">
                    <div class="card-img-wrapper">
                        <img src="image/cart2.PNG" alt="Lavage vitres">
                    </div>
                    <div class="card-footer-text">Lavage vitres</div>
                </div>

                <div class="slide-card">
                    <div class="card-img-wrapper">
                        <img src="image/cart2.PNG" alt="Ménage ponctuel">
                    </div>
                    <div class="card-footer-text">Ménage ponctuel</div>
                </div>

                </div>

            <button class="nav-btn next" id="btn-next">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</section>








<section class="contact-pro py-5" id="contact">
    <div class="container">
        <div class="form-card-premium shadow-lg animate-fade-in">
            <div class="row g-0">
                
                <div class="col-lg-4 bg-gold p-5 text-white d-flex flex-column align-items-center text-center">
                    <div class="mb-5">
                        <h3 class="fw-bold">Restons en contact</h3>
                        <p class="text-white-50">Nous répondons en moins de 2h.</p>
                        <div class="contact-detail text-start mt-4">
                            <i class="bi bi-geo-alt-fill me-2 opacity-75"></i> Arpajon, France
                        </div>
                    </div>

                    <div class="avatar-anim-container mt-auto shadow-sm">
                        <video src="image/contact.mp4" alt="Assistant TopTop_Clean" class="avatar-animated" autoplay muted loop>
                    </div>
                </div>

                <div class="col-lg-8 p-5 bg-white">
                    <form action="save_contact.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group-pro">
                                    <label for="nom" class="form-label-pro">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control-pro" placeholder="Dupont" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group-pro">
                                    <label for="email" class="form-label-pro">Email</label>
                                    <input type="email" name="email" id="email" class="form-control-pro" placeholder="jean@exemple.com" required>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group-pro">
                                    <label for="message" class="form-label-pro">Message</label>
                                    <textarea name="message" id="message" class="form-control-pro" rows="5" placeholder="Bonjour, je souhaiterais..." required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center text-md-end mt-3">
                                <button type="submit" class="btn-submit-premium">
                                    <i class="bi bi-send-fill me-2"></i> Envoyer le projet
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>







<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<script>
    const track = document.getElementById('slider-track');
const nextBtn = document.getElementById('btn-next');
const prevBtn = document.getElementById('btn-prev');

nextBtn.addEventListener('click', () => {
    // On défile de la largeur d'une carte + le gap
    const cardWidth = track.querySelector('.slide-card').clientWidth + 20;
    track.scrollLeft += cardWidth;
});

prevBtn.addEventListener('click', () => {
    const cardWidth = track.querySelector('.slide-card').clientWidth + 20;
    track.scrollLeft -= cardWidth;
});// Script pour le slider
</script>



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




<div id="chatbot-container">
    <div class="chat-teaser" id="chat-teaser">
        Besoin d'aide ? 👋
        <button type="button" class="teaser-close-btn" id="teaser-close">×</button>
    </div>

    <div class="chat-bubble-launcher shadow" id="chat-launcher">
        <i class="bi bi-chat-dots-fill"></i>
        <span class="chat-badge">1</span>
    </div>

    <div class="chat-popup-window shadow-lg d-none" id="chat-window">
        <div class="chat-header-custom">
            <div class="header-info">
                <img src="image/cart2.png" alt="Diarra" class="header-avatar">
                <div class="header-text-block">
                    <h6 class="text-white mb-0">Diarra</h6>
                    <small class="text-white-50">Agent TopTop_Clean</small>
                </div>
            </div>
            <button type="button" class="btn-close-header" id="chat-close">×</button>
        </div>

        <div class="chat-messages-area">
            <div class="ai-msg-bubble">
                Bonjour ! Je suis <strong>Diarra</strong> ✨. Comment puis-je vous aider à rendre votre maison étincelante aujourd'hui ?
            </div>
            <div class="quick-actions-list mt-3">
                <button class="btn btn-outline-custom w-100 mb-2">Voir les tarifs</button>
                <button class="btn btn-outline-custom w-100 mb-2">Réserver un ménage</button>
                <button class="btn btn-outline-custom w-100">Poser une question</button>
            </div>
        </div>

        <div class="chat-input-footer">
            <input type="text" placeholder="Écrivez ici..." class="form-control border-0 bg-light">
            <button class="send-msg-btn"><i class="bi bi-send-fill"></i></button>
        </div>
    </div>
</div>


<script>
    // Sélection des éléments
    const chatLauncher = document.getElementById('chat-launcher');
    const chatTeaser = document.getElementById('chat-teaser');
    const teaserClose = document.getElementById('teaser-close');
    const chatWindow = document.getElementById('chat-window');
    const chatClose = document.getElementById('chat-close');

    // Fonction pour ouvrir le chat
    const openChat = () => {
        chatWindow.classList.remove('d-none');
        chatLauncher.classList.add('d-none');
        chatTeaser.style.display = 'none';
    };

    // Fonction pour fermer le chat
    const closeChat = () => {
        chatWindow.classList.add('d-none');
        chatLauncher.classList.remove('d-none');
    };

    // Événements
    chatLauncher.addEventListener('click', openChat);
    chatTeaser.addEventListener('click', openChat);
    
    // Fermer l'accroche seulement (X de la bulle blanche)
    teaserClose.addEventListener('click', (e) => {
        e.stopPropagation(); // Empêche d'ouvrir le chat
        chatTeaser.style.display = 'none';
    });

    // Fermer la fenêtre de discussion (X du header rouge)
    chatClose.addEventListener('click', closeChat);
</script>
</body>
</html>