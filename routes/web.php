<?php
use App\Models\User;
use App\Models\Student;


use Illuminate\Http\Request;
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
// API route group


$router->group(['prefix' => 'api'], function () use ($router) 
{
//     // Matches "/api/register
   //$router->group(['prefix' => 'auth'], function () use ($router)
   { 
     $router->post('auth/register', 'AuthController@register');
//    // Matches "/api/login
    $router->post('auth/login', 'AuthController@login');
   }
//   //------------------------Process CRUD for users: use direct function call ---------------------------

    // $router->get('users', function() {
    //   return User::all();
    // });
    // $router->get('users/{id}', function ($id) {
    //   return User::find($id);
    // });
    // $router->post('users', function(Request $request){
    //   return User::create($request->all());
    //   return $user;
    // });
    // $router->put('users/{id}', function(Request $request, $id){
    //                      $user = User::findOrFail($id);
    //                      $user->update($request->all());
    //                      return $user;
    //                    });
    // $router->delete('users/{id}', function ($id){
    //     User::find($id)->delete();
    //     return 204;   
    //     });

//---------------------------------use Controller --------------------

$router->get('users', 'UserController@index'); // or could use the notation ['uses' => 'UserController@index']
$router->get('users/{id}', 'UserController@show'); //or could be {id} but has to match function call in the Controller , ex, show(User user) or show(int $id)
$router->post('users', 'UserController@store');
$router->put('users/{id}', 'UserController@update');
$router->delete('users/{id}', 'UserController@delete');

$router->get('students', 'StudentController@index'); // or could use the notation ['uses' => 'StudentController@index']
    $router->get('students/{id}', 'StudentController@show'); //or could be {id} but has to match function call in the Controller , ex, show(User user) or show(int $id)
    $router->post('students', 'StudentController@store');
    $router->put('students/{id}', 'StudentController@update');
    $router->delete('students/{id}', 'StudentController@delete');





    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
});