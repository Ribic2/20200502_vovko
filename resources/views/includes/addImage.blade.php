<div>
    <form method="POST" action="/webapp/add/img" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="img">Dodaj sliko</label>
            <input type="file" class="form-control" id="img" name="img" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
</div>
