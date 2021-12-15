<?php

use Codeception\Template\Acceptance;

class P3Cest
{
    public function playGameRock(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=rock-radio]', '0');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-div]');

        $result = $I->grabTextFrom('[test=winner]');
        $I->comment('The Result is:' . $result);
    }

    public function playGamePaper(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=paper-radio]', '1');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-div]');

        $result = $I->grabTextFrom('[test=winner]');
        $I->comment('The Result is:' . $result);
    }

    public function playGameScissors(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=scissors-radio]', '2');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-div]');

        $result = $I->grabTextFrom('[test=winner]');
        $I->comment('The Result is:' . $result);
    }
    public function showHistoryAndRoundDetails(AcceptanceTester $I)
    {
        $I->amOnPage('/history');

        $roundCount = count($I->grabMultiple('[test=round-link]'));
        $I->assertGreaterThanOrEqual(10, $roundCount);

        $timestamp = $I->grabTextFrom('[test=round-link]');
        $I->click($timestamp);
        $I->see($timestamp);
    }

    public function validateForm(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=validation-output]');
    }
}
