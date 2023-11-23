<?php
class project
{
    public $title;
    public $description;
    public $categories;
    public $link;
    public $picture;
    public function __construct($t, $d, $c, $l, $p)
    {
        $this->title = $t;
        $this->description = $d;
        $this->categories = $c;
        $this->link = $l;
        $this->picture = $p;
    }
}
/**
 * DATA PROJECTS
 */

$dataEduFiche = ["Edu-Fiche", "Edu-Fiche est une application permettant de générer instantanément des fiches de révision grâce à l'API d'OpenAI. Elle propose une version gratuite ainsi qu'une version payante.", ["NextJS", "Open AI", "Stripe", "Zod", "Prisma", "NextAuth", "Shadcn"], "https://edu-fiche.fr", "../assets/images/edufiche.png"];

$dataCoNotes = ["Co-Notes", "Co-Notes offre la possibilité de prendre des notes de manière collaborative avec vos collègues en temps réel. Vous pouvez notamment créer des modèles de notes prédéfinis et devenir le créateur de ces modèles. ", ["NextJS", "Socket", "Zod", "Prisma", "NextAuth", "Shadcn"], "https://co-notes.fr", "../assets/images/co-note.png"];

$dataJalla = ["Jalla Mulhouse", "Jalla Mulhouse est un site axé sur la promotion du linge de maison, offrant une gamme complète d'outils administratifs pour la gestion des produits, des promotions, du menu, et bien plus encore. Le site est hautement personnalisable, permettant une adaptation presque complète selon les besoins.", ["NextJS", "Tailwind", "NextAuth", "ShadCN"], "https://jalla-mulhouse.fr", "../assets/images/jalla.png"];


/**
 * CREATE PROJECT WITH DATAS
 */
$eduFiche = new project($dataEduFiche[0], $dataEduFiche[1], $dataEduFiche[2], $dataEduFiche[3], $dataEduFiche[4]);

$coNotes = new project($dataCoNotes[0], $dataCoNotes[1], $dataCoNotes[2], $dataCoNotes[3], $dataCoNotes[4]);

$jallaMulhouse = new project($dataJalla[0], $dataJalla[1], $dataJalla[2], $dataJalla[3], $dataJalla[4]);


/**
 * TAB OF PROJECT
 */
$projects = [$eduFiche, $coNotes, $jallaMulhouse];
if (isset($_GET["id"]) and $_GET["id"] < sizeof($projects) and $_GET["id"] >= 0)
    $project = $projects[$_GET['id']];
else
    header("location:../");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Robin Pluviaux | Projects</title>
</head>

<body>
    <div id="return-logo" onclick="returnHome()">
        <div class="line one"></div>
        <div class="line two"></div>
    </div>
    <div class="project">
        <div class="left-project">
            <img src="<?= $project->picture ?>" alt="">
        </div>
        <div class="right-project">
            <div class="right-project-title">
                <h2><?= $project->title ?></h2>
            </div>
            <div class="right-project-categories">
                <?php
                foreach ($project->categories as $c) {
                    echo ('<span class="category">' . $c . '</span>');
                }
                ?>
            </div>
            <div class="right-project-description">
                <?= $project->description ?>
            </div>
            <div class="right-project-link">
                <a href="<?= $project->link ?>">View Project</a>
            </div>

        </div>
    </div>

    <!-- SCRIPTS-->
    <script src="../index.js"></script>
</body>

</html>