<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    private $tweets = [
        [
            "author" => "Alex Bymoen",
            "content" => "This is my first tweet"
        ],
        [
            "author" => "Alex Bymoen",
            "content" => "This is my second tweet"
        ],
        [
            "author" => "Santa",
            "content" => "This is my first tweet"
        ],
        [
            "author" => "Santa",
            "content" => "This is my second tweet"
        ]
        ];


    function show(){
        return view('showTweets', ["allTweets" => $this->tweets]);
    }
    function showTweet($id){
        if($id>sizeof($this->tweets)){
            return view('tweetError');
        }else {
            return view('showTweets', ["allTweets" => [$this->tweets[$id]]]);
        }
    }
}
