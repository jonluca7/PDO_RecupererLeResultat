<?php
require_once 'Game.php';

 try{
  
    $pdo= new PDO('mysql:host=localhost:3308;dbname=video_games', 'root', '');
    $search= '%';
    $sql= ('SELECT * FROM games WHERE name LIKE :search');
    $statement= $pdo->prepare($sql);
    $statement->bindvalue(':search', $_GET['search'].$search, PDO::PARAM_STR);
    if($statement->execute())
    {
        while($user= $statement->fetchObject('Game')){
        echo $user->getFullDescription();
    }
}else{
    $errorInfo= $statement->errorInfo();
    echo $errorInfo[2];
}

}catch(PDOException $e){
echo "Impossible de se connecter à la basse de données";
}

?>