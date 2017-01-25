<!DOCTYPE html>
<html lang="en">
<head>

<style>
    
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

           
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
             .content {
                text-align: center;
            }

            .title {
                font-size: 20px;
            }


            .m-b-md {
                margin-bottom: 30px;
            }
            li{
                float:left;
                color:black;
                width:400px;
                word-wrap: break-word;
                white-space: initial;
            }

</style></head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                <a href="{{ url('/home') }}">Home</a>
            
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                    

                </div>
            @endif
                <div class="content">
                    <div class="title m-b-md" style="width:4500px; color: white; align-content: left;">
                    <marquee
                    behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="30">
                    
                 <ul> 
                     @foreach($stories as $myStory)
                       
                    
                        <li style="font-family: arial; overflow: hidden; color:white" onmouseover="style.fontWeight = 'bold'" onmouseout="style.fontWeight = 'normal'" >
                        <div style="background-color: #212F3C; border-style: solid;"><p style="color: red; font-size: 30px;"><b>&nbsp;&nbsp; {{$myStory->donorName}}</b></p>
                       
                        <p style="word-wrap: break-word;" >&nbsp;&nbsp;{{$myStory->message}}</p>
                         <p align="left"> &nbsp;&nbsp;<u>DONATED ON:</u>  {{$myStory->dateOfDonation}}</p>
                        <div align="left">&nbsp;&nbsp;<u>FOR:</u>  {{$myStory->hospitalName}}</div></div>
                        <br>
                         </li> @endforeach
                        </ul>
                        </marquee>
                      </div>

                    <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
            </div>
        </div>
    </body>
</html>
