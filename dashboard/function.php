<?php

$value = $_POST['value'];

//Accomodation
if ($value == 1) {

    echo '<option value="">--Select sub category--</option><option value="Apartments">Apartment</option>'
    . '<option value="Camping Sites/Back Packers">Camping/Back Packer</option><option value="Cottages/Country Clubs">Cottage/Country Club</option>'
    . '<option value="Guest Houses/Lodges">Guest House/Lodge</option><option value="Hotels/Suites">Hotel/Suite</option>'
    . '<option value="Real Estates/Rentals">Real Estate/Rental</option>';

//Businesses
} elseif ($value == 2) {
    echo '<option value="">--Select sub category--</option><option value="Animals/Pets">Animals/Pets</option>'
    . '<option value="Advertisement/Branding">Advertisement/Branding</option><option value="Banks/Forex Beareus">Bank/Forex Beareu</option>'
    . '<option value="Beauty Saloons/Spas">Beauty Saloon/Spa</option><option value="Book Stores">Book Store</option>'
    . '<option value="Bridal Services/Cars">Bridal Services/Cars</option><option value="Courier">Courier</option>'
    . '<option value="Funeral Services/Burrial Servies">Funeral/Burrial Services<option><option value="Furniture/Interior Designers">Furniture/Interior Designer</option>'
    . '<option value="Gardens/Recreation Centers">Garden/Recreation Center</option>'
    . '<option value="ICT/Software/Computing">ICT/Software/Computing</option><option value="Insurance">Insurance</option><option value="Laundry">Laundry</option>'
    . '<option value="Mobile Money/Online Payments">Mobile Money/Online Payment</option><option value="Phones/Accessories">Phones/Accessories</option>'
    . '<option value="Photography/Video">Photography/Video</option><option value="Security">Security</option>'
    . '<option value="Sewer Trucks">Sewer Truck</option><option value="Telecom">Telecom</option>'
    . '<option value="Travel/Tourism">Travel/Tourism</option><option value="Video Library/Video Libraries">Video Library</option>'
    . '<option value="Welding/Glass marts">Welding/Glass Mart</option>';

//Education
} elseif ($value == 3) {
    echo '<option value="">--Select sub category--</option><option value="Colleges">College</option>'
    . '<option value="Day Care Centers">Day Care Center</option><option value="High Schools">High School</option>'
    . '<option value="International Schools">International School</option><option value="Language Schools">Language School</option>'
    . '<option value="Pre/Primary Schools">Pre/Primary School</option><option value="Training Centers">Training Center</option>'
    . '<option value="Universities/University">University</option><option value="Vocational Institutes">Vocational Institute</option>';
}
//Entertainment
elseif ($value == 4) {
    echo '<option value="">--Select sub category--</option><option value="Bars/Lounges">Bar/Lounge</option><option value="Casinos">Casino</option>'
    . '<option value="Cinemas/Theatres">Cinema/Theatre</option><option value="Night Clubs">Night Club</option>';
}

//Food & Drinks
elseif ($value == 5) {
    echo '<option value="">--Select sub category--</option><option value="Coffe Cafe/Coffee Cafes">Coffee Cafe</option>'
    . '<option value="Delicatessens">Delicatessen</option>'
    . '<option value="Pastry/Confectionary">Pastry/Confectionary</option><option value="Restaurants">Restaurant</option>';
}

//Health
elseif ($value == 6) {
    echo '<option value="">--Select sub category--</option><option value="Ambulances">Ambulance</option><option value="Clinics">Clinic</option>'
    . '<option value="Health Specialists">Health Specialist</option><option value="Hospitals">Hospital</option>';
}

//Shopping
elseif ($value == 7) {
    echo '<option value="">--Select sub category--</option><option value="African Crafts/Art Gallery">African Crafts/Art Gallery</option>'
    . '<option value="Butchery/Abattoirs">Butchery/Abattoir</option>'
    . '<option value="Boutiques/Tailoring">Boutique/Tailoring</option><option value="Computers/Electronics">Computers/Electronics</option>'
    . '<option value="Flowers/Gifts">Flowers/Gifts</option><option value="Shops">Shop</option>'
    . '<option value="Stationery/Stationeries">Stationery</option><option value="Supermarkets/Malls">Supermarket/Mall</option>';
}

//Sports and outdoor
elseif ($value == 8) {
    echo '<option value="">--Select sub category--</option><option value="Boxing/Kick Boxing/Martial Arts">Boxing/Kick Boxing/Martial Arts</option>'
    . '<option value="Climbing/Cycling/Biking">Climbing/Cycling/Biking</option><option value="Gym/Health Club">Gym/Health Club</option>'
    . '<option value="Hockey/Golf/Cricket">Hockey/Golf/Cricket</option><option value="Soccer/Rugby/Athletics">Soccer/Rugby/Athletics</option>'
    . '<option value="Swimming/Boats/Water Sports">Swimming/Boats/Water Sports</option>'
    . '<option value="Tennis/Badminton/Squash">Tennis/Badminton/Squash</option><option value="Volleyball/Basketball">Volleyball/Basketball</option>';
}

//Tour and Travel
elseif ($value == 9) {
    echo '<option value="">--Select sub category--</option><option value="Embassy/Embassies">Emabssy</option>'
    . '<option value="Travel Agents/Tour Operators">Travel Agent/Tour Operator</option><option value="Vehicle Hire/Taxis">Vehicle Hire/Taxi</option>';
}

//Vehicle
elseif ($value == 10) {
    echo '<option value="">--Select sub category--</option><option value="Batteries/Spare Parts">Batteries/Spare Parts</option>'
    . '<option value="Garages">Garage</option><option value="Tyres/Wheel Alignment">Tyre/Wheel Alignment</option>'
    . '<option value="Washing Bays">Washing Bay</option>';
}

//Worship
elseif ($value == 11) {
    echo '<option value="">--Select sub category--</option><option value="Anglican">Anglican</option><option value="Bahia">Bahia</option>'
    . '<option value="Catholic">Catholic</option><option value="Envagelical/Pentecostal">Envagelical/Pentecostal</option><option value="Hindu">Hindu</option>'
    . '<option value="Muslim">Muslim</option>';
}

//Agriculture
elseif ($value == 12) {
    echo '<option value="">--Select sub category--</option><option></option><option value="Farmers">Farmer</option>'
    . '<option value="Produce Buyers">Produce Buyer</option><option value="Market Vendors">Market Vendor</option>';
}

//Events specialists
elseif ($value == 13) {
    echo '<option value="">--Select sub category--</option><option value="Chairs/Decorations/Tents">Chairs/Decorations/Tents</option>'
    . '<option value="MCs/Abogezi ku mikolo/Master of Ceremony">Master of Ceremony</option><option value="Ushers">Usher</option>'
    . '<option value="Lighting/Sound Systems">Lighting/Sound Systems</option>';
}

//Commercial firms
elseif ($value == 15) {
    echo '<option value="">--Select sub category--</option><option value="Banks/Forex Bureaus">Bank?Forex Bureau</option>'
    . '<option value="Insurance">Insurance</option><option value="Mobile Money">Mobile Money</option>'
    . '<option value="Online Payment">Online Payment</option><option value="Telecom">Telecom</option>';
}

//Small Job Experts
elseif ($value == 16) {
    echo '<option value="">--Select sub category</option><option value="Artists">Artist</option><option value="Builders/Constructors">Builder/Constructor</option>'
    . '<option value="Counselors/Counseling/Therapy/Therapists">Counselor/Therapist</option><option value="Drivers">Driver</option>'
    . '<option value="Domestic Helpers/House Maids">Domestic Helper/House Maid</option><option value="Electricians">Electrician</option>'
    . '<option value="Mechanics/Technicians">Mechanic/Technician</option><option value="Painting/Painter">Painter</option>'
    . '<option value="Plumbers">Pulmber</option><option value="Welders">Welder</option>';
}

//Sanitary experts
elseif ($value == 17) {
    echo '<option value="">--Select sub category--</option><option value="Excavators">Excavator</option><option value="Fumigators">Fumigator</option>'
    . '<option value="sewer flushers">Sewer Flusher</option><option value="Sewer Trucks">Sewer Truck</option>';
}

//Proffessional services
elseif ($value == 18) {
    echo '<option value="">--Select sub category--</option><option value="Accountants">Accountants</option><option value="Auditors">Auditors</option>'
    . '<option value="Advocates">Advocates</option><option value="Data analysts/data entrants">Data Analaysts/Entrants</option>'
    . '<option value="Engineers">Engineers</option><option value="Lawyers">Lawyers</option>'
    . '<option value="Marketing/Marketier/Sale">Marketiers/Sales Persons</option><option value="Surveyors">Surveyors</option>';
}

//Security
    elseif ($value == 19) {
        echo '<option value="">--Select sub category--</option><option value="Police post">Police post</option><option value="Security Firms">Security Firms'
        . '</option><option value="Security Services">Security Services</option>';
}