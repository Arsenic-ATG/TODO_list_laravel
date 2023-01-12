<!DOCTYPE html>
<html lang="en">

<head>

    <title>TODO list</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1>List of entries</h1>
        <a class="btn btn-primary" href='{{ url('/create')}}' role="button">new entry</a>
        <br>
        <table class="table" summary="table of all the tasks in todo list">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>task</th>
                    <th>deadline</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allTasks as $currentTask)
                <tr>
                    <td>{{ $currentTask->name }}</td>
                    <td>{{ $currentTask->task }}</td>
                    <td>{{ $currentTask->deadline }}</td>
                    <td class="d-flex gap-3">
                        <a class='btn btn-primary btn-sm' href='{{ url('/tasks/'. $currentTask->id) }}'>Edit</a>
                        <form action="{{ url('/tasks/'. $currentTask->id) }}" method="POST">
                            <input class='btn btn-danger btn-sm' type="submit" value="Delete" />
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
