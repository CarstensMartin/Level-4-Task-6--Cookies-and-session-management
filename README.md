# Level 4 Task 6 -Cookies and session management

## Task 1

Create three PHP scripts: home.html, user.php and logout.php.

● home.html should have a sign-up HTML form that takes a user’s full name, preferred username, and date of birth.

● Upon POST this data, the user.php script should initialise a session, store the posted data, and display it back to the user in a neat HTML list.

○ It should also display a “logout” button that directs to logout.php.

● logout.php should end the session and show a link back to the home page.

● After logging out, an attempt to visit user.php should result in an error message.

## Task 2

Implement the same logic as in Compulsory Task 1, but by directly using cookies instead of PHP built-in session management.