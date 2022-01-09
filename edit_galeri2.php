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
        <img id="headerResim" src="img/4.png" alt="" class="headerResim">               
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
                <?php
                include "proje_baglantı.php";

                $id = $_GET['id']; 

                $qry = mysqli_query($con,"select * from `table 1` where id='$id'");
                $data = mysqli_fetch_array($qry); 

                if(isset($_POST['update'])) 
                {
                    $exercise = $_POST['exercise'];
                    $equipment = $_POST['equipment'];
                    $exercise_type = $_POST['exercise_type'];
                    $gif = $_POST['gif'];
                
                    
                    $edit = mysqli_query($con,"update `table 1` set exercise='$exercise', equipment='$equipment', exercise_type='$exercise_type', gif='$gif' where id='$id'");
                    
                    if($edit)
                    {
                        mysqli_close($con); 
                        header("location:edit_galeri.php"); 
                        exit;
                    }
                    else
                    {
                        echo mysqli_error();
                    }    	
                }
                ?>

                <h3>Düzenle</h3>

                <form method="POST">
                    <input type="text" name="exercise" value="<?php echo $data['exercise'] ?>" placeholder="Enter exercise" Required>
                    <input type="text" name="equipment" value="<?php echo $data['equipment'] ?>" placeholder="Enter equipment" Required>
                    <input type="text" name="gif" value="<?php echo $data['gif'] ?>" placeholder="Enter exercise link" Required>
                    
                    <input type="submit" name="update" value="Düzenle">
                </form>
            </main>
            </section>    
        <footer>Tüm Hakları Saklıdır &copy; | 2021</footer>   
    </div>
</body>
</html>