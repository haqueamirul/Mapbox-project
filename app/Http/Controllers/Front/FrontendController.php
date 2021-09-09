<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Team;
use App\News;

class FrontendController extends Controller
{
    public function homePage()
    {
      return view('welcome');
    }

    public function index()
    {
      return view('pages.about');
    }

    public function contactUs()
    {
      return view('pages.contact');
    }

    public function Consultation()
    {
      return view('pages.consultation');
    }

    public function ourTeam()
    {
      $teams = Team::all();
      return view('pages.team', compact('teams'));
    }

    public function NewsHere()
    {
      $events = Event::all();
      return view('pages.news', compact('events'));
    }

    public function detailsEvent($id)
    {
    	$event = Event::find($id);
      return view('pages.event_details', compact('event'));
    }

    public function ourService()
    {
      return view('pages.service');
    }

}
