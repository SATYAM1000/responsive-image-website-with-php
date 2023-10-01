<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
    $HOSTNAME="localhost";
    $USERNAME="root";
    $PASSWORD="";
    $DATABASE="studiowebsite";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $reason=$_POST['reason'];

    $con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

    if($con){
        $sql = "INSERT INTO `contactform` (`name`, `email`, `reason`) VALUES ('$name','$email', '$reason')";
        $executeQuery=mysqli_query($con,$sql);
        if($executeQuery){
                echo '    Message sent successfully!!';
             
        }
        else{
            die(mysqli_error($executeQuery));
        }

    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image WEBSITE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <!-- ====================================header============================== -->

    <header>
        <div class="navbar">
            <img src="./Assests/logo.png" alt="">
            <ul>
                <li>HOME</li>
                <li>ABOUT</li>
                <li>CONTACT</li>
                <li>PRODUCTS</li>
                <li>GALLERY</li>
            </ul>
            <i id="bars" class="fa-solid fa-bars"></i>
            <div class="social-icons">
                <i class="fa-brands fa-facebook-f ll"></i>
                <i class="fa-brands fa-instagram ll"></i>
                <i class="fa-brands fa-twitter ll"></i>
            </div>

        </div>
        <div class="hero">
            <h1>CAPTURING YOUR <br> MOST PRECIOUS <br> MOMENTS</h1>
            <p>Are you planning a special event? <br>
            We will make it a part of that history.</p>
           <button>View More</button>
        </div>
    </header>

    <div class="page1">
        <div class="text">
            <h2>Awesome Features</h2>
            <p>Streamlabs Podcast Editor is a text-based video editor. Instead of editing in the classic video timeline, you simply edit your video by editing the transcribed text.</p>
        </div>
        <div class="cards">
            <div class="card1">
                <img src="./Assests/img1.jpg" alt="">
                <div class="tt">
                    <h5>Nature</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>

            </div>

            <div class="card2">
                <img src="./Assests/img2.jpg" alt="">
                <div class="tt">
                    <h5>Impressive Works</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                
            </div>

            <div class="card1">
                <img src="./Assests/img3.jpg" alt="">
                <div class="tt">
                    <h5>Beauty</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                
            </div>

        </div>
    </div>

    <div class="page2">
        <div class="lower-text">
            <h5>OUR NEWS</h5>
        </div>
        <div class="lower-cards">
            <div class="row-1">
                <div class="post-1">
                    <img src="./Assests/post1.jpg" alt="">
                    <div class="text1"> <p>Nature Photography as Therapy </p></div>
                </div>

                <div class="post-1" id="one">
                    <img src="./Assests/post2.jpg" alt="">
                    <div class="text1"> <p>Nature Photography as Therapy: </p></div>
                </div>

                <div class="post-1">
                    <img src="./Assests/post3.jpg" alt="">
                    <div class="text1"> <p>Nature Photography as Therapy: </p></div>
                </div>

            </div>
            <div class="row-2">
                <div class="post-1">
                    <img src="./Assests/post4.jpg" alt="">
                    <div class="text1"> <p>Nature Photography as Therapy: </p></div>
                </div>
                <div class="post-1">
                    <img src="./Assests/post5.jpg" alt="">
                    <div class="text1"> <p>Nature Photography as Therapy: </p></div>
                </div>
                <div class="post-1">
                    <img src="./Assests/post6.jpg" alt="">
                    <div class="text1"> <p>Nature Photography as Therapy: </p></div>
                </div>


            </div>

        </div>

    </div>

    <div class="contact-us-page">






















        
        <div class="contact">
            <div class="left">
                <img src="./Assests/bg-removebg-preview.png" alt="">

            </div>

            <div class="right">

                <form  action="index.php" method="post">
                    <div class="name">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Name">
                    </div>

                    <div class="email">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div class="reason">
                        <label for="query">Reason</label>
                        <textarea name="reason" id="" cols="" rows="1" placeholder="Reason"></textarea>
                    </div>

                    <button type="submit">Submit</button>




                </form>

            </div>


        </div>

    </div>


    
    <footer>
        <div class="footer-container">
            <p> <b> ©</b> All rights reserved.</p>
        </div>
            
    </footer>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js">

       
       
    </script>

</body>
</html>