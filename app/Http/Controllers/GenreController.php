<?php
/**
 * Created by PhpStorm.
 * User: DEXP
 * Date: 09.06.2017
 * Time: 23:48
 */

namespace App\Http\Controllers;


use App\Game;
use App\Genre;

class GenreController extends HtmlController
{

    public function showgenre($genre)
    {


        $games = $this->getGames($genre);

        $this->vars['all_games'] = $games;

        return view('genre', $this->vars);
    }


    public function getGames($genre)
    {

        $genre = Genre::where('slug', $genre)->firstOrFail();
        return $allGames = Game::where('genre', $genre->id)->get();

    }

}