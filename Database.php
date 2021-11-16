<?php

class Database {
   private $movies = [
        [
    'id' => 1,
    'title' => 'Pulp Fiction',
    'image' => 'https://image.posterlounge.es/images/l/1895909.jpg'
    ],

    [
    'id' => 2,
    'title' => 'In the mood for love',
    'image' => 'https://i.pinimg.com/564x/82/bb/e4/82bbe4de049fe4a5b1ddd55c627f7bee.jpg'
 ],
];

    public function getAll() {
        return $this->movies;
    }
}