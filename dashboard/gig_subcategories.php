<?php

$value = $_POST['value'];

//Graphics & Design
if ($value == 1) {

    echo '<option value="" selected="selected">--Select sub category--</option><option value="Cartoons">Cartoons</option>'
    . '<option value="Logo Design">Logo Design</option>'
    . '<option value="Book Covers & Packaging">Book Covers & Packaging</option><option value="Photoshop Editing">Photoshop Editing</option>'
    . '<option value="Flyers & Posters">Flyers & Posters</option><option value="Business Cards & Stationary">Business, Invitation Cards & Stationary</option><option value="Banners & Social Media Designs">Banners & Social Media Designs</option><option value="3D & 2D Models">3D & 2D Models</option><option value="Web & Mobile Graphics">Web & Mobile Graphics</option><option value="Vector Tracing">Vector Tracing</option><option value="T-Shirt Designs">T-Shirt Designs</option>';

//Marketing
} elseif ($value == 2) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Web Analytics">Web Analytics</option>'
    . '<option value="Social Media Pages">Social Media Pages</option><option value="Video Marketing">Video Marketing</option><option value="Reviews">Reviews</option>'
    . '<option value="Customer Engagement">Customer Engagement</option><option value="Product Marketing">Product Marketing</option><option value="Insurace Marketing">Insurance Marketing</option>';

//Writing & Typing
} elseif ($value == 3) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Copy Writing">Copy Writing</option>'
    . '<option value="Creative Writing">Creative Writing</option>'
    . '<option value="Translation">Translation</option><option value="Resumes & Cover Letters">Resumes & Cover Letters</option>'
    . '<option value="Proofreading & Editing">Proof Reading & Editing</option><option value="Proposals & Technical papers">Proposals & Technical papers</option><option value="Press Releases">Press Releases</option><option value="Articles & Blogs">Articles & Blogs</option><option value="Research & Summaries">Research & Summaries</option><option value="Legal Writing">Legal Writing</option>';
}
//Video & Animation
elseif ($value == 4) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Commercials">Commercials</option><option value="Editing & Post production">Editing & Post production</option>'
    . '<option value="Animation & 3D">Animation & 3D</option><option value="Music Videos">Music Videos</option><option value="Short Films">Short Films</option><option value="Event Videos">Event Videos</option><option value="Film production">Film Production</option>';
}

//Music & Audio
elseif ($value == 5) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Mixing & Mastering">Mixing & Mastering</option>'
    . '<option value="Voice Overs">Voice Overs</option>'
    . '<option value="Sound Effects">Sound Effects</option><option value="Session Musicians">Session Musicians</option><option value="Singers & Song Writers">Singers & Song Writers</option><option value="Producers & Composers">Producers & Composers</option>';
}

//Technology & Software
elseif ($value == 6) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Word Press">Word Press</option><option value="Web programming">Web programming</option>'
    . '<option value="Mobile Apps">Mobile Apps</option><option value="File Conversion">File Conversion</option><option value="E Commerce">E Commerce</option><option value="Databases">Databases</option><option value="Data Analysis & Reports">Data Analysis & Reports</option><option value="Support & IT">Support & IT</option><option value="Software Installation">Software Installation</option><option value="Phone Solutions & Configurations">Phone Solutions & Configurations</option>';
}

//Advertizing
elseif ($value == 7) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Hold Your Sign">Hold Your Sign</option>'
    . '<option value="Flyers & Handouts">Flyers & Handouts</option><option value="Animal & Pet Models">Animal & Pet Models</option>'
    . '<option value="Outdoor Advertizing">Outdoor Advertizing</option><option value="Radio">Radio</option>/<option value="Music Promotions">Music Promotions</option>'
    . '<option value="Banner Advertizing">Banner Advertizing</option>';
}

//Business
elseif ($value == 8) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Business Planning">Business Planning</option>'
    . '<option value="Career Advice">Career Advice</option><option value="Market Research">Market Research</option>'
    . '<option value="Presentations">Presentations</option><option value="Virtual Assistant">Virtual Assistant</option>'
    . '<option value="Business Tips">Business Tips</option>'
    . '<option value="Branding Services">Branding Services</option><option value="Financial Consulting">Financial Consulting</option><option value="Legal Consulting">Legal Consulting</option>';
}


//Health & Life Style
elseif ($value == 9) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Spiritual & Healing">Spiritual & Healing</option>'
    . '<option value="Fortune Telling">Fortune Telling</option><option value="Health & Fitness">Health & Fitness</option><option value="Travel">Travel</option><option value="Relationship Advice">Relationship Advice</option><option value="Diet & Weightloss">Diet & Weightloss</option><option value="Make up, Styling & Beauty">Make up, Styling & Beauty</option><option value="Cooking Recipes">Cooking Recipes</option><option value="Animail Care & Pets">Animail Care & Pets</option><option value="Parenting Advice">Parenting Advice</option>';
}

//Art & Gifts
elseif ($value == 10) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Art & Crafts">Art & Crafts</option>'
    . '<option value="Greetings Cards">Greetings Cards</option><option value="Hand made Jewellery">Hand made Jewellery</option><option value="Gifts">Gifts</option>';
}


//Fun, Events & Bizzare
elseif ($value == 11) {
    echo '<option value="" selected="selected">--Select sub category--</option><option value="Dancers">Dancers</option><option value="Daredevils & Acrobats">Daredevils & Acrobats</option>'
    . '<option value="Ushering">Ushering</option><option value="MCs">MCs</option>';
}

//Small Job Experts
elseif ($value == 12) {
    echo '<option value="">--Select sub category</option><option value="Builders/Constructors">Builder/Constructor</option>'
    . '<option value="Drivers">Driver</option>'
    . '<option value="Domestic Helpers/House Maids">Domestic Helper/House Maid</option><option value="Electricians">Electrician</option>'
    . '<option value="Mechanics/Technicians">Mechanic/Technician</option><option value="Painting/Painter">Painter</option>'
    . '<option value="Plumbers">Pulmber</option><option value="Welders">Welder</option>';
}

//Agriculture
elseif ($value == 13) {
    echo '<option value="">--Select sub category--</option><option value="Farmers">Farmer</option>'
    . '<option value="Produce Buyers">Produce Buyer</option><option value="Market Vendors">Market Vendor</option>';
}