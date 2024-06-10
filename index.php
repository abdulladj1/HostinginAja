<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HostinginAja!</title>
</head>
<body>
    <?php
        require('header.php');
        if(isset($_GET['target']))
        {
            $target=$_GET['target'];
        } 
            else 
            {
                $target='home';
            }
        switch($target)
        {
            case 'home'   :
                require('home.php');break;
            case 'domain'  :
                require('domain.php');break;
            case 'hosting' :
                require('hosting.php');break;
            case 'vps' :
                require('vps.php');break;
            case 'addons' :
                require('addons.php');break;
            case 'login' :
                require('loginnew.php');break;
            case 'form' :
                require('form.php');break;
            case 'terima' :
                require('terima.php');break;
            default       :
                echo "<h2>PAGE NOT FOUND!!!</h2>";
        }
        require('footer.php');
    ?>
</body>
</html>