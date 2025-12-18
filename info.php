<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction au PHP</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; background-color: #f4f4f4; }
        .container { max-width: 800px; margin: auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1, h2 { color: #333; border-bottom: 2px solid #ccc; padding-bottom: 10px; margin-top: 20px; }
        .code { background-color: #eee; padding: 10px; border-radius: 4px; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Introduction au PHP - Affichage de Variables</h1>
        
        <p><a href="index.html">Retour à la calculatrice</a></p>

        <?php
            $etablissement = "Institut Supérieur de Technologie";
            $module = "Développement Web Avancé";
            $annee = "2025-2026";
            $nombre_a = 15;
            $nombre_b = 7;
            
            $somme = $nombre_a + $nombre_b;
            $produit = $nombre_a * $nombre_b;
            $division = $nombre_a / $nombre_b; 
        ?>
        
        <h2>Informations sur le Module</h2>
        <ul>
            <li>Nom de l'établissement : <strong><?php echo $etablissement; ?></strong></li>
            <li>Module : <strong><?php echo $module; ?></strong></li>
            <li>Année : <strong><?php echo $annee; ?></strong></li>
        </ul>

        <h2>Exemples de Variables Numériques et Calculs</h2>
        
        <p>Les variables numériques utilisées sont : $nombre_a = <strong><?php echo $nombre_a; ?></strong> et $nombre_b = <strong><?php echo $nombre_b; ?></strong>.</p>
        
        <h3>Résultats des Opérations</h3>
        
        <p>
            Addition ($nombre_a + $nombre_b) : 
            <span class="code">
                <?php echo $nombre_a; ?> + <?php echo $nombre_b; ?> = <strong><?php echo $somme; ?></strong>
            </span>
        </p>
        
        <p>
            Multiplication ($nombre_a * $nombre_b) : 
            <span class="code">
                <?php echo $nombre_a; ?> × <?php echo $nombre_b; ?> = <strong><?php echo $produit; ?></strong>
            </span>
        </p>

        <p>
            Division ($nombre_a / $nombre_b) : 
            <span class="code">
                <?php echo $nombre_a; ?> ÷ <?php echo $nombre_b; ?> = <strong><?php echo round($division, 2); ?></strong>
            </span> (Arrondi à 2 décimales)
        </p>
        
    </div>
</body>
</html>