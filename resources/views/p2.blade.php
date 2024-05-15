<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
<style>
  body{
    
 margin-left: 50px;margin-right: 50px;
 background-color: #dbf0e8;
 flex-wrap: nowrap;
 table-layout: auto;
 font-family:serif;

  }
  .header {
  overflow: hidden;
  --background-color: #1f4142;
  padding: 20px 10px;
  position: sticky;
  }

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
.header a.logo {
  font-size: 25px;
}
.header a:hover {
  background-color: #d1d1d1;
  color: #1f4142;
}
.header a.active {
  background-color: #4fb2ae;
  color: white;
}
.header-right {
  float: right;
}
@media screen and (max-width: 500px) {
.header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
    
h1
{padding-bottom: 10px;
  text-align: center;
  color:#37B8BA;
  filter:drop-shadow(10px 7px 10px #37B8BA ) 
}

.container {
  box-shadow:15px 15px#80c8c7;
  border: 3px double #467C7D;
  position: relative;
max-width: 70%;
  width: 60%;
  background: #ececec;
  margin-left: 20%;
  margin-top: 10px;
  padding: 10px 20px;
  border-radius: 25px;
}
.container .skill-box {
  width: 100%;
  margin: 25px 0;
}
.skill-box .title {
  display: block;
  font-size: 16px;
  font-weight: 600;
  color:#37B8BA;
}
.skill-box .skill-bar {
  height: 8px;
  width: 100%;
  border-radius: 6px;
  margin-top: 6px;
  background: rgba(0,0,0,0.1);
}
.skill-bar .skill-per {
  position: relative;
  display: block;
  height: 100%;
  width: 90%;
  border-radius: 6px;
  background: #7FC1C2;
  animation: progress 0.4s ease-in-out forwards;
  opacity: 0;
}
.skill-per.html{
  width: 70%;
  animation-delay: 0.1s;
}
.skill-per.CSS{
  width: 60%;
  animation-delay: 0.1s;
}
.skill-per.C{
  width: 50%;
  animation-delay: 0.1s;
}
.skill-per.PHP{
  width: 65%;
  animation-delay: 0.1s;
}
@keyframes progress {
  0% {
    width: 0;
    opacity: 1;
  }

  100% {
    opacity: 1;
  }
}

.skill-per .tooltip {
  position: absolute;
  right: -14px;
  top: -28px;
  font-size: 14px;
  font-weight: 500;
  color: #fff;
  padding: 2px 6px;
  border-radius: 3px;
  background: #37B8BA;
  z-index: 1;
}

.tooltip::before {
  content: '';
  position: absolute;
  left: 50%;
  bottom: -2px;
  height: 10px;
  width: 10px;
  z-index: -1;
  background-color:#37B8BA;
  transform: translateX(-50%) rotate(45deg);
}
.card {
    border: 3px double #467C7D;
    align-items: center;
 margin-left:500px;;padding-top: 10px;
  width: 50%;
  height: 250px;
  border-radius: 25px;
box-shadow:15px 15px#80c8c7;
color: #d5e5e7;
}
.body-card{
  text-align: center;
  color:#37B8BA ;
  padding-left: 10px;padding-right: 10px;padding-top: 5%;
}
</style>
</head>
<body>
    <div class="header">
        <a href="#default" class="logo"><img src="./img/Code typing-bro.png" alt=""width="100px"style="filter:drop-shadow(10px 7px 10px #4fb2ae ) "></a>
        <div class="header-right">
                <a href="{{URL::to('/')}}">Home</a>
                <a class="active" href="{{URL::to('/2')}}">Skills</a>
                <a href="{{URL::to('/3')}}">Project</a>
        </div>
     </div>
<h1>
 My evaluation in programming languages 
</h1>
<div class="container">
  <div class="skill-box">
      <span class="title">HTML</span>

      <div class="skill-bar">
          <span class="skill-per html">
              <span class="tooltip">70%</span>
          </span>
      </div>
  </div>

  <div class="skill-box">
      <span class="title">CSS</span>

      <div class="skill-bar">
          <span class="skill-per CSS">
              <span class="tooltip">60%</span>
          </span>
      </div>
  </div>
  <div class="skill-box">
      <span class="title">C#</span>

      <div class="skill-bar">
          <span class="skill-per C">
              <span class="tooltip">50%</span>
          </span>
      </div>
  </div>
  <div class="skill-box">
      <span class="title">PHP</span>

      <div class="skill-bar">
          <span class="skill-per PHP">
              <span class="tooltip">65%</span>
          </span>
      </div>
  </div>
</div><h1 style="padding-top: 50px;">
  Other Skills: 
</h1>
<div class="card">
  <div class="col-md-6">
<div class="body-card" style="font-size:x-large;">
  <p >
    I studide DataBase so I have some knowledge of them ,
     as well as Data Analysis and Data Design.
     Now I study Project Management , Informatin Security , and Networks .
     Ithink Networks are the best.
  </p>
</div></div></div>
    <script src="./Js/Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>