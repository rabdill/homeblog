	<?php	include 'data.php';
                include 'header.php';
        ?>
 
 

<div class="container" >
    <?php
        $data=mysql_query("SELECT * FROM posts ORDER BY date DESC");
        while($info = mysql_fetch_array($data))
            {
            echo "<h2 class='headline'><a href='post.php?postID=" . $info['postID'] . "'>" . $info['headline'] . "</a></h2>";  
            echo "<p class='datestamp'>" . date('F j, Y',strtotime($info['date'])) . "</p>";        
            echo "<div class='article'>" . $info['excerpt'] . " <em><a href='post.php?postID=" . $info['postID'] . "'>Read more...</a></em></p></div>";                                           
                    //      *********** The excerpt ends with a "</p> because each excerpt should leave an unclosed <p> tag at the end, so the "Read more...." can be appended.******************
            }
?>
    

      <div class="footer">
        <p>&copy; 2014</p>
      </div>

    </div> <!-- /container -->



    
    
    
    
    

  </body>
</html>

