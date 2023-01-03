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

$dataLeMauvaisCoin = ["LeMauvaisCoin", "LeMauvaisCoin est une copie de leboncoin, cette application reprend toutes les principales fonctionnalités de Leboncoin, création du compte, publication de post, système de messagerie etc. Le site est réalisé avec Symfony 6 et bootstrap.", ["Symfony", "Bootstrap"], "https://lemauvaiscoin.pluviaux.fr", "../assets/images/lemauvaiscoin.png"];
$dataZikMe = ["ZikMe", "ZikMe est un site fait en PHP. Le site permet de se créer un compte utilisateur et ensuite publier ses musiques ou bien écouter celles des autres. Vous pouvez aussi liker les musiques que vous aimez pour les faires monter dans le classement.", "../assets/images/zikme.png"];
$dataAphrodites = ["Aphrodites", "Aphrodites est une application faites en Symfony 6 et Bootstrap, dans le cadre de la nuit de l'info. Un événement national dans lequel un sujet commun est donné et les étudiants doit répondre à ce besoin de la meilleure des façons dans une nuit de code.", ["Symfony", "Bootstrap"], "https://aphrodites.pluviaux.fr", "../assets/images/aphrodites.png"];
$dataKouisap = ["Kouisap", "Kouisap est comme son nom l'indique un quiz (de Français) fait avec VueJS. Il y a 3 niveaux de difficultés croissante, il faut comptabiliser au minimum 6 réponses justes sur 10 pour passer au prochain niveau. Bonne chance !", ["VueJs"], "https://kouisap.pluviaux.fr", "../assets/images/kouisap.png"];
$dataWeather = ["Weather", "Weather est ma première application faites avec VueJS, un framework front. J'ai pu apprendre les bases d'un framework front, tel que l'utilité des composants. J'ai aussi dû utiliser une API de météo pour pouvoir récupérer les données météorologiques en temps réel et dans le monde entier.", ["VueJs", "API"], "https://weather.pluviaux.fr", "../assets/images/weather.png"];
$dataNerdit = ["Nerd.It", "NerdIt est un site de fast food en ligne sur le thème des Nerds et des geeks avec un univers bien distinct. J'ai appris à faire un curseur custom, des animations et comment gérer les positions Absolute et Relative. Ce projet a été réalisé à deux, dans le cadre de ma formation universitaire.", ["HTML / CSS"], "https://nerdif.cf", "../assets/images/nerdit.png"];
$dataFlower = ["Flower", "Flower est mon tout premier site en HTML / CSS et un peu de JS qui mérite d'avoir son site publié. C'est une boutique en ligne fictive qui nous présente différentes fleurs peu communes. Ce site m'a énormément fait progresser en CSS et HTML, j'apprécie tout particulièrement le design du site.", ["HTML / CSS"], "", "../assets/images/flower.png"];

/**
 * CREATE PROJECT WITH DATAS
 */
$leMauvaisCoin = new project($dataLeMauvaisCoin[0], $dataLeMauvaisCoin[1], $dataLeMauvaisCoin[2], $dataLeMauvaisCoin[3], $dataLeMauvaisCoin[4]);
$zikMe = new project($dataZikMe[0], $dataZikMe[1], $dataZikMe[2], $dataZikMe[3], $dataZikMe[4]);
$aphrodites = new project($dataAphrodites[0], $dataAphrodites[1], $dataAphrodites[2], $dataAphrodites[3], $dataAphrodites[4]);
$kouisap = new project($dataKouisap[0], $dataKouisap[1], $dataKouisap[2], $dataKouisap[3], $dataKouisap[4]);
$weather = new project($dataWeather[0], $dataWeather[1], $dataWeather[2], $dataWeather[3], $dataWeather[4]);
$nerdit = new project($dataNerdit[0], $dataNerdit[1], $dataNerdit[2], $dataNerdit[3], $dataNerdit[4]);
$flower = new project($dataFlower[0], $dataFlower[1], $dataFlower[2], $dataFlower[3], $dataFlower[4]);

/**
 * TAB OF PROJECT
 */
$projects = [$leMauvaisCoin, $zikMe, $aphrodites, $kouisap, $weather, $nerdit, $flower];
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