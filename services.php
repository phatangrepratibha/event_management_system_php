<?php
    include "navbar.php";

if  ($_SESSION['loggedin']!=true)
{
    echo '<script>alert("Plzz Login!!!!");window.location.href = "login.php";</script>';
}
?>



<html>

<head>
    

     
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	
	<link>
</head>
<body>
   <section class="c-section">
    <h2 class="c-section__title"><span>Our Services</span></h2>
    <ul class="c-services">
        <li class="c-services__item">
            <h3>Product Launch</h3>
            <p>Driving consumer demand in advance of a product coming to market increases the "pull effect" by encouraging shoppers to start asking for the product and retailers to pre-order, thus "pulling"the product through their distribution channels.<br><br>
			<button class="button"
		onclick="window.location.href='prod.php'";>Book</button>
             </p>                   
                                
                                
        </li>
        <li class="c-services__item">
            <h3>Wedding Anniversary</h3>
            <p>A wedding anniversary is a day of celebrationswedding anniversary is an annual commemoration of the date that a wedding took place. Couples often mark the occasion by celebrating their relationship, either privately or with a larger party <br><br>
			<button class="button"
		onclick="window.location.href='wed.php'";>Book</button></p>
		
        </li>
        <li class="c-services__item">
            <h3>Holi</h3>
            <p>The onset of spring brings the colorful festival of Holi. Just as colorful flowers begin to blossom  in the spring, Holi symbolizes fun and frolic.Holi is best celebrated with friends, family, neighbors and all loved ones in togetherness.We organize this event of colors to fill the life of everyone with beautiful colour and fragrance of memorise..<br><br>
			<button class="button"
		onclick="window.location.href='holi.php'";>Book</button>
            </p>
        </li>
        <li class="c-services__item">
            <h3>Concert</h3>
            <p>A concert is a live music performance in front of an audience. The performance may be by a single musician, sometimes then called a recital, or by a musical ensemble, such as an orchestra, choir, or band.We organize live show and concert with the aim of making the talent recognize worldwide.<br><br>
			<button class="button"
		onclick="window.location.href='concert.php'";>Book</button></p>
			
        </li>
        <li class="c-services__item">
            <h3>Award Ceremony</h3>
            <p>Award ceremonies are becoming increasing popular across all industries, celebrating achievement in every field from business to fashion,technology to blogging.Holding an awards ceremony for your business or within your industry is a great way to acknowledge the people that matter.We take care that all attendees are attended, we provide with good atmosphere and a perfect service to each one at the ceremony.<br><br>
			<button class="button"
		onclick="window.location.href='award.php'";>Book</button></p>
                                                         
        </li>
        <li class="c-services__item">
            <h3>Birthday party</h3>
            <p>A birthday is a special time to celebrate the anniversary of your born day. To all the doting parents 
        and children, celebrate yet another happiest day with the most sparkling party you can ever imagine.
        After all, who wouldn't want to recreate the juvenile magic with all the confetti, balloons, cakes, music, 
        lip-smacking food and other flavours of entertainment?
        Aboluetly everyone will actually love to have it. <br><br>
		<button class="button"
		onclick="window.location.href='birth.php'";>Book</button></p>
			
		
        </li>
    </ul>
</section>
</body>
</html>