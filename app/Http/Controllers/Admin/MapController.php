<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Boxmap;

class MapController extends Controller
{
  public function viewtMap($id)
  {
    $location = Boxmap::find($id);
    return view('admin.edit_map', compact('location'));
  }

  public function deleteMap($id)
  {
    $location = Boxmap::find($id);
    $location->delete();
    return back()->with('location_deleted','Location Successfully Deleted.');
  }
}
