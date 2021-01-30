<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="./images/tpicon.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Top Bots - Add</title>
    </head>
    
    <body>
        
        <div class="topnav">
         <a href="./index.php">Home</a>
         <a href="./bots.php">Bots</a>
         <a href="./add.php">Add Bot</a>
         <a href="./about.php">About</a>
        </div>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center><h1>Add Bot</h1></center>
        <form action="process.php" method="post">
          <input type="text" name="UName" placeholder="Bot Name" class="form-control mb-2">
          <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
          <input type="text" name="Subject" placeholder="Bot Id" class="form-control mb-2">
          <textarea name="msg" class="form-control mb-2" placeholder="Long Description and Short Description"></textarea>
          <button class="adbtn" name="btn-send"> Add Bot </button>
        </form>
        
<footer>
    &copy; Top Bot List
</footer>
    </body>
</html>
