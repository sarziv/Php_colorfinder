<?php
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <link rel="stylesheet" href="Css/square.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
//auto include all classes
foreach (glob("Class/*.php") as $filename)
{
    include ($filename);
}


$colorsMacth = new RowColFinder();
$mostConnected = new MostCommonColorConnected();
$longestConnection= new lowestCostWalk();

?>
<html>
<body class="font">
<h2 class="text-center">Block Connection Project(OOP)</h2>
<hr>
<div class="container d-flex justify-content-center">
    <div class="col-6">
        Connection example:
    </div>
    <div class="col-6">
    <div class="row">
        <div class="square-red "></div>
        <div class="square-redfront"></div>
        </div>
    </div>

</div>
<hr>
<div class="container d-flex justify-content-center">
    <div class="col-6">Generated blocks: </div>
    <div class="col-6">Description: </div>
</div>
<hr>
<div class="container d-flex justify-content-center">
 <?php $colorsMacth->connectedColors(4); ?>
</div>
<hr>
<div class="container d-flex justify-content-center">
    <?php $mostConnected->singleMaxConnected(4) ?>
</div>
<hr>
<div class="container d-flex justify-content-center">
    <h4 class="font-colorwalk">Color walking height:  </h4>
    <div class="square-red fontBig">1</div>
    <div class="square-blue fontBig">2</div>
    <div class="square-black-colorChange fontBig">3</div>
    <div class="square-green fontBig">4</div>
    <div class="square-yellow fontBig">5</div>

</div>
<hr>
<div class="container d-flex justify-content-center">
<div>
    <div class="entryblock"><i class="fas fa-arrow-right"></i></div>
</div>
    <?php $longestConnection->longestConnected(4) ?>
</div>
<hr>

</body>
</html>