	<?php	include 'data.php';
                include 'header.php';
        ?>
 
 

<div class="container" >
    <?php
        $query = "SELECT * FROM posts WHERE DATEDIFF('" . date( 'Y-m-d', time()) . "', post_date) > -1 ORDER BY post_date DESC";

        $data=mysql_query($query);
        
         if($data == false) { echo "<strong><font color=red>Failed to fetch posts: ";
								die(mysql_error());
								echo "</strong></font><br><br>";		}
                                
                                
        while($info = mysql_fetch_array($data))
            {
            $fullPost=true;
                if($info['text'] == $info['excerpt']) $fullPost=false;  //  If the excerpt text is the entire post
            echo "<h2 class='headline'>";
                if($fullPost) echo"<a href='post.php?postID=" . $info['postID'] . "'>" . $info['headline'] . "</a></h2>";
                else echo $info['headline'] . "</h2>";
            echo "<p class='datestamp'>" . $info['post_date'] . "</p>";        
            echo "<div class='article'>" . $info['excerpt'];
                if($fullPost) echo " <em><a href='post.php?postID=" . $info['postID'] . "'> Read more...</a></em></p></div>";  
                else echo "</p></div>";
            
            
                                                    
                    //      *********** The excerpt ends with a "</p> because each excerpt should leave an unclosed <p> tag at the end, so the "Read more...." can be appended.******************
            }
?>
    

      <div class="footer">
        <p>&copy; 2014</p>
      </div>

    </div> <!-- /container -->



    
    
    
    
    

  </body>
</html>

