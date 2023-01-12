<!DOCTYPE html>
<html lang="en">

<head>
    <title>TODO list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-5">
        <h2>Create new task</h2>

        {{-- @if(!empty($errorMessage))
        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
            <strong>{{ errorMessage  }}</strong>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    @endif --}}

    <form action='{{ url ('/create')}}' method="POST">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col sm-6">
                <input type="text" name="name" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Task</label>
            <div class="col sm-6">
                <input type="text" name="task" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Deadline (optional)</label>
            <div class="col sm-6">
                <input type="text" name="deadline" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href='{{ url('/')}}' role="button">Cancel</a>
            </div>
        </div>
    </form>
    </div>
</body>

</html>
