<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN</title>
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
                        <li><a href="admin.php"><i class="fa fa-users" aria-hidden="true"></i>Admin Paneli</a></li>
                    </ul>
                </nav>
                <main>
                    <div>
                        <h1>SAYFALARI DÜZENLEYİN</h1>
                    </div>
                    <div class="içerik">
                        <?php
                            $data = mysqli_fetch_assoc( mysqli_query($con,"SELECT * FROM `images` WHERE name='edit1'"));       
                            echo '<img src="data:image/png;base64,'.base64_encode($data['img']).'" class="rsm" usemap="#workmap1"  >';  
                        ?>
                        <h5 style="text-align:center;">HAKKIMIZDA SAYFASINI DÜZENLE</h5>   
                    </div> 

                    <div class="içerik">
                        <?php
                            $data = mysqli_fetch_assoc( mysqli_query($con,"SELECT * FROM `images` WHERE name='edit2'"));       
                            echo '<img src="data:image/png;base64,'.base64_encode($data['img']).'" class="rsm" usemap="#workmap2"  >';  
                        ?>
                        <h5 style="text-align:center;">GALERİ SAYFASINI DÜZENLE</h5>  
                    </div> 
                    

                    <map name="workmap2">
                        <area shape="rect" coords="0,0,500,400" alt="edit_galeri" href="edit_galeri.php">
                    </map>
                    <map name="workmap1">
                        <area shape="rect" coords="0,0,500,400" alt="edit_hak" href="edit_hakkimizda.php">
                    </map>
                   
                </main>
            </section>
            <footer>Tüm Hakları Saklıdır &copy; | 2021</footer>
        </div>   
    </body>
</html>
