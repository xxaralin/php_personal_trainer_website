<!DOCTYPE html>
 <?php include "proje_baglantı.php"; ?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
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
                <h1>İletişim</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1154786.3070130723!2d36.2646647897369!3d55.57691343985096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2sMoskova%2C%20Rusya!5e0!3m2!1str!2str!4v1600427127694!5m2!1str!2str" width="" height="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                <section class="section1">

                    <div class="rom">
                        <div>                        
                            <label for="">Adınız</label>
                            <input type="text" placeholder="Adınızı Giriniz"> 
                        </div>
                    </div>

                    <div class="rom">
                        <div>
                            <label for="">Soyadınız</label>
                            <input type="text" placeholder="Soyadınızı Giriniz"> 
                        </div>
                    </div>

                    <div class="rom">
                        <div>
                            <label for="">Telefon</label>
                            <input type="text" placeholder="Telefon Numarası Giriniz"> 
                        </div>
                    </div>

                    <div class="rom">
                        <div>
                            <label for="">E-mail</label>
                            <input type="text" placeholder="E-mail Giriniz"> 
                        </div>
                    </div>                   

                    <div class="rom">
                        <div >
                            <label for="">Mesajınız</label>
                            <textarea name="" id="" cols="30" rows="5" placeholder="Mesajınız Giriniz..."></textarea> 
                        </div>
                    </div>

                    <div class="rom">
                        <input type="submit" value="GÖNDER" >
                    </div>
                    
                    
                   
                </section>



            </main>


        </section>
    
        <footer>Tüm Hakları Saklıdır &copy; | 2020</footer>
    
    
    </div>



</body>
</html>