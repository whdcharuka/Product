<?php

namespace domain\Services;

use App\Models\Product;

class ProductService
{
    protected $task;

    public function __construct()
    {
        $this->task = new Product();
    }

    public function index()
    {
        return $this->task->all();
    }

    public function store($data)
    {
        $this->task->store($data);
    }

    public function delete($task_id)
    {
        $task = $this->task->find($task_id);
        $task->delete();
    }

    public function update($task_id)
    {
        $task = $this->task->find($task_id);
        $task->update = 1;
        $task->update();
    }

    public function view($task_id)
    {
        $task = $this->task->find($task_id);
        $task->view();

        return redirect()->back();
    }
}