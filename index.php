<html>
<head>
  <title>not60</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <style>
    .topnav {
      background-color: #333;
      overflow: hidden;
    }
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
  </style>
</head>
<body>
  <div class="topnav">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <a href="/contact.php">Contact</a>
    <a href="#about">About</a>
    <a href="/info.php">nerd stuff</a>
    <a href="/yeet.php">andrew stuff</a>
    <a href="/newfile.php">kyle stuff</a>
    <a href="/jude.php">jude old stuff</a>
    <a href="/judejunk/coolbackground/cooljude.html">jude new stuff</a>
    <a href="/brandon.php">brandon stuff</a>
  </div>
  <img src="/therealnot60.png" alt="Not60">
  <p>Welcome to the wacky world of not60</p>
  <form method="post">
    what your name <br/>
    <input type="text" name="name">
    <input type="submit" value="go">
  </form>
  <?php
  if(isset($_POST['name']))
    echo '<p>go away '.$_POST['name'].'</p>';

  for($i = 0; $i < 100; $i++){
    echo '<p>'.str_repeat('e',$i).'</p>';
  }
  ?>
</body>
</html>
