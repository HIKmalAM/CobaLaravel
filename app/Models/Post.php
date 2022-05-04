<?php

namespace App\Models;

class Post 
{
    
    private static $blogPost = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'Judul-Post-Pertama',
            'author' => 'Endi Efendi',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Sunt a dignissimos nam quidem ratione quam at facere itaque neque officia. 
            Repellendus possimus facilis illum fugit earum! Saepe ipsum porro facere.',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'Judul-Post-Kedua',
            'author' => 'Qori',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Doloremque deleniti animi fuga repellat ut aspernatur, sit eaque? 
            Officia, delectus facere excepturi eum fugit illo molestias quo explicabo asperiores mollitia dicta in, quaerat provident iure repellendus porro! 
            Quis iure ipsum delectus qui sed molestias perferendis iusto similique repellat quidem, quas quaerat, facilis necessitatibus praesentium est exercitationem nulla officia corporis pariatur, eum adipisci alias molestiae repudiandae. 
            Exercitationem non neque similique pariatur eligendi laudantium vitae, eius voluptate nobis illo tenetur facilis distinctio perspiciatis eum sint libero ex doloribus nostrum placeat voluptatibus vero, facere, vel nihil corporis. 
            Amet eos nesciunt porro? Perferendis, deleniti tempora.',
        ],
    ];

    public static function all(){
        return self::$blogPost;
    }

    public static function find($slug){
        
        $posts = self::$blogPost;
        $post = [];
        foreach ($posts as $p){
            if($p['slug']  === $slug){
                $post = $p;
            }
        }
        return $post;
    }
}
