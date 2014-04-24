<?php
    header('Content-Type: text/html; charset=utf-8'); 
    include '../data.php';
            $data=mysql_query("SELECT * FROM posts WHERE postID=" . $_GET['postID']);
            if(!$data) echo "COULDN'T QUERY";
            $info = mysql_fetch_array($data);
       ?>     
    
<html>
<body>
 
 <div class="container">

 
 <form role="form" action="edit-process.php" method="POST">
    <input type="hidden" name="postID" value="<?php echo $_GET['postID']; ?>">
    <div class="form-group">
        <label for="date" class="control-label">Date:</label>
        <input type="text" name="date" class="form-control" value="<?php echo $info['date']; ?>" style="width: 120px;">
    </div>
    
    <div class="form-group ">
        <label for="headline" class="control-label">Headline:</label>
        <input type="text" name="headline" class="form-control" value="<?php echo $info['headline']; ?>">
    </div>
    
    <div class="form-group ">
        <label for="text" class="control-label">Post:</label>
        <textarea class="form-control" rows="25" name="text" style="width: 700px;"><?php echo $info['text']; ?></textarea>
    </div>
    <div class="form-group ">
        <label for="excerpt" class="control-label">Excerpt:</label>
        <textarea class="form-control" rows="5" name="excerpt"><?php echo $info['excerpt']; ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


    

      <div class="footer">
        <p>&copy; 2014</p>
      </div>

    </div> <!-- /container -->



    
    
    
    
    

  </body>
</html>

