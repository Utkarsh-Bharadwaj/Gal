<?php
    // session_start();
    session_start();
    if (!isset($_SESSION["image"])) {
        $_SESSION["image"] = array();  
    }
    if ( move_uploaded_file($_FILES["picture"]["tmp_name"], "uploads/" . $_FILES["picture"]["name"])) {
        echo "The file has been uploaded.";
       
        array_push($_SESSION['image'], $_FILES["picture"]['name']);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>

#naming {

    margin-top: 12px;

}

    </style>

</head>
<body>
    <div id="wrapper">
        <div class="container1">
            <h1>Image Gallery</h1>
            <p>This page displays the list of uploaded images.</p>
            <form action="" method="post" enctype="multipart/form-data">
            <label for="picture">Picture:</label>
            <input type="file" name="picture" id="picture">
            <input class="btn" type="submit" value="Upload Image" name="submit"><hr>
            </form>
        </div>
        <div>
            <?php
            foreach($_SESSION["image"] as $key => $val){
                
                echo "<div style='width:70%; display: inline;'>
                <img style='border:1px solid red;height:200px; margin-left:4%; margin-top:4%;' src='uploads/".$val."'>
                ".$val."
                </div>";
                
                
            }
            ?>
            <div id="naming"><php echo ($val);?></div>
    
        </div>
    </div>
</body>
</html>