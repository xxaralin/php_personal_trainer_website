 <?php include "proje_baglantı.php"; ?> 
 <html>
    <head>
        <style>
            table, td {
            border: 2px solid black;
            border-collapse: collapse;
            }
            td {
            background-color: #e6ccff;
            text-align: center;
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MUSCLE</title>
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
                    <?php 
                    include "proje_baglantı.php";
                    $name=$_POST['name'];
                    $height=$_POST['height'];
                    $weight=$_POST['weight'];
                    $bmi=$weight/($height/100 * $height/100);


                    $level=$_POST['levels'];
                    $muscle_list=$_POST['list'];

                    $sorgu= mysqli_query($con, "SELECT * FROM `table 1` WHERE level='$level' AND muscle='$muscle_list'");
                    echo '<center>';
                    echo '<table style="width: 900px;">';                    
                    echo "Merhaba $name vücut kitle indeksin = $bmi";
                    echo '             
                    <tr>
                        <td>Hareket</td>
                        <td>Ekipman</td>
                        <td>Kas</td>
                        <td>Seviye</td>
                        <td>Örnek</td>
                    </tr>';
                    while($str= mysqli_fetch_assoc($sorgu)){ 
                    echo '             
                        <tr>
                            <td>'.$str['exercise'].'</td>
                            <td>'.$str['equipment'].'</td>
                            <td>'.$str['muscle'].'</td>
                            <td>'.$str['level'].'</td>
                            <td> <img src="'.$str['gif'].'" height=80px width=auto></td>
                       </tr>';
                    }
                    echo'</table>';
                    echo '</center>';
                    ?>
                </main>
            </section>
        <footer>Tüm Hakları Saklıdır &copy; | 2021</footer>
        </div>
    </body>
</html>
