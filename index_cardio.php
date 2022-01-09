<?php include "proje_baglantı.php"; ?> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CARDIO</title>
        <link rel="stylesheet"href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div id="social">
            <font>aralin fitness | <span>fitness at home</span></font>
    
            <i class="fas fa-search"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-google"></i> 
        </div> 

        <div id="container">
            <header>
                
                <?php
                    $data = mysqli_fetch_assoc( mysqli_query($con,"SELECT * FROM `images` WHERE name='header'"));       
                            echo '             
                            <img id="headerResim" src="data:image/jpeg;base64,'.base64_encode($data['img']).'" >';  
                    ?>
                </header>
            
            <section>
                <nav>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Anasayfa</a></li>
                        <li><a href="hakkimizda.php"><i class="fa fa-users" aria-hidden="true"></i>Hakkımızda</a></li>
                        <li><a href="galeri.php"><i class="fa fa-object-group" aria-hidden="true"></i>Galeri</a></li>
                        <li><a href="iletisim.php"><i class="fa fa-phone" aria-hidden="true"></i>İletişim</a></li>
                        <li><a href="login.php"><i class="fa fa-users" aria-hidden="true"></i>Admin Paneli</a></li>
                    </ul>
                </nav>
                <main>        
                    <form method="post" action="cardio_baglantı.php">
                        <center>
                        <table>
                            <tr>
                                <td>ADINIZI GİRİNİZ:</td>
                                <td><input type="text" value="Adınız" name="name"></td>
                            </tr>
                            <tr>
                                <td>BOYUNUZU GİRİNİZ(cm)</td>
                                <td><input type="text" value="Boyunuz" name="height"></td>
                            </tr>
                            <tr>
                                <td>KİLONUZU GİRİNİZ(kg)</td>
                                <td><input type="text" value="Kilonuz" name="weight"></td>
                            </tr>
                            
                            <tr>
                                <td>SEVİYENİZ?</td>
                                <td><select name="levels">
                                    <option name="level_beginner" value="Beginner">başlangıç</option>
                                    <option name="level_intermediate" value="Intermediate">orta</option>
                                    <option name="level_advanced" value="Advanced">ileri</option>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input name="send" type="submit" value="Bana uygun hareketleri bul"></td>
                            </tr>
                            
                        </table>
                        </center>
                    </form>
                </main>
            </section>
            <footer>Tüm Hakları Saklıdır &copy; | 2021</footer>
        </div>
    </body>
</html>
