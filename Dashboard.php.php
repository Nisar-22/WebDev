<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 30%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #4mcq50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #111;
    color: white;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Dashboard</a></li>
  <li><a href="formt.php">Search By number</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
</body>
</html>
