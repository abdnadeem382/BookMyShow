<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli("localhost", "root", "", "BookMyShow");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$t1 = array("10:00am-11:30am", "2:30pm-4:00pm", "6:00pm-8:30pm");
$t2 = array("12:00pm-2:30pm", "5:30pm-7:00pm", "9:00pm-11:30pm");
$t3 = array("8:00am-10:30am", "1:30pm-3:00pm", "7:00pm-9:30pm");
$seats = array("A1"=>'TRUE', "A2"=>'TRUE', "A3"=>'TRUE', "A4"=>'TRUE', "A5"=>'TRUE', "A6"=>'TRUE', "A7"=>'TRUE', "A8"=>'TRUE', "A9"=>'TRUE', "A10"=>'TRUE', "B1"=>'TRUE', "B2"=>'TRUE', "B3"=>'TRUE', "B4"=>'TRUE', "B5"=>'TRUE', "B6"=>'TRUE', "B7"=>'TRUE', "B8"=>'TRUE', "B9"=>'TRUE', "B10"=>'TRUE', "C1"=>'TRUE', "C2"=>'TRUE', "C3"=>'TRUE', "C4"=>'TRUE', "C5"=>'TRUE', "C6"=>'TRUE', "C7"=>'TRUE', "C8"=>'TRUE', "C9"=>'TRUE', "C10"=>'TRUE', "D1"=>'TRUE', "D2"=>'TRUE', "D3"=>'TRUE', "D4"=>'TRUE', "D5"=>'TRUE', "D6"=>'TRUE', "D7"=>'TRUE', "D8"=>'TRUE', "D9"=>'TRUE', "D10"=>'TRUE', "E1"=>'TRUE', "E2"=>'TRUE', "E3"=>'TRUE', "E4"=>'TRUE', "E5"=>'TRUE', "E6"=>'TRUE', "E7"=>'TRUE', "E8"=>'TRUE', "E9"=>'TRUE', "E10"=>'TRUE', "F1"=>'TRUE', "F2"=>'TRUE', "F3"=>'TRUE', "F4"=>'TRUE', "F5"=>'TRUE', "F6"=>'TRUE', "F7"=>'TRUE', "F8"=>'TRUE', "F9"=>'TRUE', "F10"=>'TRUE');

$time_str1 = serialize($t1);
$time_str2 = serialize($t2);
$time_str3 = serialize($t3);
$seats_str = serialize($seats);

$sql = "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (1, 'Avengers Infinity War', 'https://www.movieposters4u.com/images/a/AvengersInfinityWarINTLFinal.jpg', '$time_str1', 'Robert Downey Jr. , Chris Hemsworth, Mark Ruffalo, Chris Evans, Scarlett Johansson, Tom Holland, Karen Gillan', 'Iron Man, Thor, the Hulk and the rest of the Avengers unite to battle their most powerful enemy yet -- the evil Thanos. On a mission to collect all six Infinity Stones, Thanos plans to use the artifacts to inflict his twisted will on reality. The fate of the planet and existence itself has never been more uncertain as everything the Avengers have fought for has led up to this moment', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (2, 'Joker', 'https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg', '$time_str2', 'Joaquin Phoenix, Robert De Niro, Zazie Beetz', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (3, 'Star Wars', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS85hFcPO5LMZqsmvkWSCV2pjOd0gqajNUSAg&usqp=CAU', '$time_str3', 'Daisy Ridley, John Boyega, Oscar Isaac', 'The surviving members of the resistance face the First Order once again, and the legendary conflict between the Jedi and the Sith reaches its peak bringing the Skywalker saga to its end.', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (4, 'Frozen II', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTiBPMJtJb6DJ0cJRRHanAilDBtvGAiTszAbA&usqp=CAU', '$time_str1', 'Kristen Bell, Idina Menzel, Josh Gad', 'Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsas powers in order to save their kingdom.', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (5, 'Star Girl', 'https://cdn.cinematerial.com/p/297x/rtrubvbw/stargirl-movie-poster-md.jpg?v=1579114910', '$time_str2', 'Grace VanderWaal, Graham Verchere, Giancarlo Esposito', 'A boy becomes intrigued by a mysterious and quirky student named Stargirl and spends his time trying to know more about her.', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (6, 'Annabelle Comes Home', 'https://m.media-amazon.com/images/M/MV5BYmI4NDNiMmQtZTFkYi00ZDVmLThlYTAtMWJlMjU1M2I2ZmViXkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_.jpg', '$time_str3', 'Vera Farmiga, Patrick Wilson, Mckenna Grace', 'While babysitting the daughter of Ed and Lorraine Warren, a teenager and her friend unknowingly awaken an evil spirit trapped in a doll.', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (7, 'Descendants 3', 'https://i.pinimg.com/736x/31/17/b7/3117b7d796c17855772f3c7dbb9782c8.jpg', '$time_str1', 'Dove Cameron, Cameron Boyce, Sofia Carson', 'The teenagers of Disneys most infamous villains return to the Isle of the Lost to recruit a new batch of villainous offspring to join them at Auradon Prep.', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (8, 'Us', 'https://www.joblo.com/assets/images/joblo/news/2018/12/Usdomesticposter.jpg', '$time_str2', 'Lupita Nyongo, Winston Duke, Elisabeth Moss', 'A familys serene beach vacation turns to chaos when their doppelgängers appear and begin to terrorize them.', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (9, 'The Conjuring 3', 'https://popcornusa.s3.amazonaws.com/movies/650/950-20755-TheConjujpg', '$time_str3', 'Vera Farmiga, Patrick Wilson, Julian Hilliard', 'No plot is currently known', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (10, 'The Boss Baby 2', 'https://cdn.cinematerial.com/p/297x/e3cbj7iy/the-boss-baby-2-movie-poster-md.jpg?v=1526714315', '$time_str1', 'Alec Baldwin, James McGrath', 'No plot is currently known', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (11, 'Escape Room 2', 'https://i.pinimg.com/564x/7c/21/c2/7c21c2a6685a5a751f682da636d54b63.jpg', '$time_str2', 'Unknown', 'Taylor Russell, Logan Miller, Isabelle Fuhrman', '$seats_str');";
$sql .= "INSERT INTO Movies (id, movie_name, poster, timings, cast, synopsis, seats)
VALUES (12, 'Jungle Cruise', 'https://i.pinimg.com/originals/e0/cc/67/e0cc670c8b292b6eb77d406388d50835.png', '$time_str3', 'Dwayne Johnson, Emily Blunt, Jesse Plemons', 'Based on Disneylands theme park ride where a small riverboat takes a group of travelers through a jungle filled with dangerous animals and reptiles but with a supernatural element', '$seats_str');";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>