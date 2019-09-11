<?php 
      $result = "Result";

      echo "<input type='text' id='result_a' value='".$result."' placeholder='Result'>";
      echo "<button onclick='click()'>Show Result</button>";

      $show = (string) "<p id=\"view\"/>";
      echo "<br>".$show."<br>";

 ?>

 <script type="text/javascript">
      
      function click(){
        var result = document.getElementById("result_a").value;
        $("#view").text(result);
      }

 </script>