<?php include("header.php"); ?>
<table id="structure">
  <tr>
    <td id="navigation">

        <a href="">Supreme Court of India</a><br><br>
        <a href="">Recent Cases</a><br><br>
        <a href="">Some famous Indian Cases</a><br><br>

    </td>
    <td align="center" id="page">
      <h2>NYAYAbandhu</h2>

        Similar Cases:<br>
          <?php
            $case=$_POST['cname'];
            echo "<a href=https://indiankanoon.org/search/?formInput={$case}%20%20+doctypes:judgments>Some previous ".$case." cases in India</a>"."<br>";
            echo "<a href=https://indiankanoon.org/search/?formInput={$case}%20%20+doctypes:laws>Laws in Indian Constitution related to "."$case"." </a>"."<br>";
            


           ?>


    </td>
  </tr>
</table>
<?php include("footer.php"); ?>
