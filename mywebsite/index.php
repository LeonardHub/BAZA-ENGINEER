<!DOCTYPE html>
<html>
    <head>
        <title>
        Ask Engineer
        </title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            *{
                padding:0;
                margin:0;
            }
.container{
    width: 100%;
    height: 90vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

}
.header{
    height: 15%;
    display: flex;
    align-items: center;
    overflow: hidden;
    position: relative;
    background-color:black;
}
.logo{
    width: 10%
}
.navbar{
    text-align: center;
    flex:1;
}
.navbar a{
    padding:6px 20px;
    text-decoration: none;
    color: white;
    margin-left: 20px;
    font-size: 20px;
    font-weight: bold;

}
.btn{
    cursor: pointer;
    color: white;
    font-size: 18px;
    letter-spacing: 2px;
    padding: 10px 30px;
    border: 2px solid #003333;
    background:red;
    text-decoration:none;
    text-align: center;
    font-weight: bold;
    margin: 40px 18px;
}
.btn a{
    color:white;
    font-weight:bold;
}
.navbar a:hover{
    background-color:lightskyblue;
}
.btn:hover{
    color: #000;
    background-color:lightskyblue;
}
.btn a:link{
    text-decoration: none;
    color:white;
}
.content{
    margin-top: 40px;


}
footer{
 bottom: 0;
}
.footer-distributed{
 background-color: black;
 box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
 box-sizing: border-box;
 width: 100%;
 text-align: left;
 font: bold 16px sans-serif;
 
 padding: 55px 50px;
}
 
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
 display: inline-block;
 vertical-align: top;
}
 
.footer-distributed .footer-left{
 width: 40%;
}
 
.footer-distributed h3{
 color:  #ffffff;
 font: normal 36px 'Cookie', cursive;
 margin: 0;
}
 
.footer-distributed h3 span{
 color:  #5383d3;
}
 
 
.footer-distributed .footer-links{
 color:  #ffffff;
 margin: 20px 0 12px;
 padding: 0;
}
 
.footer-distributed .footer-links a{
 display:inline-block;
 line-height: 1.8;
 text-decoration: none;
 color:  inherit;
}
 
.footer-distributed .footer-company-name{
 color:  #8f9296;
 font-size: 14px;
 font-weight: normal;
 margin: 0;
}
 
 
.footer-distributed .footer-center{
 width: 35%;
}
 
.footer-distributed .footer-center i{
 background-color:  #33383b;
 color: #ffffff;
 font-size: 25px;
 width: 38px;
 height: 38px;
 border-radius: 50%;
 text-align: center;
 line-height: 42px;
 margin: 10px 15px;
 vertical-align: middle;
}
 
.footer-distributed .footer-center i.fa-envelope{
 font-size: 17px;
 line-height: 38px;
}
 
.footer-distributed .footer-center p{
 display: inline-block;
 color: #ffffff;
 vertical-align: middle;
 margin:0;
}
 
.footer-distributed .footer-center p span{
 display:block;
 font-weight: normal;
 font-size:14px;
 line-height:2;
}
 
.footer-distributed .footer-center p a{
 color:  #5383d3;
 text-decoration: none;;
}
 
.footer-distributed .footer-right{
 width: 20%;
}
 
.footer-distributed .footer-company-about{
 line-height: 20px;
 color:  #92999f;
 font-size: 13px;
 font-weight: normal;
 margin: 0;
}
 
.footer-distributed .footer-company-about span{
 display: block;
 color:  #ffffff;
 font-size: 14px;
 font-weight: bold;
 margin-bottom: 20px;
}
 
.footer-distributed .footer-icons{
 margin-top: 25px;
}
 
.footer-distributed .footer-icons a{
 display: inline-block;
 width: 35px;
 height: 35px;
 cursor: pointer;
 background-color:  #33383b;
 border-radius: 2px;
 
 font-size: 20px;
 color: #ffffff;
 text-align: center;
 line-height: 35px;
 
 margin-right: 3px;
 margin-bottom: 5px;
}
 
 
@media (max-width: 880px) {
 
 .footer-distributed{
 font: bold 14px sans-serif;
 
 }
 
 .footer-distributed .footer-left,
 .footer-distributed .footer-center,
 .footer-distributed .footer-right{
 display: block;
 width: 100%;
 margin-bottom: 40px;
 text-align: center;
 }
 
 .footer-distributed .footer-center i{
 margin-left: 0;
 }
 .main {
 line-height: normal;
 font-size: auto;
 }}
.row::after{
    content:"";
    display:table;
    clear:both;
}
.card{
box-shadow:blanchedalmond;
    padding: 10px;
    text-align: center;
    background-color: white;
    margin-top: 1px;

}
.card:hover{
    transform: scale(1.1);
    transition: 1s;
}
.column.leftb{
    width:45%;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 10px 10px;
    text-align: center;
    display: table;
    background-color: white;
}
.column.middleb{
    width:50%;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
    padding: 10px 10px 10px;
    text-align: center;
    background-color: white;
}
.column.rightb{
    width:30%;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
    padding: 10px 10px 10px;
    text-align: center;
    background-color: white;
    
}
.column{
    width: 100%;
    float: left;
    word-wrap: break-word;
 
}
#boxes {
        content: "";
        display: table;
        clear: both;
      }
      #colum1{
        float: left;
        height: 470px;
        width: 23%;
        padding: 0 10px;
      }

      #column1 {
        background-color: transparent;
        text-align:center;
        color:white;
        float: left;
        height: 470px;
        width: 30%;
        padding: 0 10px;
      }
      #column1 h1{
          padding-top:120px;
      }
      #column2 {
        background-color:transparent;
        width: 30%;
        float: left;
        height: 470px;
        padding: 0 10px;
      }
      #column3 {
        background-color: transparent;
        float: left;
        height: 470px;
        width:35%;
        padding: 0 10px;
      }
      h2 {
        color: #000000;
        text-align: center;
      }
.block{
    background-color:none;
}

.block2{
    float: right;
    width:80%;
    text-align:left;
    margin-top:20px;
    font-weight:bold;
}
.service{
    text-decoration:none;
    color:black;
}
   .centera{
       background-color:whitesmoke;
       color:black;
       text-align:center;
       padding:20px;
   }
    </style>

    </head>
    <body>
    <div class="block">
        
        <img src="e.png" class="logo"> 
        <div class="block2">
            <h1>BAZA ENGINEERS IT HELP DESK SUPPORT</h1>
        </div>
    
               </div>
        <div class="container">
            <div class="header">
               
                <div class="navbar">
                <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>HOME</a>
                    <a href="services.php">SERVICES</a>
                    <a href="products.php">PRODUCT</a>
                    <a href="contactus.php">CONTACT US</a>
                    <a href="gallery.php">GALLERY</a>
                    <a href="company.php">COMPANY</a>
                </div>
                <button class="btn"> <a href="signup.php">ASK ENGINEER</a></button>
            </div>
                <hr> 
                 <div>
                    <img src="ddd.jpg" alt=""width="100%" height="500px">
                </div>
                <hr>
                <div class="centera">
                    <h1>ABOUT US</h1>
                <h3>   We are BAZA ENGINEERS, a company striving to identify society problems and come up with ICT solutions. We are wide and motivated company specialized in software Maintenance, software publishing, Networking, computer maintenance, and System analysis. Moreover, we offer training and internship in fields we have mentioned above. We believe passionately in great bargains and excellent service, which is why we commit ourselves to giving you the best of both. If you’re looking for something new, you’re in the right place. We strive to be industrious and innovative, offering our customers something they want, putting their desires at the top of our priority </h3>
                </div>
                 
              
                <hr>
<div class="row">
<div class="card">
            <div class="column leftb">
            <div class="card">
                <p><h2><a class="service"href="services.php" >Hardware and Software Maintenance</a> </h2></p>
              <img src="R (1).jpg" alt="" height="100%" width="100%"> 
                </div>
            </div>
            <div class="column middleb">
                <div class="card">
                <p><h2><a class="service" href="login.php">Online Support</a> </h2></p>
                <a href="signup.php"><img src="head.jfif" alt="" height="100%" width="100%"></a>
        
                </div>
            </div>
            
</div></div>
                


             <footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>Baza<span> Engineer</span></h3>
 
 <p class="footer-links">
 <a href="#">Home</a>
 ·
 <a href="#">Pricing</a>
 ·
 <a href="#">About</a>
 ·
 <a href="#">Faq</a>
 ·
 <a href="#">Contact</a>
 </p>
 
 <p class="footer-company-name">Baza Engineer&copy; 2021</p>
 </div>
 
 <div class="footer-center">
 
 <div>
 <i class="fa fa-map-marker"></i>
 <p><span>Kimironko</span> Kigali, Rwanda</p>
 </div>
 
 <div>
 <i class="fa fa-phone"></i>
 <p>+250785294603</p>
 </div>
 
 <div>
 <i class="fa fa-envelope"></i>
 <p><a href="">contact@bazaengineer.com</a></p>
 </div>
 
 </div>
 
 <div class="footer-right">
 
 <p class="footer-company-about">
 <span>About the company</span>
 BAZA Enginee is an online support for computer users,Electronic device technicians, Software designers &amp; Baza learner.
 </p>
 
 <div class="footer-icons">
 
 <a href="#"><i class="fa fa-facebook"></i></a>
 <a href="#"><i class="fa fa-twitter"></i></a>
 <a href="#"><i class="fa fa-linkedin"></i></a>
 <a href="#"><i class="fa fa-github"></i></a>
 
 </div>
 
 </div>
 
 </footer>
                
    </body>
</html>