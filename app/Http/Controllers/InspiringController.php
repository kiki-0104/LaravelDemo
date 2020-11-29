<?php



namespace App\Http\Controllers;

use App\Http\Controllers\InspiringController;

use Illuminate\Http\Request;

Route::get('/inspire', 'App\Http\Controllers\InspiringController@inspire');

class InspiringController extends Controller

{

    /**

     * @return string

     */

    public function inspire()

    {

        return (new InspiringService())->inspire();

    }

} 