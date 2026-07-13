<?php
// index.php — Portfolio d'Antonin Jarrier
// Page statique pour l'instant. Tu pourras y ajouter du PHP plus tard
// (ex. un formulaire de contact qui envoie un e-mail, une année dynamique, etc.)
$annee = date('Y');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Antonin Jarrier — Développeur web</title>
<meta name="description" content="Développeur web à Pau. Création de sites, intégration HTML/CSS et back-end PHP.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="nav">
  <div class="wrap nav-inner">
    <div class="logo">antonin<b>.dev</b></div>
    <nav class="nav-links">
      <a href="#services">Services</a>
      <a href="#projets">Projets</a>
      <a href="#apropos">À propos</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>
</header>

<main>
  <!-- HERO -->
  <section class="hero">
    <div class="wrap">
      <span class="eyebrow reveal">développeur web · Pau, France</span>
      <h1 class="reveal">Antonin Jarrier<span class="cursor">_</span></h1>
      <p class="lede reveal">Je conçois et je code des <b>sites web sur mesure</b> — de l'intégration HTML/CSS au back-end PHP. Rapides, responsives, et livrés propres.</p>
      <div class="hero-actions reveal">
        <!-- REMPLACE le href par le lien de ton profil Fiverr -->
        <a class="btn btn-primary" href="#" target="_blank" rel="noopener">Me contacter sur Fiverr →</a>
        <a class="btn btn-ghost" href="#projets">Voir mes projets</a>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="block" id="services">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="eyebrow">services</span>
        <h2>Ce que je peux faire pour vous</h2>
      </div>
      <div class="services">
        <div class="svc reveal">
          <span class="num">01</span>
          <h3>Création de sites web</h3>
          <p>Site vitrine, portfolio ou boutique, conçu de A à Z. Design, structure et mise en ligne.</p>
        </div>
        <div class="svc reveal">
          <span class="num">02</span>
          <h3>Intégration HTML / CSS</h3>
          <p>Votre maquette transformée en code propre et responsive, fidèle au pixel, sur tous les écrans.</p>
        </div>
        <div class="svc reveal">
          <span class="num">03</span>
          <h3>Développement PHP / back-end</h3>
          <p>Formulaires, espaces membres, logique serveur et connexion aux données pour rendre un site vivant.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PROJETS -->
  <section class="block" id="projets">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="eyebrow">projets</span>
        <h2>Quelques réalisations</h2>
      </div>
      <div class="projects">

        <article class="proj reveal">
          <div class="proj-top">
            <h3>Road to Le Mans</h3>
            <span class="status live">en ligne</span>
          </div>
          <p>Plateforme de réservation d'hébergements et de transport pour les événements de circuit. Calendrier d'événements, comptes utilisateurs et compte à rebours dynamiques.</p>
          <div class="stack"><span class="chip">PHP</span><span class="chip">JavaScript</span><span class="chip">CSS</span></div>
          <a class="proj-link" href="https://rlm-motorsport.fr" target="_blank" rel="noopener">Voir le site <span class="arrow">→</span></a>
        </article>

        <article class="proj reveal">
          <div class="proj-top">
            <h3>LisseUP</h3>
            <span class="status live">en ligne</span>
          </div>
          <p>Boutique e-commerce autour d'un lisseur sans fil. Tunnel d'achat, fiche produit et identité de marque pensés pour la conversion.</p>
          <div class="stack"><span class="chip">E-commerce</span><span class="chip">Shopify</span><span class="chip">UX</span></div>
          <a class="proj-link" href="https://lisseup.fr" target="_blank" rel="noopener">Voir le site <span class="arrow">→</span></a>
        </article>

        <article class="proj reveal">
          <div class="proj-top">
            <h3>CY Stage Management</h3>
            <span class="status">projet</span>
          </div>
          <p>Plateforme de gestion des stages pour une école d'ingénieurs : suivi des offres, des candidatures et des étudiants, avec stockage des données côté serveur.</p>
          <div class="stack"><span class="chip">PHP</span><span class="chip">JavaScript</span><span class="chip">CSS</span></div>
          <a class="proj-link" href="https://github.com/LeValletDePique" target="_blank" rel="noopener">Voir le code <span class="arrow">→</span></a>
        </article>

        <article class="proj reveal">
          <div class="proj-top">
            <h3>Compteur de Belote</h3>
            <span class="status">projet</span>
          </div>
          <p>Application de score pour parties de belote, entièrement hors-ligne. Sauvegarde automatique des scores directement dans le navigateur.</p>
          <div class="stack"><span class="chip">JavaScript</span><span class="chip">HTML</span><span class="chip">localStorage</span></div>
          <a class="proj-link" href="\\wsl.localhost\Debian\home\antonin\belote" target="_blank" rel="noopener">Voir le code <span class="arrow">→</span></a>
        </article>

      </div>
    </div>
  </section>

  <!-- À PROPOS -->
  <section class="block" id="apropos">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="eyebrow">à propos</span>
        <h2>Qui je suis</h2>
      </div>
      <div class="about-grid">
        <div class="about reveal">
          <p>Je suis <b>Antonin</b>, étudiant en mathématiques et informatique à CY Tech (Pau). Je code depuis plusieurs années, aussi bien en cours que sur mes propres projets web.</p>
          <p>J'aime les projets où il faut <b>penser la structure autant que le rendu</b> : un site doit être joli, mais aussi rapide, propre sous le capot et facile à faire évoluer. Je travaille avec sérieux, je communique clairement, et je livre ce qui est convenu.</p>
          <p>Disponible pour des missions courtes comme pour des sites complets.</p>
        </div>
        <div class="skills-card reveal">
          <div class="lbl">// stack technique</div>
          <div class="skill-row">
            <span class="chip">HTML</span><span class="chip">CSS</span><span class="chip">JavaScript</span>
            <span class="chip">PHP</span><span class="chip">C</span><span class="chip">MySQL</span>
            <span class="chip">Git</span><span class="chip">Responsive</span><span class="chip">Algorithmique</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact" id="contact">
    <div class="wrap">
      <span class="eyebrow reveal">contact</span>
      <h2 class="reveal">Un projet en tête ?</h2>
      <p class="reveal">Parlons-en. Décrivez-moi votre besoin et je vous réponds avec une proposition claire.</p>
      <div class="contact-actions reveal">
        <!-- REMPLACE le href par le lien de ton profil Fiverr -->
        <a class="btn btn-primary" href="#" target="_blank" rel="noopener">Me contacter sur Fiverr →</a>
        <!-- REMPLACE par ton adresse e-mail -->
        <a class="btn btn-ghost" href="mailto:ton.email@exemple.com">Envoyer un e-mail</a>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="wrap foot-inner">
    <span>© <?php echo $annee; ?> Antonin Jarrier</span>
    <span><a href="https://github.com/LeValletDePique" target="_blank" rel="noopener">github.com/LeValletDePique</a></span>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>
