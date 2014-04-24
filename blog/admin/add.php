<?php header('Content-Type: text/html; charset=utf-8'); ?>
<html>
<body>
 
 <div class="container">

 
 <form role="form" action="add-process.php" method="POST">
    <div class="form-group ">
        <label for="date" class="control-label">Date:</label>
        <input type="text" name="date" class="form-control" value="<?php echo date("Y-m-d"); ?>" style="width: 120px;">
    </div>
    <div class="form-group ">
        <label for="headline" class="control-label">Headline:</label>
        <input type="text" name="headline" class="form-control">
    </div>
    
    <div class="form-group ">
        <label for="text" class="control-label">Post:</label>
        <textarea class="form-control" rows="50" name="text" style="width: 700px;"></textarea>
    </div>
    <div class="form-group ">
        <label for="excerpt" class="control-label">Excerpt:</label>
        <textarea class="form-control" rows="5" name="excerpt"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


    

      <div class="footer">
        <p>&copy; 2014</p>
      </div>

    </div> <!-- /container -->



    
    
    
    
    

  </body>
</html>

