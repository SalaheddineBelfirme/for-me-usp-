<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  require 'conction.php';
  //  require 'addpro.php';
  echo $_GET["id"];
  $c = 12;
  $data = mysqli_query($conn, "SELECT * FROM `product` WHERE id_c=$c");
  $dataca = mysqli_query($conn, "SELECT * FROM `category` WHERE 1");

  ?>
  <div class="contt">
    <div class="continer_cards row">
      <?php
      foreach ($data as $row) {
      ?>
        <div class="card" style="width: 18rem;">
          <img id="myimg" src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name'] ?></h5>
            <p class="card-text"> <?php echo $row['description']; ?></p>
          </div>
          <div class="card-body">
            <a href="#" class="card-link">update</a>
            <a href="#" class="card-link">Delete</a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div id="category">
      <ul class="nav  flex-column ">
        <li class="nav-item">
          <a class="nav-link" active aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">play</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item">
          <select onselect="submit()" name="selectca" id="c_product">
            <?php
            foreach ($dataca as  $row) {
            ?>
              <option value="<?php echo $row['id_c']; ?>"><?php echo $row['name']; ?></option>
            <?php
            }
            ?>
          </select>
        </li>
      </ul>
    </div>
  </div>






  <script>
    function submit(e) {

    }
    const c = document.getElementById("c_product")
      c.addEventListener("click", (e) => {
        e.preventDefault()
        const path = "#/?id=" + e.target.value
        window.location.assign(path)
      })
  </script>
  
</body>

</html>