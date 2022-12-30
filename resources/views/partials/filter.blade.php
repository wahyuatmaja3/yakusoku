<div class="card " style="width: 100%; position: sticky; top: 6rem">
    <form action="" method="get">
        <div class="card-header h5 d-flex justify-content-between">
            Filter
            <input class="btn btn-primary btn-sm" type="submit" value="Go">
        </div>
        <div class="card-body">
                <div class="list-group list-group-flush">
                    {{-- <a href="/new" class="list-group-item list-group-item-action list-group-item" type="button">New Release</a>
                    <a href="/trending" class="list-group-item list-group-item-action" type="button">Trending</a>
                    <a href="/sale" class="list-group-item list-group-item-action" type="button">Sale</a> --}}
                    <div class="form-checkbox">
                        <input class="form-check-input" id="newrelease" type="checkbox" value="NewRelease" name="filters">
                        <label for="newrelease">New Release</label>
                    </div>
                    
                    <div class="form-checkbox">
                        <input class="form-check-input" id="trending" type="checkbox" value="trending" name="filters">
                        <label for="trending">Trending</label>
                    </div>
                    
                    <div class="form-checkbox">
                        <input class="form-check-input" id="sale" type="checkbox" value="sale" name="filters">
                        <label for="sale">Sale</label>
                    </div>
                    
            </div>
        </div>
    </form>
</div>