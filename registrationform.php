

<!-- include navbar file -->
<?php include("include/navbar.php"); ?>





<div class="container mt-4">
    

    <form action="/PHP/27_Form_Data.php" method="post">

      <div class="row "> 
        <div class=" col-md-8 m-auto shadow p-3 mb-5 bg-white rounded">

        <h2 class="text-center my-3 text-danger shadow-sm p-3 mb-5 bg-white rounded " >Registration Form</h2>

          <div class="mb-3 ">
            <label for="name" class="form-label">Name<span class="text-danger"> *</span></label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" required="" placeholder="Enter your name"> 
          </div>
          <div class="mb-3 ">
          <label for="contact" class="form-label">Contact<span class="text-danger"> *</span></label>
          <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your contact no."
            required="" minlength="10" maxlength="12" ><span id="message"></span>
        </div>
          <div class="mb-3 ">
            <label for="dob" class="form-label">Date of Birth<span class="text-danger"> *</span></label>
            <input type="date" class="form-control" id="dob" name="dob" required="" minlength="10" maxlength="12">
          </div>
          <div class="mb-3 ">
            <label for="email" class="form-label">Email<span class="text-danger"> *</span></label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required="" placeholder="name@mail.com">
            <div id="email" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          
          <div class="mb-3 ">
            <label for="address" class="form-label">Address<span class="text-danger"> *</span></label>
            <textarea name="address" id="address" class="form-control" cols="10" rows="2" aria-describedby="addressHelp"
              required=""></textarea>

          </div>
          
          <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
          <button type="submit" class="btn btn-primary" onclick="return mobile()">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <script>
function mobile(){
   var mob =  document.getElementById("contact").value;
  
  
  if(isNaN(mob)){
      document.getElementById("message").innerHTML="Please enter a digit number";
   
      return false;
  }
}
</script>




  
<!-- include footer file -->
<?php include("include/footer.php");?>

