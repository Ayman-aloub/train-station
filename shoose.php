<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css" />
<link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>
<body>
<form action="#" method="post">

	  <div class="form-group">
	    <pr class="lab1">Source :</pr>
	    <input type="text" class="form-control" id="Sid" placeholder="From" name="txts">
	  </div>
        <div class="form-group">
	    <pr class="lab2">Destanation :</pr>
	    <input type="text" class="form-control" id="Destid" placeholder="To" name="txtd">
	  </div >
        <pr class="lab2">Train Type :</pr>
	    <select class="form-control" name="trainame">
        <option value="All Trains">All Trains</option>
        <option value="VIP">VIP</option>
        <option value="Air-conditioned">Air-conditioned</option>
        <option value="Sleeping">Sleeping</option>
        <option value="Special">Special</option>
        </select>
        <br/>
	  <input type="submit" value="Submit" class="btn btn-lg btn-success" name="btnsubmit" />
	</form>


</body>
</html>
