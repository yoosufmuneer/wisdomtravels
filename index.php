<html>
    <head>
        <title>Wisdom Travels</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <header>
            <h1 id="heading">WISDOM TRAVELS & TOURS</h1>
            <nav>
                <ul type="none">
                    <li><a href="index.php" id="nav">Home</a></li>
                    <li><a href="#services" id="nav">Services</a></li>  
                    <li><a href="#booknow" id="nav">Book Now</a></li>
                    <li><a href="#packages" id="nav">Packages</a></li>
                    <li><a href="#feedback" id="nav">Feedback</a></li>
                    <li><a href="#contact-us" id="nav">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <div id="content" align="center" id="header">
            <h1>Welcome!</h1>
            <a href="#booknow" class="btnbooknow"><strong>Book Now!</strong></a>
        </div>
        <div id="services">
          <table>
              <tr><h1>Our Services</h1></tr>
              <tr>
                  <td id="icon"><img src="images/iconAir.png"></td>     
                  <td id="icon"><img src="images/iconCar.png"></td>         
                  <td id="icon"><img src="images/iconHotel.png"></td>
                  <td id="icon"><img src="images/iconTours.png"></td>
              </tr>
              <tr>
                  <td id="caption"><h3>Air-Tickets</h3></td>
                  <td id="caption"><h3>Car Rentals</h3></td>
                  <td id="caption"><h3>Hotel Bookings</h3></td>
                  <td id="caption"><h3>Inbound & Outbound Tours</h3></td>
              </tr>
            </table>
        </div>
        <div id="booknow" align="center">
            <form method="post" action="" name="form1" class="pure-form pure-form-stacked">
                <?php
                    $city = $_POST['inputcity'];
                    $checkin = $_POST['checkin'];
                    $checkout = $_POST['checkout'];
                    $roomcount =$_POST['roomcount'];
                    $hoteltype = $_POST['hoteltype'];
                    $email = $_POST['email'];
                    $name = $_POST['name'];
                ?>
                <h1>Booking</h1><br>
                <label>Name</label><input type="text" name="name"><br><br>
                <label>Where are you going? <input type="text" placeholder="City or any Point of Interest" name="inputcity"></label><br><br>
                <label>Check-In </label><input type="date" name="checkin"><br><br>
                <label>Check-Out </label><input type="date" name="checkout"><br><br>
                <label>No.Of Rooms </label><input type="number" name="roomcount"><br><br>
                <label>Hotel Star Category</label>
                <select id="starcat" name="hoteltype">
                    <option>5 Star</option>
                    <option>4 Star</option>
                    <option>3 Star</option>
                    <option>Boutique Hotel</option>
                </select><br><br>
                <label>Email Address</label>
                <input type="email" name="email" placeholder="you@example.com">
                <br><br>
                <input type="submit" value="Get a quote via Email" name="submit" class="btnsubmit">
                    <?php 
    
        if(isset($_POST['submit']))
        {
            if($name =="")
            {
                echo "<br>Please enter your name";
            }
            else if($city =="")
            {
                echo "<br>Please enter the destination";
            }
            else if($checkin =="")
            {
                echo "<br>Please enter check in date";
            
            }
            else if($checkout =="")
            {
                echo "<br>Please enter checkout date";
            }
            else if($roomcount =="")
            {
                echo "<br>Please enter a valid number";
            }
            else if($hoteltype =="")
            {
                echo "<br>Please select a Hotel type";
            }
            else if($email =="")
            {
                echo "<br>Please enter your email address";
            }
            else{
                $recipient="muneer@wisdomtravels.com";
                $subject="New Booking";
                $message="$city,$checkin,$checkout,$roomcount,$hoteltype";
                $mailBody="Name: $name\nEmail: $email\n\n$message";
                mail($recipient, $subject, $mailBody, "From: $name <$email>");
                $sql= "INSERT INTO 'bookingrequests'(name,destination,checkin,checkout,roomCount,starCat,email) VALUES ('$name','$city','$checkin','$checkout','$roomcount','$hoteltype','$email')";
                $rslt=mysqli_query($conn,$sql);
                $thankYou="<p>Thank you! Your message has been sent.</p>";
                
                echo "$thankYou";
            }

        }
    ?>
            </form>        
        </div>
<div id="packages">
<h1>Packages</h1>
  <input id="tab1" type="radio" name="tabs" checked onselect="displayp()">
  <label for="tab1">Glimpse of Sri Lanka 4N/5D</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Highlights Tour of Sri Lanka 6N/7D</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Exciting Beach Holiday in Maldives Four Seasons (Landaa Giravaaru) 4N/5D</label>
    
  <section id="content1">
<div class="parent_day1"><div class="day1s1"> <h2> Duration - 4 nights & 5 days</h2>

<h1>DAY 1 - AIRPORT – PINNAWALA – HABARANA</h1></div><br>

<div class="day1s1c">
<p>Arrive in Sri Lanka. Clients will be met by a representative of Wisdom Travels and transferred to Habarana, Enroute visit the Elephant Orphanage in Pinnawala. <br>

Pinnawela Elephant Orphanage – App. 55 miles from Colombo, off Colombo- Kandy road is Pinnawela, where an orphanage was started in 1975 to house the abandoned and the wounded Elephants. <br>

The number of elephants has increased to more than 40 now, including baby Elephants brought from various parts, as well as the babies born, as a result of the captive breeding programme. The best time to visit is the feeding time from 0930 hrs – 1000 hrs & 1330 – 1400 hrs and the bathing time from 1000 – 1030 hrs & 1400 – 1430 hrs when all the Elephants are taken to the river close by. <br>

Thereafter proceed to Habarana. <br>

On arrival in Habarana check-in to hotel.<br>
<img src="images/cinnamon-lodge-26457-650x500.jpg"><br>

Overnight stay at Cinnamon Lodge, Habarana 5*</div><br><br>
</div>
<div class="parent_day2"><div class="day2s1"><h1>DAY 2 - HABARANA– MATALE – KANDY SIGHTSEEING</h1><br></div>

<div class="day2s1c">After Breakfast proceed to Kandy enroute visit a Spice garden & batik Factory in Matale. <br>

Spice Garden at Matale and see the luscious Cinnamons, Cardamons, Pepper plants etc. You can also purchase your requirements of spices. <br>

Afterwards visit a Batik Factory where you can see the manufacture of beautiful Batik prints. The shop contains a wide variety of Batik items. <br>

On arrival in Kandy commence a brief city tour Kandy including visit to the Upper Lake Drive, Market Square, Arts & Crafts Center & The Temple of the Sacred Tooth Relic.<br>

Kandy – the hill capital is another "World Heritage Site". It was the last stronghold of the Sinhalese Kings during the Portuguese, Dutch and British rule and finally ceded to the British in 1815 after an agreement. To the Buddhists of Sri Lanka and the World, Kandy is one of the most sacred sites as it is the home of the "Dalada Maligawa" - Temple of the Sacred Tooth Relic of Lord Buddha. <br>

Close by are the remains of the Royal Palace ("Maha Wasala"), "Palle Wasala"- where the Queens stayed-now used for the National Museum, "Meda Wasala" where other close relatives lived, Audience Hall, Natha Devala and Vishnu Devala are situated close by.The Bathing Pavilion ("Ulpenge") is by the Lake and in the Center of the lake is the Island called "Kiri samudraya" (Milk white ocean) used by the kings as the summer house. Today it is the center of Buddhism, Arts, Crafts, Dancing, Music and Culture Visitors can see these Dance & Music at the daily Cultural Performances held at several places in the city.<br>
<img src="images/amaya-hills-exterior.jpg" id="imgs"><br>
Evening visit the Temple of the Tooth Relic.<br>

Temple of the Tooth Relic - To Buddhist of Sri Lanka and the world, Kandy is one of the most sacred sites as it is the home of the "Dalada Maligawa" - Temple of the Sacred Tooth Relic of Lord Buddha .<br>

Later witness a Cultural dance performance featuring various dance types of Sri Lanka.<br>

Overnight stay at Hotel Chaaya Citadel, Kandy 4*</div><br><br>
</div>
<div class="parent_day3"><div class="day3s1"><h1>DAY 3 - KANDY - NUWARA ELIYA</h1></div><br>

After Breakfast leave visit the Botanical Gardens in Peradeniya. <br>
<br>
<div class="day3s1c">Royal Botanical Gardens, Peradeniya – 68 miles from Colombo, 147 acres in extent: Started in 1374 as a pleasure garden of the King's of Kandy. There are more than 5000 species of tree and plants. Some and endemics as well as flora from the tropical world. Spice garden and Orchid House are popular with Tourists <br>

Thereafter leave for Nuwara Eliya, enroute visit a Tea Plantation & Factory.<br>

Tea Plantations - Tea was first planted in Sri Lanka in 1824 at the Botanical Gardens at Peradeniya, when a few plants were brought from China. More were introduced from Assam in 1839. In 1867, a Scottish Planter named James Taylor planted tea seedlings in an 8 hectares of forestland, in the Loolkondura Estate. In 1873, the tea export industry of Sri Lanka began with a modest 23 lbs. being shipped to London. Tea will grow only on rolling terrain and is classified by elevation into low grown, medium grown and high grown into 3 main groups. Today more than 200,000 hectares in highlands and other areas are under Tea and around 300 million Kilograms, with a 25% of world tea exports are done by Sri Lanka as the World's largest Tea exporter. <br>

Nuwara Eliya - The 'Little England' of Sri Lanka, is set against beautiful backdrops of Mountains, Valleys, Waterfalls and Tea Plantations. It is supposed to be one of the coldest places on the island, but is really just like an England spring day although the temperature does drop at night. All around Nuwara Eliya you will see evidence of the British influence. Houses are like country cottages or Queen Ann style mansions.<br>

On arrival in Nuwara Eliya check-in to hotel.<br>

Rest of the day at leisure.<br>

Overnight stay at St. Andrews Hotel, Nuwara Eliya 3*</div><br><br></div>

<div class="parent_day4"><div class="day4s1"><h1>DAY 4 - NUWARA ELIYA – COLOMBO</h1></div><br>

<div class="day4s1c">After breakfast proceed to Colombo, enroute witness some scenic waterfalls.<br>

On arrival in Colombo commence a brief city tour of Colombo & shopping.<br>

Colombo a drive through the city taking you to the busy commercial areas as well as the tree-lined residential, Cinnamon Gardens. Visit Fort, the former British administrative center and military garrison, Sea Street - the Goldsmith's quarters in the heart of Pettah, the Bazaar area, where is also a Hindu Temple with elaborate stone carvings, and the Dutch Church of Wolfendhal dating back to 1749. The historic Dawatagaha Mosque and the former Eye Hospital are two buildings in Cinnamon Gardens worth looking at. Also visit the BMICH, see the replica of Avukana Buddha and the Independence Square. <br>

Visit the Mlesna exquisite tea boutique, cashew nut shop, read made garments and all sorts at Majestic City. Visit the Lanka Ceramics Centre, a place where you can buy "NORITAKE SET" or other ceramic items, visit the Odel shop at Lipton place and' House of Fashion'<br><br>
<img src="images/odel2.jpg"><br>
    Overnight stay at Galadari Hotel, Colombo 5* </div><br><br></div>
<div class="parent_day5"><div class="day5s1"><h1>DAY 5 - COLOMBO – AIRPORT</h1></div><br>

<div class="day5s1c">After breakfast transfer on time to connect departure flight.<br>
</p></div></div>
  </section>
    
  <section id="content2">
<div class="parent_day6"><div class="day1s2"><h2>Duration - 6 nights & 7 days</h2>

<h1>DAY 1 - AIRPORT – NEGOMBO</h1></div>

<div class="day1s2c"><p>Arrive in Sri Lanka. Clients will be met by a representative of Wisdom Travels and transferred to Negombo.<br>

Negombo - a famous fishing village North of Colombo, with a Dutch built Canal. The canal itself is a hive of activity with fishermen traveling up and down in their gaily-painted boats. On the shores of the canal you will find many homes and churches and many species of birds including spectacular Kingfishers.<br>

Catamaran trips in the sea and boat trips in canal can be organized. From November to April, diving facilities are available in this quaint village. The streets on either side of the Hotels are dotted with Souvenir Shops, Restaurants etc.<br>

Rest of the day at leisure.<br>
Overnight stay at The Heritance, Negombo 3*</div><br><br></div>

<div class="parent_day7"><div class="day2s2"><h1>DAY 2 - NEGOMBO – PINNAWALA – KANDY</h1></div><br>
<div class="day2s2c">After breakfast proceed to Kandy, enroute visit the Elephant Orphanage in Pinnawala.<br>

Pinnawela Elephant Orphanage – App. 55 miles from Colombo, off Colombo- Kandy road is Pinnawela, where an orphanage was started in 1975 to house the abandoned and the wounded Elephants. The number of elephants has increased to more than 40 now, including baby Elephants brought from various parts, as well as the babies born, as a result of the captive breeding programme. The best time to visit is the feeding time from 0930 hrs – 1000 hrs & 1330 – 1400 hrs and the bathing time from 1000 – 1030 hrs & 1400 – 1430 hrs when all the Elephants are taken to the river close by.<br>

Thereafter proceed to Kandy, enroute visit a Spice Garden in Mawanella and also a Batik Factory. <br>

Spice Gardens at Mawanella – You will see many spice gardens at Matale and in Mawanella on the Colombo-Kandy road where Cinnamon, Cardamom, Pepper Creepers and all other spice trees, plants and creepers are planted for visitors to see them. Spice products are also available for those who would like to buy them. At all Spice Gardens visitors are taken round explaining each tree and plant and at the end explaining the use of them food preparations.<br>

Afterwards visit a Batik Factory where you can see the manufacture of beautiful Batik prints. These shops contain a wide variety of Batik items.<br> 

On arrival in Kandy check-in to hotel.<br>

Overnight stay at Chaaya Citadel, Kandy 4*</div><br><br></div>

<div class="parent_day8"><div class="day3s2"><h1>DAY 3 - KANDY SIGHTSEEING</h1></div><br>
<div class="day3s2c">After Breakfast commence a brief city tour Kandy including visit to the Upper Lake Drive, Market Square, Arts & Crafts Center & The Temple of the Sacred Tooth Relic.<br>

Kandy – the hill capital is another "World Heritage Site". It was the last stronghold of the Sinhalese Kings during the Portuguese, Dutch and British rule and finally ceded to the British in 1815 after an agreement. To the Buddhists of Sri Lanka and the World, Kandy is one of the most sacred sites as it is the home of the "Dalada Maligawa" - Temple of the Sacred Tooth Relic of Lord Buddha.<br> 

Close by are the remains of the Royal Palace ("Maha Wasala"), "Palle Wasala"- where the Queens stayed-now used for the National Museum, "Meda Wasala" where other close relatives lived, Audience Hall, Natha Devala and Vishnu Devala are situated close by.The Bathing Pavilion ("Ulpenge") is by the Lake and in the Center of the lake is the Island called "Kiri samudraya" (Milk white ocean) used by the kings as the summer house. Today it is the center of Buddhism, Arts, Crafts, Dancing, Music and Culture Visitors can see these Dance & Music at the daily Cultural Performances held at several places in the city.<br>

Evening witness a Cultural dance performance featuring various dance types of Sri Lanka.<br>

Overnight stay at Hotel Chaaya Citadel, Kandy 4*</div><br><br>
</div>
<div class="parent_day9"><div class="day4s2"><h1>DAY 4 - KANDY - NUWARA ELIYA</h1></div><br>
<img src="images/20091010155057_nuwara_eliya_tea_factory_4_srilanka.jpg"><br>
<div class="day4s2c">After Breakfast leave visit the Botanical Gardens in Peradeniya.<br>

Royal Botanical Gardens, Peradeniya – 68 miles from Colombo, 147 acres in extent: Started in 1374 as a pleasure garden of the King's of Kandy. There are more than 5000 species of tree and plants. Some and endemics as well as flora from the tropical world. Spice garden and Orchid House are popular with Tourists<br>

Thereafter leave for Nuwara Eliya, enroute visit a Tea Plantation & Factory.<br>

Tea Plantations- Tea was first planted in Sri Lanka in 1824 at the Botanical Gardens at Peradeniya, when a few plants were brought from China. More were introduced from Assam in 1839. In 1867, a Scottish Planter named James Taylor planted tea seedlings in an 8 hectares of forestland, in the Loolkondura Estate. In 1873, the tea export industry of Sri Lanka began with a modest 23 lbs. being shipped to London. Tea will grow only on rolling terrain and is classified by elevation into low grown, medium grown and high grown into 3 main groups. Today more than 200,000 hectares in highlands and other areas are under Tea and around 300 million Kilograms, with a 25% of world tea exports are done by Sri Lanka as the World's largest Tea exporter. <br>

On arrival in Nuwara Eliya check-in to hotel.<br>

Rest of the day at leisure.<br>

Overnight stay at St. Andrews Hotel, Nuwara Eliya 3* (STD)</div><br><br></div>
<div class="parent_day10">
<div class="day5s2"><h1>DAY 5 - NUWARA ELIYA SIGHTSEEING</h1></div><br>

<div class="day5s2c">After breakfast commence a city tour of Nuwara Eliya.<br>

Nuwara Eliya - The 'Little England' of Sri Lanka, is set against beautiful backdrops of Mountains, Valleys, Waterfalls and Tea Plantations. It is supposed to be one of the coldest places on the island, but is really just like an England spring day although the temperature does drop at night.<br>

All around Nuwara Eliya you will see evidence of the British influence. Houses are like country cottages or Queen Ann style mansions. The Victoria Park, in the middle of the town, is a lovely place for a stroll or a picnic and is also good for Birding as you get some rare birds in this Park.<br>

Seasons may be absent elsewhere in Sri Lanka, but here you can read them by the flowers, which bloom in the spring (March to May) and the fall (August and September). These are the "seasons" when low-country folk flock to Nuwara Eliya to escape the sea level heat and humidity.<br>

Afternoon at leisure. <br>

Overnight stay at St. Andrews Hotel, Nuwara Eliya 3* (STD)</div><br><br></div>

<div class="parent_day11"><div class="day6s2"><h1>DAY 6 - NUWARA ELIYA – COLOMBO</h1></div><br>

<div class="day6s2c">After breakfast proceed to Colombo, enroute witness some scenic waterfalls.<br>

On arrival in Colombo commence a brief city tour of Colombo & shopping.<br>

Colombo a drive through the city taking you to the busy commercial areas as well as the tree-lined residential, Cinnamon Gardens. Visit Fort, the former British administrative center and military garrison, Sea Street - the Goldsmith's quarters in the heart of Pettah, the Bazaar area, where is also a Hindu Temple with elaborate stone carvings and the Dutch Church of Wolfendhal dating back to 1749. The historic Dawatagaha Mosque and the former Eye Hospital are two buildings in Cinnamon Gardens worth looking at.Also visit the BMICH, see the replica of Avukana Buddha and the Independence Square.<br>

Visit the Mlesna exquisite tea boutique, cashew nut shop, read made garments and all sorts at Majestic City. Visit the Lanka Ceramics Centre, a place where you can buy "NORITAKE SET" or other ceramic items, visit the Odel shop at Lipton place and' House of Fashion'<br>

Overnight stay at Galadari Hotel / Cinnamon Lakeside, Colombo 5*</div><br><br>
</div>
<div class="parent_day12"><div class="day7s2"><h1>DAY 7 - COLOMBO – AIRPORT</h1></div><br>

<div class="day7s2c">After breakfast transfer on time to connect departure flight.</div><br>

 </p></div>
  </section>
    
  <section id="content3">
<div class="parent_day13"><div class="day1s3"><h1>Duration - 4 nights & 5 days</h1></div><br>
<div class="day1s3c"><h2>COST INCLUDES</h2><br>

<p>
      <ul>
          <li>Accommodation at a Beach Bungalow with pool on Bed & Breakfast basis</li>
          <li>Return airport transfers by Sea Plane</li>
          <img src="images/cq5dam.web.468.263.jpeg" style="display:inline;"><br>
          <li>Daily breakfast at Café Huraa</li>
          <li>Usage of non-motorized water sports</li>
          <li>Snorkeling equipment to discover the wonderful house reef</li>
          <li>Tennis court</li>
      </ul>
<h2>COST EXCLUDES</h2><br>
          
          <ul><li>Lunch & dinner on tour</ul>
CONDITIONS<br>
          
          Cost based on Beach Bungalow with pool rooms, if a higher category room is required additional supplement can be paid<br>
Rate valid from 4th Oct 2016 last departure date from hotel 24th Oct 2016<br>
Rooms subject to availability
    </p></div></div>
  </section>
            
</div>
<div id="feedback">
            <form method="post" action="">
                <h1>Feedback</h1>
                <label>Type in your feedback</label><br><br>
                <textarea name="feedback"></textarea><br><br>
                <input type="email" name="email" placeholder="email"><br><br>
                <input type="submit" name="btnsubmit" class="btnsubmit">
                <?php
                $feedback = $_POST['feedback'];
                $email = $_POST['email'];
                if(isset($_POST['btnsubmit']))
                {
                    if($feedback =="")
                    {
                        echo "<br>Please enter your feedback";
                    }
                    else if($email =="")
                    {
                        echo "<br>Please enter your email address";
                    }
                    else
                    {
                        $recipient="feedback@wisdomtravels.com";
                        $subject="Feedback";
                        $message="$feedback";
                        $mailBody="$feedback";
                mail($recipient, $subject, $mailBody, "From: Feedback<$email>");
                $thankYou="<br><p>Thank you! Your feedback has been sent.</p>";
                echo "$thankYou";
                    }
                }
                ?>
            </form>
</div>
        <footer>        
            <div id="contact-us" style="display:block"><h2>Contact Us</h2>
            <a href="tel:+94777588715"><img src="images/iconContact.svg" id="contact"></a>
            <a href="mailto:muneer@wisdomtravels.com"><img src="images/iconEmail.svg" id="contact"></a>
            <a href="https://plus.google.com/+WisdomTravelsToursInternationalPvtLtdColombo"><img src="images/iconGooglePlus.svg" id="contact"></a>
            </div>
            Copyright &copy; Wisdom Travels 2000-2016.All Rights Reserved.</footer>
        
        
    </body>
</html>
 