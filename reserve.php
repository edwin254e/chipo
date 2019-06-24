
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.css">
    <title>Document</title>
</head>
<body>





    <div class="container">
<div class="row">
<div class="col-md-7">
<form action="reserve.inc.php" method="post">
<div><h3>Fill the form bellow to reserve a table</h3></div>
<label for="firstName">first Name:</label><br>
<input type="text" name="fstName" class="form-control" placeholder="enter your first name (required)"><br>
<label for="lastname">Last Name:</label><br>
<input type="text" name="lastName" class="form-control" placeholder="enter your last name (optional)"><br>
<label for="email">Email:</label><br>
<input type="email" name="email" class="form-control" placeholder="your current email addrress" ><br>
<label for="contacts">Contacts</label><br>
<input type="text" name="contacts" class="form-control" placeholder="your current phone number"><br>
<label for="city">City/State:</label><br>
<select name="state" id="states" class="form-control" >
<option value="-1">Select City </option>
<option value="nairobi">Nairobi</option>
<option value="kitale">Kitale</option>
<option value="kitale">Mombasa</option>
<option value="kitale">Kisumu</option>
</select><br>
<div class="form-row">
    <div class="col">
        <label for="date">Pax:</label>
      <input type="number" class="form-control" placeholder="how many will you be?">
    </div>
    <div class="col">
        <label for="time">Table/Section:</label>
      <select name="table" id="section" class="form-control">
          <option value="-1">Private Room</option>
          <option value="1">Outside</option>
          <option value="2">Inside</option>
          <option value="3">Terras</option>
          <option value="4">Confrence Room</option>
      </select>
    </div>
  </div><br>
<label for="date"><p><em>When are you coming:</em></p></label>

  <div class="form-row">
    <div class="col">
        <label for="date">Date:</label>
      <input type="date" class="form-control" placeholder="State">
    </div>
    <div class="col">
        <label for="time">Time:</label>
      <input type="time" class="form-control" placeholder="Zip">
    </div>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><p><em>For special request, leave a comment bellow:</em></p></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

<button type="submit" class="btn btn-primary">Reserve Now</button> <button type="submit" class="btn btn-danger">Cancell Reservation</button> 
  
  </form>  


</div>


</div>

    </div>
  
</body>
</html>


