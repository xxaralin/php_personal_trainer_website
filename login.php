<html>  
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giriş</title>
        <link rel="stylesheet"href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
    </head>  
<body> 
<?php include "proje_baglantı.php"; ?>  

<div id="social">
            <font>aralin fitness | <span>fitness at home</span></font>
    
            <i class="fas fa-search"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-google"></i> 
        </div>  
    <div id = "container">  
        <header>                
            <?php
            $data = mysqli_fetch_assoc( mysqli_query($con,"SELECT * FROM `images` WHERE name='header'"));       
                    echo '             
                    <img id="headerResim" src="data:image/jpeg;base64,'.base64_encode($data['img']).'" >';  
            ?>
        </header>
        <section >
            <nav>
                <ul>
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Anasayfa</a></li>
                    <li><a href="hakkimizda.php"><i class="fa fa-users" aria-hidden="true"></i>Hakkımızda</a></li>
                    <li><a href="galeri.php"><i class="fa fa-object-group" aria-hidden="true"></i>Galeri</a></li>
                    <li><a href="iletisim.php"><i class="fa fa-phone" aria-hidden="true"></i>İletişim</a></li>
                    <li><a href="login.html"><i class="fa fa-users" aria-hidden="true"></i>Admin Paneli</a></li>
                </ul>
            </nav>

            <main>

            <h1>Login</h1>  
            <form name="f1" action = "validate.php" onsubmit = "return validation()" method = "POST">  
            <section class="section1">
                <div class="rom">  
                    <label> Kullanıcı adı: </label>  
                    <input type = "text" id ="user" name  = "name" />  
                </div> 
                <div class="rom"> 
                    <label> Şifre: </label>  
                    <input type = "password" id ="psw" name  = "psw" />  
                </div>  
                <div class="rom">   
                    <input type =  "submit" id = "btn" value = "Login" />  
                </div> 
            </form> 
            </section> 
            </main>
    </div>  
       
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script> 
        </main>
    </section> 
</body>     
</html>  