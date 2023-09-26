<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group {
            overflow-y: scroll !important;
            height: 200px !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active">Chat Room <span
                        class="badge badge-pill badge-danger">@{{ numberOfUsers }}</span> </li>
                <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                <ul class="list-group" v-chat-scroll>
                    <message v-for="value,index in chat.message" :key=value.index :color=chat.color[index]
                        :user=chat.user[index] :time=chat.time[index]>@{{ value }}</message>
                </ul>
                <input type="text" class="form-control" placeholder="Type message here.." v-model='message'
                    @keyup.enter='send'>
                    <br>
                    <a href="" class="btn btn-warning btn-sm" @click.prevent='deleteSession'>Delete</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
