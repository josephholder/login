@extends ('layout')

@section ('content')
    <section class="profileStylePage">
        <div class="ui container profileInnerPage">
            <div class="ui container">
                <div class="ui grid">
                    <div class="sixteen wide column">
                        <div class="backgroundProfileImage">
                            <h2 style="text-align: center; color: #f2f2f2;position: relative;top: 50%; transform: translateY(-50%);font-size: 40px;">Your profile</h2>
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
                        <form id="imageform" method="post" enctype="multipart/form-data" action='includes/upload.php'>
                            <input type="file" name="photoimg" id="photoimg" class="inputfile" />
                            <label for="photoimg">Upload an Image</label>
                        </form>
                    </div>
                    <div class="sixteen wide column">
                        <div class="ui secondary  menu">
                            <a class="active item">Home </a>
                            <a class="item">Messages</a>
                            <a class="item">Friends</a>
                            <div class="right menu">
                                <div class="item">
                                    <div class="ui icon input">
                                        <input type="text" placeholder="Search...">
                                        <i class="search link icon"></i>
                                    </div>
                                </div>
                                <a class="ui item" href="/logout">Logout</a>
                            </div>
                        </div>
                        <div class="ui vertical align segment" style="border-bottom: 1px solid rgba(34,36,38,.15);"></div>
                    </div>
                    <div class="sixteen wide column"></div>
                    <div class="ui container">
                        <div class="ui grid padded centered">
                            <h3>You can record your message here</h3>
                        </div>
                        <div class="ui grid padded centered">
                            <p class="paragraphSize" style="text-overflow: ellipsis;overflow: hidden;">
                                {{--if ($results['content'] != null) {--}}
                                    {{--echo $results['content'];--}}
                                {{--} else {--}}
                                    {{--echo "you can change the information here";--}}
                                {{--} --}}
                            </p>
                        </div>
                    </div>
                    <div class="sixteen wide column" style="text-align:center; margin-top:10px;"><a id="activator" class="text-change textChangeBtn" style="cursor:pointer; color: aliceblue;">change the text</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="panel-1" style="min-height:auto; text-align: center;">
        <div class="ui container">
            <h3 style="font-size: 20px;">You are logged in</h3>
        </div>
    </section>
    <!-- <section class="userPofile" style=" background-color:dimgrey">
        <div class="ui container">
            <div class="ui grid">
                <div class="four wide column" style="margin: 10px 0px;">
                    <div class="column">
                        <img src="assets/images/placehold300x200.png">
                        <div><p>Your name (first name and lastname)</p></div>
                        <div><p>Your name</p></div>
                        <div><p>you currently work at: Workplacement</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="panel-1" style="min-height:550px; height:auto:">
        <div class="ui container">
            <div class="ui grid padded centered">
                <h3>You can record your message here</h3>
            </div>
            <div class="ui grid padded centered">
                <p class="paragraphSize" style="text-overflow: ellipsis;overflow: hidden;">
{{--                    -->//if ($results['content'] != null) {--}}
{{--                        echo $results['content'];--}}
{{--                    } else {--}}
{{--                        echo "you can change the information here";--}}
{{--                    } --}}
                </p>
            </div>
        </div>
        <div class="sixteen wide column" style="text-align:center; margin-top:10px;"><a id="activator" class="text-change">change the text</a></div>
    </section>
    <!-- <div class="ui container" style="height:40px;">
        <div class="sixteen wide column" style="text-align:center; margin-top:10px;"><a href="includes/signupform/logout.php" style="font: 300 20px/150% Amaranth, sans-serif; text-align:center;">Logout</a></div>
    </div> -->
    <div class="overlay" id="overlay" style="display:none;"></div>
    <div class="overlay" id="overlay_2" style="display:none;"></div>

    <div class="box" id="box">
        <a class="boxclose" id="boxclose">X</a>
        <div style="text-align:center; margin-bottom:10px;"><h1>Important message</h1></div>
        <form method="post" action="index.php">
            <textarea class="inputform" name="notes"></textarea>
            <div style="text-align:center; margin-top:10px;"><input type="submit" name="submit" style="text-align:center;"></div>
        </form>
    </div>

    <div class="box" id="box_image">
        <a class="boxclose" id="boxclose_2">X</a>
        <div style="text-align:center; margin-bottom:10px;"><h1>Important message</h1></div>
        <form method="post" action="index.php">

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

@endsection