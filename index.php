<html>
<head>
<title> 10.183.2.5/html</title>
<link rel ="stylesheet" type "text/css" href ="css/custom.css">
</head>

<?php
	
	error_reporting(0);
    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
		
		$l = "file1.png";
		if ($file == "image-development" || $file == "functiontoolkit" || $file == "img" || $file == "documents" | $file == "projects" || $file == "app"| $file == "menu" )$l = "directory.png";
		
        if ($file != "." && $file != ".."&& $file != "index.php" && $file != "css") 
        {
            $thelist .= '<img src = img/'.$l.'><a href="'.$file.'"class = "bttn bttn2" target = "_blank">'.$file.'</a><br />';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">	
<div class="header">
  <img src = "img/cd.png" >
  <?php  echo "Today is " . date("m/d/Y"); ?>
</div>
<header><span style="color:#ff7f00; background-color:#fff";>Cynthia HTML</span></header>

<hr />
<p>Files:</p>
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>
<center>

</center>
</footer>

</body>
</head>
