@extends ('layouts.account')

@section('content')
    <div class="contactForm" style="height:350px;">
        <div class="innerForm">
            <form action="/signup" method="post">
                {{ csrf_field() }}
                <h2 class="formheaderspacing">Email:</h2>
                <input type="text" name="email" placeholder="email" id="inputName" class="fillSelect">
            <!-- <p class="fill-1" style="display: block;"><?php if (!empty($message)) { echo $message; }?></p> -->
                <h2 class="formheaderspacing">Password:</h2>

                <input type="password" name="password" placeholder="password" id="inputEmail" class="fillSelect">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="fill-1" style="display: block;">{{ $error }}</p>
                    @endforeach
                @endif

                <input type="submit" name="submit" class="submit2">
            </form>
            <a href="/" style="float: left; margin-top:10px">login</a>
        </div>
</div>
@endsection