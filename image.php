<?php
// image.php — Fiche projet "CY Stage Management"
// Page de présentation d'un projet étudiant, reliée depuis le portfolio (index.php).
// Elle réutilise le thème du portfolio (style.css) et l'animation d'apparition (script.js).
$annee = date('Y');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CY Stage Management — Antonin Jarrier</title>
<meta name="description" content="CY Stage Management : plateforme de gestion des stages développée en projet étudiant (Pré-Ing 2) à CY Tech Pau. PHP, JavaScript, CSS.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>
  /* --- styles propres à la fiche projet --- */
  .backbar{padding:26px 0 0}
  .backlink{font-family:var(--mono);font-size:.85rem;color:var(--muted);display:inline-flex;align-items:center;gap:.45rem;transition:color .2s}
  .backlink:hover{color:var(--accent)}
  .backlink .arrow{transition:transform .2s}
  .backlink:hover .arrow{transform:translateX(-3px)}

  .proj-hero{padding:40px 0 64px}
  .proj-hero h1{
    font-family:var(--display);font-weight:700;
    font-size:clamp(2.2rem,6vw,3.6rem);line-height:1.04;
    letter-spacing:-.02em;margin-bottom:1rem;
  }
  .proj-hero .lede{font-size:clamp(1.05rem,2.2vw,1.25rem);color:var(--muted);max-width:52ch;margin-bottom:1.8rem}
  .proj-hero .lede b{color:var(--text);font-weight:600}

  /* bandeau d'infos (contexte / rôle / année / statut) */
  .meta{
    display:grid;gap:1px;grid-template-columns:1fr;
    background:var(--line);border:1px solid var(--line);border-radius:12px;overflow:hidden;
    margin-top:.5rem;
  }
  @media(min-width:640px){.meta{grid-template-columns:repeat(4,1fr)}}
  .meta div{background:var(--surface);padding:16px 18px}
  .meta .k{font-family:var(--mono);font-size:.72rem;color:var(--muted);display:block;margin-bottom:.35rem}
  .meta .v{font-family:var(--display);font-weight:500;font-size:1rem}

  /* galerie de captures */
  .shots{display:grid;gap:26px;grid-template-columns:1fr}
  figure.shot{margin:0;background:var(--surface);border:1px solid var(--line);border-radius:14px;box-shadow:var(--shadow);overflow:hidden;transition:border-color .25s,transform .25s,box-shadow .25s}
  figure.shot:hover{border-color:var(--accent);transform:translateY(-4px);box-shadow:var(--shadow-hover)}
  figure.shot img{display:block;width:100%;height:auto;border-bottom:1px solid var(--line)}
  figure.shot figcaption{padding:16px 20px;color:var(--muted);font-size:.92rem}
  figure.shot figcaption b{font-family:var(--mono);color:var(--accent);font-weight:500;font-size:.8rem;display:block;margin-bottom:.3rem}

  /* liste de fonctionnalités */
  .features{display:grid;gap:14px;grid-template-columns:1fr}
  @media(min-width:680px){.features{grid-template-columns:1fr 1fr}}
  .feature{display:flex;gap:.7rem;align-items:flex-start;background:var(--surface-2);border:1px solid var(--line);border-radius:10px;padding:16px 18px}
  .feature .mk{font-family:var(--mono);color:var(--accent);font-size:.9rem;line-height:1.6}
  .feature p{color:var(--text);font-size:.95rem}
  .feature p span{color:var(--muted);display:block;font-size:.88rem;margin-top:.15rem}

  .note{
    font-family:var(--mono);font-size:.82rem;color:var(--muted);
    background:var(--surface-2);border:1px solid var(--line);border-left:3px solid var(--accent);
    border-radius:8px;padding:16px 18px;margin-top:8px;
  }
</style>
</head>
<body>

<header class="nav">
  <div class="wrap nav-inner">
    <div class="logo">antonin<b>.dev</b></div>
    <nav class="nav-links">
      <a href="index.php#projets">Projets</a>
      <a href="index.php#apropos">À propos</a>
      <a href="index.php#contact">Contact</a>
    </nav>
  </div>
</header>

<main>
  <div class="wrap backbar">
    <a class="backlink" href="index.php#projets"><span class="arrow">←</span> retour au portfolio</a>
  </div>

  <!-- INTRO -->
  <section class="proj-hero">
    <div class="wrap">
      <span class="eyebrow reveal">projet étudiant · CY Tech Pau</span>
      <h1 class="reveal">CY Stage Management</h1>
      <p class="lede reveal">Une <b>application web interne de gestion des stages</b> pour une école d'ingénieurs. Elle réunit sur une même plateforme les trois profils qui gravitent autour d'un stage — <b>étudiant, tuteur et administrateur</b> — chacun avec son propre espace et ses propres droits.</p>

      <div class="meta reveal">
        <div><span class="k">// contexte</span><span class="v">Projet Pré-Ing 2</span></div>
        <div><span class="k">// école</span><span class="v">CY Tech, Pau</span></div>
        <div><span class="k">// stack</span><span class="v">PHP · JS · CSS</span></div>
        <div><span class="k">// année</span><span class="v">2025 – 2026</span></div>
      </div>
    </div>
  </section>

  <!-- LE PROJET -->
  <section class="block" id="presentation">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="eyebrow">le projet</span>
        <h2>De quoi il s'agit</h2>
      </div>
      <div class="about reveal">
        <p>CY Stage Management a été réalisé <b>en équipe de 4</b> dans le cadre de ma <b>2ᵉ année de cycle préparatoire (Pré-Ing 2)</b> en mathématiques et informatique à CY Tech. L'objectif : concevoir de bout en bout un outil concret, du choix de la structure des données jusqu'à l'interface. Les captures ci-dessous présentent <b>la partie sur laquelle j'ai travaillé</b>.</p>
        <p>La plateforme centralise le <b>suivi des stages</b> : chaque étudiant dispose d'un dossier, les tuteurs assurent le suivi pédagogique, et l'administration pilote l'ensemble (dossiers à traiter, validés, statistiques). L'accès se fait par <b>sélection de profil</b> puis connexion, et chaque rôle est redirigé vers son propre tableau de bord.</p>
        <p>Côté technique, le <b>back-end est écrit en PHP</b>, l'interactivité en <b>JavaScript</b>, et les données sont stockées dans des <b>fichiers CSV</b> plutôt qu'une base SQL — un choix simple à déployer, qui a demandé de gérer soi-même la lecture, l'écriture et la cohérence des enregistrements (jusqu'à 16 colonnes par étudiant).</p>
      </div>
    </div>
  </section>

  <!-- CAPTURES -->
  <section class="block" id="apercu">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="eyebrow">aperçu</span>
        <h2>L'interface</h2>
      </div>
      <div class="shots">
        <figure class="shot reveal">
          <img src="img/cy-stage-accueil.png" alt="Page d'accueil de CY Stage Management : sélection du profil Tuteur, Administrateur ou Étudiant.">
          <figcaption>
            <b>// accueil.php</b>
            Point d'entrée de l'application : l'utilisateur choisit son profil (Tuteur, Administrateur ou Étudiant) avant d'accéder à son espace.
          </figcaption>
        </figure>
        <figure class="shot reveal">
          <img src="img/cy-stage-dashboard.png" alt="Tableau de bord administrateur : compteurs de dossiers, statistiques, messagerie, notifications et gestion des dossiers.">
          <figcaption>
            <b>// tabBordAdmin.php</b>
            Tableau de bord administrateur : compteurs en direct (étudiants en stage, dossiers en cours / à traiter / validés), statistiques, notifications, messagerie et gestion des dossiers.
          </figcaption>
        </figure>
      </div>
    </div>
  </section>

  <!-- FONCTIONNALITÉS -->
  <section class="block" id="fonctionnalites">
    <div class="wrap">
      <div class="section-head reveal">
        <span class="eyebrow">fonctionnalités</span>
        <h2>Ce que fait l'application</h2>
      </div>
      <div class="features reveal">
        <div class="feature"><span class="mk">▸</span><p>Trois espaces par rôle<span>Étudiant, tuteur et administrateur, avec redirection selon le profil connecté.</span></p></div>
        <div class="feature"><span class="mk">▸</span><p>Gestion des dossiers de stage<span>Suivi des dossiers en cours, à traiter et validés depuis le tableau de bord.</span></p></div>
        <div class="feature"><span class="mk">▸</span><p>Liste et fiches étudiants<span>Consultation, modification et profil détaillé de chaque étudiant.</span></p></div>
        <div class="feature"><span class="mk">▸</span><p>Statistiques avec filtres<span>Page de statistiques mise à jour dynamiquement selon les critères choisis.</span></p></div>
        <div class="feature"><span class="mk">▸</span><p>Agenda / calendrier<span>Vue calendrier pour repérer les échéances liées aux stages.</span></p></div>
        <div class="feature"><span class="mk">▸</span><p>Stockage en CSV<span>Données persistées dans des fichiers CSV, sans base de données externe.</span></p></div>
      </div>

      <p class="note reveal">Projet réalisé à des fins pédagogiques dans le cadre du cursus à CY Tech. Les captures ci-dessus proviennent d'un environnement de développement local.</p>
    </div>
  </section>

  <!-- RETOUR -->
  <section class="contact">
    <div class="wrap">
      <span class="eyebrow reveal">et ensuite</span>
      <h2 class="reveal">Envie de voir le reste ?</h2>
      <p class="reveal">Ce projet fait partie de mon portfolio. Retrouvez mes autres réalisations et un moyen de me contacter.</p>
      <div class="contact-actions reveal">
        <a class="btn btn-primary" href="index.php#projets">← Voir les autres projets</a>
        <a class="btn btn-ghost" href="index.php#contact">Me contacter</a>
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