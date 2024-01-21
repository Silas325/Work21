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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student page</title>
        <link rel="icon" href="Ed1.png">
        <style>
            
.admin{
    position: relative;left: 2px;top: 15px;bottom: 5px;
    margin-top: auto;
    height: 100%;
    width: 200px;
    background-color: rgb(13, 16, 16);
    padding: 10px 10px;
    padding-top: 10px;
}
.tag1{
    display: inline-block;
   border: 0px solid rgb(64, 255, 0);
   padding: 1rem 1rem;
   float: right;
   color: #eeeeee;
   background-color: #1c87c9;
   width: 370px;
   height: 300px;
}
.tag2{
    display: inline-block;
   border: 0px solid rgb(43, 255, 0);
   padding: 1rem 1rem;
   float: left;  
   color: #eeeeee;
   background-color: #1c87c9;
   width: 350px;
   height: 300px;
}
.tag3{
    display: inline-block;
    border: 0px solid rgb(26, 255, 0);
    padding: 1rem 1rem;
    float: middle;
    position: relative;left: 1.3%;
    color: #eeeeee;
    background-color: #1c87c9;
    width: 400px;
    height: 300px;
}
.H11{
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 15px;
}
.H21{
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 15px;
}
.H31{
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 15px;
}
.H41{
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 15px;
}
.H51{
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 15px;
}
.H61{
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 15px;
}
.H71{
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 15px;
}
.H81{
    text-decoration: none;
    font-family: 'Times New Roman', Times, serif;
    font-size: 15px;
    border-radius: 5px;
    border: #1c87c9;
}
.but{
    background-color: white;
    text-align: center;
}
.wrap{
position: relative;top: 0%;left: 0%;
color: blue;
text-decoration-color: azure;
font-size: 8px;
background-color: aquamarine;
width: 220px; height: 110px;

}

.classification {
    border-top-right-radius: 5px;
    border-bottom-left-radius: 5px;
    background-color: indianred !important;
    color: white !important;
    float: right;
    font-weight: bold;
    font-size: 15px;
}
        </style>
    </head>
    <body style="background-image:url(back.jpg);">
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
        "<span>" + hours + "</span>" + ":" + "&nbsp;" +  "<span>" + minutes + "</span>" + "&nbsp;" + ":" + "&nbsp;" + "<span>" + seconds + "</span>" + "&nbsp;" + midday +
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
        greeting = "Good morning student!<br>" + name + " to your page!";
    } else if (hours >= 12 && hours <= 18) {
        greeting = "Good afternoon student!<br>" + name + " to your page!";
    } else {
        greeting = "Good evening student!<br>" + name + " to your page!";
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
              
                        <a class="H11" href="https://elearning.reb.rw/course">Resources</a>
                       <br />
                       <br />
                       <br />
                       <a class="H81" href="Student2.php">Dashboard</a>
                       <br />
                       <br /> 
                       <br />           
                       <a class="H21"  href="Courses.html">Courses</a>
                       <br />
                       <br /> 
                       <br />                  
                        <a class="H31"  href="Student4.html">Grades</a>
                       <br />
                       <br /> 
                       <br />               
                       <a class="H41"  href="Student5.php">Tasks</a>
                        <br />
                        <br />
                        <br />                  
                        <a class="H51"  href="Student6.html">My progress</a>
                         <br />
                         <br />
                         <br />                     
                         <a class="H61"  href="Student7.html">My completed Tasks</a>
                        <br />
                        <br />
                        <br />
                        <button><a class="H71"  href="login.php">Logout</a></button>
                   
           
            </nav>
       
        </div>
        <br />
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
    </body>
</html>