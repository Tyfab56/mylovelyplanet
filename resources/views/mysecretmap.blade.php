<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Secret Map - Présentation</title>
    <style>
        /* RESET BASIQUE */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            line-height: 1.6;
            color: #333;
        }

        /* HEADER & NAV */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #004080;
            /* Couleur principale */
            color: #fff;
            padding: 1rem;
            z-index: 999;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-weight: bold;
            font-size: 1.2rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 1rem;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.2s;
        }

        nav ul li a:hover {
            color: #ffcc00;
            /* Couleur d'accent */
        }

        /* ESPACEMENT DU CONTENU PRINCIPAL (pour compenser le header fixe) */
        main {
            margin-top: 5rem;
            /* Laisse de la place en haut pour le header fixe */
        }

        /* SECTIONS */
        section {
            padding: 3rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        h1,
        h2,
        h3 {
            margin-bottom: 1rem;
            font-weight: bold;
        }

        p {
            margin-bottom: 1rem;
        }

        /* HERO SECTION */
        #hero {
            text-align: center;
        }

        .hero-banner {
            max-width: 100%;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background: #ffcc00;
            color: #333;
            padding: 0.75rem 1.2rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-primary:hover {
            background: #ffdd33;
        }

        /* SERVICES SECTION */
        .services-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media(min-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .service-item img {
            width: 100%;
            border-radius: 6px;
            margin-bottom: 1rem;
        }

        /* AUDIAGUIDE SECTION */
        .audioguide-image {
            max-width: 100%;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        }

        /* GALERIE */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }

        .gallery img {
            width: 100%;
            border-radius: 6px;
        }

        /* SECTION CONTACT (CTA) */
        .contact-cta {
            background: #004080;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 2rem 1rem;
        }

        .contact-cta p {
            margin-bottom: 2rem;
        }

        .btn-contact {
            background: #ffcc00;
            color: #333;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-contact:hover {
            background: #ffdd33;
        }

        /* FOOTER */
        footer {
            background: #f1f1f1;
            text-align: center;
            padding: 1rem;
            color: #333;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <!-- HEADER + NAV -->
    <header>
        <div class="logo">My Secret Map</div>
        <nav>
            <ul>
                <li><a href="#hero" onclick="scrollToSection('hero')">Accueil</a></li>
                <li><a href="#services" onclick="scrollToSection('services')">Services</a></li>
                <li><a href="#audioguide" onclick="scrollToSection('audioguide')">Audioguide</a></li>
                <li><a href="#contact" onclick="scrollToSection('contact')">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- CONTENU PRINCIPAL -->
    <main>
        <!-- SECTION HERO -->
        <section id="hero">
            <img
                src="https://via.placeholder.com/1200x500?text=Hero+Banner"
                alt="Hero Banner"
                class="hero-banner" />
            <h1>Découvrez My Secret Map</h1>
            <p>
                Une plateforme immersive pour valoriser vos destinations touristiques.
            </p>
            <button class="btn-primary" onclick="scrollToSection('presentation')">
                En savoir plus
            </button>
        </section>

        <!-- SECTION PRESENTATION -->
        <section id="presentation">
            <h2>Qui sommes-nous&nbsp;?</h2>
            <p>
                Nous sommes une équipe passionnée, dédiée à la
                <strong>création de contenus multimédias (photos, vidéos, 360°)</strong>
                et au développement d’<strong>audioguides multilingues</strong>.
                Notre objectif : <em>mettre en lumière vos sites incontournables</em>
                et offrir une <strong>expérience inoubliable</strong> aux visiteurs.
            </p>
        </section>

        <!-- SECTION SERVICES -->
        <section id="services">
            <h2>Nos Services</h2>
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-item">
                    <img
                        src="https://via.placeholder.com/800x400?text=Photo+%2F+Video+%2F+360%C2%B0"
                        alt="Création de contenu" />
                    <h3>1. Création de Contenus Multimédias</h3>
                    <p>
                        Nous réalisons jusqu’à <strong>40 médias par spot</strong> :
                        photos, vidéos et prises de vue à 360°. En moyenne,
                        <strong>3 spots par jour</strong> sont couverts par
                        deux photographes, pour documenter vos destinations
                        de manière professionnelle et immersive.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="service-item">
                    <img
                        src="https://via.placeholder.com/800x400?text=My+Secret+Map+Back-Office"
                        alt="Intégration sur la carte" />
                    <h3>2. Intégration sur My Secret Map</h3>
                    <p>
                        Tous les contenus sont publiés sur <strong>My Secret Map</strong>,
                        où vous disposez d’un <strong>back-office dédié</strong> pour
                        mettre à jour les informations de vos spots,
                        ajouter des actualités et des promotions,
                        et suivre vos statistiques de consultation.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="service-item">
                    <img
                        src="https://via.placeholder.com/800x400?text=Visibilit%C3%A9+%26+Partenariats"
                        alt="Visibilité" />
                    <h3>3. Visibilité & Partenariats</h3>
                    <p>
                        Nous relayons vos spots via nos <strong>réseaux sociaux</strong>,
                        notre <strong>newsletter</strong> et nos <strong>partenaires</strong>.
                        Vous bénéficiez d’une <strong>audience ciblée</strong> et
                        d’un accompagnement personnalisé pour accroître
                        votre attractivité touristique.
                    </p>
                </div>

                <!-- Service 4 (optionnel) -->
                <div class="service-item">
                    <img
                        src="https://via.placeholder.com/800x400?text=Personnalisation+OT"
                        alt="Personnalisation Office du Tourisme" />
                    <h3>4. Personnalisation Office du Tourisme</h3>
                    <p>
                        Bénéficiez d’un <strong>espace dédié</strong> : logo,
                        fil d’actualité et informations spécifiques
                        pour vos visiteurs. Vous pouvez ainsi <strong>mettre en avant</strong>
                        vos événements et actualités
                        (festivals, promotions, nouveautés…).
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION AUDIAGUIDE -->
        <section id="audioguide">
            <h2>L'Audioguide Multilingue</h2>
            <img
                src="https://via.placeholder.com/800x400?text=Audioguide+Preview"
                alt="Audioguide Preview"
                class="audioguide-image" />
            <p>
                Offrez à vos visiteurs un <strong>parcours audio immersif</strong>
                dans leur langue. Nous produisons des fichiers audios
                professionnels, consultables depuis la carte ou
                l’application associée.
            </p>
            <ul>
                <li>Narration professionnelle et scénarisée</li>
                <li>Contenus historiques, anecdotes, informations pratiques</li>
                <li>Adapté à chaque spot clé de votre territoire</li>
                <li>Disponible en plusieurs langues (FR, EN, DE, IT, etc.)</li>
            </ul>
            <p>
                Nous proposons également <strong>des formules de financement</strong>
                adaptées : l’Office du Tourisme peut choisir de cofinancer
                l’audioguide afin de le proposer à un tarif réduit ou même offert
                à ses visiteurs.
            </p>
        </section>

        <!-- SECTION FINANCEMENT / PARTENARIATS -->
        <section>
            <h2>Financement & Partenariats</h2>
            <p>
                Chaque Office du Tourisme a ses propres contraintes budgétaires.
                Nous proposons donc :
            </p>
            <ul>
                <li>
                    Une <strong>phase de création de contenu</strong> prise en charge
                    pour documenter vos spots (photos, vidéos, 360°)
                </li>
                <li>
                    Une <strong>option Audioguide</strong> (budget d’environ 40 000 €
                    pour 100+ spots), qui peut être cofinancée afin de le proposer
                    gratuitement ou à prix réduit aux visiteurs
                </li>
                <li>
                    Un <strong>modèle de commission</strong> sur les ventes,
                    si vous préférez amortir les coûts dans le temps
                </li>
            </ul>
            <p>
                L’essentiel est de mettre en place un <strong>partenariat gagnant-gagnant</strong>
                où vous valorisez votre territoire tout en maîtrisant votre investissement.
            </p>
        </section>

        <!-- SECTION EXEMPLES DE MEDIAS (GALERIE) -->
        <section>
            <h2>Exemples de Médias Produits</h2>
            <p>Un aperçu de notre savoir-faire :</p>
            <div class="gallery">
                <img src="https://via.placeholder.com/300x200?text=Photo+Spot+1" alt="Photo Spot 1" />
                <img src="https://via.placeholder.com/300x200?text=Video+Spot" alt="Vidéo Spot" />
                <img src="https://via.placeholder.com/300x200?text=360%C2%B0+View" alt="360 View" />
                <img src="https://via.placeholder.com/300x200?text=Photo+Spot+2" alt="Photo Spot 2" />
            </div>
        </section>

        <!-- SECTION CONTACT (CTA) -->
        <section id="contact" class="contact-cta">
            <h2>Prêt à valoriser votre territoire&nbsp;?</h2>
            <p>
                Contactez-nous pour définir ensemble vos besoins,
                vos priorités et les opportunités de financement.
            </p>
            <button class="btn-contact" onclick="openMail()">Nous Contacter</button>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <p>© 2024 My Secret Map. Tous droits réservés.</p>
    </footer>

    <script>
        // Fonction pour un défilement fluide vers une section
        function scrollToSection(id) {
            const el = document.getElementById(id);
            if (el) {
                el.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        // Fonction pour ouvrir la messagerie
        function openMail() {
            window.location.href =
                'mailto:contact@mysecretmap.com?subject=Demande%20d%27informations';
        }
    </script>
</body>

</html>
