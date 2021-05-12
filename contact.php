<!-- include navbar file -->
<?php include("include/navbar.php"); ?>



<!--Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login your Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">UserName</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!--Sign Up Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="SignupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Create a new Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="Name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
  <div class="row ">
    
    <div class="col-lg-6 m-auto">
      <form action="">
        <div class="mb-3 ">
          <label for="name" class="form-label">Name<span class="text-danger"> *</span></label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required="">
        </div>
        <div class="mb-3 ">
          <label for="contact" class="form-label">Contact<span class="text-danger"> *</span></label>
          <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your contact no."
            required="" minlength="10" maxlength="12" ><span id="message"></span>
        </div>

        <div class="mb-3 ">
          <label for="email" class="form-label">Email<span class="text-danger"> *</span></label>
          <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required="">
        </div>
        <div class="mb-3">
          <label for="about" class="form-label">About Us<span class="text-danger"> *</span></label>
          <textarea class="form-control" name="about" id="about" rows="3" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary" onclick="return mobile()">Contact me</button>
    </div>
    </form>
  </div>
  
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