<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome my my site. feel free to have a look at joseph holders CV and i hope you are impressed">
    <title>joseph holder</title>

    {{--<?php--}}
    {{--if($path_end == 'signup.php' || $path_end == 'login.php'){--}}
        {{--echo '<link' . ' rel="stylesheet"' . ' type="text/css"'  . ' href="'. $root_path . 'contact/files.css">';--}}
    {{--}--}}
    {{--?>--}}
    {{--<link rel="stylesheet" type="text/css" href="<?php echo $root_path; ?>files/semantic.min.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="<?php echo $root_path; ?>files/files.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="<?php echo $localpath; ?>assets/css/files.css">--}}

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
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>--}}
{{--<script type="text/javascript" src="<?php echo "$root_path"; ?>files/semantic.min.js"></script>--}}
{{--<script type="text/javascript" src="<?php echo "$localpath"; ?>assets/js/script.js"></script>--}}

{{--<script type="text/javascript">--}}
    {{--$(document).ready(function () {--}}
        {{--$('#dropdownMobile').click(function (){--}}
            {{--console.log('it works');--}}
            {{--$('#menuDropdown').toggle();--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

{{--<script type="text/javascript" src="assets/js/jquery.form.js"></script>--}}

{{--<script type="text/javascript">--}}

    {{--$(document).ready(function() {--}}
        {{--$('#photoimg').on('change', function() {--}}
            {{--$("#preview").html('');--}}
            {{--$("#preview").html('<img src="loader.gif" alt="Uploading...."/>');--}}
            {{--$("#imageform").ajaxForm({--}}
                {{--target: '#preview'--}}
            {{--}).submit();--}}
            {{--setTimeout(function(){--}}
                {{--window.location.reload(false);--}}
            {{--}, 1000);--}}
        {{--});--}}
    {{--});--}}

{{--</script>--}}

</body>
</html>
