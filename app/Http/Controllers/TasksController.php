<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Method to list all the Tasks ordered by their creation date.
     *
     * @return \Illuminate\View\View
     */
    public function List()
    {
        $allTasks = Tasks::orderByDesc('created_at')->get();

        return view('list', [
            'allTasks' => $allTasks
        ]);
    }

    /**
     * Method to validate and store data form http request to
     * database.
     *
     * @return \Illuminate\View\View
     */
    public function Create()
    {
        return view('create');
    }

    /**
     * Method to validate and store data form http request to
     * database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Store(Request $request)
    {
        $receivedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'task' => ['required', 'string', 'max:200']
        ]);
        if (empty($receivedData['deadline'])) {
            $receivedData['deadline'] = NULL;
        }

        Tasks::create($receivedData);

        return redirect('/');
    }

    /**
     * Method to present view to edit a perticular task
     * database.
     *
     * @param  \App\Models\Tasks  $targetTask
     * @return \Illuminate\View\View
     */
    public function Edit(Tasks $targetTask)
    {
        return view('edit', [
            'currentTask' => $targetTask
        ]);
    }

    /**
     * Method to validate and update the database for the
     * task with given taskid.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tasks  $targetTask
     * @return \Illuminate\Http\Response
     */
    public function Update(Request $request, Tasks $targetTask)
    {
        $receivedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'task' => ['required', 'string', 'max:200']
        ]);

        if (empty($receivedData['deadline'])) {
            $receivedData['deadline'] = NULL;
        }

        $targetTask->update($receivedData);

        return redirect('/');
    }

    /**
     * Method to delete the data from the Database with
     * the given task id
     *
     * @param  \App\Models\Tasks  $targetTask
     * @return \Illuminate\Http\Response
     */
    public function Destroy(Tasks $targetTask)
    {
        $targetTask->delete();
        return redirect('/');
    }
}
