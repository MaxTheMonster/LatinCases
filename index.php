<?php
$endingPl = array("ae", "as", "arum", "is", "is");
$endingSG = array("a", "am", "ae", "ae", "a");
$declension = "1st";
?>
<html>
<head>
  <title>Latin Cases</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
  <section class="case">
    <h1 id="title"><?php echo $declension; ?></h1>

    <h1 id="pltitle">Plural</h1>
    <h1 id="sgtitle">Singular</h1>
    <div class="line">
      <h2 class="plural">ancill<strong><?php echo $endingPl[0]; ?></strong></h2>
      <h2 class="sing">ancill<strong><?php echo $endingSG[0]; ?></strong></h2>
      <h1 class="nominative">Nominative</h1>
    </div>
    <div class="line">
      <h2 class="plural">ancill<strong><?php echo $endingPl[1]; ?></strong></h2>
      <h2 class="sing">ancill<strong><?php echo $endingSG[1]; ?></strong></h2>
      <h1 class="accusative">Accusative</h1>  
    </div>
    <div class="line">
      <h2 class="plural">ancill<strong><?php echo $endingPl[2]; ?></strong></h2>
      <h2 class="sing">ancill<strong><?php echo $endingSG[2]; ?></strong></h2>
      <h1 class="genative">Genative</h1>
    </div>
    <div class="line">
      <h2 class="plural">ancill<strong><?php echo $endingPl[3]; ?></strong></h2>
      <h2 class="sing">ancill<strong><?php echo $endingSG[3]; ?></strong></h2>
      <h1 class="dative">Dative</h1>
    </div>
    <div class="line">
      <h2 class="plural">ancill<strong><?php echo $endingPl[4]; ?></strong></h2>
      <h2 class="sing">ancill<strong><?php echo $endingSG[4]; ?></strong></h2>
      <h1 class="ablative">Ablative</h1>
    </div>
  </section>

  <input type="button" id="prev" value="PREV DECLENSION" alt="next declension"> 
  <input type="button" id="next" value="NEXT DECLENSION" alt="next declension"> 
  <script type="text/javascript" src="js.js"></script>
</body>
</html>