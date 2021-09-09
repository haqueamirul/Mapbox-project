<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;

class TeamController extends Controller
{
  public function OurTeam()
  {
    $teams = Team::all();
    return view('admin.all_team', compact('teams'));
  }

  public function addTeam()
  {
    return view('admin.add_team');
  }

  public function storeTeam(Request $request)
    {
    	$name = $request->name;
      $description = $request->description;
      $facebook = $request->facebook;
      $twitter = $request->twitter;
    	$linkedin = $request->linkedin;
    	$eventimage = $request->file('eventimage');
    	$imageName = time().'.'.$eventimage->extension();
    	$eventimage->move('images',$imageName);

    	$event = new Team();
    	$event->name = $name;
      $event->description = $description;
      $event->facebook = $facebook;
      $event->twitter = $twitter;
    	$event->linkedin = $linkedin;
    	$event->teamimage = $imageName;
    	$event->save();

    	return back()->with('team_added','Team Successfully Added.');
    }

    public function editTeam($id)
    {
    	$team = Team::find($id);
    	return view('admin.edit_team', compact('team'));
    }

    public function updateTeam(Request $request)
    {
    	$name = $request->name;
    	$description = $request->description;
      $facebook = $request->facebook;
      $twitter = $request->twitter;
    	$linkedin = $request->linkedin;
      if( $request->hasFile('eventimage')){
  			$eventimage = $request->file('eventimage');
  			$imageName = time().'.'.$eventimage->extension();
  			$eventimage->move('images',$imageName);

  			$event = Team::find($request->id);
  			$event->teamimage = $imageName;
      	$event->save();
  		}

    	$event = Team::find($request->id);
    	$event->name = $name;
      $event->description = $description;
      $event->facebook = $facebook;
      $event->twitter = $twitter;
    	$event->linkedin = $linkedin;
    	$event->save();

    	return back()->with('team_updated','Team Successfully Updated.');

    }

    public function deleteTeam($id)
    {
    	$event = Team::find($id);
    	unlink(public_path('images').'/'.$event->teamimage);
    	$event->delete();
    	return back()->with('team_deleted','Team Successfully Deleted.');
    }
}
