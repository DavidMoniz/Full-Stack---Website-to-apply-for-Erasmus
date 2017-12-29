<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Erasmus</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Abhaya Libre' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>

        function showUniversities(value) {

            $.get( "http://localhost:8000/universitiesC?country="+value, function( data ) {
                $( "#universities" ).html( data );
            });
        }
        function showPrograms(value) {
            $.get( "http://localhost:8000/programs?university="+value, function( data ) {
                $( "#programs" ).html( data );
            });
        }

        $(document).ready(function(){
            $('#role').change(function(){
                selection = $(this).val();
                switch (selection){
                    case 'directorstudent':
                        $('#directorstudent').show();
                        $('#manager').hide();
                        break;
                    case 'manager':
                        $('#manager').show();
                        $('#directorstudent').hide();
                        break;
                    default:
                        $('#directorstudent').show();
                        $('#manager').hide();
                        break;
                }
            });



        });

    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="entire-screen navbar">
    <div class="third-screen center">
        <a href="/"><img src="/img/erasmus.png" width="50%"></a>
    </div>
    <div class="two-third-screen right">
        <ul>
            <li>
                Home
            </li>
            <li>
                More Info
            </li>
            <li>
                Log In
            </li>
        </ul>
    </div>
</div>

<form action="/register" method="post">
    <div class="entire-screen" style="margin-top: 83px;padding-right: 0px !important;padding-bottom: 0px !important;">
        <div class="two-third-screen">
            <div class="entire-screen center">
                <br>
                <h1>Register</h1>
            </div>

            <div class="entire-screen center">
                <div class="third-screen field-size">
                    Select your role:
                </div>
                <div class="two-third-screen">
                    <select name="role" id="role" required>
                        <option value="student" checked ="checked">Student</option>
                        <option value="manager">Manager</option>
                        <option value="director">Course Director</option>
                    </select>
                </div>
            </div>
            <div class="entire-screen center">
                <div class="third-screen field-size">
                    Name:
                </div>
                <div class="two-third-screen">
                    <input type="text" name="name" required>
                </div>
            </div>
            <div class="entire-screen center">
                <div class="third-screen field-size">
                    Password:
                </div>
                <div class="two-third-screen">
                    <input type="password" name="password" required>
                </div>
            </div>
            <div class="entire-screen center">
                <div class="third-screen field-size">
                    Confirm Password:
                </div>
                <div class="two-third-screen">
                    <input type="password" name="confirmpassword" required>
                </div>
            </div>
            <div class="entire-screen center">
                <div class="third-screen field-size">
                    Email:
                </div>
                <div class="two-third-screen">
                    <input type="email" name="email" required>
                </div>
            </div>
            <div class="entire-screen center">
                <div class="third-screen field-size">
                    Phone:
                </div>
                <div class="two-third-screen">
                    <input type="text" name="phone" required>
                </div>
            </div>
            <div class="entire-screen center">
                <div class="third-screen field-size">
                    Country:
                </div>
                <div class="two-third-screen">
                    <select name="country" onchange="showUniversities(this.value)" required>
                        <option disabled selected value>--select a country--</option>
                        @foreach($countries as $country)
                            <option value ="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="entire-screen center">
                <div class="third-screen field-size">
                    City:
                </div>
                <div class="two-third-screen">
                    <input type="text" name="city" required>
                </div>
            </div>
            <div class="entire-screen center">
                <div class="third-screen field-size">
                    Address:
                </div>
                <div class="two-third-screen" >
                    <input type="text" name="address" required>
                </div>
            </div>
            <div id="universities">

            </div>
            <div id="programs">

            </div>
            @if (session('phoneExists'))
                <div class="entire-screen center">
                    <div class="third-screen field-size">

                    </div>
                    <div class="two-third-screen">
                        The phone number you inserted is already in use!
                    </div>
                </div>
            @endif
            @if (session('emailExists'))
                <div class="entire-screen center">
                    <div class="third-screen field-size">

                    </div>
                    <div class="two-third-screen">
                        The email you inserted is already in use!
                    </div>
                </div>
            @endif
            @if (session('pwNotMatch'))
                <div class="entire-screen center">
                    <div class="third-screen field-size">

                    </div>
                    <div class="two-third-screen">
                        The passwords does not match!
                    </div>
                </div>
            @endif

            <div class="entire-screen center">
                <button type="submit" style="text-align:center" class="main-button">Register</button>
                <br>
                <br>
                <span><a href="/resetpassword">Forgot your password?</a></span>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </div>
        <div class="third-screen aside">

        </div>
    </div>
</form>





<div class="entire-screen blue-theme">
    <div class="third-screen">
        <h5></h5>
    </div>
    <div class="third-screen center">
        <ul>
            <li>
                <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
    <div class="third-screen center">
        <h4>Copyright ERASMUS+</h4>
    </div>
</div>
</body>
</html>