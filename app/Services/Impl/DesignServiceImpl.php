<?php

namespace App\Services\Impl;

use App\Models\Projects;
use App\Models\Image;
use App\Services\DesignService;


class DesignServiceImpl implements DesignService
{
    public function getAll(){
        $projects = Projects::all();
        if (!$projects){
            throw new \Exception('Project is empty', 404);
        }
        return $projects;
    }

    public function addProject($request){
        if ($request->hasFile('image_src')) {
            $url = $request->file('image_src')->store('images');
            $project =
                Projects::create([
                    'shortDescription' => $request->shortDescription,
                    'location' => $request->location,
                    'author' => $request->author,
                    'image_src' => $url
                ]);
            Image::create([
                'image_src' => $url,
                'project_id' => $project->id
            ]);
        }
    }

    public function editProject($projects, $request){
        $project = Projects::find($request->id);
        $project->shortDescription = $request->get('shortDescription');
        $project->location = $request->get('location');
        $project->author = $request->get('author');
        $project->image_src = $request->file('image_src')->store('images');
        $project->save();
    }

    public function deleteProject($id){
        Projects::find($id)->delete();
    }
}
