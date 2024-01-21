<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en_US">
    <head>
   <title>Teacher's page</title> 
   <link rel="icon" href="teacher1.png">
   <link rel="stylesheet" href="styl1e.css">
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
 .admin{
    position: relative;left: 2px;top: 15px;bottom: 5px;
    margin-top: auto;
    height: 100%;
    width: 15%;
    background-color:#16648b;
    padding: 10px 10px;
    padding-top: 10px;
 }
 .H11{
    text-decoration: none;
    border-radius: 5px;
    border: 2px solid rgba(255, 255, 255, 0);
    width: 25%;
    position: relative;left: 5px;
 }
 .H21{
    text-decoration: none;
    border-radius: 5px;
    border: 2px solid rgba(255, 255, 255, 0);
 }
 .H31{
    text-decoration: none;
    border-radius: 5px;
    border: 2px solid rgba(255, 255, 255, 0);
 }
 .H41{
    text-decoration: none;
    border-radius: 5px;
    border: 2px solid rgba(255, 255, 255, 0);
 }
 .H51{
    text-decoration: none;
    border-radius: 5px;
    border: 2px solid rgba(255, 255, 255, 0);
 }
 .H61{
    text-decoration: none;
    border-radius: 5px;
    border: 2px solid rgba(255, 255, 255, 0);
 }
 .H71{
    text-decoration: none;
    border-radius: 5px;
    border: 2px solid rgba(255, 255, 255, 0);
 }
 .H81{
    text-decoration: none;
    border-radius: 5px;
    border: 2px solid rgba(255, 255, 255, 0);
 }
 .but{
    text-decoration: none;
    background-color: rgb(9, 11, 8);
    color: rgb(236, 236, 243);
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 5%;
 
 }
 .righ{
    background-color: rgb(9, 11, 8);
    color: rgb(244, 244, 250);
    padding: 10px 20px;
    border: blue;
    border-radius: 10px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 5%;
    position: relative; right: 0%;top: 15px;bottom:5px
 }
 .high{
    text-align: center;
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
 }
 .im{
    float:right;
    padding: 10px;
    margin: 2px;
    border-bottom: 10px;
 }
 .tag1{
                display: inline-block;
               border: 0px solid rgb(22, 22, 21);
               padding: 1rem 1rem;
               float: right;
               color: #f5eded;
               background-color: #16648b;
               width: 370px;
               height: 320px;
            }
            .tag2{
                display: inline-block;
               border: 0px solid rgb(43, 255, 0);
               padding: 1rem 1rem;
               float: left;  
               color: #eeeeee;
               background-color:  #16648b;
               width: 350px;
               height: 320px;
            }
            .tag3{
                display: inline-block;
                border: 0px solid rgb(26, 255, 0);
                padding: 1rem 1rem;
                float: middle;
                position: relative;left: 1.3%;
                color: #eeeeee;
                background-color: #16648b;
                width: 400px;
                height: 320px;
            }
            .body{
               opacity: 12;
            }
            .wrap{
            position: relative;top: 0%;left: 0%;
            color: blue;
            text-decoration-color: azure;
            font-size: 8px;
            background-color: indianred !important;
            color: white !important;
            width: 195px; height:auto;
            }
            .classification{
               border-top-right-radius: 5px;
               border-bottom-left-radius: 5px;
               background-color: indianred !important;
               color: white !important;
               float: right;
               font-weight: bold;
               font-size: 15px;
            }
            .dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

    </style>
    </head>
    <body style="position: inherit; background-image: url(back.jpg);">
    <div class="classification">
    <h4`>Welcome!<br> <?php echo "Your username:"."&nbsp;". $_SESSION['Username']; ?></h4> &nbsp;
    <h4>Email: <?php echo $_SESSION['Email']; ?></h4>
    </div>
      <div class="wrap">
         <h1 id="greeting"></h1>
         <h1 id="clock"></h1>
         </div>
         <script>
         
         function clock() {
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    var midday;

    hours = updateTime(hours);
    minutes = updateTime(minutes);
    seconds = updateTime(seconds);

    midday = hours >= 12 ? "PM" : "AM";

    // Display date and day
    var dateString = date.toDateString();
    var dayString = getDayString(date.getDay());

    document.getElementById("clock").innerHTML =
        "<span>" + hours + "</span>" + ":" + "<span>" + "&nbsp;" + minutes + "</span>" + "&nbsp;" + ":" + "&nbsp;" + "<span>" + seconds + "</span>" + "&nbsp;" + midday +
        "<br>" +
        "<span>" + dateString + "</span>" + "<br>" +
        "<span>" + dayString + "</span>";

    var time = setTimeout(function () {
        clock();
    }, 1000);

    var name = "Welcome";

    // Concatenate the strings for "Good afternoon teacher!" and "Welcome to your page" on separate lines
    var greeting;
    if (hours < 12) {
        greeting = "Good morning teacher!<br>" + name + " to your page!";
    } else if (hours >= 12 && hours <= 18) {
        greeting = "Good afternoon teacher!<br>" + name + " to your page!";
    } else {
        greeting = "Good evening teacher!<br>" + name + " to your page!";
    }

    document.getElementById("greeting").innerHTML = greeting;
}

function getDayString(day) {
    var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    return daysOfWeek[day];
}

function updateTime(k) {
    return k < 10 ? "0" + k : k;
}

// Initialize the clock
clock();

         </script>
        <div class="admin">
            <nav class="but">
              
                        <button><a class="H11" href="https://elearning.reb.rw/course" target="_self">Home</a></button>
                       <br>
                       <br>
                       <button><a class="H81" href="admin51.php">Dashboard</a></button>
                       <br>
                       <br>            
                       <button><a class="H21"  href="modifyStudent.php">Modify student Info.</a></button>
                       <br>
                       <br>                   
                       <button> <a class="H31"  href="teacher3.html">Courses</a></button>
                       <br>
                       <br>  
                       <nav>
                        <ul>
                            <li>
                            <button><a class="H41"  href="#" target="_parent">Operations</a></button>
                                <div class="dropdown">
                                   <a class="serv"  href="exam_form.php" target="_parent">Exam preparation</a>
                                    <a class="home" href="notes_preparation.php">Prepare/upload notes</a>
                                    <a class="part" href="addStudent.php">Adding student</a>
                                </div>
                        </ul>
                     </nav>              

                        <br>                  
                        <button><a class="H51"  href="teacher5.php">Uploaded activity</a></button>
                         <br>
                         <br>                     
                         <button><a class="H61"  href="teacher6.html">Show student grades</a></button>
                        <br>
                        <br>
                        <button><a class="H71"  href="login.php">Logout</a></button>    
            </nav>
       
        </div>
        <br />
        <div class="tag1">
         <p style="font-size: 15px;font-family: 'Times New Roman', Times, serif;font-weight: bolder;background-color: black;">Albert Einstein quotes on education.</p>
     <p>"Once you stop learning you start dying."<br /> 
         <br />
         "Intellectuals solve problems, geniuses prevent them." <br /> 
         <br />
         “Education is what remains after one has forgotten what one has learned in school.” <br />“Learning is experience. Everything else is just information.” <br /> "The only thing that interferes with my learning is my education." <br /> "Education is what remains after one has forgotten what one has learned in school."</p>
      </div>
     <div class="tag2">
     <p style="background-color: black;font-size: 15px;font-style: italic;font-weight: 100;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Nelson Mandela Madiba quotes on education</p>
     <img src="mandela.jpeg" alt="Quotes from Mandela" width="150px" height="150px">
    <div style="float: right;">
     <p>“The power of education extends beyond the development of skills we need for economic success. It can contribute to nation-building and reconciliation.”</p> 
 </div>
 </div>
     <div class="tag3">
         <p style="background-color: black;font-size: 15px;font-style: italic;font-weight: 100;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Mahatma Gandhi quotes on Education</p>
         <p>"An education which does not teach us to discriminate between good and bad, to assimilate the one and eschew the other, is a misnomer." 
             <br />
             <br />
             "Education should be so revolutionized as to answer the wants of the poorest villager, instead of answering those of an imperial exploiter." 
             <br />
             <br /> "Literacy is not the end of education or even the beginning,<br />
             Literacy in itself is no education. Literacy is not the end of education or even the beginning. <br /> By education I mean an all-round drawing out of the best in the child and man-body, mind and spirit."</p>
     </div>

     <script>
                     //home button
var home = document.querySelector('.home');
// Mouseover event listener
home.addEventListener('mouseover', function() {
    home.style.backgroundColor = 'indianred';
});

// Mouseout event listener
home.addEventListener('mouseout', function() {
    home.style.backgroundColor = ' white';
});
  //pattern button
  var part = document.querySelector('.part');
// Mouseover event listener
part.addEventListener('mouseover', function() {
    part.style.backgroundColor = 'indianred';
});

// Mouseout event listener
part.addEventListener('mouseout', function() {
    part.style.backgroundColor = ' white';
});
  //serv button
  var serv = document.querySelector('.serv');
// Mouseover event listener
serv.addEventListener('mouseover', function() {
    serv.style.backgroundColor = 'indianred';
});

// Mouseout event listener
serv.addEventListener('mouseout', function() {
    serv.style.backgroundColor = ' white';
});
     </script>
    </body>
</html>