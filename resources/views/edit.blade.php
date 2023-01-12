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
        <form action="{{ url('/tasks/'.$currentTask->id)}}" method="POST">
          @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col sm-6">
                    <input type="text" name="name" value=" {{ $currentTask->name}} " class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Task</label>
                <div class="col sm-6">
                    <input type="text" name="task" value="{{ $currentTask->task}}" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Deadline (optional)</label>
                <div class="col sm-6">
                    <input type="text" name="deadline" value=" {{ $currentTask->deadline }} " class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href=" {{ url ('/') }}" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
