<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
require_once('db_connection.php'); // DB CONNECTION

 ?>
<center>
  <div style="border: 1px solid black; width: 1200px;">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<h3>Apply for 500 Startups</h3>
<h5>500 Startups is accepting applications for its next batch! Please fill out the following form to be considered.</h5><p>
<h3>Intro</h3>
<p>What's your Company's legal name?</p>
<form action="start.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Legal Name" name="legalname" style="width: 450px; height:40px">

  <p>Does your company go by any other names?</p>
    <input type="radio" name="of"> Yes<br>
    <input type="radio" name="of"> No<br>


<p>Describe what your company does in no more than 3 sentences. Give us your best elevator pitch:</p>

    <input type="text" placeholder="500 Startups is a seed fund & network of startup programs." name="sentences" style="width: 450px; height:40px">

<p>What's your Company's website?</p>

    <input type="text" placeholder="www.website.com" name="site" style="width: 450px; height:40px">

<script type="text/javascript">
  function HideForm(){ // JQUERY hide div
    var select1 = $('#sel').val();
    if(select1 == 'no') {
      $('#product').hide();
    }
    else {
      $('#product').show();
    }
  }
</script>
<p>Has your product of service launched</p>

  <select style="width: 450px; height:40px" name="sel" id="sel" onchange="HideForm()">
<option value="yes">Yes, it's a public</option>
<option value="pub">Yes, it's in public beta</option>
<option value="priv">Yes, it's in private beta</option>
<option value="no">No</option>
  </select>


<p>

  <div id="product">
      <input type="text" placeholder="Your product" name="product" style="width: 450px; height:40px">
  </div>
  <p>
  <h3>Business</h3>
<p>Which business model category best matches your Company?</p>

    <input name="model1" type="radio"> Saas<br>
    <input name="model1" type="radio"> On-demand<br>
    <input name="model1" type="radio"> Mobile App<br>
    <input name="model1" type="radio"> Marketplace<br>
    <input name="model1" type="radio"> Content<br>
    <input name="model1" type="radio"> eCommerce<br>
    <input name="model1" type="radio"> Other<br>
    <input name="model1" type="radio"> Cloud<br>

<p>Type of sales:</p>

    <input type="checkbox" name="sale2"> B2B<br>
    <input type="checkbox" name="sale2"> B2C<br>
    <input type="checkbox" name="sale2"> C2C<br>
    <input type="checkbox" name="sale2"> B2G<br>
    <input type="checkbox" name="sale2"> B2B2C<br>

<h3>Basics</h3>
<p>First name</p>

    <input type="text" placeholder="Darkhan" name="fname" style="width: 450px; height:40px">

<p>Last name</p>

    <input type="text" placeholder="Baibulat" name="lname" style="width: 450px; height:40px">

<p>Email</p>

    <input type="text" placeholder="dark@mail.ru" name="email1" style="width: 450px; height:40px">

<p>Phone</p>

    <input type="text" placeholder="+X (XXX) XXX - XXX" name="phone" style="width: 450px; height:40px">

<p>How much revenue did your company make during the last six months? </p>

    <input type="text" placeholder="Last 6 months" name="revenue1" requred>


    <input type="text" placeholder="Last 3 months" name="revenue2" requred>


    <input type="text" placeholder="Last month" name="revenue3" requred>

<p>Please upload your latest capitalization table here:</p>

    <input type="file" name="ff">

<input class="submit" name="submit" value="APPLY" type="submit"></form>
</div>
</center>
