<?php include("header.php"); ?>
<table id="structure">
  <tr>
    <td id="navigation">

        <a href="http://supremecourtofindia.nic.in/" target="_blank">Supreme Court of India</a><br><br>
        <a href="https://www.supremecourt.uk/current-cases/" target="_blank">Recent Cases</a><br><br>
        <a href="http://topyaps.com/top-10-famous-court-cases-in-india" target="_blank">Some famous Indian Cases</a><br><br>

    </td>
    <td align="center" id="page">
      <h2><u>NYAYAbandhu</u></h2>
      <?php
        $email=$_POST['email'];
        $desc=$_POST['desc'];
        $state=$_POST['state'];
        $to="vibhorporwal99@gmail.com";
        $message="Sir,I have been stuck in a big problem.Please provide some aid.I am from $state.My case description:$desc";
        if(mail($to,"Help Wanted",$message,"From:$email"))
        {
            echo "Your mail has been sent.You will be contacted by our expert shortly";
        }
        else echo "Unable to send your request";

      ?>

    </td>
  </tr>
</table>
<?php include("footer.php"); ?>
