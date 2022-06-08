<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


require '../vendor/autoload.php';

require 'db.php';
$app = new \Slim\App;
$user= null;
$_SESSION['idUser']=null;

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    
    return $response->withStatus(200)->withHeader('content-type', 'application/json');
      

    
});

$app->get('/auth', function(Request $request, Response $response) use ($app){
    session_start();
    $name = $request->getParam('user');
    $pass = $request->getParam('pass');
    $sql = "SELECT * from `users_good` WHERE `name` = :nume and `password` = :pass";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':nume',$name);
        $stmt->bindParam(':pass',$pass);
        $stmt->execute();
        if($stmt->execute()){
            if($stmt->rowCount()==1){
                $result=$stmt->fetch(PDO::FETCH_ASSOC);
                
                
                $idUser = $result["id"];
                $_SESSION['idUser']=$idUser;
                //$app->idUser = $idUser;
                
                return $response->withStatus(200)->withHeader('Location', '/GoodFoods.php');
                
            }
            else{
                return $response->withStatus(500)->withHeader('Location', '/Login.php');
            }
        }
        
        
        
        
            
        
        $db = null;
        
        
    }catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

$app->get('/user_recipes/{id}', function(Request $request, Response $response, array $args){
    session_start();
    $id = $args['id'];
    $sql = "SELECT * FROM `recipes` WHERE idUser = :idUser";
    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':idUser',$id);
        $stmt->execute();
        /*
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $_SESSION['idRecipe']=$row['id'];
            $_SESSION['nameR']=$row['name'];
            $_SESSION['instruc']=$row['instruction'];
            $_SESSION['tip']=$row['tip'];
            $_SESSION['likes']=$row['likes'];
        }
        */
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $db = null;

        
        
        return $response->withStatus(200)->write(json_encode($result));
    }catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

$app->get('/all_recipes', function(Request $request, Response $response){
    
    
    $sql = "SELECT * FROM `recipes` ORDER BY `recipes`.`likes` DESC";
    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        
        $stmt=$db->query($sql);
        /*
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $_SESSION['idRecipe']=$row['id'];
            $_SESSION['nameR']=$row['name'];
            $_SESSION['instruc']=$row['instruction'];
            $_SESSION['tip']=$row['tip'];
            $_SESSION['likes']=$row['likes'];
        }
        */
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $db = null;

        
        
        return $response->withStatus(200)->write(json_encode($result));
    }catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

$app->post('/likes', function(Request $request, Response $response) {
    $idRecipe = $request->getParam('idRecipe');
    
    $sql = "UPDATE recipes set `likes` = `likes`+1 where `id` = :idRecipe";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':idRecipe',$idRecipe);
        
        
        if($stmt->execute()){
            $db = null;
            
            return $response->withStatus(302)->withHeader('Location', '/Top.php');
        }
        
        
        
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});

$app->post('/register', function(Request $request, Response $response) {
    $name = $request->getParam('user');
    $pass = $request->getParam('pass');
    $sql = "INSERT INTO " . '`users_good`' . "
    SET
        name = :nume,
        password = :pass";

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':nume',$name);
        $stmt->bindParam(':pass',$pass);

        if($stmt->execute()){
            $db = null;
            
            return $response->withStatus(302)->withHeader('Location', '/Login.php');
        }
        
        
        
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});


$app->post('/recipe', function(Request $request, Response $response){
    session_start();
    $tip = $request->getParam('tip');
    $name = $request->getParam('nume');
    $pasii = $request->getParam('pasii');
    $name = $request->getParam('nume');
    $sql = 'INSERT INTO recipes 
    SET
        idUser = :idUser,
        name = :name,
        instruction = :pasii,
        tip = :tip,
        likes = 0';
        

    try{
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':idUser',$_SESSION['idUser']);
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':pasii',$pasii);
        $stmt->bindParam(':tip',$tip);

        if($stmt->execute()){
            $db = null;
            
            return $response->withStatus(302)->withHeader('Location', '/NewRecipe.php');
        }
        $db = null;
        
        
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
});


$app->run();
