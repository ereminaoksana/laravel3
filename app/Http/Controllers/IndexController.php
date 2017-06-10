<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.06.2017
 * Time: 22:32
 */

namespace App\Http\Controllers;


use App\Game;

class IndexController extends HtmlController
{
    public function html()
    {

        $games = $this->getGames();

        $this->vars['all_games'] = $games;
        

        return view('main', $this->vars);
    }


    public function getGames()
    {

        return $allGames = Game::all();

    }


}