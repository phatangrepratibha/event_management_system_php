<?php
include "navbar.php";

if  (!isset($_SESSION['loggedin']))
{
    echo '<script>alert("Plzz Login!!!!");window.location.href = "login.php";</script>';
    // echo '<script>
    //                 Swal.fire({
    //                   title: "error",
    //                   text: "Invalid Credentials!!!!!",
    //                   icon: "error",
    //                   confirmButtonText: "Try Again"
    //                 }).then(function() {
    //               window.location.href = "login.php";
    //               console.log("The Try Again Button was clicked.");
    //               });
    //            </script>';
}
?>



<html>
    <style media="screen">
* {
  font-family: Nunito, sans-serif;
}

.responsive-cell-block {
  min-height: 75px;
}

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: space-evenly;
}

.team-head-text {
  font-size: 48px;
  font-weight: 900;
  text-align: center;
}

.team-head-text {
  line-height: 50px;
  width: 100%;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
}

.container {
  max-width: 1380px;
  margin-top: 60px;
  margin-right: auto;
  margin-bottom: 60px;
  margin-left: auto;
  padding-top: 0px;
  padding-right: 30px;
  padding-bottom: 0px;
  padding-left: 30px;
}

.card {
  text-align: center;
  box-shadow: #54547b 0px 4px 20px 7px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 30px;
  padding-right: 25px;
  padding-bottom: 30px;
  padding-left: 25px;
}

.card-container {
  width: 280px;
  margin-top: 0px;
  margin-right: 10px;
  margin-bottom: 25px;
  margin-left: 10px;
}

.name {
  margin-top: 20px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
  font-size: 18px;
  font-weight: 800;
}

.position {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
}

.feature-text {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
  color: rgb(122, 122, 122);
  line-height: 30px;
}

.social-icons {
  width: 70px;
  display: flex;
  justify-content: space-between;
}

.team-image-wrapper {
  clip-path: circle(50% at 50% 50%);
  width: 130px;
  height: 130px;
}

.team-member-image {
  max-width: 100%;
}

@media (max-width: 500px) {
  .card-container {
    width: 100%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 25px;
    margin-left: 0px;
    
  }
}
      

       </style>
     
     
     
     <body style="background-color:#ffb6c1;">
    
     <div class="responsive-container-block container">
  <p class="text-blk team-head-text">
    Our Team
  </p>
  <div class="responsive-container-block">
    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
      <div class="card" >
        <div class="team-image-wrapper">
          <img class="team-member-image" src="assets/gudi.jpg">
        </div>
        <p class="text-blk name">
          Deogune Prajakta
        </p>
        <p class="text-blk position">
          Back End Developer
        </p>
        <div class="social-icons">
          <a href="https://www.twitter.com" target="_blank">
            <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
          </a>
          <a href="https://www.facebook.com" target="_blank">
            <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
          </a>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <img class="team-member-image" src="assets/jape.jpg">
        </div>
        <p class="text-blk name">
          Jape Pratibha
        </p>
        <p class="text-blk position">
        Front End Developer

        </p>
        
        <div class="social-icons">
          <a href="https://www.twitter.com" target="_blank">
            <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
          </a>
          <a href="https://www.facebook.com" target="_blank">
            <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
          </a>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <img class="team-member-image" src="assets/simran.jpg">
        </div>
        <p class="text-blk name">
          Phatangre Pratibha
        </p>
        <p class="text-blk position">
        Front End Developer
        </p>
        
        <div class="social-icons">
          <a href="https://www.twitter.com" target="_blank">
            <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
          </a>
          <a href="https://www.facebook.com" target="_blank">
            <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
          </a>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <img class="team-member-image" src="assets/sup.jpg">
        </div>
        <p class="text-blk name">
          Phatangre Supriya
        </p>
        <p class="text-blk position">
        Front End Developer
        </p>
        <div class="social-icons">
          <a href="https://www.twitter.com" target="_blank">
            <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
          </a>
          <a href="https://www.facebook.com" target="_blank">
            <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
          </a>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <img class="team-member-image" src="assets/san.jpeg">
        </div>
        <p class="text-blk name">
          Kamble Saniya
        </p>
        <p class="text-blk position">
          Figma Designer
        </p>
        <div class="social-icons">
          <a href="https://www.twitter.com" target="_blank">
            <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
          </a>
          <a href="https://www.facebook.com" target="_blank">
            <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
          </a>
        </div>
      </div>
    </div>
    <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
      <div class="card">
        <div class="team-image-wrapper">
          <img class="team-member-image" src="assets/ruchita.jpeg">
        </div>
        <p class="text-blk name">
         Khilari Ruchita
        </p>
        <p class="text-blk position">
        Figma Designer
        </p>

        <div class="social-icons">
          <a href="https://www.twitter.com" target="_blank">
            <img class="twitter-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
          </a>
          <a href="https://www.facebook.com" target="_blank">
            <img class="facebook-icon" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
          </a>
        </div>
      </div>
    </div>
    
         
     </body>
  </html>