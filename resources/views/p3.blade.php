<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<style>
    body{
    
    margin-left: 50px;margin-right: 50px;
    background-color: #dbf0e8;
    flex-wrap: nowrap;
    font-family:serif;
    table-layout: auto;
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
.card{
  border: 3px double #467C7D;
  padding-top: 50px;
margin-top: 70px;
  margin-left: 400px;
  width: 600px;
  height: 300px;
  border-radius: 25px;
box-shadow:15px 15px#80c8c7;
color: #d5e5e7;
display: flex;
flex-direction: row;
  justify-content: center;

}
.card-title{
  font-size:xx-large;
  text-align: center;
  color: #4fb2ae;
}
.card-text{
font-size:large;
color: #1e827f;
padding-left: 10px;
padding-right: 10px;
}

</style>
<body>
    <div class="header">
        <a href="#default" class="logo"><img src="./img/Code typing-bro.png" alt=""width="100px"style="filter:drop-shadow(10px 7px 10px #4fb2ae ) "></a>
        <div class="header-right">
                <a href="{{URL::to('/')}}">Home</a>
                <a  href="{{URL::to('/2')}}">skills</a>
                <a class="active" href="{{URL::to('/3')}}">Project</a>
        </div>
     </div>
     <table>
        <div class="text" style="text-align: left;margin-left: 20px; color:#467C7D; filter:drop-shadow(10px 7px 10px #4fb2ae ) ; padding-top: 50px;border-radius: 4px;">
          <h1 >
            Here are the projects I designed 
          </h1>
        <th>
        <div class="card border-info mb-3" style="max-width: 18rem; ">
        <div class="card-body">
          <h5 class="card-title">Airline Ticket</h5>
          <p class="card-text">This project was the first project I worked on, it was for a subject other than web development  </p>
          <a href="https://a-n3.github.io/Airline-Ticket/" class="btn "style="color: #1f4142;padding-left:10px ;">GO TO GITHUB</a>
        </div>
      </div>
    </th>
      <th>
      <div id="re">
        <div class="card border-info mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Profil</h5>
            <p class="card-text">The design of this project was a little tricky because it talks about me, and about my skills like a CV.</p>
            <a href="https://a-n3.github.io/profil/" class="btn "style="color: #1f4142;padding-left:10px ;">GO TO GITHUB</a>
          </div></div></div></th>
          </table>
        </div>
          </div>
    <script src="./Js/Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
</body>
</html>