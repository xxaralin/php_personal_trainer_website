<!DOCTYPE html>
<?php include "proje_baglantı.php"; ?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda</title>
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
                    <li><a href="admin.php"><i class="fa fa-users" aria-hidden="true"></i>Admin Paneli</a></li>
                </ul>
            </nav>

            <main>
                <h1>Hakkımızda</h1>
                <?php
                $data = mysqli_fetch_assoc( mysqli_query($con,"SELECT * FROM `images` WHERE name='index_cardio'"));       
                        echo '             
                        <img id="hakkimizdaRSM" src="data:image/jpeg;base64,'.base64_encode($data['img']).'" >';
                        
                ?>

                <?php
                $yazi1 = mysqli_fetch_assoc( mysqli_query($con,"SELECT * FROM `contents` WHERE name='hak_biz_kimiz'"));  ?>              
                <h3>Biz Kimiz | <a href="edit_hakkimizda2.php?id= <?php echo $yazi1['id']; ?>">düzenle</a></h3>
                <p class="hakYazi">
                    <?php       
                    echo $yazi1['text'];
                    ?>
                </p>
               
                <?php
                    $yazi2 = mysqli_fetch_assoc( mysqli_query($con,"SELECT * FROM `contents` WHERE name='hak_kurumsal'"));?>
                <h3>Kurumsal |<a href="edit_hakkimizda2.php?id=<?php echo $yazi2['id']?>">düzenle</a> </h3>
                <p class="hakYazi">
                <?php echo $yazi2['text']; ?>
                </p>              
                
                <?php
                $yazi3 = mysqli_fetch_assoc( mysqli_query($con,"SELECT * FROM `contents` WHERE name='hak_vizyon'"));?>
                <h3>Vizyon&Misyon | <a href="edit_hakkimizda2.php?id=<?php echo $yazi3['id']?>">düzenle</a> </h3>
                <p class="hakYazi">
                <?php echo $yazi3['text']; ?>
                </p>


            </main>


        </section>
    
        <footer>Tüm Hakları Saklıdır &copy; | 2021</footer>
    
    
    </div>



</body>
</html>