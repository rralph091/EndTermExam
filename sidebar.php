<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

body {
  background-color:  black;
  display: block;
  margin: 8px;
}

.main {
  margin-left: 200px;
  font-size: 20px; 
  padding: 0px 10px;
}

 {
  background-color: blue;
  color: white;
}

h1 {
  color: white;
}
  
.dropdown-container {
  display: none;
  background-color: #17ff92;
  padding-left: 8px;
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}


</style>
</head>
<body>

</nav>
      <div>         
      <?php 
        switch($navigation){
          case 'product':
            require_once 'product.php';
            break;
          case 'details':
            require_once 'product-details.php';
            break;
        }
    ?>
      </div>
<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
