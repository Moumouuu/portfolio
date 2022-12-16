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

$dataLeMauvaisCoin = ["LeMauvaisCoin", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi optio explicabo non debitis repudiandae, maiores nostrum, laboriosam quod excepturi velit architecto voluptatem sed. Minus molestias officia sint inventore neque perferendis quos amet aperiam soluta, exercitationem laudantium delectus ex, sed quaerat consequuntur ullam? Alias, quasi. Eaque voluptas consequuntur blanditiis dolore sint quasi? Quae delectus tenetur vero voluptates placeat provident consequuntur corrupti quisquam consectetur omnis rem facilis dolorum fuga ratione pariatur similique in a tempore, eaque esse ipsam doloribus ad ullam quod! Exercitationem a, provident", ["Symfony", "Bootstrap"], "https://lemauvaiscoin.pluviaux.fr", "../assets/images/lemauvaiscoin.png"];
$dataZikMe = ["ZikMe", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi optio explicabo non debitis repudiandae, maiores nostrum, laboriosam quod excepturi velit architecto voluptatem sed. Minus molestias officia sint inventore neque perferendis quos amet aperiam soluta, exercitationem laudantium delectus ex, sed quaerat consequuntur ullam? Alias, quasi. Eaque voluptas consequuntur blanditiis dolore sint quasi? Quae delectus tenetur vero voluptates placeat provident consequuntur corrupti quisquam consectetur omnis rem facilis dolorum fuga ratione pariatur similique in a tempore, eaque esse ipsam doloribus ad ullam quod! Exercitationem a, provident", ["PHP", "SCSS"], "https://zikme.pluviaux.fr", "../assets/images/zikme.png"];
$dataAphrodites = ["Aphrodites", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi optio explicabo non debitis repudiandae, maiores nostrum, laboriosam quod excepturi velit architecto voluptatem sed. Minus molestias officia sint inventore neque perferendis quos amet aperiam soluta, exercitationem laudantium delectus ex, sed quaerat consequuntur ullam? Alias, quasi. Eaque voluptas consequuntur blanditiis dolore sint quasi? Quae delectus tenetur vero voluptates placeat provident consequuntur corrupti quisquam consectetur omnis rem facilis dolorum fuga ratione pariatur similique in a tempore, eaque esse ipsam doloribus ad ullam quod! Exercitationem a, provident", ["Symfony", "Bootstrap"], "https://aphrodites.pluviaux.fr", "../assets/images/aphrodites.png"];
$dataKouisap = ["Kouisap", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi optio explicabo non debitis repudiandae, maiores nostrum, laboriosam quod excepturi velit architecto voluptatem sed. Minus molestias officia sint inventore neque perferendis quos amet aperiam soluta, exercitationem laudantium delectus ex, sed quaerat consequuntur ullam? Alias, quasi. Eaque voluptas consequuntur blanditiis dolore sint quasi? Quae delectus tenetur vero voluptates placeat provident consequuntur corrupti quisquam consectetur omnis rem facilis dolorum fuga ratione pariatur similique in a tempore, eaque esse ipsam doloribus ad ullam quod! Exercitationem a, provident", ["VueJs"], "https://kouisap.pluviaux.fr", "../assets/images/kouisap.png"];
$dataWeather = ["Weather", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi optio explicabo non debitis repudiandae, maiores nostrum, laboriosam quod excepturi velit architecto voluptatem sed. Minus molestias officia sint inventore neque perferendis quos amet aperiam soluta, exercitationem laudantium delectus ex, sed quaerat consequuntur ullam? Alias, quasi. Eaque voluptas consequuntur blanditiis dolore sint quasi? Quae delectus tenetur vero voluptates placeat provident consequuntur corrupti quisquam consectetur omnis rem facilis dolorum fuga ratione pariatur similique in a tempore, eaque esse ipsam doloribus ad ullam quod! Exercitationem a, provident", ["VueJs", "API"], "https://weather.pluviaux.fr", "../assets/images/weather.png"];
$dataNerdit = ["Nerd.It", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi optio explicabo non debitis repudiandae, maiores nostrum, laboriosam quod excepturi velit architecto voluptatem sed. Minus molestias officia sint inventore neque perferendis quos amet aperiam soluta, exercitationem laudantium delectus ex, sed quaerat consequuntur ullam? Alias, quasi. Eaque voluptas consequuntur blanditiis dolore sint quasi? Quae delectus tenetur vero voluptates placeat provident consequuntur corrupti quisquam consectetur omnis rem facilis dolorum fuga ratione pariatur similique in a tempore, eaque esse ipsam doloribus ad ullam quod! Exercitationem a, provident", ["HTML / CSS"], "https://nerdif.cf", "../assets/images/nerdit.png"];
$dataFlower = ["Flower", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi optio explicabo non debitis repudiandae, maiores nostrum, laboriosam quod excepturi velit architecto voluptatem sed. Minus molestias officia sint inventore neque perferendis quos amet aperiam soluta, exercitationem laudantium delectus ex, sed quaerat consequuntur ullam? Alias, quasi. Eaque voluptas consequuntur blanditiis dolore sint quasi? Quae delectus tenetur vero voluptates placeat provident consequuntur corrupti quisquam consectetur omnis rem facilis dolorum fuga ratione pariatur similique in a tempore, eaque esse ipsam doloribus ad ullam quod! Exercitationem a, provident", ["HTML / CSS"], "", "../assets/images/flower.png"];

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