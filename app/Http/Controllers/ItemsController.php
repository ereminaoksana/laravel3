<?php

namespace App\Http\Controllers;


use App\Game;
use App\Genre;

class ItemsController extends HtmlController
{
    public function html($id)
    {
        $item = $this->getItems($id);

        $this->vars['item'] = [];

        $genre = $this->getGenre($item->genre);

        array_push($this->vars['item'], $item, $genre);

        return view('items', $this->vars);
    }


    public function getItems($id)
    {
        return Game::find($id);
    }

    public function getGenre ($id) {
        return Genre::find($id);
    }



}