<?php
$servername='localhost';
$username='root';
$password='';
$dbname='webster';

$connection= new mysqli($servername,$username,'',$dbname);
if(!$connection){
    die("Connection failed: " . $connection);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student dashboard</title>
    <link rel="icon" href="courses.png">
    <link rel="stylesheet" href="styl3e.css">
   <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #dff0d8; 
    margin: 0;
    padding: 0;
}

header {
    background-color: indianred;
    color: #fff;
    padding: 10px;
    text-align: center;
}

nav {
    text-align: center;
}

ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: inline-block;
}

li {
    display: inline-block;
    margin-right: 15px;
    position: relative;
}

a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    display: block;
    padding: 10px;
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

li:hover .dropdown {
    display: block;
    background-color: aqua;
}

.dropdown a {
    padding: 10px;
}
.id{
    color: white;
    text-align: center;
    position: relative;top: 100px;
    float: none;
    flex: auto;
    align-items: center;
    font-size: 40px;
}
.id1{
 background-color: indianred;
 color: white;
 font-size: 40px;
}
.im{
   position:relative;top: 50px;
}
.but{
text-decoration: none;
background-color: rgb(119, 222, 98);
color: rgb(73, 72, 108);
padding: 10px 20px;
border: none;
border-radius: 10px;
cursor: pointer;
font-size: 20px;
border-radius: 5%;
width: max-content;

}
.buy{
background-color: aquamarine;
width: 100%;
height: fit-content;
}
.give{
background-color: aqua;
width: 100%;
height: fit-content;
}
.got{
background-color: rgb(213, 213, 25);
width: 100%;
height: fit-content;
}
.done{
background-color: #dff0d8;
position: relative;left: 0%;
width: 100%;
}
.don{
background-color: #dff0d8;
position: relative;left: 15px;
}
.doit{
    background-color: #dff0d8;
}
button{
    background-color: black;
    color: white;
}
p{
    background-color: indianred;
    position: relative;bottom: 20px;
}
.count{
    background-color: #dff0d8;
}
   </style>
</head>
<body>

    <header>
        <h1>Student dashboard</h1>
        <div align="middle">
    <nav>
        <ul>
            
            <li><a  class="done" href="Studentpage.php">Home</a></li>
            <li>
                <a class="don" href="#">Courses</a>
                <div class="dropdown">
                    <div class="but"  onmouseover="changeColor(this)" onmouseout="restoreColor(this)">
                    <a href="https://www.w3schools.com/">Learn coding</a>
                </div>
                <div class="buy">
                    <a href="https://byjus.com/english/">Learn English</a>
                </div>
                <div class="give">
                    <a href="https://math.libretexts.org/Bookshelves">Learn Mathematics</a>
                </div>
                <div class="got">
                    <a href="https://www.symbolab.com/_target=self">Perform some calculations</a>
                </div>
                </div>
            </li>
            &nbsp;
            <li><a class="doit" href="retrieveFile.php">Teacher notes</a></li>
            <li><a class="count" href="contact us.php">Leave a message</a></li>
        </ul>
    </nav>
</div>
    </header>
<a class="hom" href="Studentpage.php"><button type="button" class="hom">Back to Student page</button></a><br>
    <div align="middle">
        <img class="im " src="mandela.jpeg" width="300px" height="250px" alt="Mandela picture">
        <img class="im" src="Nelson.jpg" width="300px" height="250px" alt="Nelson picture">
        <img class="im" src="education.jpg" width="300px" height="250px" alt="Education picture">
        <img class="im" src="empower.jpeg" width="300px" height="250px" alt="Education picture">
    </div>
    <p class="id"><button type="button" class="id1">&copy; 2024 School data management system</button></p>
    <script>
function changeColor(element) {
element.style.backgroundColor = 'goldenrod';
}
  
function restoreColor(element) {
element.style.backgroundColor = '  rgb(119, 222, 98)';
}
        //courses button
var buy = document.querySelector('.buy');

// Mouseover event listener
buy.addEventListener('mouseover', function() {
    buy.style.backgroundColor = 'blue';
});

// Mouseout event listener
buy.addEventListener('mouseout', function() {
    buy.style.backgroundColor = 'aquamarine';
});

 //learn mathematics button
 var give = document.querySelector('.give');
// Mouseover event listener
give.addEventListener('mouseover', function() {
    give.style.backgroundColor = 'white';
});

// Mouseout event listener
give.addEventListener('mouseout', function() {
    give.style.backgroundColor = 'aqua';
});

//perform some calculations script
 
 var got = document.querySelector('.got');
// Mouseover event listener
got.addEventListener('mouseover', function() {
    got.style.backgroundColor = 'beige';
});

// Mouseout event listener
got.addEventListener('mouseout', function() {
    got.style.backgroundColor = ' rgb(213, 213, 25)';
});

//Home button
//perform some calculations script
 
var done = document.querySelector('.done');
// Mouseover event listener
done.addEventListener('mouseover', function() {
    done.style.backgroundColor = 'blue';
});

// Mouseout event listener
done.addEventListener('mouseout', function() {
    done.style.backgroundColor = '  #dff0d8';
});

//courses script
var don = document.querySelector('.don');
// Mouseover event listener
don.addEventListener('mouseover', function() {
    don.style.backgroundColor = 'violet';
});

// Mouseout event listener
don.addEventListener('mouseout', function() {
    don.style.backgroundColor = '  #dff0d8';
});
//about script
var doit = document.querySelector('.doit');
// Mouseover event listener
doit.addEventListener('mouseover', function() {
    doit.style.backgroundColor = 'green';
});

// Mouseout event listener
doit.addEventListener('mouseout', function() {
    doit.style.backgroundColor = '  #dff0d8';
});
//contact us script
var count = document.querySelector('.count');
// Mouseover event listener
count.addEventListener('mouseover', function() {
    count.style.backgroundColor = 'blueviolet';
});

// Mouseout event listener
count.addEventListener('mouseout', function() {
    count.style.backgroundColor = '  #dff0d8';
});


    </script>
</body>
</html>