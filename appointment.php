<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<h2>Book an Appointment</h2>
<p>Fill in the necessary.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/hi.php">

        <div class="row">
          <div class="col-50">
            <h3>Book an Appointment</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Enter your Name">

            <label for="date"><i class="fa fa-calendar-day"></i> Date of Birth </label>
            <input type="text" id="date" name="date" placeholder="Enter your Date of Birth">

            <label for="text"><i class="fa fa-calendar-day"></i> Gender </label>
            <input type="checkbox" id="gender1" name="gender1" value="Male">
            <label for="gender1"> Male </label><br>
            <input type="checkbox" id="gender2" name="gender2" value="Female">
            <label for="gender2"> Female </label><br>

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="fname" name="firstname" placeholder="Enter your Email">

            <label for="email"><i class="fa fa-phone"></i> Telephone Number</label>
            <input type="text" id="tel" name="telephone" placeholder="Enter your telephone number">

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address" name="address" placeholder="Enter your Address">

            <label for="doctor"><i class="fa fa-user-md"></i> Doctor</label>
            <select id="doctor" name="doctor">
              <option value="ameen Rassoul">Ameen Rassoul</option>
              <option value="Andja Jasovic">Andja Jasovic</option>
              <option value="Ridwana Timol">Ridwana Timol</option>
              <option value="Shilpa Sinha">Shilpa Sinha</option>
              <option value="Reza Aboobakar">Reza Aboobakar</option>
              <option value="Serge Maurice">Serge Maurice</option>
            </select>


            <label for="date"><i class="fa fa-calendar-alt"></i> Date of Appointment </label>
            <input type="text" id="date" name="date" placeholder="Enter your preferred date">



        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="www.termsfeed.com/blog/sample-terms-and-conditions-template/" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Book Appointment</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
