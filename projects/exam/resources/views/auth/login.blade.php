<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>CodePen - Bootstrap 5 Login</title>
    <link rel="stylesheet" href="/assets/css/login/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!--bootstrap link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!--bootstrap icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<!--login box-->

<div class="container">
    <div style="text-align: center;">
        <div class="middle">
            <div id="login">

                <form action="{{ route('login') }}" method="POST" novalidate>
                 @csrf

                    <fieldset class="clearfix">

                        <p><span class="bi bi-person-fill"></span><input type="text" name="email" Placeholder="Email" required></p>

                        <p><span class="bi bi-lock-fill"></span><input type="password" name="password" Placeholder="Password" required></p>


                        <div>
                            <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="{{ route('register') }}">Registration</a></span>
                            <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Enter"></span>
                        </div>

                    </fieldset>
                    <div class="clearfix"></div>
                </form>

                <div class="clearfix"></div>

            </div> <!-- end login -->
            <div class="logo">LOGO

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>

</div>

<!--Bootstrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- partial -->

</body>
</html>
