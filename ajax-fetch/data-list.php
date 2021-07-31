<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="user-detail">
    <h2>Insert User Data</h2>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label>Full Name</label>
          <input type="text" placeholder="Enter Full Name" name="fullName">
          <button type="submit" id="showData">Submit</button>
    </form>
        </div>
</div>
<!-- <button id="showData">Show User Data</button> -->

<div id="table-container"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script-fetch.js"></script>
<script type="text/javascript" src="ajax-script-insert.js"></script>


</body>
</html>