<?php

namespace Iehurtado\Comments\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Iehurtado\Comments\Models\Comment;
use Iehurtado\Comments\Tests\TestCase;
use Iehurtado\Comments\Tests\Commentable;

class CommentTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test **/
    public function a_comment_has_content() 
    {
        $comment = Comment::factory()->create(['content' => 'Un comentario']);
        $this->assertEquals('Un comentario', $comment->content);
    }
    
    /** @test **/
    public function a_comment_has_a_parent_commentable()
    {
        $comment = Comment::factory()->create();
        $this->assertNotEmpty($comment->commentable);
    }
    
    /** @test **/
    public function a_comment_has_an_author()
    {
        $comment = Comment::factory()->create();
        $this->assertNotEmpty($comment->author);
    }
    
    /** @test **/
    public function a_commentable_can_have_anonymous_comments()
    {
        $commentable = Commentable::factory()->create();
        $comment = $commentable->comments()->create(['content' => 'Soy un comentario']);
        
        $this->assertTrue($commentable->comments()->count() > 0);
        $this->assertEmpty($comment->author);
    }
    
    /** @test **/
    public function a_commentable_can_have_many_comments()
    {
        $commentable = Commentable::factory()->create();
        
        $commentable->comments()->create(['content' => 'Soy un comentario']);
        $commentable->comments()->create(['content' => 'Soy otro comentario']);
        
        $this->assertEquals(2, $commentable->comments()->count());
    }
}
