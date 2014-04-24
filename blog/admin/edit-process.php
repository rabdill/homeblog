<?php
    include '../data.php';                  

                
                $headline = mysql_escape_string($_POST['headline']);
                $text = mysql_escape_string($_POST['text']);
                $excerpt = mysql_escape_string($_POST['excerpt']);
                $query="UPDATE posts SET date ='". $_POST['date'] . "', headline='" . $headline . "', text='" . $text . "', excerpt='" . $excerpt . "' WHERE postID='" . $_POST['postID'] . "'";
                echo "<br><pre>" . $query . "</pre><br>";
                $data = mysql_query($query);
                if($data == false) { echo "<strong><font color=red>Failed to edit article: ";
								die(mysql_error());
								echo "</strong></font><br><br>";		}
	else echo "Successfully edited article.<br><br>";
                
        ?>
 
 

<a href="/blog/home.php">Back to home</a>

      <div class="footer">
        <p>&copy; 2014</p>
      </div>

    </div> <!-- /container -->



    
    
    
    
    

  </body>
</html>

