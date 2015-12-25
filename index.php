<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta property="og:title" content="Calvin and Hobbs - A Calvin a Day" />
<meta property="og:site_name" content="Calvin and Hobbs" />
<meta property="og:url" content="Calvin and Hobbs" />

<meta name="description" content="Calvin and Hobbs">
<meta name="keywords" content="Calvin,Hobbs">
</head>
<body>
<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : 'your-app-id',
          xfbml      : true,
          version    : 'v2.1'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<p style="font-size:30px;"><strong>A Calvin a day...</strong></p>

<?php
   $dir = "img/";
   $images = scandir($dir);
   $i = rand(2, sizeof($images)-1);
?>

<img height="125%" src="https://s3-eu-west-1.amazonaws.com/calvin.tty0.me/<?php echo $images[$i]; ?>" alt="Calvin and Hobbs" />
<br/>
<?php
list ($iname, $ext) = explode(".", $images[$i]);
?>
Direct Link<input size="45" type="text" value="<?php echo "http://". $_SERVER['SERVER_NAME'] . "/i/$iname" ; ?>">

<form>
<input type=button  style="font-size:20px; height:50px; width:200px" value="One More..."  onClick="window.location.reload()">
</form> 
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
