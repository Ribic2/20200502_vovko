<div class = "col-xl-12">
    @extends('layouts.app')

    @section('content')
        <form method="POST" action="/">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Uporabnisko ime</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Geslo</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Prijavi se</button>
        </form>
        {{ session('error') }}
    @stop
</div>


