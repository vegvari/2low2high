2low2high
=========

[Shortest code to make a Too-low — Too-high game](http://codegolf.stackexchange.com/questions/22822/shortest-code-to-make-a-too-low-too-high-game)

#Game rules:

1. Computer will choose a random number out of integer range (-32768..32767).
2. Now you will think of a number and input it.
3. The computer will tell if your number is lower (TOO LOW) or higher (TOO HIGH) than the chosen number.
4. When you guess the number, the computer should display Congrats! You found the number!.

#Code rules:

1. Do not use the characters T, O, L, W, H, I and G (neither lowercase nor uppercase) in string or character literals.
2. Remove 300 bytes if your code can display the game rules before starting the game.
3. Remove 50 bytes if your code can count number of turns and display number of turns taken in the end of game.
4. Remove 25 bytes from your score if your code can tell user that the number you input is out of integer range.
5. Remove 25 bytes If your code takes the random number not from any built-in random function.
6. Remove 10 bytes If your code display "congrats" in color (pick any color except default white).

#Score:

1. CHECK
2. CHECK, -300
3. CHECK, -50

232 - 300 - 50 = -118 (without new line)

237 - 300 - 50 = -113 (with new line)