<?php

namespace App\Http\Controllers;

use App\Http\Requests\Projects\AddRequest;
use App\Models\CallBackList;
use App\Models\Category;
use App\Models\Design;
use App\Models\Image;
use App\Models\Projects;
use App\Models\QuestionsList;
use App\Models\ReadyRequest;
use App\Models\ServiceList;
use App\Models\User;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index(){
        $projects  = Projects::all();
//        $designs = Design::with('category')->get();
        $images = Image::all();
        return view('design', [
            'projects' => $projects,
//            'design' => $designs,
            'images' => $images
        ]);
    }

    public function authorizeP(){
        return view('authorizationPage');
    }
    public function registrationP(){
        return view('registerPage');
    }

    public function servicesP(){
        $services = ServiceList::all();
        return view('servicesPage', [
            'services' => $services
        ]);
    }

    public function contactsP(){
        return view('contactsPage');
    }

    public function callbackP(Projects $project, ServiceList $service){
        return view('callbackPage',[
            'project' => $project,
            'service' => $service
        ]);
    }

    public function addP(){
        return view('addPage');
    }

    public function addQuestionP(){
        return view('addQuestionP');
    }

    public function addServiceP(){
        return view('addServiceP');
    }

    public function callbackPSuccess(){
        return view('callbackPSuccess');
    }

    public function fillQuestionFormP(){
        $questionsList = QuestionsList::all();
        $readyRequests = ReadyRequest::all();
        return view('fillQuestionFormP', [
            'questionsList' => $questionsList,
            'readyRequests' => $readyRequests
        ]);
    }

    public function questionListP(){
        $questionsList = QuestionsList::all();
        return view('questionListP', [
            'questionsList' => $questionsList
        ]);
    }

    public function projectP(Projects $project){
        return view('project', [
            'project'=> $project
        ]);
    }

    public function ourProductsP(){
         $projects = Projects::get([
             'id',
             'shortDescription',
             'location',
             'author',
             'image_src'
        ]);
        return view('ourProductsPage', [ 'projects'=> $projects]);
    }

    public function editP(Projects $project){
        return view('editPage', [
            'project' => $project
        ]);
    }

    public function editQuestionP(QuestionsList $questionsList){
        return view('editQuestionP', [
            'questionsList' => $questionsList
        ]);
    }

    public function editServiceP(ServiceList $service){
        return view('editServiceP', [
            'service' => $service
        ]);
    }

    public function edit(Projects $project, Request $request)
    {
        $url = $project->image_src;
        if ($request->hasFile('image_src')) {
            $url = $request->file('image_src')->store('images');
        }
        $project->id = $request->get('id');
        $project->shortDescription = $request->get('shortDescription');
        $project->location = $request->get('location');
        $project->author = $request->get('author');
        $project->image_src = $url;

        $project->save();
        return redirect()->route('ourProductsP', ['project' => $project]);

    }

    public function editQuestion(QuestionsList $questionsList, Request $request){
        $questionsList->description = $request->get('description');
        $questionsList->answer = $request->get('answer');

        $questionsList->save();
        return redirect()->route('questionListP', ['questionsList' => $questionsList]);
    }

    public function editService(ServiceList $service, Request $request){
        $service->name = $request->get('name');
        $service->description = $request->get('description');
        $service->cost = $request->get('cost');

        $service->save();
        return redirect()->route('servicesP', ['service' => $service]);
    }

    public function add(AddRequest $request){
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
        return redirect()->route('ourProductsP')->with('status', 'Project added!');
    }

    public function addQuestion(Request $request){
//        dd($request);
        $questionLists =
            QuestionsList::create([
            'description' => $request->description,
            'answer' => $request->answer
        ]);
        return redirect()->route('questionListP', ['questionLists' => $questionLists]);
    }

    public function addService(Request $request){
        $services =
            ServiceList::create([
                'name' => $request->name,
                'description' => $request->description,
                'cost' => $request->cost
            ]);
        return redirect()->route('servicesP', ['services' => $services]);
    }

    public function addCallback(Request $request){
        $prId = 0;
        $srId = 0;
        if ($request->project_id != null){
            $prId = $request->project_id;
        }
        if ($request->service_id != null){
            $srId = $request->service_id;
        }
        CallBackList::create([
           'name' => $request->name,
           'surname' => $request->surname,
           'phone' => $request->phone,
           'description' => $request->description,
            'project_id' => $prId,
            'service_id' => $srId
        ]);
        return redirect()->route('callbackPSuccess');
    }

//    public function addFillQuestionForm(Request $request, QuestionsList $questionsList){
//        ReadyRequest::create([
//            'userName' => $request->$questionsList->answer,
//            'userName' => $request->$questionsList->answer,
//            'userName' => $request->$questionsList->answer
//        ]);
//    }

    public function delete($id){
        Projects::find($id)->delete();
        return redirect()->route('ourProductsP')->with('status','Delete success!');
    }

    public function deleteQuestion($id){
        QuestionsList::find($id)->delete();
        return redirect()->route('questionListP');
    }

    public function deleteService($id){
        ServiceList::find($id)->delete();
        return redirect()->route('servicesP')->with('status','Delete success!');
    }
}
