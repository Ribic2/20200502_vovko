<div>
    <form method="GET" action="/webapp/add/path" >
        @csrf
        <div class="form-group">
            <label for="path">Vpisi lokacijo kjer se bodo shranjevale slike</label>
            <input type="text" class="form-control" id="path" name="path" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
        <p>{{ session('display') }}</p>
    </form>
</div>
