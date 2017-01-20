<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Create an article');
$I->amOnPage('article/create');
$I->fillField('title', 'This is title');
$I->fillField('text', 'This is text of the article.');
$I->click('Add article');
$I->dontSeeElement('alert-danger');
$I->haveRecord('articles', array('title' => 'This is title', 'text' => 'This is text of the article.'));