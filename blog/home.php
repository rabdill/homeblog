	<?php	include 'data.php';
                include 'header.php';
        ?>
 
 

<div class="container" >
    <?php
        $data=mysql_query("SELECT * FROM posts ORDER BY date DESC");
        while($info = mysql_fetch_array($data))
            {
            $fullPost=true;
                if($info['text'] == $info['excerpt']) $fullPost=false;  //  If the excerpt text is the entire post
            echo "<h2 class='headline'>";
                if($fullPost) echo"<a href='post.php?postID=" . $info['postID'] . "'>" . $info['headline'] . "</a></h2>";
                else echo $info['headline'] . "</h2>";
            echo "<p class='datestamp'>" . date('F j, Y',strtotime($info['date'])) . "</p>";        
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

