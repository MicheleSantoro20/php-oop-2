<?php

trait Picturable {

    public $picture_url;

    public function getPictureUrl($url) {
        return $this->picture_url;
    }

    public function setPictureUrl($url) {
        if (!str_contains($url, 'http')) {
            throw new Exception('Il sito deve cominciare per http');
        } else {
            $this->picture_url=$url;
        }
    }

}