<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Models\Articles;

class ArticlesTest extends TestCase
{

    // rollback nao persiste o commit
    use DatabaseTransactions;


    // teste de criação de usuario
    public function test_create_article()
    {
        \App\Models\Articles::create([
            'title' => 'um teste',
            'sub_title' => 'um teste sub',
            'description' => 'description',
        ]);

        $this->seeInDatabase('articles',['title' => 'um teste']);
    }


    public function test_can_delete_post() {

        $post = \App\Models\Articles::create([
            'title' => 'um teste',
            'sub_title' => 'um teste sub',
            'description' => 'description',
        ]);

        $this->delete($post->id);

        $this->seeInDatabase('articles',['id' => $post->id]);
    }


}
