<html>
<head>
  <title>verification page</title>
  <style>
    h2
    {
      font-family:verdana;
      color:blue;
    }
    body{background-color: #FDEBD0;

    }

  </style>
</head>
<body>
  <h2>Please Verify your details below!!</h2>
  <h3>
    First Name : <?php echo $_POST["fname"]; ?><br /><br />
    Last Name : <?php echo $_POST["lname"]; ?><br /><br />
    Email Address : <?php echo $_POST["email"]; ?><br /><br />
    Phone Number : <?php echo $_POST["phone"]; ?><br /><br />
    Applying for the role of:
    <?php
        if (isset($_POST['field']))
        {
            echo  $_POST['field'] ;
        }
    ?>
    <br /><br />
    Relocation:
    <?php
      if (isset($_POST['relocate']))
      {
          echo  $_POST['relocate'] ;
      }
    ?>
    <br /><br />
    Preferred location:
    <?php
      if (isset($_POST['location']))
      {
          echo  $_POST['location'] ;
      }
    ?><br /><br />
  </h3>
  <h2>Thank You!You have applied sucessfully😀</h2>
</body>
</html>
