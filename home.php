<?php
include "navbar.php";
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dream Organizer's</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    body {
      margin: 0;
      box-sizing: border-box;
    }

    /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("assets/bg.png");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }
    .achievements {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 40px 80px;
  }
  
  .achievements .work {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 40px;
  }
  
  .achievements .work i {
    width: fit-content;
    font-size: 50px;
    color: #333333;
    border-radius: 50%;
    border: 2px solid #333333;
    padding: 12px;
  }
  
  .achievements .work .work-heading {
    font-size: 20px;
    color: #333333;
    text-transform: uppercase;
    margin: 10px 0;
  }
  
  .achievements .work .work-text {
    font-size: 15px;
    color: #585858;
    margin: 10px 0;
  }
  
  
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  section {
    height: 100vh;
    width: 100%;
    display: grid;
    place-items: center;
  }
  .row {
    display: flex;
    flex-wrap: wrap;
  }
  .column {
    width: 100%;
    padding: 0 1em 1em 1em;
    text-align: center;
  }
  .card {
    width: 100%;
    height: 100%;
    padding: 2em 1.5em;
    background: linear-gradient(#ffffff 50%, #2c7bfe 50%);
    background-size: 100% 200%;
    background-position: 0 2.5%;
    border-radius: 5px;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    transition: 0.5s;
  }
  h3 {
    font-size: 20px;
    font-weight: 600;
    color: #1f194c;
    margin: 1em 0;
  }
  p {
    color: #575a7b;
    font-size: 15px;
    line-height: 1.6;
    letter-spacing: 0.03em;
  }
  .icon-wrapper {
    background-color: #2c7bfe;
    position: relative;
    margin: auto;
    font-size: 30px;
    height: 2.5em;
    width: 2.5em;
    color: #ffffff;
    border-radius: 50%;
    display: grid;
    place-items: center;
    transition: 0.5s;
  }
  .card:hover {
    background-position: 0 100%;
  }
  .card:hover .icon-wrapper {
    background-color: #ffffff;
    color: #2c7bfe;
  }
  .card:hover h3 {
    color: #ffffff;
  }
  .card:hover p {
    color: #f0f0f0;
  }
  @media screen and (min-width: 768px) {
    section {
      padding: 0 2em;
    }
    .column {
      flex: 0 50%;
      max-width: 50%;
    }
  }
  @media screen and (min-width: 992px) {
    section {
      padding: 1em 3em;
    }
    .column {
      flex: 0 0 33.33%;
      max-width: 33.33%;
    }
  }

  </style>
</head>

<body>
  <main>
    <div class="intro">
      <h1>Dream Organizer's</h1>
      <p>Life is a dream , Make it memorable....  </p>
    </div>
    <section>
      <div class="row">
          <h2 class="section-heading">Our Services</h2>
      </div>
      <div class="row">
          <div class="column">
          <div class="card">
              <div class="icon-wrapper">
              <i class="fas fa-phone-alt"></i>
              </div>
              <h3>Communication with customer</h3>
              <p>
              Our intension to build a healthy relationship between customer, communication is the key to understand customer thoughts.
              </p>
          </div>
          </div>
          <div class="column">
          <div class="card">
              <div class="icon-wrapper">
              <i class="fas fa-brush"></i>
              </div>
              <h3>Systematic arrangement</h3>
              <p>
              Organized well plan event and proper arrangement of event as well as proper time management,
              we maintain cleanliness because cleanliness is next to godliness..!!!
              </p>
          </div>
          </div>
          <div class="column">
          <div class="card">
              <div class="icon-wrapper">
              <i class="fas fa-comments"></i>
              </div>
              <h3>Online enquiries</h3>
              <p>
              If customer have any doubts or quiries our organization try to solve it.
              You can also suggest us with your piece of advice.
              </p>
          </div>
          </div>
          <div class="column">
          <div class="card">
              <div class="icon-wrapper">
              <i class="fas fa-rupee-sign"></i>
              </div>
              <h3>Budget Planning</h3>
              <p>
              We provide you a approximation of you cost based on your requirements.
              Which helps the customer to get an idea of it's budget.
              </p>
          </div>
          </div>
          <div class="column">
          <div class="card">
              <div class="icon-wrapper">
              <i class="fas fa-magic"></i>
              </div>
              <h3>Decor hire services</h3>
              <p>
              These companies specialize in providing décor hire services that will suit and bridge the needs of your next special event.
              </p>
          </div>
          </div>
          <div class="column">
          <div class="card">
              <div class="icon-wrapper">
              <i class="fas fa-users"></i>
              </div>
              <h3>Services Provided By Us</h3>
              <p>
                  <br>1.Birthday Party
                  <br>2.Anniversary Party
                  <br>3.Product Launch
                  <br>4.Award Ceremony
                  <br>5.Holi
                  <br>6.Concert
              </p>
          </div>
          </div>
      </div>
  </section>
  <?php
    include "footer.php";
?>
  </main>

</body>

</html>