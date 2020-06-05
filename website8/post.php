<?php

    require('config/config.php');
    require('config/db.php');

    if(isset($_POST['delete'])){
        //get the form data 
                    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
                   
        
    $query= "DELETE FROM posts WHERE id = {$delete_id}";
        
        
                  if(mysqli_query($conn, $query)){
                     header('Location:'.ROOT_URL.'');
                    }else {
                        echo 'ERROR: '. mysqli_error($conn);
                    }
        }


    //get id
    $id = mysqli_real_escape_string($conn, $_GET['id']);

//creates a query
    $query = 'SELECT * FROM posts WHERE id = '.$id;

    //get the results
    $result= mysqli_query($conn, $query);

    //fetch data
    $post = mysqli_fetch_assoc($result);
          //  var_dump($posts);
    //FREE THE RESULT
    mysqli_free_result($result);


    //close connection
    mysqli_close($conn);
?>
    <?php include('inc/header.php'); ?>
    <div class="container">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>
        <h1><?php echo $post['title']; ?></h1>
            <small>Created on <?php echo $post['created_at']; ?>by <?php echo $post['author']; ?></small>
             <p><?php echo $post['body']; ?></p>  
             <hr>
             <form class="float-right" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
             </form>
             <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class= "btn btn-secondary">Edit</a>      
        <?php include('inc/footer.php'); ?>
    </div>
