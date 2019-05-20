<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  /**
   * Menampilkan halaman beranda
   *
   * @return \Illuminate\Http\Response
   */
    public function index()
    {
      return view('welcome');
    }

    /**
     * Menampilkan halaman dashboard user
     *
     * @return \Illuminate\Http\Response
     */
      public function dashboard()
      {
        return view('dashboard');
      }
}
