<?php

namespace App\Libraries;

class Db
{
    private $client;
    private $database;

    public function __construct()
    {
        $uri = getenv('ATLAS_URI');
        $database = getenv('DATABASE');

        if (empty($uri) || empty($database)) {
            show_error('You need to declare ATLAS_URI and DATABASE in your .env file!');
        }

        try {
            $this->client = new \MongoDB\Client($uri);
        } catch (MongoDB\Driver\Exception\MongoConnectionException $ex) {
            show_error('Couldn\'t connect to database: '.$ex->getMessage(), 500);
        }

        try {
            $this->database = $this->client->selectDatabase($database);
        } catch (MongoDB\Driver\Exception\RuntimeException $ex) {
            show_error('Error while fetching database with name: '.$database.$ex->getMessage(), 500);
        }
    }

    public function getDatabase()
    {
        return $this->database;
    }
}
