<!DOCTYPE html>
<html>
<head>
<?php
  $i = $_REQUEST['image'];
?>
<meta charset="UTF-8">
<meta property="og:title" content="Calvin and Hobbs - A Calvin a Day" />
<meta property="og:site_name" content="Calvin and Hobbs" />
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="image" />
<meta property="og:url" content="http://calvin.tty0.me/i/<?php echo $i; ?>" />
<meta property="og:image" content="http://d243ab1671d8bb4e0baf-0c2a37237cad3adf339f7865db59c809.r85.cf5.rackcdn.com/<?php echo $i; ?>.png" />
<meta property="fb:app_id" content="CalvinandHobbs" />
<meta name="description" content="Calvin and Hobbs">
<meta name="keywords" content="Calvin,Hobbs">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<p style="font-size:30px;"><strong>A Calvin a day...</strong></p>

<link rel="image_src" href="http://d243ab1671d8bb4e0baf-0c2a37237cad3adf339f7865db59c809.r85.cf5.rackcdn.com/<?php echo $i; ?>.png" />

<img height="125%" src="http://d243ab1671d8bb4e0baf-0c2a37237cad3adf339f7865db59c809.r85.cf5.rackcdn.com/<?php echo $i; ?>.png" alt="Calvin and Hobbs" />
<br/>
<div class="fb-like" data-href="http://calvin.tty0.me/i/<?php echo $i; ?>.png" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<hr>


<hr>
<table align="center">
  <tr>
    <td><a href="/">Home</a></td>
    <td>&nbsp;&nbsp;</td>
    <td><a href="http://en.wikipedia.org/wiki/Calvin_and_Hobbes">About</a></td>
    <td>&nbsp;&nbsp;</td>
    <td><a href="credits.html">Credits</a></td> 
  </tr>
</table>

</body>
</html>
