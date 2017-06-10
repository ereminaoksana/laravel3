<?php

namespace App\Http\Controllers;


use App\Event;
use App\Genre;
use App\User;

class EventsController extends HtmlController
{
    public function html()
    {

        $allEvents = $this->getAllEvents();


        $this->vars['allEvents'] = [];

        foreach ($allEvents as $val) {
            $users = $this->getAllUsers($val->author_id);
            $genres = $this->getAllGenres($val->genre_id);

            foreach ($users as $val2) {
                $result = array_merge(array($val2), array($val), array($genres));
                array_push($this->vars['allEvents'], $result);
            }

        }

        return view('events', $this->vars);
    }


    public function getAllEvents()
    {
        return $allEvents = Event::all();
    }


    public function getAllUsers($id)
    {
        return $allUsers = User::all()->where('id', $id);
    }

    public function getAllGenres($id)
    {
        return $allUsers = Genre::find($id);
    }


}