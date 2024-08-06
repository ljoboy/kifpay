<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reçu de Paiement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center; /* Centre tout le contenu textuel */
        }

        .center {
            text-align: center;
        }

        .title {
            font-size: 2em; /* Taille de police plus grande */
            font-weight: bold; /* Texte en gras */
            color: #333; /* Couleur du texte */
            margin-bottom: 20px; /* Marge en bas */
        }

        .rouge {
            color: red;
        }

        .content {
            margin: 20px; /* Espacement autour du contenu */
        }
    </style>
</head>
<body>
<div class="content">
    <h1 class="title">Reçu de Paiement</h1>
    <h2>Étudiant : {{ $paiement->jeton->etudiant->fullname }}</h2>
    <p>Promotion : {{ $paiement->jeton->frais->promotion->nom }}</p>
    <p>Date : {{ $paiement->percu_le->format('d/m/Y') }}</p>
    <h4 class="rouge">Frais : {{ $paiement->jeton->frais->intitule }}</h4>
    <h4 class="rouge">Montant : {{ $paiement->jeton->frais->currency.$paiement->jeton->frais->montant }}</h4>
</div>
<script>
    window.onload = function () {
        window.print();
    }
</script>
</body>
</html>
