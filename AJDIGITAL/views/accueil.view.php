<?php
ob_start() ?>
<main>
<!-- Portfolio de projets récents avec des cas d'études détaillées pour montrer les résultats obtenus pour les clients précédents.
Des blogues sur les dernières tendances en matière de marketing digital et comment votre agence peut les utiliser pour aider les clients.
Des témoignages de clients satisfaits pour montrer l'expertise et la qualité du travail de votre agence.
Des services offerts, tels que la stratégie de marketing, la création de sites web, la gestion des médias sociaux, etc. avec une description détaillée de chaque service.
Une section "À propos de nous" pour présenter l'équipe de votre agence, ainsi que les valeurs et la mission de votre entreprise. -->
    <section>
        <div class="container-fluid  pt-5">
                <div class="container pt-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img class="img-fluid w-75 mb-4 mb-lg-0" src="public/images/" alt="ecriture avec video">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-4 text-uppercase mb-4">Votre Agence De Marketing Digital</h1>
                            <h5 class="text-uppercase text-warning mb-3">Pourquoi votre entreprise a besoin d'une agence de marketing digital de premier plan ?</h5>
                            <p class="mb-4"> Dans cette séance en ligne, nous allons expliquer pourquoi faire appel à une agence de marketing digital de premier plan est crucial pour le succès de votre entreprise. Nous discuterons également des avantages uniques que notre agence peut offrir, y compris notre expertise en matière de stratégie de marketing, notre créativité en matière de conception de sites web et notre capacité à livrer des résultats concrets pour nos clients.</p>
                            <a href="" class="btn btn-warning text-uppercase py-3 px-5">rejoindre</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>

<?php
$title="";
$content=ob_get_clean();
require "views/template.php"

?>