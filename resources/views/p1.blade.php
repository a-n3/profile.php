
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      
      body {
 margin-left: 50px;margin-right: 50px;
 background-color: #dbf0e8;
 flex-wrap: nowrap;
 font-family:serif;
 table-layout: auto;}
/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  padding: 20px 10px;
  position: sticky;
}
/* Style the header links */
.header a {
  float: left;
  color: #2b535f;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}
/* Change the background color on mouse-over */
.header a:hover {
  background-color: #d1d1d1;
  color: #1f4142;
}

/* Style the active/current link*/
.header a.active {
  background-color: #4fb2ae;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
  }
  .header-right {
    float: none;
  }}
  .card {
    border: 3px double #467C7D;
    align-items: center;
 margin-left:500px;margin-top: 100px;padding-top: 20px;
  width: 45%;
  height: 550px;
  border-radius: 25px;
  color: #d5e5e7;
box-shadow:15px 15px#80c8c7;

}
h1{
text-align: center;
  color: #37B8BA;
  padding-bottom: 10px;padding-top: 10px;

}
h3{
    text-align: center;
  color:#73B0B1 ;
  padding-bottom: 5px;
}
h6{
    text-align: center;
  color: #387677;
  font-size: larger;
  padding-bottom: 5;
 
}
    </style>
</head>
<body>
   
<div class="header">
    <a href="#default" class="logo"><img src="./img/Code typing-bro.png" alt=""width="100px" style="filter:drop-shadow(10px 7px 10px #4fb2ae ) "></a>
        <div class="header-right">
          <a class="active" href="{{URL::to('/')}}">Home</a>
          <a href="{{URL::to('/2')}}">Skills</a>
          <a href="{{URL::to('/3')}}">Project</a>
        </div>
    </div>
    <div class="card">
        <div class="contener">
           
                <div class="col-md-6">
                <img id="as" src="./img/Code typing-bro.png" alt=""width="200px" style="filter:drop-shadow(10px 7px 10px #4fb2ae ) ;">
            </div> 
            </div> 
            <div class="col-md-6">
                
                    <ul>
                <h1>
                    Afnan Al-hashmi
                </h1></ul>
            </div>
        <h3><ul>
            This is my project in Web Application Development
        </h3></ul>
        <h6><ul>My name is Afnan.</ul>
            <ul>Iam in the third level of Informatin Technology Department </ul>
            <ul>In the collegs of Engineering and Informatin Technology.</ul>
             <ul>This project includes some of my skills and provious project. </ul>
        </h6>
      </div>
    </div>
</div>
</div>
     <script sec="./Js/Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>