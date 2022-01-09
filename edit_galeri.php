<!DOCTYPE html>
<?php include "proje_baglantı.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link rel="stylesheet"href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">

</head>
<style>
            table, td {
            border: 2px solid black;
            border-collapse: collapse;
            }
            td {
            background-color: #fadeff;
            text-align: center;
            }
        </style>
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
                <h1>Galeri</h1>
                                     <?php
                    include "proje_baglantı.php"; 
                    $records = mysqli_query($con,"SELECT * FROM `table 1`");
                    echo '<center>';
                    echo '<table style="width: 900px;">';
                    echo '             
                    <tr>
                        <td>EGZERSİZ</td>
                        <td>EKİPMAN</td>
                        <td>HEDEF KAS</td>                        
                        <td>ÖRNEK</td>
                        <td colspan="2">DÜZENLE</td>
                    </tr>';
                        while($data = mysqli_fetch_assoc($records)){  
                            echo '             
                        <tr>
                            <td>'.$data['exercise'].'</td>
                            <td>'.$data['equipment'].'</td>
                            <td>'.$data['muscle'].'</td>                            
                            <td> <img src="'.$data['gif'].'" height=100px width=auto> </td>
                            <td> <a href="edit_galeri2.php?id='.$data['id'].'">| düzenle |</td>
                            <td> <a href="sil_galeri.php?id='.$data['id'].'">|  sil  |</td>
                        </tr>';
                    }
                    echo'</table>';
                    echo'</center>';        
                           
                        
                    ?>
            </main>
        </section>    
        <footer>Tüm Hakları Saklıdır &copy; | 2021</footer>   
    </div>
</body>
</html>