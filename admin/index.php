<?php
    session_start();
    if(isset($_SESSION['username']) ){
        echo "สวัสดีคุณ :". $_SESSION['username'];
       
        include_once('../service/db.php');

        $sql = "SELECT * FROM  	Dep";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          echo "<html><head>
                  <title>ระบบฐานข้อมูลนักเรียน</title>
                  <link rel='stylesheet' href='../service/bootstrap-5.2.0/css/bootstrap.min.css'>
                  </head>
                  <body><div class='container'>";
          echo "<div><p class='mt-3 p-3  bg bg-primary text-white fs-1'>ระบบฐานข้อมูลนักเรียน</p></div>";
          
          ?> 

          <div>
              <a href='formInsertDep.html'>เพิ่มข้อมูลแผนก</a>
          </div>

          <?php
          echo "<table class='table fs-3 table-striped table-hover'>
                  <thead>
                  <tr>
                    <th>รหัสแผนก</th>
                    <th>ชื่อแผนก</th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>";
                  
            while($row = $result->fetch_assoc()) {  ?>
                <tr>
                    <td> <?php echo $row["id_dep"] ?> </td> 
                    <td> <?php echo $row["name_dep"] ?> </td>
                    <td>   
                        <a class='btn btn-danger' 
                        role='button'
                        href='delDep.php?id_dep=<?php echo $row["id_dep"] ?>'>
                        Del</a>
                    </td>
                    <td>   
                        <a class='btn btn-warning' 
                        role='button'
                        href='formUpdateDep.php?id_dep=<?php echo $row["id_dep"] ?>'>
                        Update</a>
                    </td>
                </tr>
            <?php  }  ?>
            <table></div><body></html>
            <?php 
          } else {echo "0 results";}
          $conn->close();
        ?>
        <div>
          <a href='index.php'>กลับหน้าหลัก</a>
          <a href='logout.php'>Logout</a>
        </div>
    <?php 

    }else {
        header("location:login.php");
        exit(0);
    }
?>