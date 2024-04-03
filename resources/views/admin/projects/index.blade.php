@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>Lista Porgetti</h1>

            @dump($projects)
        </div>
    </section>
@endsection