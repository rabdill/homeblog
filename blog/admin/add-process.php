<?php
    include '../data.php';

                if(!$data) echo "<h2>ERROR: Could not choose schema.</h2>";                     

                
                $headline = mysql_escape_string($_POST['headline']);
                $text = mysql_escape_string($_POST['text']);
                $excerpt = mysql_escape_string($_POST['excerpt']);
                $query="INSERT INTO posts (post_date, headline, text, excerpt) VALUES ('" . $_POST['date'] . "', '" . $headline . "', '" . $text . "', '" . $excerpt . "')";
                echo "<br>" . $query . "<br>";
                $data = mysql_query($query);
                if($data == false) { echo "<strong><font color=red>Failed to add article: ";
								die(mysql_error());
								echo "</strong></font><br><br>";		}
	else echo "Successfully added article.<br><br>";
                
        ?>
 
 

<a href="/blog/home.php">Back to home</a><br>    
<a href="/blog/admin/add.php">Add another</a>    

      <div class="footer">
        <p>&copy; 2014</p>
      </div>

    </div> <!-- /container -->



    
    
    
    
    

  </body>
</html>

