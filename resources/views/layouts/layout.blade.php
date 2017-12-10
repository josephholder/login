<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome my my site. feel free to have a look at joseph holders CV and i hope you are impressed">
    <title>joseph holder</title>


    {{--if($path_end == 'signup.php' || $path_end == 'login.php'){--}}
        {{--echo '<link' . ' rel="stylesheet"' . ' type="text/css"'  . ' href="'. $root_path . 'contact/files.css">';--}}
    {{--}--}}
    <link rel="stylesheet" type="text/css" href="http://josephholder.com/contact/files.css">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ $josephPath }}files/files.css">

</head>
<body>
    <div class="containerPage">
        <header>
            <div class="ui two column grid container">
                <div class="column logoHeader">
                    <h1>Joseph Holder</h1>
                    <p>Front end web developer</p>
                </div>

                <nav class="column">
                    <div class="ui horizontal list right columnHeader">
                        <div class="item navHover"><a href="/">Home</a></div>
                        <div class="item navHover"><a href="http://www.josephholder.com/dice">Dice</a></div>
                        <div class="item navHover"><a href="http://www.josephholder.com/snakegame">Snakegame</a></div>
                        <div class="item navHover"><a href="http://www.josephholder.com/contact">Contact Me</a></div>
                    </div>

                    <div class="mobile">
                        <div class="ui horizontal list menu centered">
                            <div class="ui dropdown item centered" id="dropdownMobile">
                                Menu<i class="dropdown icon"></i>
                                <div class="menu" id="menuDropdown">
                                    <div class="item"><a href="/">Home</a></div>
                                    <div class="item"><a href="http://www.josephholder.com/dice">Dice</a></div>
                                    <div class="item"><a href="http://www.josephholder.com/snakegame">Snakegame</a></div>
                                    <div class="item"><a href="http://www.josephholder.com/contact">Contact Me</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="masthead">
            <div id="mastheadImg" class="sixteen wide column">
                <h2>My Profile</h2>
            </div>
        </section>
        <main>
            {{-- page view  inside the 1170px page --}}
            <section class="profileStylePage">
                <div class="ui container profileInnerPage">
                    <div class="ui container">
                        <div class="ui grid">
                            <div class="sixteen wide column">
                                <div class="backgroundProfileImage">
                                    @if (Session('header'))
                                        <h2 style="text-align: center; color: #f2f2f2;position: relative;top: 50%; transform: translateY(-50%);font-size: 40px;">{{ Session('header') }}</h2>
                                    @else
                                        <h2 style="text-align: center; color: #f2f2f2;position: relative;top: 50%; transform: translateY(-50%);font-size: 40px;">Your profile</h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="ui grid graypPanelProfile">
                            <div class="four wide column" style="margin-top: -100px;">
                                <div class="column" style="/*margin-left:20px*/">
                                    {{-- if (!empty($user_records["profile_image"])) { echo "includes/uploads/" . $userid . "/" . $user_records["profile_image"]; } else { echo "assets/images/placehold300x200.png"; }  --}}
                                    <a id="activator_image"><img class="ui fluid image profilepic" src="http://placehold.it/300x200/"></a>
                                    <div><p>Your name (first name and lastname)</p></div>
                                    <div><p>Your name</p></div>
                                    <div><p>you currently work at: Workplacement</p></div>
                                </div>
                                <div class="column"></div>
                                <div class="column"></div>
                                <div class="column"></div>
                            </div>
                            <div class="four wide column right floated">
                                <form id="imageform" method="post" enctype="multipart/form-data" action='{{ url('includes/upload.php') }}'>
                                    <input type="file" name="photoimg" id="photoimg" class="inputfile" />
                                    <label for="photoimg">Upload an Image</label>
                                </form>
                            </div>
                            <div class="sixteen wide column">
                                <div class="ui secondary  menu">
                                    <a class="@if ( \Request::is('/')) active @endif item" href="{{ url('/') }}" >Home </a>
                                    <a class="@if (\Request::is(['notes', 'notes/*'])   ) active @endif item" href="{{ url('/notes') }}">Notes</a>
                                    <a class="@if ('a' == 'b') active @endif item">Friends</a>
                                    <div class="right menu">
                                        <div class="item">
                                            <div class="ui icon input">
                                                <input type="text" placeholder="Search...">
                                                <i class="search link icon"></i>
                                            </div>
                                        </div>
                                        <a class="ui item" href="{{url('/logout') }}">Logout</a>
                                    </div>
                                </div>
                                <div class="ui vertical align segment" style="border-bottom: 1px solid rgba(34,36,38,.15);"></div>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel-1" style="min-height:625px;"></section>

            <div class="overlay" id="overlay" style="display:none;"></div>
            <div class="overlay" id="overlay_2" style="display:none;"></div>

            <div class="box" id="box">
                <a class="boxclose" id="boxclose">X</a>
                <div style="text-align:center; margin-bottom:10px;"><h1>Important message</h1></div>
                <form method="post" action="{{ url('/notes') }}">
                    {{ csrf_field() }}
                    <div class="sixteen wide column">
                        <label>
                            <textarea class="inputform" name="notes"></textarea>
                        </label>
                    </div>
                    <div style="text-align:center; margin-top:10px;"><input type="submit" name="submit" style="text-align:center;"></div>
                </form>
            </div>

            <div class="box" id="box_image">
                <a class="boxclose" id="boxclose_2">X</a>
                <div style="text-align:center; margin-bottom:10px;"><h1>Important message</h1></div>
                <form method="post" action="{{  url('/') }}">

                    {{-- <div class="ui grid imgCollection">--}}
                    {{--foreach($images as $image) {--}}
                    {{--$image_name = explode( "/", $image );--}}
                    {{--echo '--}}
                    {{--<div class="three wide column">--}}
                    {{--<input type="hidden" name="nw_select_img" value="' . $image_name['3'] . '">--}}
                    {{--<button class="imgbutton" name="submit_nw_img" value="' . $image_name['3'] . '"><img class="ui fluid image size_image" src="'.$image.'" /></button>--}}
                    {{--</div>';--}}
                    {{--} --}}
                    {{--</div>--}}
                </form>
            </div>

            <div class="box" id="box_edit">
                <a class="boxclose" id="boxclose_3">X</a>
                <div style="text-align:center; margin-bottom:10px;"><h1>Important message</h1></div>
                <form id="editForm" action="{{ url('/notes/') }}"  method="POST" >
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label for=""></label><textarea class="inputform" name="note" id="" cols="30" rows="10"></textarea>
                    {{ method_field('PATCH') }}
                    <div style="text-align: center">
                        <button class="rest center" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <div class="ui container">
                <div class="ui grid padded centered">
                    <div class="row nillPadding">
                        <h2 class="contactFooter">Contact Me</h2>
                    </div>
                    <div class="row nillPadding">
                        <p class="emailFooter">josephholder@hotmail.co.uk</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="{{  url('js/app.js') }}"></script>
</body>
</html>
