<?php

namespace App\Http\Controllers;

use App\Models\Product;
use domain\Facades\ProductFacade;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $task;

    public function __construct()
    {
        $this->task = new Product();
    }

    public function index()
    {
        $response['tasks'] = $this->task->all();

        return view('pages.product.index')->with($response);
    }

    public function store(Request $request)
    {
        ProductFacade::store($requuest->all());
        return redirect()->back();
    }

    public function delete($task_id)
    {
        ProductFacade::delete($task_id);
        return redirect()->back();
    }

    public function update($task_id)
    {
        ProductFacade::update($task_id);
        $task->update();

        return redirect()->back();
    }

    public function view($task_id)
    {
        ProductFacade::view($task_id);
        $task->view();

        return redirect()->back();
    }
}