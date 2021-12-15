# Project 3
+ By: Raul Pulido
+ URL: <http://e2p3.raulpulido.me>

## Graduate requirement
*x one of the following:*
+ [X] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
N/A

## Codeception testing output
```
Acceptance Tests (5) ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
P3Cest: Play game rock
Signature: P3Cest:playGameRock
Test: tests/acceptance/P3Cest.php:playGameRock
Scenario --
 I am on page "/"
 I fill field "[test=rock-radio]","0"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 I grab text from "[test=winner]"
 The Result is:Computer is the winner
 PASSED 

P3Cest: Play game paper
Signature: P3Cest:playGamePaper
Test: tests/acceptance/P3Cest.php:playGamePaper
Scenario --
 I am on page "/"
 I fill field "[test=paper-radio]","1"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 I grab text from "[test=winner]"
 The Result is:You are the winner
 PASSED 

P3Cest: Play game scissors
Signature: P3Cest:playGameScissors
Test: tests/acceptance/P3Cest.php:playGameScissors
Scenario --
 I am on page "/"
 I fill field "[test=scissors-radio]","2"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 I grab text from "[test=winner]"
 The Result is:You are the winner
 PASSED 

P3Cest: Show history and round details
Signature: P3Cest:showHistoryAndRoundDetails
Test: tests/acceptance/P3Cest.php:showHistoryAndRoundDetails
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater than or equal 10,45
 I grab text from "[test=round-link]"
 I click "2021-12-14 21:45:24"
 I see "2021-12-14 21:45:24"
 PASSED 

P3Cest: Validate form
Signature: P3Cest:validateForm
Test: tests/acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I click "[test=submit-button]"
 I see element "[test=validation-output]"
 PASSED 

-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 00:00.795, Memory: 12.00 MB

OK (5 tests, 7 assertions)