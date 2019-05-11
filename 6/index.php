<?php include("koneksi.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
      .card{
        margin: 10px;
      }
      .jumlah,.nama
      {
        height: 50%;
        padding: 20px;
      }
      .nama{
        border-bottom:solid 1px #dddd;
      }

#parent {
    padding: 5% 0;
}
#child {
    padding: 6% 0;
}
.judul{
  width: 100%;
  padding: 20px;
  text-align: center;
}

    </style>
    <title>Aplikasi Data Programmer</title>
  </head>
  <body>

    <div class="container" style="padding : 10px">

      <div class="judul">
        <h1>Aplikasi Data Programmer</h1>
      </div>

<div style="border:solid 1px #ddd; padding: 10px;">

<div class="card">
  <div class="card-body">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <input style="width: 100%;" type="text" placeholder="Masukan Nama Programmer Baru" id="nama_pro">
        </div>
        <div class="col-md-4">
          <button style="width: 100%;" class="btn btn-primary" id="tambah_pro" onclick="tambah_pro()">Tambah</button>
        </div>
      </div>
    </div>
  </div>
</div>


<?php 

$query = mysqli_query($kon,"SELECT * FROM users");
while($fetch = mysqli_fetch_array($query))
{
?>

      <div class="card">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-md" style="border: solid 1px #dddd">
                <div class="nama">
                  <?php echo $fetch["name"]; ?>
                </div>
                <div class="jumlah" id="jumlah-<?php echo $fetch["id"]; ?>">
                  <?php 
                      $idnya = $fetch["id"];

                      $q = mysqli_query($kon,"SELECT * FROM skills WHERE user_id = '".$idnya."'");
                      $jumlah = 0;
                      while ($f  = mysqli_fetch_array($q)) {
                          echo $f["name"].',';
                      }
                   ?>
                </div>
              </div>
              <div class="col-md"  style="border: solid 1px #dddd">
                  <div id="parent">
                    <div id="child">
                      <center>
                        <input type="text" placeholder="Masukan Skill" id="skills-<?php echo $fetch["id"] ?>">&nbsp;<button type="button" class="btn btn-primary" onclick="tambah(<?php echo $fetch["id"] ?>)">Tambah Suara</button>
                      </center>
                    </div>
                  </div>
              </center>
              </div>
            </div>
          </div>
          
        </div>
      </div>
<?php
}

?> 
</div>     
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript">
      function tambah(idnya)
      {
        var skill = $("#skills-"+idnya).val();
        if(skill == "")
        {
          alert("Harap Isi Skill");
        }
        else
        {
          $.ajax({
          url: "tambah_data.php",
          type : 'post',
          data: "id="+idnya+"&data="+skill+"&tipe=skill", 
          success: function(result){
            location.reload(true);
          }
        });  
        }
        
      }
      function tambah_pro()
      {
        var nama = $("#nama_pro").val();
        if(nama == "")
        {
          alert("Harap Isi Skill");
        }
        else
        {
        $.ajax({
          url: "tambah_data.php",
          type : 'post',
          data: "tipe=users&data="+nama, 
          success: function(result){
            location.reload(true);
          }
        });
      }
      }
    </script>
  </body>
</html>