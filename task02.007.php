<!DOCTYPE html>
<html>
<head>

<title>  </title>


</head>
<body>

  <?php
  $html =
  '  <a href="http://www.someaddress.org">Not Secure Url</a> <br>
      <a href="http://www.someaddress.org">Not Secure Url</a>';


  $sablon = '/(<a href="http:)/';
  $rez = preg_replace($sablon, '<a href="https:', $html);
  echo($rez);

 ?>

</body>

</html>
