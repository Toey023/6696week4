<!DOCTYPE html>
<html lang="en">
<head>
    
         
    <!--เพิ่ม  bootstrap -->
    <!--  Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <tltle>ตัวอย่าง PHP เเละ  Boostrap</title>
          
          <!-- เพิ่ม sweetaleart  -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">
          
          
           <!--เพิ่มfont-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Charmonman:wght@400;700&family=Srisakdi:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Charm", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body>
    <h1>การเขียนโปรเเกรมด้วย PHP</h1>
    664485023 รวีโรจน์ ทองเปี่ยม  <br>
    หมู๋เรียน 66/96 <br>


    <div class="alert alert-info">
  <strong>สำเร็จเเล้ววว</strong> ใช้ Boostrap ได้เเล้ว
</div>


</body>


<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- sweet alert  -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    
<!--alert2-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
            $('#alert2').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
        });
    
    </script>
<button type="button" class="btn btn-success">กดยอมรับ</button>
<button type="button" class="btn btn-danger">ยกเลิก</button>
ิั<br><br>
<div class="card bg-dark text-white">
    <div class="card-body">สวัสดีครับ</div>
  </div>
  <br>

  <div class="card" style="width:400px">
  <img class="card-img-top" src="download.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">รวีโรจน์ ทองเปี่ยม</h4>
    <p class="card-text">คิดทำไม คิดถึงคิดเเคท</p>
    <a href="https://www.npru.ac.th/index.php" class="btn btn-primary">See Profile</a>
  </div>
</div>

<button type ="button" class="btn-prlary"id="alert">ทดสอบ เรียกใช้งาน Sweet aleart</button>
<button type ="button" class="btn-prlary"id="alert2">ทดสอบ เรียกใช้งาน Sweet aleart</button>

<Br></Br>

</html>

