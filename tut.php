<?php

if(isset($_POST['submit'])){
 
try

    {

    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=register_user;charset=utf8', 'root', '');

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

	 

    $my_Insert_Statement = $bdd->prepare("INSERT INTO enter_user(username, password) VALUES (:username, :password)");

      $my_Insert_Statement->bindParam('username', $username);
      $my_Insert_Statement->bindParam('password', $password);
      $my_Insert_Statement->execute();

    }
    catch(Exception $e)
    {
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());

    }

}


?>

 <!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>debut</title>
      <style type="text/css">
            body{
                  background-image:url(ilphant.jpg);
            } 
            h1{
                  color: yellow;
            }
            .clock{
                  position: absolute;
                  top: 10%;
                  left: 50%;

                  transform: translateX(-50%) translateY(-25%);
                  color: #fff;
                  font-size: 80px;
                  border: 1px solid #ccc;
                  padding: 0px 5px 0px 5px;
            }

      </style>
</head>
<body>

      <h1>Bienvenue</h1>

      <div id="MyClockDisplay" class="clock"></div>

            <script type="text/javascript">
                  function showTime(){
                        var date = new Date();
                        var h = date.getHours(); //0-23
                        var m = date.getMinutes(); //0-59
                        var s = date.getSeconds();//0-59
                        var session = "AM"

                        if(h == 0){
                              h = 12;
                        }

                        if(h > 12){
                              h = h-12;
                              session = "PM";
                        }
                        h = (h < 10) ? "0" + h : h;
                        m = (m < 10) ? "0" + m : m;
                        s = (s < 10) ? "0" + s : s;  

                        var time = h +":" + m + ":" + s + " " + session;
                        document.getElementById("MyClockDisplay").innerText = time;
                        document.getElementById("MyClockDisplay").textContent = time;

                        setTimeout(showTime, 1000);
                  }
                  showTime();
            </script>

           <div>
           	<p>
           		Hello!!
           	</p>
           </div>
           <br>
           <div>
                 <a href="" class="blockoPayBtn" data-toggle="modal" data-uid=ffbd834660134569><img width=240 src="https://www.blockonomics.co/img/pay_with_bitcoin_medium.png"></a>

                 <script src="https://www.blockonomics.co/js/pay_button.js"></script>

           </div>



            

</body>
</html>


