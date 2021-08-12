<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #contact {
            color: #3E64FF;
        }
        
label{
  color: black !important;
  font-weight: 550 !important;
}

@media only screen and (min-width: 600px) {
        #contact_us_txt {
  margin-top:120px;
  }
}


    </style>
    <?php require("./header.php") ?>
</head>
<body>
    <?php 
        @include("./navbar.php");
    ?>
     

     <main id="main" style="background-image:url('assets/img/cus.jpg'); background-position-x:40%; background-position-y:30%; ">
         <br>
<section style="  padding: 60px 0 30px 0; " class=" heading ">
<center>
<div > 
<br>
<br>

<br>
 <h1 style=";font-size:7vh ;color:#6F4C5B;"> Write To Us </h1>
</center>
</div>
<br>
</section>
<br>
<br>
<br>
<section > 
<div class="container">
    <div class="row">
<div  class="col-lg-6" > 
<form style="  width: 90%;border:1px solid ; border-color:rgba(40, 79, 235, 0.72) ; margin-bottom:55px ;backdrop-filter: blur(8px);border-radius:25px; padding:10%;">
  <div class="row">
    <div class="col">
        <label for="name">Name:</label>
      <input name="name" type="text"  class="form-control" placeholder="Name">
    </div>
    </div>

    <div class="row">
    <div class="col">
        <label style="margin-top:20px;" for="email">Email-Id:</label>
      <input name="email" type="email"     class="form-control" placeholder="@gmail.com">
    </div>
 </div>
 <div class="row">
 <div class="col-lg-6 col-sm-12">
        <label style="margin-top:20px;" for="class">Class:</label>
      <input name="class" type="text"  class="form-control" placeholder="Class">
    </div>
    <div class="col-lg-6 col-sm-12">
        <div> 
        <label style="margin-top:20px;" for="class">Branch:</label> 
        </div>


        <select class="form-select" aria-label="Default select example">
  <option selected>Select</option>
  <option value="pcmb">PCMB</option>
  <option value="pcmcs">PCMCS</option>
  <option value="ebacs">EBACS</option>
</select>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col"> 
        <label for="address">Address:</label>
        <textarea rows="4"  data-gramm_editor="false" class="form-control" aria-label="With textarea"></textarea>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
        <label for="mobno">Mobile No. :</label>
        <input name="mobno" type="tel"  class="form-control" placeholder="Mobile Number">
    </div>
    </div>
    <button id="btn_submit_contact" class="btn btn-primary" type="submit"> Submit </button>
</form>   
</div>


   

<div id="contact_us_txt"  class="col-lg-6"> 

  <h2 class="t1" style=" font-weight:1000 !important;">  We're here to help you! </h2>
     <h5 class="t2"> Thanks for reaching us out, <br>
       Our support team will be in touch very soon.
    </h5>
</div>


</div>

</div>
</section>

</main>




    </html>
    </body>
    <section>
        <br>
        <br>
        <h1>
            <center>
            Footer
            </center>
        </h1>
        <br>
        <br>
    </section>
