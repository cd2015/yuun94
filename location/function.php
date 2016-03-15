<?php

$value = $_POST['value'];

//Accomodation
if ($value == 1) {

    echo '<option value="" selected="selected">--Select sub category--</option><option value="Apartment">Apartment</option>'
    . '<option value="Camping/Back Packer">Camping/Back Packer</option>'
    . '<option value="Cottage/Country Club">Cottage/Country Club</option><option value="Hotel/Suite">Hotel/Suite</option>'
    . '<option value="Real Estate/Rental">Real Estate/Rental</option>';

//Businesses
} elseif ($value == 2) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Advertisement/Branding">Advertisement/Branding</option>'
    . '<option>Beauty Saloon/Spa</option><option value="Banks & Forex Bureas">Banks & Forex Bureas</option><option value="Bridal Services/Cars">Bridal Services/Cars</option><option value="Courier">Courier</option>'
    . '<option value="Boutiques & Tailoring">Boutiques & Tailoring</option><option value="Furniture">Furniture</option><option value="Garden/Interior Designs">Garden/Interior Designs</option>'
    . '<option value="ICT/Software/Computing">ICT/Software/Computing</option><option value="Insurance">Insurance</option>'
    . '<option value="Mobile & Online Payments">Mobile & Online Payments</option><option value="Phones/Accessories">Phones/Accessories</option><option value="Photography/Video">Photography/Video</option>'
    . '<option value="Telecom">Telecom</option><option value="Travel/Tourism">Travel/Tourism</option>';

//Education
} elseif ($value == 3) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Day Care Center">Day Care Center</option>'
    . '<option value="High School">High School</option>'
    . '<option value="International School">International School</option><option value="Language School">Language School</option>'
    . '<option value="Pre/Primary School">Pre/Primary School</option><option value="University/College">University/College</option>';
}
//Entertainment
elseif ($value == 4) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Bar/Lounge">Bar/Lounge</option><option value="Casino">Casino</option>'
    . '<option value="Cinema/Theatre">Cinema/Theatre</option><option value="Night Club">Night Club</option>';
}

//Food & Drinks
elseif ($value == 5) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Coffe Cade">Coffee Cafe</option>'
    . '<option value="Delicatessen">Delicatessen</option>'
    . '<option value="Pastry/Confectionary">Pastry/Confectionary</option><option value="Restaurant">Restaurant</option>';
}

//Health
elseif ($value == 6) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Ambulance">Ambulance</option><option value="Clinic">Clinic</option>'
    . '<option value="Health Specialist">Health Specialist</option><option value="Hospital">Hospital</option>';
}

//Shopping
elseif ($value == 7) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="African Crafts/Art Gallery">African Crafts/Art Gallery</option>'
    . '<option value="Butchery/Abattoir">Butchery/Abattoir</option><option value="Computers/Electronics">Computers/Electronics</option>'
    . '<option value="Flowers/Gifts">Flowers/Gifts</option><option value="Shop">Shop</option>/<option value="Wine Merchants">Wine Merchants</option>'
    . '<option value="Stationery">Stationery</option><option value="Supermarket/Mall">Supermarket/Mall</option>';
}

//Sports and outdoor
elseif ($value == 8) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Boxing/Kick Boxing/Martial Arts">Boxing/Kick Boxing/Martial Arts</option>'
    . '<option value="Climbing/Cycling/Biking">Climbing/Cycling/Biking</option><option value="Gym/Health Club">Gym/Health Club</option>'
    . '<option value="Hockey/Golf/Cricket">Hockey/Golf/Cricket</option><option value="Soccer/Rugby/Athletics">Soccer/Rugby/Athletics</option>'
    . '<option value="Swimming/Boats/Water Sports">Swimming/Boats/Water Sports</option>'
    . '<option value="Tennis/Badminton/Squash">Tennis/Badminton/Squash</option><option value="Volleyball/Basketball">Volleyball/Basketball</option>';
}

//Tour and Travel
elseif ($value == 9) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Embassy">Emabssy</option>'
    . '<option value="Travel Agent/Tour Operator">Travel Agent/Tour Operator</option><option value="Vehicle">Vehicle Hire</option>';
}

//Vehicle
elseif ($value == 10) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Batteries/Spare Parts">Batteries/Spare Parts</option>'
    . '<option value="Garage">Garage</option><option value="Tyre/Wheel Alignment">Tyre/Wheel Alignment</option>';
}

//Worship
elseif ($value == 11) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Anglican">Anglican</option><option value="Bahia">Bahia</option>'
    . '<option value="Catholic">Catholic</option><option value="Envagelical/Pentecostal">Envagelical/Pentecostal</option><option value="Hindu">Hindu</option>'
    . '<option value="Muslim">Muslim</option>';
}