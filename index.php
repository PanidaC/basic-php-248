<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- get cdn css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- get cdn js bootstarp -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div id="logreg-forms">
        <form class="form-signin" action="receive-data.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required="">

            choose number
            <select class="form-select" aria-label="Default select example" name="time">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="3">Four</option>
            </select>
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <!-- <p>Don't have an account!</p>  -->
            </form>
            
            <br>
            
    </div>


    <script src="script.js"></script>
        <!-- path file = / หมายถึง อยู่ที่ root floder เช่น
        root = ict.su.ac.th/script.js
        ไม่ติดตามไฟล์ index

        path file = ชื่อไฟล์เฉยๆ
        เช่น scc = "script.js" (ไม่มี / ข้างหน้า)
        หมายความว่า จะตามไปอยู่ระดับเดียวกันกับไฟล์นี้ -->
    
</body>
</html>