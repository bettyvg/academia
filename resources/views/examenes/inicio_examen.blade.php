@extends('main2')
@section('content')


    <link rel="stylesheet" href="/css/examen/style.css">
    <section>
        <div class="wrapper">
            <div class="welcome_text">
                <form class="welcome_form" name="welcome_form" onsubmit="submitForm(event)">
                    <input type="text" name="name">
                    <button>Realizar examen</button>
                </form>
            </div>
        </div>
    </section>

    <script src="{{asset('/js/examen/start.js')}}"></script>

@endsection
