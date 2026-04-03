<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fatima Zahrae Bakkali | Portfolio</title>
  <style>
    * { box-sizing: border-box; margin:0; padding:0; font-family: Arial, sans-serif; }
    body { line-height:1.6; color:#333; }
    header { background:#0f172a; color:white; padding:20px; }
    nav { display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; }
    nav ul { list-style:none; display:flex; gap:15px; }
    nav a { color:white; text-decoration:none; font-weight:bold; }
    .hero { padding:60px 20px; text-align:center; background:#f1f5f9; }
    .hero h1 { font-size:2.2rem; margin-bottom:10px; }
    .hero p { max-width:600px; margin:0 auto; }
    .btn { display:inline-block; margin-top:20px; padding:10px 20px; background:#2563eb; color:white; border-radius:8px; text-decoration:none; }
    .profile-img { max-width:200px; width:100%; border-radius:50%; display:block; margin:20px auto; }
    .container { padding:40px 20px; max-width:1100px; margin:auto; }
    .grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; }
    .card { border:1px solid #e2e8f0; padding:20px; border-radius:12px; box-shadow:0 2px 6px rgba(0,0,0,0.05); }
    .card h3 { margin-bottom:10px; }
    footer { background:#0f172a; color:white; text-align:center; padding:20px; margin-top:40px; }
    @media (max-width:600px){
      .hero h1 { font-size:1.6rem; }
    }
  </style>
</head>
<body style="background-color: #f1f5f9;">

<header>
  <nav>
    <h2>Fatima Zahrae Bakkali</h2>
    <ul>
      <li><a href="#about">À propos</a></li>
      <li><a href="#php">Ateliers PHP</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
</header>

<section class="hero">
  <img src="/dev.png" alt="Photo Fatima Zahrae Bakkali" class="profile-img">
  <h1>Stagiaire Développement Digital - 1ère année</h1>
  <p>Bienvenue dans mon portfolio. Cette page est le point d'entrée vers mes ateliers PHP et mes projets en développement web.</p>
  <a href="#php" class="btn">Voir mes ateliers PHP</a>
</section>

<section id="about" class="container">
  <h2>À propos de moi</h2>
  <p>Je suis Fatima Zahrae Bakkali, stagiaire en première année développement digital. Je développe mes compétences en HTML, CSS, PHP et algorithmique. Ce portfolio présente mes travaux pratiques et mes ateliers PHP.</p>
</section>

<section id="php" class="container">
  <h2>Mes Ateliers PHP</h2>
  <div class="grid">
    <div class="card">
      <h3>Atelier 1</h3>
      <p>Introduction PHP</p>
      <ul>
        <li><a href="exercice1.php">Exercice 1 :</a></li>
        <li><a href="exercice2.php">Exercice 2 :</a></li>
        <li><a href="Rapport ex 1.pdf">Rapport1</a></li>
        <li><a href="Rapport ex 2.pdf">Rapport2</a></li>
      </ul>
      <a href="ateliers/atelier1/index.php" class="btn">Ouvrir</a>
    </div>

    <div class="card">
      <h3>Atelier 2</h3>
      <p>Variables et Conditions</p>
      <a href="ateliers/atelier2/index.php" class="btn">Ouvrir</a>
    </div>

    <div class="card">
      <h3>Atelier 3</h3>
      <p>Boucles en PHP</p>
      <a href="ateliers/atelier3/index.php" class="btn">Ouvrir</a>
    </div>

  </div>
</section>

<section id="contact" class="container">
  <h2>Contact</h2>
  <p>Email : fatimazahrae@example.com</p>
</section>

<footer>
  <p>© 2026 - Fatima Zahrae Bakkali - Portfolio</p>
</footer>

</body>
</html>