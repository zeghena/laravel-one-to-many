@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Lista Posts</h1>

        @dump($posts)
    </div>
</section>

@endsection
