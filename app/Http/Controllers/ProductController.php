<?php

namespace App\Http\Controllers;

use App\Models\Product;
use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class ProductController extends ParentController
{
    public function index()
    {
        $response['tasks'] = Product::all();
        return view('pages.product.index')->with($response);
    }

    public function store(Request $request)
    {
        $this->task->create($requuest->all());
        return redirect()->back();
    }

    public function delete($task_id)
    {
        $task = $this->task->find($task_id);
        $task->delete();
        return redirect()->back();
    }

    public function update($task_id)
    {
        $task = $this->task->find($task_id);
        $task->status = 1;
        $task->update();

        return redirect()->back();
    }

    public function view($task_id)
    {
        $task = $this->task->find($task_id);
        $task->view();

        return redirect()->back();
    }
}