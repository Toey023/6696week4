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

    
    <h1>โปรเเกรมบันทึกข้อมูล คริสเตียโน โรนัลโด</h1>
    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ชื่อเต็มนักฟุตบอล</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">วันเดือนปีเกิด</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">สถานที่เกิด</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>ฟุงชาล, มาเดรา, โปรตุเกส</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">ดำเเหน่ง</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">สโมสรปัจจุบัน</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">ความสำเร็จของนักเตะ</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="...">
  <div class="col-md-4">
    <label for="inputState" class="form-label">สัญชาติ</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>โปรตุเกต</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">สไตล์การเล่น</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">เส้นทางนักฟุตบอล</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>เริ่มเล่นฟุตบอลตั้งแต่อายุยังน้อยในโปรตุเกส ก่อนจะแจ้งเกิดกับสปอร์ติง ลิสบอน</option>
    </select>
    <div class="col-md-4">
    <label for="inputState" class="form-label">สถิติที่น่าสนใจ</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>ความเร็ว: มีความเร็วสูง ทำให้หลบหลีกคู่แข่งได้อย่างง่ายดาย</option>
    </select>
    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
  
</form>
้<h1>จัดนำเสนอโดย</h1>
    นายรวีโรจน์ ทองปี่ยม 664485023

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

<br>
<button type ="button" class="btn-prlary"id="alert1">Submit</button>
<button type ="button" class="btn-prlary"id="alert2">Cancer</button>
<Br>
<button type ="button" class="btn-prlary"id="alert3">Reset</button>

</html>

