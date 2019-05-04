<!doctype html>
<html lang="en">
<head>
<?php
    readfile(__DIR__.'/../src/templates/header.html');
    readfile(__DIR__.'/../src/templates/style.html');
?>
</head>
<body class="reveal">
  <img class="sponsor" src="./img/logo-takeaway.png" />
  <!-- Any section element inside of this container is displayed as a slide -->
  <div class="slides">
<?php
    $files= glob(__DIR__.'/../src/slides/*.html');
    sort($files);

    $subject = '.html';
    if (isset($_GET['subject'])) {
        $subject = $_GET['subject'];
    }

    array_walk($files, function ($file) use ($subject){
        if (strpos($file, $subject) !== false) {
            readfile($file);
        }
    });
?>
  </div><!-- /slides -->
<?php readfile(__DIR__.'/../src/templates/footer.html'); ?>
</body>
</html>