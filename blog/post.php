	<?php	include 'data.php';
                include 'header.php';
        ?>
 
 

<div class="container" >
    <?php
        $data=mysql_query("SELECT * FROM posts WHERE postID=" . $_GET['postID']);
        while($info = mysql_fetch_array($data))
            {
            echo "<h2 class='headline'>" . $info['headline'] . "</h2>";    //  Prints a headline, builds link to full post
            echo "<p class='datestamp'>" . date('F j, Y',strtotime($info['post_date'])) . "</p>";        //  Prints the date; the strtotime() function is needed because SQL stores
            echo "<div class='article'>" . $info['text'] . "</div>";                                           //    the dates in a format PHP isn't used to.
            }
?>
    

      <div class="footer">
        <p>&copy; 2014</p>
      </div>

    </div> <!-- /container -->


  </body>
</html>
