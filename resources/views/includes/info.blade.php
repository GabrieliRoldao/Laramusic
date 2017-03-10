@if (count($errors) > 0)
    <div class="info-erro">
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>
@endif
