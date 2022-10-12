<?php

namespace App\Http\Controllers;

use App\Http\Requests\Projects\AddRequest;
<<<<<<< HEAD
use App\Models\Category;
=======
>>>>>>> d4f1791549ec051ba70b7d191757df92f082298a
use App\Models\Design;
use App\Models\Image;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index(){
//        $word = 'Hello World!';
//        $bool = true;
//
//        $array = [
//            ['name' => 'Max'],
//            ['name' => 'Tony'],
//            ['name' => 'Anna'],
//            ['name' => 'Igor']
//        ];
//        return view('design', ['test' => $word, 'bool' => $bool, 'names' => $array]);
//
//        $designs =Design::all();
//        return view('design', [
//            'design' =>$designs
//        ]);
        $designs = Design::with('category')->get();
        return view('design', [
            'design' => $designs
        ]);
    }

    public function authorizeP(){
        return view('authorizationPage');
    }
    public function registrationP(){
        return view('registerPage');
    }

    public function servicesP(){
        return view('servicesPage');
    }
<<<<<<< HEAD

    public function contactsP(){
        return view('contactsPage');
    }

    public function callbackP(){
        return view('callbackPage');
    }

    public function addP(){
        return view('addPage');
    }

    public function ourProductsP(){
        $projects = Projects::get([
            'id',
            'shortDescription',
            'location',
            'author',
            'image_src'
=======
    public function ourProductsP(){
         $projects = Projects::get([
             'id',
             'shortDescription',
             'location',
             'author',
             'image_src'
>>>>>>> d4f1791549ec051ba70b7d191757df92f082298a
        ]);
        return view('ourProductsPage', [ 'projects'=> $projects]);
//        return view('ourProductsPage');
    }
<<<<<<< HEAD
//    public function editP($id){
//        $projects = Projects::find($id);
//
//        return redirect()->route('editP', ['projects' => $projects]);
//    }

    public function editP(Projects $project){
//        $categories = Category::all();

//        return redirect()->route('editP', ['project' => $project]);
        view('editPage', [
            'project' => $project
        ]);
    }

    public function edit(Projects $projects, Request $request){

        //if($request->hasFile()){
//        Projects::find($id)
            $projects->id = $request->get('id');
            $projects->shortDescription = $request->get('shortDescription');
            $projects->location = $request->get('location');
            $projects->author = $request->get('author');
            $projects->image_src = $request->get('image_src');

            $projects->save();

            return redirect()->route('ourProductsP', ['projects' => $projects]);

        //}

//    public function edit($id){

//        $projects->validate($request, [
//            'shortDescription' => 'required|string',
//            'location' => 'required|string',
//            'author' => 'required|string',
//            'image_src' => 'required|string'
//        ]);
//        $projects = Projects::find('id');
//        $projects->shortDescription = $request->input('shortDescription');
//        $projects->location = $request->input('location');
//        $projects->author = $request->input('author');
//        $projects->image_src = $request->input('image_src');
//        $projects->fill($projects)->save();

//        $projects = Projects::find($id);
//        $projects->shortDescription = "eee";
////        $projects->shortDescription = ;
//        $projects->save();
//        return redirect()->route('ourProductsP', ['projects' => $projects]);

=======
    public function contactsP(){
        return view('contactsPage');
    }
    public function callbackP(){
        return view('callbackPage');
    }
    public function addP(){
        return view('addPage');
    }
    public function editP($id){
        $projects = Projects::find($id);
        //$projects = Projects::all(where 'id' === $id);

        return redirect()->route('editP');
//        , [ 'projects'=> $projects]
//        return view('editPage');
    }
    public function edit($id){
        $projects = Projects::find($id);
        $projects->shortDescription = 'blablabla';
        $projects->save();
        return redirect()->route('ourProductsP', ['projects' => $projects]);
>>>>>>> d4f1791549ec051ba70b7d191757df92f082298a
    }

//        $thread->update(request()->validate([
//        'title' => 'required',
//        'body' => 'required'
//        ]));
//
//        return $thread;



//        if (Projects::find($request->id)){
//            $projects = Projects::create([
//                'id',
//                'shortDescription',
//                'location',
//                'author',
//                'image_src'
//            ]);
//            return redirect()->route('ourProductsP', [ 'projects'=> $projects]);
<<<<<<< HEAD
=======
//
//        }
//
//        if (Projects::get(['id']) == $request){
//            $projects = Projects::get([
//                'id',
//                'shortDescription',
//                'location',
//                'author',
//                'image_src'
//            ]);
//            return redirect()->route('editP', [ 'projects'=> $projects]);
//        }

//        return redirect()->route('ourProductsP')->with('status', 'Product is not exist');
    //}
//
//    public function imageSearch(Image $image){
//        if (images.project_id == projects.id()){
//            return $image;
//        }
//        return null;
//    }
>>>>>>> d4f1791549ec051ba70b7d191757df92f082298a
    public function add(AddRequest $request){
        Projects::create([
            'shortDescription' => $request->shortDescription,
            'location' => $request->location,
            'author' => $request->author,
            'image_src' => $request->image_src
        ]);
//    $design->save();
        return redirect()->route('ourProductsP')->with('status', 'Project added!');
//        return redirect('/design-page');
    }

    public function delete($id){
//        if(Projects::get(['id']) == $request){
            Projects::find($id)->delete();
<<<<<<< HEAD
=======
//            Projects::delete([
//                'id',
//                'shortDescription',
//                'location',
//                'author',
//                'image_src'
//            ]);
>>>>>>> d4f1791549ec051ba70b7d191757df92f082298a
            return redirect()->route('ourProductsP')->with('status','Delete success!');
        }

        //return redirect()->route('ourProductsP')->with('status','Delete success!');
//        return redirect('/design-page');
    //}

//    public function showProjects()
//    {
//        $projects = DB::table('projects');
//
//        return view('design', ['projects' => $projects]);
//    }
}
