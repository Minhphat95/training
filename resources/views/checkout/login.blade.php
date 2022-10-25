
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaix Daily Report System</title>
    <link rel="shortcut icon" href="https://vaixgroup.com/wp-content/uploads/2020/12/logo-vaix-2.svg" type="image/x-icon">

    <link rel="stylesheet" href="https://phanmemchamcong.herokuapp.com/assets/login/tablet/login.css">
</head>

<body style="background-color:lightseagreen;">
<div class="wrapper">
    <div class="logo">
        <img src="https://vaixgroup.com/wp-content/uploads/2020/12/logo-vaix-2.svg" alt="VaixGroup">
    </div>

    <form action="https://phanmemchamcong.herokuapp.com/tablet" method="post" id="loginTable">
        <span id="csrf"></span>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="emp_code" id="emp_code" placeholder="Mã Nhân viên">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password" onChange="form.submit()">
        </div>
    </form>

    <div style="text-align: center; color:red">
        <span></span>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    const inputs = document.querySelectorAll("input");
    inputs.forEach((input, key) => {
        if (key !== 0) {
            input.addEventListener("click", function() {
                inputs[0].focus();
            });
        }
    });
    inputs.forEach((input, key) => {
        input.addEventListener("keyup", function() {
            if (input.value.length == 4) {
                if (key === 1) {
                    setTimeout(() => {
                        document.getElementById("csrf").innerHTML = '<input type="hidden" name="_token" value="NqemG0b4GSz8PTpxpD2V4iADUc9q0FSElRt5dEzq">';
                        document.getElementById("loginTable").submit();
                    }, 1);
                } else {
                    inputs[key + 1].focus();
                }
            }
        });
    });
</script>
</body>

</html>
