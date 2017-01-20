<?php

class CreateArticleTest extends \Codeception\Test\Unit {

    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before() {
        
    }

    protected function _after() {
        
    }

    // tests
    public function testMe() {
        // create a user from framework, user will be deleted after the test
        $id = $this->tester->haveRecord('articles', ['title' => 'article title', 'text' => 'this is text']);
        // access model
        $user = \App\Article::find($id);
        $user->title = 'new title';
        $user->save();
        $this->assertEquals('new title', $user->title);
        // verify data was saved using framework methods
        $this->tester->seeRecord('articles', ['title' => 'new title']);
        $this->tester->dontSeeRecord('articles', ['title' => 'miles']);
    }

}
