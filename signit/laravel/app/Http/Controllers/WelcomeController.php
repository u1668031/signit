<?php
namespace App\Http\Controllers;
use App\Models\Visitor;
class WelcomeController extends Controller
{
  public function index()
  {
      return view('welcome');
  }

}
