<?php include("header.php"); ?>
<table id="structure">
  <tr>
    <td id="navigation">

      <a href="http://supremecourtofindia.nic.in/" target="_blank">Supreme Court of India</a><br><br>
      <a href="https://www.supremecourt.uk/current-cases/" target="_blank">Recent Cases</a><br><br>
      <a href="http://topyaps.com/top-10-famous-court-cases-in-india" target="_blank">Some famous Indian Cases</a><br><br>

    </td>
    <td align="center" id="page">
      <h2>NYAYAbandhu</h2>

        Similar Cases:<br>
          <?php
          $case=$_POST['cname'];
            echo "<a target=_blank href=https://indiankanoon.org/search/?formInput={$case}%20%20+doctypes:judgments>Some previous ".$case." cases in India</a>"."<br>"."<br>";
            echo "<a target=_blank href=https://indiankanoon.org/search/?formInput={$case}%20%20+doctypes:laws>Laws in Indian Constitution related to "."$case"." </a>"."<br>"."<br>";
          ?>
      <form method="post" action="mailto.php">
        Email: <input type="text" name="email">  State: <input type="text" name="state"><br><br>
        Case Description:<br>
        <textarea name="desc" rows="4" columns="6"></textarea><br><br>
        Mail an expert:<br><br>
        <input type="submit" name="Mail">
      </form>


    </td>
  </tr>
</table>
<?php include("footer.php"); ?>
