<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventsController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }



  public function addEvent()
  {
    return view('admin.add_event');
  }

  public function storeEvents(Request $request)
    {
    	$title = $request->title;
    	$description = $request->description;
    	$eventimage = $request->file('eventimage');
    	$imageName = time().'.'.$eventimage->extension();
    	$eventimage->move(public_path('images'),$imageName);

    	$event = new Event();
    	$event->title = $title;
    	$event->description = $description;
    	$event->eventimage = $imageName;
    	$event->save();

    	return back()->with('event_added','Event Successfully Added.');
    }

    public function allEvents()
    {
    	$events = Event::all();
    	return view('admin.all_events', compact('events'));
    }

    public function editEvent($id)
    {
    	$event = Event::find($id);
    	return view('admin.edit_event', compact('event'));
    }

    public function updateEvent(Request $request)
    {
    	$title = $request->title;
    	$description = $request->description;
      if( $request->hasFile('eventimage')){
  			$eventimage = $request->file('eventimage');
  			$imageName = time().'.'.$eventimage->extension();
  			$eventimage->move('images',$imageName);
  			
  			$event = Event::find($request->id);
  			$event->eventimage = $imageName;
      		$event->save();
  		}

    	$event = Event::find($request->id);
    	$event->title = $title;
    	$event->description = $description;
    	$event->eventimage = $imageName;
    	$event->save();

    	return back()->with('event_updated','Event Successfully Updated.');

    }

    public function deleteEvent($id)
    {
    	$event = Event::find($id);
    	unlink(public_path('images').'/'.$event->eventimage);
    	$event->delete();
    	return back()->with('event_deleted','Event Successfully Deleted.');
    }




}
