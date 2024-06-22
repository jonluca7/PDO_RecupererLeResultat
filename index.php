<?php
require_once 'Game.php';

 try{
  
    $pdo= new PDO('mysql:host=localhost:3308;dbname=video_games', 'root', '');
    $search= '%';
    $sql= ('SELECT * FROM games WHERE name LIKE :search');
    $pdoStatement= $pdo->prepare($sql);
    $pdoStatement->bindvalue(':search', ($_GET['search']??'').$search, PDO::PARAM_STR);
    if($pdoStatement->execute())
    {
        while($user= $pdoStatement->fetchObject('Game')){
        echo $user->getFullDescription();
    }
}else{
    $errorInfo= $pdoStatement->errorInfo();
    echo $errorInfo[2];
}

}catch(PDOException $e){
echo "Impossible de se connecter à la basse de données";
}

?>