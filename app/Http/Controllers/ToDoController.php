<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use App\Invitation;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{


    public function first(){
      if (isset(Auth::user()->id)) {
        //Check if logged in as Admin
        if (Auth::user()->is_admin) {   //admin

          $coworkers = Invitation::where('admin_id', Auth::user()->id )->where('is_accepted', 1)->get();

          $invitations = Invitation::where('admin_id', Auth::user()->id )->where('is_accepted', 0)->get();

          $tasks = Task::where('admin_id', Auth::User()->id)->paginate(7);

        } else {                      //User

          $invitations = [];

          $tasks = Task::whereUserId(Auth::User()->id)->paginate(7);

          $coworkers = User::where('is_admin', 1)->get();

        }

        // dd($invitations);
        return view('index', compact('tasks', 'coworkers', 'invitations'));
      } else {
        return view('first');
      }

    }



    // ===============================================
    // this would redirect to the index view==(index)
    // ===============================================
    public function index(){

      // //Check if logged in as Admin
      // if (Auth::user()->is_admin) {   //admin
      //
      //   $coworkers = Invitation::where('admin_id', Auth::user()->id )->where('is_accepted', 1)->get();
      //
      //   $invitations = Invitation::where('admin_id', Auth::user()->id )->where('is_accepted', 0)->get();
      //
      //   $tasks = Task::where('admin_id', Auth::User()->id)->paginate(7);
      //
      // } else {                      //User
      //
      //   $invitations = [];
      //
      //   $tasks = Task::whereUserId(Auth::User()->id)->paginate(7);
      //
      //   $coworkers = User::where('is_admin', 1)->get();
      //
      // }
      //
      // // dd($invitations);
      // return view('index', compact('tasks', 'coworkers', 'invitations'));
    }





    //================================================
    //Store the task
    //================================================
    public function store(Request $request){

      if ($request->input('task')) {
        $task = new Task;
        $task->content = $request->input('task');

        if (Auth::user()->is_admin) {

          if ($request->input('assignTo') == Auth::user()->id) {

            Auth::user()->tasks()->save($task);

          } elseif($request->input('assignTo') != null) {

            $task->user_id = $request->input('assignTo');
            $task->admin_id = Auth::user()->id;
            $task->save();

          }

        } else {

          Auth::user()->tasks()->save($task);

        }

      }

      return redirect()->back();

    }



    //================================================
    //redirect the edit page with task id
    //================================================
    public function edit($id){
      $task = Task::find($id);

      if (Auth::user()->is_admin) {
        $coworkers = Invitation::where('admin_id', Auth::user()->id )->where('is_accepted', 1)->get();

        $invitations = Invitation::where('admin_id', Auth::user()->id )->where('is_accepted', 0)->get();
      } else {
        $coworkers = [];

        $invitations = [];
      }

      // dd($task);
      return view('edit', compact('task','coworkers','invitations'));
    }



    //================================================
    //to delete a tasks
    //================================================
    public function delete($id){

      $task = Task::find($id);

      $task->delete();

      return redirect()->back();
    }

    //Update task
    public function update($id, Request $request){

      if ($request->input('task')) {

          $task = Task::find($id);

          $task->content = $request->input('task');

          if (Auth::user()->is_admin) {

            if (Auth::user()->is_admin) {

              if ($request->input('assignTo') == Auth::user()->id) {

                Auth::user()->task()-save($task);

              } elseif($request->input('assignTo') != null) {

                $task->user_id = $request->input('assignTo');
                $task->admin_id = Auth::user()->id;
                $task->save();

              }

        } else {

          $task->save();

        }

        //

      }
      return redirect('/');
    }}





    //================================================
    //update updateStatus
    //================================================
    public function updateStatus($id){

      $task = Task::find($id);
      $task->status = ! $task->status;
      $task->save();

      return redirect()->back();

    }





    //================================================
    //sendInvitation functionality
    //================================================
    public function sendInvitation(Request $request){
      $admin = $request->input('admin');
      $admin = User::find($admin);

      if ((int) $request->input('admin') > 0 && !Invitation::where('worker_id',Auth::user()->id)->where('admin_id', $request->input('admin'))->exists()) {

        $invitation = new Invitation;
        $invitation->worker_id = Auth::user()->id;
        $invitation->admin_id = (int) $request->input('admin');
        $invitation->save();

      }
      return redirect()->back();
    }






    //================================================
    //Accept Invitation functionality
    //================================================
    public function acceptInvitation($id){

      $invite = Invitation::find($id);
      $invite->is_accepted = true;
      $invite->save();
      return redirect()->back();
    }





    //================================================
    //Reject Invitation functionality
    //================================================
    public function rejectInvitation($id){

      $invite = Invitation::find($id);
      $invite->delete();
      return redirect()->back();
    }



    //================================================
    //      Delete a friend
    //================================================
    public function deleteFriend($id){
      // dd($id);
      $worker = Invitation::find($id)->delete();
      // dd($worker);

      return redirect()->back();
    }



}
