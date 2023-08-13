<?php

namespace App\Http\Controllers\back;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::orderBy('id', 'DESC')->paginate(20);
        return view('back.projects.projects', compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('ma injaim');

        $messages = [
            'title.required' => 'فیلد عنوان را وارد نمایید',
            'description.required' => 'توضیحات مربوط به پروژه را وارد کنید کنید',
        ];
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ], $messages);
        $project = new Project([
            'title' => $request -> get('title'),
            'description' => $request -> get('description'),
            'status' => 1,
            'user_id' => Auth::user()->id

        ]);
        try {
            $project->save($request->all());
        } catch (Exception $exception) {
            if ($exception->getCode()) {
                    $msg = strtr ($exception->getCode() );
            }
            return redirect(route('admin.projects.edit'))->with('warning', $msg);
        }
       
        $msg = "ذخیره ی  پروژه با موفقیت انجام شد";
        return redirect(route('admin.projects'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('back.Projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        // dd('ma injaim');

        $messages = [
            'title.required' => 'فیلد عنوان را وارد نمایید',
            'description.required' => 'توضیحات مربوط به پروژه را وارد کنید کنید',
        ];
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ], $messages);

        try {
            $project->update($request->all());
        } catch (Exception $exception) {
            if ($exception->getCode()) {
                $msg = strtr ($exception->getCode() );
        }
        return redirect(route('admin.projects.edit'))->with('warning', $msg);
    }
       
        $msg = "ذخیره ی ویرایش پروژه با موفقیت انجام شد";
        return redirect(route('admin.projects'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */

    public function destroy(Project $project)
    {
        try {
            $category->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.categories'))->with('warning', $exception->getCode());
        }

        $msg = "آیتم مورد نظر حذف گردید";
        return redirect(route('admin.categories'))->with('success', $msg);
    }

    public function updatestatus(Project $project)
    {
        if ($project->status == 1) {
            $project->status = 0;
        } else {
            $project->status = 1;
        }

        $project->save();
        $msg = "بروزرسانی با موفقیت انجام شد";
        return redirect(route('admin.projects'))->with('success', $msg);
    }
}
