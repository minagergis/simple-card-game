# Uno Cards Game

Simple native php card game based on OOP and MVC code architecture that	lets four players play against each	other
in a simplified version	of the bully card game. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

you have to had apache server on your local machine to intiate localhost on your machine,
 for ubuntu I recommend using Xampp server.
 
```
PHP Version > 5.6.1
No database needed for running the code
```

### Installing

01. clone the repo on your local machine
02. move the repo folder to your apache folder 
htdocs (if you're using xampp) www folder (if you using wampp or apache2)

### Game rules

- The deck consists out of 52 cards	(no	jokers).	
- All four players get 7 random cards.	
- Everything that is left over should be on	the	leftover deck.
- The game starts with the first card from the leftover	deck.
- Each turn	another	player places a card on	the	leftover deck. 
- This card	must be	of	the	same value or from the same	color.
- If the player	cannot	place a	card, he should	skip turns.
- The first	player that	doesn’t	have any cards left (Or less cards),	wins	the	game.




## Output
The output should be like 

```
Starting game with Freek, Bas, Henk, Pieter
Freek has been dealt: ♦9 ♣8 ♥3 ♦8 ♠7 ♥10 ♥Queen
Bas has been dealt: ♠Ace ♥9 ♥Jack ♠4 ♣5 ♠5 ♣6
Henk has been dealt: ♠3 ♠Jack ♦King ♦4 ♥King ♣4 ♥7
Pieter has been dealt: ♠2 ♦7 ♥5 ♣Jack ♠6 ♣3 ♥2
Top card is: ♣9
Freek plays ♠7
Bas plays ♣6
Henk plays ♣4
Pieter plays ♣3
Freek plays ♥3
Bas plays ♥Jack
Henk plays ♥7
Pieter plays ♥2
Freek plays ♥Queen
Bas plays ♥9
Henk plays ♥King
Pieter plays ♥5
Freek plays ♥10
Bas does not have a suitable card, taking from deck ♣2
Henk plays ♦4
Pieter plays ♦7
Freek plays ♦8
Bas does not have a suitable card, taking from deck ♠King
Henk plays ♦King
Pieter does not have a suitable card, taking from deck ♣7
Freek plays ♦9
Bas does not have a suitable card, taking from deck ♦6
Henk does not have a suitable card, taking from deck ♣Queen
Pieter does not have a suitable card, taking from deck ♥Ace
Freek does not have a suitable card, taking from deck ♠8
Bas plays ♦6
Henk does not have a suitable card, taking from deck ♦Jack
Pieter plays ♥Ace
Freek does not have a suitable card, taking from deck ♦2
Bas plays ♠Ace
Henk plays ♣Queen
Pieter plays ♣7
Freek plays ♠8
Bas plays ♠King
Henk plays ♠Jack
Pieter plays ♠6
Freek plays ♣8
Bas plays ♣2
Henk plays ♠3
Pieter plays ♣Jack
Freek does not have a suitable card, taking from deck ♣Ace
Bas plays ♠5
Henk does not have a suitable card, taking from deck ♦10
Pieter plays ♠2
Pieter has won.
```


## Deployment and preview

The App deployed on GoDaddy (Shared hosting)

```
Preview Link : http://cards.zero-one-labs.com/
```

## Built With

* [Native PHP](http://php.net/) - It was required for this task
* [PHPStorm](https://www.jetbrains.com/phpstorm/) - :heart: Code editor

## Authors

* **Mina A. Gergis** 

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose answers on stackoverflow were used
* Support the community <3
* Never dream for success, Work for it.