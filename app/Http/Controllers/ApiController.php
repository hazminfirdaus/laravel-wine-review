<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use DB;
 
class ApiController extends Controller
{
    public function index()
    { 
      $query = '
          SELECT *
          FROM `wines`
          WHERE 1
          LIMIT 0, 10
        ';

      // $movies = DB::select('SELECT * FROM `movies` ORDER BY `rating` DESC LIMIT 10');

      $wines = DB::select($query);

      var_dump($wines);
      var_dump('Hello');

      // return $wines;

      // return [
      //       'success' => true,
      //       'message' => 'Response successfully returned.',
      //       'errors' => [],
      //       'data' => []
      //   ];
    }
}