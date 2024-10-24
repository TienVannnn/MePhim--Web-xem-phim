<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManagerRequest;
use App\Models\Manager;
use App\Services\Backend\ManagerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $managerService;
    public function __construct(ManagerService $ma)
    {
        $this->managerService = $ma;
    }
    public function index()
    {
        $title = 'Danh sách nhân viên';
        $managers = $this->managerService->getDataManagers();
        return view('backend.manager.list', compact('title', 'managers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm mới nhân viên';
        return view('backend.manager.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagerRequest $request)
    {
        $request->validated();
        $result = $this->managerService->createManager($request);
        if ($result) {
            return redirect()->route('manager.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manager = Manager::where('id', $id)->first();
        if (!$manager) {
            abort(404);
        }
        $title = 'Chỉnh sửa nhân viên: ' . $manager->name;
        return view('backend.manager.edit', compact('title', 'manager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ManagerRequest $request, string $id)
    {
        $manager = Manager::where('id', $id)->first();
        if (!$manager) {
            abort(404);
        }
        $result = $this->managerService->updateManager($request, $manager);
        if ($result) return redirect()->route('manager.index');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manager = Manager::where('id', $id)->first();
        if (!$manager) {
            abort(404);
        }
        $this->managerService->deleteManager($manager);
        return redirect()->route('manager.index');
    }
}
