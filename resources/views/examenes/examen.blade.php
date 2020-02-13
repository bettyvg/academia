@extends('main2')
@section('content')


    <link rel="stylesheet" href="./css/examen/style.css">
    <section>
        <div class="wrapper">
            <div class="quiz">
                <div class="quiz_header">
                    <div class="quiz_user">
                        <h4>Bienvenido! <span class="name"></span></h4>
                    </div>
                    <div class="quiz_timer">
                        <span class="time">00:00</span>
                    </div>
                </div>
                <div class="quiz_body">
                    <div id="preguntas" class="preguntas">¿Inicio de preguntas?
                          <ul class="option_group">
                          <li class="option" >option 1</li>
                          <li class="option">option 2</li>
                          <li class="option">option 3</li>
                          <li class="option">option 4</li>
                        </ul>
                    </div>

                    <button class="btn-next" onclick="next()">Proxima pregunta</button>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('/js/examen/site.js')}}"></script>
    <script src="{{asset('/js/examen/userInfo.js')}}"></script>
    <script src="{{asset('/js/examen/timer.js')}}"></script>

@endsection
