<?php




if(isset($_POST['publish'])){
    
    $sql = "
    INSERT INTO `blogposts`(`date`, `headline`, `postText`) VALUES (NOW(),:headline,:postText)
    ";
    
    $statement = $pdo -> prepare($sql);
    
    $statement->bindValue(':headline', $_POST['headline']);
    $statement->bindValue(':postText', $_POST['postText']);
    
    $statement->execute();
    
    if($statement){
        $success = true;
    }

   
}


