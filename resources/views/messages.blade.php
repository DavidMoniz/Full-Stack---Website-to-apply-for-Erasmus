<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Erasmus</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Abhaya Libre' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                Log Out
            </li>
        </ul>
    </div>
</div>
<div class="entire-screen center" style="background-image: url(/img/pexels-photo-288477.jpeg);background-repeat: no-repeat;background-size:cover;margin-top: 83px;padding-right: 0px !important;padding-bottom: 0px !important;">
    <div class="fifteen-screen">

    </div>
    <div class="seventy-screen" style="padding: 0px 0px !important;border: 1px solid black;margin: 50px 0px;background-color: #eeeeee">
        <div class="entire-screen" style="padding: 0px 0px !important;">
            <div class="quart-screen dashboard-option">
                <h1>Opcao</h1>
            </div>
            <div class="quart-screen dashboard-option">
                <h1>Opcao</h1>
            </div>
            <div class="quart-screen dashboard-option">
                <h1>Opcao</h1>
            </div>
            <div class="quart-screen dashboard-option">
                <h1>Opcao</h1>
            </div>
        </div>
        @if($number > 0)
            @for($i = 0;$i<$number;$i++)
                <a href="/Dashboard/message/{{$messages[$i+(($pag - 1) * 5)]->id}}">
                    <div class="entire-screen" style="padding: 0 0 !important;border: 1px solid black;">
                        <div class="third-screen center">From<br>{{$users->find('user_id')->name}}</div>
                        <div class="third-screen center">Subject<br>{{$messages[$i+(($pag - 1) * 5)]->subject}}</div>
                        <div class="third-screen center">Date<br>{{$messages[$i+(($pag - 1) * 5)]->created_at}}</div>
                    </div>
                </a>
            @endfor
            <div class="entire-screen">
                <div class="two-third-screen"></div>
                    <div class="third-screen right">
                        @if($numberPags == 1)
                            {{$numberPags}}
                        @else
                            @for($i = 1;$i<=$numberPags;$i++)
                                @if($i == $pag)
                                    @if($i < 5)
                                        {{$i}}-
                                    @else
                                        {{$i}}
                                    @endif
                                @else
                                    @if($i < 5)
                                        <a href="/Dashboard/messages/{{$i}}">{{$i}}-</a>
                                    @else
                                        <a href="/Dashboard/messages/{{$i}}">{{$i}}</a>
                                    @endif
                                @endif
                            @endfor
                        @endif
                    </div>
                </div>
            </div>
            <div class="entire-screen center" style="padding: 50px 100px;">
                <a href="">New message</a>
            </div>
        @else
            <div class="entire-screen" style="padding: 250px 150px;"><h1>Nao possui mensagens</h1><br><a href="">New message</a></div>
        @endif
</div>

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