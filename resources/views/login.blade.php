@extends ('layout')

@section('content')
    <div class="contactForm" style="height:350px">
        <div class="innerForm">
            <form action="/login" method="post">
                {{ csrf_field() }}
                <h2 class="formheaderspacing">Email:</h2>
                <input type="text" name="email" placeholder="Email" id="inputName" class="fillSelect">
            <!-- <p class="fill-1" style="display: block;"><?php if (!empty($message)) { echo $message; }?></p> -->
                <h2 class="formheaderspacing">Password:</h2>
                <input type="password" name="password" placeholder="Password" id="inputEmail" class="fillSelect">
                <p class="fill-1" style="display: block;"><?php if (!empty($message)) { echo $message; }?></p>
                <input type="submit" name="submit" class="submit2">
            </form>
            <a href="/signup" style="float: left; margin-top:10px">Signup</a>
        </div>
    </div>

@endsection