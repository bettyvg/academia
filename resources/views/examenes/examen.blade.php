@extends('main2')
@section('content')

    <link rel="stylesheet" href="/css/examen/style.css">
    <section>

            <div class="payment-adress">
                <br>
                <button type="button"
                                                               title="Editar registro"
                                                               class="btn btn-info"  name="iniciar_quiz" id="iniciar_quiz" value="50">
                        Iniciar quiz</button>
                <input type="hidden" name="_token"
                       id="csrf-token" value="{{csrf_token()}}">
            </div>

        @foreach($preguntas as $pregunta)
        <div class="wrapper">
            <div class="quiz">
                <div class="quiz_header">
                    <div class="quiz_user">
                        <h4>{{$pregunta->tema}} <span class="name"></span></h4>
                    </div>
                    <div class="quiz_timer">
                        <span class="time">00:00</span>
                    </div>
                </div>
                <div class="quiz_body">
                    <div id="preguntas" class="preguntas">
                          <ul class="option_group">
                          <li class="option" ></li>
                          <li class="option"></li>
                          <li class="option"></li>
                        </ul>
                    </div>
                    <button class="btn-next" onclick="next()">Proxima pregunta</button>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <script src="{{asset('/js/examen/site.js')}}"></script>
    <script src="{{asset('/js/examen/userInfo.js')}}"></script>
    <script src="{{asset('/js/examen/timer.js')}}"></script>

@endsection
