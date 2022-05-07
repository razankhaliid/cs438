# The Tortoise and the cocky Rabbit

> ###  This project will take you through childhood recollections of a rabbit and turtle race from 1995 to 2005. The fable depicts a race between the arrogant hare and the tortoise, with the turtle ultimately defeating the hare due to its endurance and refusal to give up.

| Student names |
| ------------- | 
| Ethar Hassan Suwaimil |
| Latefah Slman Al-abdallh |
| Razan Khalid Bin Zoba |
| Wejdan mnees Mohammed Alshahrani|

**Supervisor :** Amal Algefes

## Flow Chart :

![flow_chart](reportIMG\flow_chart.jpg)

## Look & Feel :

> ### The game's country-themed background was chosen to reflect What we heard and imagined in our memory from the story of the tortoise with the rabbit Also, a comfortable background for the eye and colors suitable for the type of game were chosen.

## Dynamic Components :
![Dynamicjs](reportIMG\Dynamicjs.jpg)

> ### On the web page Tortoise.js, a (jumpTor) function was created for jumping turtle, a (moveTor) function for the level and length of the jump, a (hitsTor_Rab) function if the turtle collides with the rabbit, and a (showTor) function to display the image of the turtle.The web page Rabbit.js, a (moveRab) function for the level and movement of the rabbit, and a function for displaying the image of the rabbit called (showRab) were created. on the page 3 sketch.js, a (preload) function was created to display the graphics in the game, a picture of the background of the farm, the rabbit, and the tortoise. Also, a (setup) function to display the background and adjust its dimensions, well create an object from the Tortoise class. Additionally, there are user-interactive features including clicking distance is a jump above the rabbit, though it calculates the score of the player, and this function is called (keyPressed). As well as a (draw) function that shows the player's score and the leap action, if the player makes a mistake and the tortoise strikes the rabbit, the game stops calculating the player's score and shows him a "game over" and his score. The game then displays the username, the previous score, the new score, and the order of the top 10 players from highest to lowest score. Finally, we used jQuery to update the player result.

## Business Logic :
> ### he database is set up as a list to save the players' information, including usernames, email addresses, and passwords. Furthermore, the player's score is preserved as a zero, allowing any new player to register with this information and be added to the database. And the player's score is revealed after calculating his score and summoning him.

![codeList](reportIMG\codeList.jpg)

> ### In terms of a database call, after the player fills out the form on the (login.html) page, the data is sent to (login.php) via <form action="login.php" method=" post">, and the data is retrieved from the database and verified. The player is transported to the beginning of the game displayed on the web page (Game.html) based on the data supplied, and if the data sent is correct. For further information, please see the following image: 

![scorephp](reportIMG\scorephp.jpg)

> ### And through the code <form action="sscore.php" method="post"> in the web page (Game.html) the save button is linked with and through the page (sscore.php) and updates the player's score through this code: $ sql = "UPDATE user SET score = '$scorre' WHERE full_name= '$username'" ,the player information is called with the code:$sql = "SELECT full_name, score FROM user ORDER BY score DESC"; $result = mysqli_query($conn, $sql); $rank = 1; $count = mysqli_num_rows($result);

