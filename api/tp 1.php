<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Professionnelle PHP</title>
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --bg: #f8fafc;
            --text: #1e293b;
            --card-bg: #ffffff;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            margin: 0;
        }

        .container {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 0;
            font-size: 1.2rem;
            color: var(--primary);
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        /* Style dyal les liens (Links) */
        .links-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 10px;
        }

        .links-grid a {
            text-decoration: none;
            background: #f1f5f9;
            color: var(--text);
            padding: 8px;
            border-radius: 8px;
            text-align: center;
            font-weight: 600;
            transition: all 0.2s;
        }

        .links-grid a:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        /* Style dyal Formulaire */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            font-size: 0.9rem;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus {
            border-color: var(--primary);
        }

        input[type="submit"] {
            width: 100%;
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        input[type="submit"]:hover {
            background: var(--primary-hover);
        }

        /* Resultat box */
        .result-box {
            background: #ecfdf5;
            color: #065f46;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #10b981;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Sélectionner une valeur</h2>
        <div class="links-grid">
            <?php 
            for ($i = 5; $i <= 100; $i += 5) { 
                echo "<a href='?val=$i'>$i</a>"; 
            } 
            ?>
        </div>

        <?php if (isset($_GET["val"])): ?>
            <div class="result-box">
                Vous avez choisi : <strong><?php echo $_GET["val"]; ?></strong>
            </div>
        <?php endif; ?>
    </div>

    <div class="container">
        <h2>Formulaire d'inscription</h2>
        <form method="POST" action=""> 
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="prenom" placeholder="Votre prénom"> 
            </div>
            <input type="submit" name="btn_valider" value="Valider"> 
        </form>

        <?php 
        if (isset($_POST["btn_valider"])) {
            $nom = $_POST["nom"]; 
            $prenom = $_POST["prenom"]; 
            if (!empty($nom) && !empty($prenom)) {
                echo "<div class='result-box'>Bienvenue <strong>$nom $prenom</strong></div>";
            }
        }
        ?> 
    </div>

</body>
</html>