<?php 
    session_start();
    require_once 'config.php';

    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT pseudo, email, date_insc, password FROM utilisateurs WHERE email = ?');
        $pseudo  = $bdd->prepare('SELECT pseudo FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data['password']))
                {
                    $_SESSION['user'] = $data['email'];
                    $_SESSION['pseudo'] =$data['pseudo'];
                    $_SESSION['date'] =$data['date_insc'];  
                    $_SESSION['nbr'] ="0";
                    header('Location: index2.php');
                    die();
                }else{ header('Location: index.php?login_err=password'); die(); }
            }else{ header('Location: index.php?login_err=email'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
    }
