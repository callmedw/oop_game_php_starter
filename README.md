<h1 align="center">
  <br>
  <a href="http://www.amitmerchant.com/electron-markdownify"><img src="https://www.theatricalrights.com/wp-content/uploads/2016/04/game-show-web-banner.png" alt="Pic of a Game Show" width="600px"></a>
  <br>
  Phrase Hunter
  <br>
</h1>

<h4 align="center">
A browser-based, word guessing game. Using PHP and OOP (Object Oriented Programming) to select a random, hidden phrase, which a player tries to guess, by clicking letters on an onscreen keyboard.
</h4>

<p align="center">
  <a href="https://opensource.org/licenses/MIT">
    <img src="https://img.shields.io/badge/License-MIT-green.svg?style=popout"
    alt="MIT-license-badge">
  </a>
  <img src="https://img.shields.io/github/languages/code-size/callmedw/oop_game_php_starter.svg?style=popout"
  alt="code-size-badge">
  <a href="https://GitHub.com/callmedw/oop_game_php_starter/issues/">
    <img src="https://img.shields.io/github/issues/callmedw/oop_game_php_starter.svg?style=popout"
    alt="github-issues-badge">
  </a>
</p>

<p align="center">
  <a href="#features">Features</a> •
  <a href="#how-to-use">How To Use</a> •
  <a href="#required-technologies">Requirements</a> •
  <a href="#browser-support">Browser Support</a> •
  <a href="#known-bugs">Bug Report</a> •
  <a href="#contact">Contact</a> •
  <a href="#license">License</a>
</p>

## Features

To pass this code review with a Meets Expectations the following criteria are required:

- [x] Class file includes the currentPhrase and selected properties.
- [x] Class file includes a constructor which accepts two optional parameters for a phrase string and a selected array.
- [x] If a phrase is not passed, a phrase is randomly selected from a list.
- [x] Phrase class includes the following methods:
    - [x] addPhraseToDisplay()
    - [x] checkLetter()
- [x] Class file includes the phrase and lives properties.
- [x] Class file includes a constructor which accepts a Phrase object and sets the property.
- [x] Game class includes the following methods:
    - [x] checkForWin()
    - [x] checkForLose()
    - [x] gameOver()
    - [x] displayKeyboard()
    - [x] displayScore()
- [x] Displays the Phrase boxes and updates letters as the user chooses them.
- [x] Displays the onscreen keyboard and allows users to select a letter
- [x] Displays the score and shows the user how many lives remain
- [x] Phrase, keyboard and score are shown and user is able to choose letters only once.
- [ ] If a player makes 5 wrong guesses, the “lose” message is shown
- [ ] If all the letters in the phrase are shown, the “win” message is shown
- [x] A button has been added to restart the game
- [x] Provided HTML and CSS is used


Additionally, the app may Exceed Expectations by including:

- [ ] Event listener for the "keypress" event that submits the form for the associated onscreen keyboard button
- [ ] App styles have been personalized and changes have been noted in the README.md file and the project submission notes

## CSS Personalization Notes

💅🏼

## Required Technologies

* [CSS](https://www.w3.org/TR/CSS/)
* [HTML](https://www.w3.org/TR/html5/)
* [PHP](https://php.net)
* [Git](https://git-scm.com)
* [MAMP](https://www.mamp.info/en/) or [Apache](https://httpd.apache.org/)

## Suggested Technologies

* [Atom](https://atom.io/)

## How To Use

To clone and run this application, you'll need [Git](https://git-scm.com) installed on your computer. To edit this project you may want a text-editor like [Atom](https://atom.io/). To view this application in a browser you'll need a web server like [Apache](https://httpd.apache.org/) or the Apache and MySQL bundled stack, [MAMP](https://www.mamp.info/en/). From your command line:

```bash
# Clone this repository
$ git clone https://github.com/callmedw/oop_game_php_starter.git

# Open in atom
$ atom oop_game_php_starter

# Go into the repository
$ cd oop_game_php_starter

# Set this repo-folder as document root in MAMP.
(MAMP -> Peferences -> Web Server -> Select folder)

# Start MAMP localhost
$ php -S localhost:8888
```
##  Browser Support
| <img src="https://user-images.githubusercontent.com/1215767/34348387-a2e64588-ea4d-11e7-8267-a43365103afe.png" alt="Chrome" width="16px" height="16px" /> | <img src="https://user-images.githubusercontent.com/1215767/34348590-250b3ca2-ea4f-11e7-9efb-da953359321f.png" alt="IE" width="16px" height="16px" />  | <img src="https://user-images.githubusercontent.com/1215767/34348380-93e77ae8-ea4d-11e7-8696-9a989ddbbbf5.png" alt="Edge" width="16px" height="16px" />  | <img src="https://user-images.githubusercontent.com/1215767/34348394-a981f892-ea4d-11e7-9156-d128d58386b9.png" alt="Safari" width="16px" height="16px" />  | <img src="https://user-images.githubusercontent.com/1215767/34348383-9e7ed492-ea4d-11e7-910c-03b39d52f496.png" alt="Firefox" width="16px" height="16px" />  |
| :---------: | :---------: | :---------: | :---------: | :---------: |
| Yes | No | Stop | Yes | Yes |

## Known Bugs

🐞

## Contact

_Contact: hello@mynameisdanaweiss.com_

## Contributors

<!-- prettier-ignore -->
| [<img src="https://avatars2.githubusercontent.com/u/21694548?s=460&v=4" width="100px;"/><br /><sub><b>Dana Weiss</b></sub>](https://github.com/callmedw)<br /> |
| :---: |

## License

MIT License

Copyright (c) 2019 Dana Weiss
