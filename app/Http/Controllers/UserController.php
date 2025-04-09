<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Jobs\SendMails;
use Illuminate\Http\Request;
use App\Models\email;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function home(){
        return view('home1');
    }
    public function list()
    {
        $plans = email::paginate(5);
        
        return view('dashboard.pages.plans.list')->with('plans', $plans);
    }

    public function create()
    {
        return view('dashboard.pages.plans.create');
    }

    public function store(Request $request)
    {
        if ($request->method() == 'POST') {
        $request->validate([
          
            'name' => ['required'],
            'email' => ['required'],
           
          
        ]);
        $requestdata=$request->all();
       
        email::create($requestdata);
    }
    
        return redirect()->route('plans.list.view');
        
    }

    public function edit(Request $request, $id)
    {
        $plan = email::find($id);

        return view('dashboard.pages.plans.edit')
            ->with('plan', [
                
                'id' => $plan->id,
                'name' => $plan->name,
                'email' => $plan->email,
               
               
            ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
           
            'name' => ['required'],
            'email' => ['required'],
            
        ]);

        email::where('id', $id)->update([
           
            'name' => $request->post('name'),
            'email' => $request->post('email'),
           
           
        ]);

        return redirect()->route('plans.list.view');

        
    }

    public function delete(Request $request, $id)
    {
        $plan = email::find($id);

        if (!$plan) {
            abort(404);
        }

        $plan->delete();

        return redirect()->route('plans.list.view');

      
    }
  
    public function view(){
        
        return view('dashboard.pages.plans.send');


    }
    public function import(Request $request){
        $validator=Validator::make($request->all(),[
            'file'=>'required|mimes:xlsx,csv,xls',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
       
        'Excel'::import(new UsersImport,request()->file('file'));
        return redirect()->back()->with('imported done');


    }
    public function export(){
        return Excel::download(new UsersExport,'emails.xlsx');
        


    }
    public function form(){
       return view('dashboard.pages.plans.sendall');
    }
    public function send_emails( Request $request){
$validator=Validator::make($request->all(),[
    'title'=>'required',
    'body'=>'required',
]);
if($validator->fails()){
    return back()->withErrors($validator)->withInput();
}
  $details=[
    'title'=>$request->title,
    'body'=>$request->body,
  ]  ;
  $job= (new SendMails($details));
  dispatch( $job);
  return back()->with('status','mails sended');
    }

    
}
