<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function createNews()
  {
    return view('admin.add_news');
  }

  public function storeNews(Request $request)
    {
      $title = $request->title;
    	$description = $request->description;
    	$eventimage = $request->file('eventimage');
    	$imageName = time().'.'.$eventimage->extension();
    	$eventimage->move(public_path('images'),$imageName);

    	$event = new News();
    	$event->title = $title;
    	$event->description = $description;
    	$event->newstimage = $imageName;
    	$event->save();

    	return back()->with('news_added','News Successfully Added.');
    }

    public function allNews()
    {
    	$news = News::all();
    	return view('admin.all_news', compact('news'));
    }

    public function editNews($id)
    {
    	$news = News::find($id);
    	return view('admin.edit_news', compact('news'));
    }

    public function updateNews(Request $request)
    {
    	$title = $request->title;
    	$description = $request->description;
      if( $request->hasFile('eventimage')){
  			$eventimage = $request->file('eventimage');
  			$imageName = time().'.'.$eventimage->extension();
  			$eventimage->move('images',$imageName);

  			$event = News::find($request->id);
  			$event->newstimage = $imageName;
      		$event->save();
  		}

    	$event = News::find($request->id);
    	$event->title = $title;
    	$event->description = $description;
    	$event->newstimage = $imageName;
    	$event->save();

    	return back()->with('news_updated','News Successfully Updated.');

    }

    public function deleteNews($id)
    {
    	$event = News::find($id);
    	unlink(public_path('images').'/'.$event->newstimage);
    	$event->delete();
    	return back()->with('event_deleted','News Successfully Deleted.');
    }
}
