<html>
<head></head>
<body>
  <form name="Checkbox" method="post">
  <input type="checkbox" name="agree">AGREE TERMS AND CONDITION<br>
  <input type="Submit"><br>
</body>

<?php
    $c = $_POST["agree"];
    echo "Done: " .$c;
?>
</html>