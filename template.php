<?php
$case = "MAAAAAAAAAAX";
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
  
  <?php 
    while ( $case !== "" ) {
      echo '<a href="?gender= ' . $case . '" id="gender">';
    }

    ?></a>
    
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

  <a href="<?php echo $prevDeclension; ?>"><input type="button" class="prev" value="PREV DECLENSION" alt="next declension"></a>
  <a href="<?php echo $nextDeclension; ?>"><input type="button" class="next" value="NEXT DECLENSION" alt="next declension"></a>
  <script type="text/javascript" src="js.js"></script>
</body>
</html>