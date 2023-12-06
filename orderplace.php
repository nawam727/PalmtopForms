<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PALMTOP.lk</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet" />
    <link href="Style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="container-fluid">
      <?php include './component/navbar.php';?>
      <br />
      <div class="container">
        <form>
          <center>
            <input type="text" placeholder="Search your LAPTOP" /><input
              type="submit"
              value="SEARCH"
            />
          </center>
        </form>
        <br />
        <h2 class="text-center text-capitalize">
          <strong
            >Enter your details here to place the order!&nbsp; &nbsp;
            &nbsp;</strong
          >
        </h2>
        <br />
        <form id="orderplacing" action="./server/placeorder_ap.php" method="post">
          <h3>
            <b><u>Billing Details</u></b>
          </h3>

          <label for="fname"><b>First Name* :-</b></label>
          <input type="text" name="First Name" id="fname" required />
          <label for="sname"><b>Second Name* :-</b></label>
          <input type="text" name="Second Name" id="sname" required /><br />
          <label for="comname"><b>Company Name(optional) :-</b></label>
          <br /><input type="text" name="Company Name" id="comname" required />
          <br />
          <label for="Province"><b>Province* :-</b></label> <br />
          <select name="Province">
            <option value="0">Select here</option>
            <option value="1">Western Province</option>
            <option value="2">Eastern Province</option>
            <option value="3">North Central Province</option>
            <option value="4">Northern Province</option>
            <option value="5">North Western Province</option>
            <option value="6">Sabaragamuwa Province</option>
            <option value="7">Southern Province</option>
            <option value="8">Uva Province</option>
            <option value="9">Central Province</option></select
          ><br />
          <label for="saddress"><b>Street Address* :-</b></label
          ><br />
          <input
            type="text"
            name="Street Address"
            id="saddress"
            placeholder=" House No &  Street name"
            required
          />
          <input
            type="text"
            name="SApartment"
            id="sapartment"
            placeholder=" Apartment, suit, etc(optional)"
          /><br />
          <label for="town"><b>Town/City :-</b></label
          ><br />
          <input type="text" name="Town/City" id="town" /><br />
          <label for="postal"><b>Postal Code/ZIP* :-</b></label
          ><br />
          <input type="text" name="Postal Code" id="postal" required /><br />
          <label for="phone"><b>Phone* :-</b></label
          ><br />
          <input
            type="text"
            name="phone"
            id="phone"
            placeholder=" Ex:- +947xxxxxxxx"
            required
          /><br />
          <label for="email"><b>E-Mail* :-</b></label> <br /><input
            type="text"
            name="email"
            id="email"
            placeholder=" Ex:- abc@xxxx.com"
            required
          /><br /><br />
          <hr />

          <h3>
            <b><u>Shipping Details</u></b>
          </h3>

          <input type="hidden" name="showAdditional" value="0" />

          <script>
              function toggleAdditionalFields() {
                  var checkbox = document.getElementById("showAdditional");
                  var hiddenInput = document.querySelector('input[name="showAdditional"]');
                  var condition = checkbox.checked;
                  var additionalFields = document.getElementById("additionalFields");

                  if (condition) {
                      additionalFields.style.display = "block";
                      hiddenInput.value = "1"; // Set the value to indicate checked
                  } else {
                      additionalFields.style.display = "none";
                      hiddenInput.value = "0"; // Set the value to indicate unchecked
                  }
              }
          </script>
          <label for="showAdditional">Ship to a different address?</label>
          <input
            type="checkbox"
            id="showAdditional"
            onclick="toggleAdditionalFields()"
          />

          <div id="additionalFields" style="display: none">
            <label for="additionalInfo"><b>First Name* :-</b></label>
            <input type="text" id="sfname" name="sfname" />
            <label for="additionalInfo"><b>Second Name* :-</b></label>
            <input type="text" id="ssname" name="ssname" /><br />
            <label for="additionalinfo"><b>Province* :-</b></label> <br />
            <select name="Province">
              <option value="0">Select here</option>
              <option value="1">Western Province</option>
              <option value="2">Eastern Province</option>
              <option value="3">North Central Province</option>
              <option value="4">Northern Province</option>
              <option value="5">North Western Province</option>
              <option value="6">Sabaragamuwa Province</option>
              <option value="7">Southern Province</option>
              <option value="8">Uva Province</option>
              <option value="9">Central Province</option></select
            ><br />
            <label for="saddress"><b>Street Address* :-</b></label
            ><br />
            <input
              type="text"
              name="Street Address"
              id="ssaddress"
              placeholder=" House No & Street name"
            />
            <input
              type="text"
              name="Apartment"
              id="ssapartment"
              placeholder=" Apartment, suit, etc(optional)"
            /><br />
            <label for="town"><b>Town/City :-</b></label> <br /><input
              type="text"
              name="Town_City"
              id="stown"
            /><br />
            <label for="postal"><b>Postal Code/ZIP* :-</b></label
            ><br />
            <input type="text" name="Postal Code" id="spostal" /><br />
            <label for="phone"><b>Phone* :-</b></label> <br /><input
              type="text"
              name="phone"
              id="sphone"
              placeholder=" Ex:- +947xxxxxxxx"
            /><br />
            <label for="email"><b>E-Mail* :-</b></label> <br /><input
              type="text"
              name="email"
              id="semail"
              placeholder=" Ex:- abc@xxxx.com"
            /><br />
          </div>
          <br />
          <label for="other"><b>Other Information(optional) :-</b></label>
          <br /><textarea
            name="bio"
            rows="4"
            cols="50"
            placeholder="Type Here"
          ></textarea
          ><br /><br />
          <input type="submit" id="submit" name="submit" value="Place Order" />
          <input type="reset" id="reset" name="reset" value="Reset" />
        </form>
        <br />
      </div>

      <br />
      <br />
      <div class="card">
        <footer>
          <center>
            <b
              >We are Here! 24/7 Customer Support. <br />
              <a href="hr.com">+947312345678</a> /
              <a href="hr.com">+947912345678</a> <br />
              <a href="laptopsforsale123@gmail.com">PALMTOPlk@gmail.com</a>
              <br />
              <a href="Youtube.html"
                ><img src="images/whtsap.png" width="45" height="43" alt=""
              /></a>
              <a href="Youtube.html"
                ><img src="images/insta.png" width="40" height="40" alt=""
              /></a>
              <a href="Youtube.html"
                ><img src="images/Fb1.png" width="38" height="35" alt="" /></a
            ></b>
          </center>
        </footer>
        <br />
        <p>
          <center>
            <b
              ><a href="LAP.php">Home</a> | <a href="about.php">About</a> |
              <a href="promo.php">Promo</a> |
              <a href="contact.php">Contact</a> |
              <a href="location.php">Location</a> |
              <a href="brandsAndCateg.php">Brands & Categories</a></b
            >
          </center>
        </p>
        <div class="row">
          <div class="col-lg-5">
            <b
              >&nbsp;<img
                src="images/newlogo.jpg"
                alt=""
                width="3365"
                height="1450"
                class="img-fluid"
            /></b>
          </div>
          <div class="col-lg-6">
            &nbsp;<b
              >&nbsp;<br />
              &nbsp; Laptops for sale.<br /><br />
              &nbsp; #21/A, Weliwatta road, Colombo 09.<br /><br />
              &nbsp; Copyright © 2023 PALMTOP.lk | All rights reserved.</b
            >
          </div>

          <div class="col-log-7">
            <b
              ><center>
                <br />
                <p><u>Top Brands</u></p>
                <a href="brandsAndCateg.php">Apple</a><br />
                <a href="brandsAndCateg.php">Asus</a><br />
                <a href="brandsAndCateg.php">Dell</a><br />
                <a href="brandsAndCateg.php">HP</a><br />
                <a href="brandsAndCateg.php">MSI</a><br />
                <a href="brandsAndCateg.php">Lenovo</a>
              </center></b
            >
          </div>
          <a href="orderplace.php"></a
          ><!-- body code goes here -->

          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
          <script src="js/jquery-3.4.1.min.js"></script>

          <!-- Include all compiled plugins (below), or include individual files as needed -->
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap-4.4.1.js"></script>
          <script>
            function checker() {
              var result = confirm("Are You Sure?");
              if (result == false) {
                event.preventDefault();
              }
            }
          </script>
        </div>
      </div>
    </div>
  </body>
</html>
