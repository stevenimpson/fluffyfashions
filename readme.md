Task Description
Your task is to design and implement the company website for a fictitious 
company so that it can conduct its trade over the Internet. 
The fictitious company for which your website will be designed must meet all requirements specified in Task 1 in Major Assignment 1. As you have already described a fictitious company as part of Major Assignment 1, you should use that description as the starting point. You may need to improve the description of the company if your original description does not meet all requirements. 
You are required to use the following technologies to implement the website: HTML5, CSS, JavaScript, PHP and MySQL. You may also use Ajax technology to implement searching, user authentication and database update. You must not use any web content management framework/system to create this website unless you have obtained a written approval from the Unit Coordinator. 

Discussion of Solution
My solution takes advantage of jQuery operations to populate the page with relevant information, without reloading the page in it’s entirety. Using the jQuery functions that I have, has allowed me to run PHP scripts and use their output to populate a specific section of the website rather than loading a new copy of the website with appropriate data hard coded. 
PHP interfaces with the MySQL database where product information is stored, meaning that the database can be updated and the webpage can still show appropriate data by querying the database.
I am quite happy with the way the website interacts with the database. I included a ForAnimal field in the PRODUCT table, which allows the site to quickly determine which animal a product is relevant to, and this benefits users by being able to quickly categorize available items for viewing.
One weakness of the design currently, is that the navigation buttons are not actually links, but just text in <a> tags with specific ids. The jQuery script checks for clicks on elements with specific id tags in order to call the relevant content to the main pane, but having the objects not technically be ‘links’ will cause problems for people using alternate means to access the website, such as those who use keyboard navigation due to disability.
The website currently does not show images of the products, which would make it much more appealing, nor does it use the Description attribute that each product has in the database. I could have implemented a specific product page, which would pull name, description and price details for the product in the database, as well as showing images of the product. The images were not done due to time constraints (making images for each product would be incredibly time consuming), however the individual product pages weren’t planned in initial stages and as such I didn’t have time at the end to implement them.

Self Diagnosis and Evaluation
My website currently has most of the Basic Features implemented.
1.	Basic information about the company has been included in the About section of the website
2.	The navigation system remains consistent regardless of where a user is on the website, remains in the same place whether they are looking at products of various help or about pages.
3.	There is an online Help for users, helping with navigation, contained in the Help page accessible from the navigation bar.
4.	The site-map is described in the Help page
5.	Video is used on the About page (showing previous fashions, video source below in attribution details)
6.	Page was tested in Chrome, Firefox and Safari. All functionality was present in Chrome and Firefox, however Safari did not show the video on the About page and I have not been able to diagnose this issue. The page and all associated files are hosted in public_html/assignment2 on my part of the ceto Apache web server.

Search function
1.	The search feature is fully implemented, using a search PHP script called by a jQuery function.
2.	The search facility is implemented in one HTML form. There is no possibility of the user entering invalid information, as if they search for a term which is not present in the database, they will simply be advised that there are 0 results.
3.	Users can search using search terms in the search form, or they can browse with the All Items and specific Animal links on the left of the page.
4.	The website shows the last search entry at the top of the page where their search results are found.
Advanced features
1.	The website currently does not implement any user login features. There has been space made for users in the database, along with the ability for users to be assigned roles, but this is not accessed in the current form of the website. For this reason, there are no usernames and passwords to give.


URL of website
http://ceto.murdoch.edu.au/~32199883/assignment2/index.php

Architecture Design
Database Tables
ORDER


ORDERDETAIL



PRODUCT
ProductID
Name
Description
ForAnimal
Price
Stock
Featured
1
Dog Fedora (Small)
A fedora for your small dog. A tip of the hat lets m'ladies know you're a gentledog.
Dog
14.99
100
0
2
Dog Fedora (Medium)
A fedora for your medium dog. A tip of the hat lets m'ladies know you're a gentledog.
Dog
24.99
100
1
3
Dog Fedora (Large)
A fedora for your large dog. A tip of the hat lets m'ladies know you're a gentledog.
Dog
34.99
100
0
4
Kitten Tiara (Small)
A tiara for your kitten, so they can feel like a true princess.
Cat
4.99
100
0
5
Kitten Tiara (Medium)
A tiara for your kitten, so they can feel like a true princess.
Cat
8.99
50
0
6
Kitten Tiara (Large)
A tiara for your kitten, so they can feel like a true princess.
Cat
9.99
50
0
7
Lizard Socks (Small)
Socks for when your lizard gets cold feet about your relationship.
Lizard
11.99
40
0
8
Lizard Socks (Medium)
Socks for when your lizard gets cold feet about your relationship.
Lizard
13.99
30
0
9
Lizard Socks (Large)
Socks for when your lizard gets cold feet about your relationship.
Lizard
13.99
10
0
10
Bird Cape (Red)
A red cape for your bird. If they’re stuck in a cage and can’t really fly about, at least they can look like a super bird.
Bird
5.99
20
0
11
Bird Cape (Blue)
A blue cape for your bird. If they’re stuck in a cage and can’t really fly about, at least they can look like a super bird.
Bird
5.99
20
1
12
Bird Jetpack
For those birds who have forgotten how to fly themselves, give them a jetpack and they can zoom about all day!
Bird
79.99
3
0
13
Hamster Hairgel (Strong Hold)
For the hamster who needs to style it’s locks. Stay in fashion with Hamster Hairgel.
Hamster
13.99
44
0
14
Ferret Socks (Small)
Socks for your ferret, with armor padding to stop their claws from slicing your flesh.
Ferret
19.99
20
0
15
Ferret Socks (Medium)
Socks for your ferret, with armor padding to stop their claws from slicing your flesh.
Ferret
19.99
20
0
16
Ferret Socks (Large)
Socks for your ferret, with armor padding to stop their claws from slicing your flesh.
Ferret
19.99
20
0
17
Snake Sock (Green)
Keep your snake warm on the cold nights.
Snake
8.99
5
1
18
Snake Sock (Satin)
Keep your snake warm on the cold nights with this innovative sock, now in luxury satin!
Snake
12.99
1
0
19
Snake Sock (Glitter)
Keep your snake warm on the cold nights with this innovative sock, and capture the spotlight!
Snake
12.99
2
0
20
Axolotl Diving Suit (Vintage)
A vintage diving suit for your axolotl.
Axolotl
159.99
2
0
21
Axolotl Diving Suit (Modern)
A modern diving suit for your Axolotl.
Axolotl
179.99
1
0
22
Dog Designer Jacket (Small)
A designer jacket for your dog.
Dog
59.99
1
0
23
Dog Designer Jacket (Medium)
A designer jacket for your dog.
Dog
69.99
1
0
24
Dog Designer Jacket (Large)
A designer jacket for your dog.
Dog
79.99
1
0
25
Cat Designer Jacket (Small)
A designer jacket for your cat.
Cat
49.99
1
0
26
Cat Designer Jacket (Medium) 
A designer jacket for your cat.
Cat
59.99
2
0
27
Cat Designer Jacket (Medium)
A designer jacket for your cat.
Cat
69.99
2
0
28
Cat Designer Jacket (Large)
A designer jacket for your cat.
Cat
69.99
2
0
29
Rabbit Shoes
Shoes for your rabbit.
Rabbit
12.99
4
0
30
Rabbit Ear Beanies
Beanies to keep your rabbit’s ears warm.
Rabbit
15.99
4
1
31
Small Animal Scarf
Scarf for any small animal, style and warmth!

5.99
1
0



USER


The ORDER table would keep track of orders, using a foreign key to the USER table to track which USER made this order, and a foreign key which references the ORDERDETAIL table which has further information about this order.

ORDERDETAIL contains information about orders, the products contained in them and the quantity of each product in the order. There might be multiple rows in the ORDERDETAIL table for a single order, but they can all be queried by selecting all of the ORDERDETAIL rows which have an ORDERID matching the one in question. This could also be used to calculate the total cost of the order, by looking at each row relevant to the order, how many of each product and the price of each product to inform the calculation.

The USER table contains the users personal details, but importantly their PrivilegeLevel. This VARCHAR field will determine whether they have privileges of a Staff or Customer (Support staff or Registered in the assignment requirements). This could be used along with PHP scripts to populate pages with different elements depending on the PrivilegeLevel of the USER currently active.

Website specifics
petshopjQuery.js contains all the jQuery functions. These functions populate the “main” class div with the appropriate html or php pages, as described in the function.
Search and populateanimal php scripts operate similarly, querying the database with SELECT WHERE statements appropriately. The search.php grabs the text from the search box form input, and uses this to inform the database query, while the animal script uses a GET array in order to get it’s search query. The GET array is populated by the URL used in the jQuery function, populating it with the name of the animal clicked on.

Currently the website imports it’s jQuery implementation from Google’s CDN, but this could be replaced with a local version without much trouble. The Google version is used to create a better experience for the user. Google’s CDN will serve the jQuery much faster than the Murdoch server is likely to, and it is possible that the user may already have Google’s jQuery implementation cached if they have visited any other website which also uses it, which may mean the user can avoid downloading the jQuery script entirely.

Index.php is the main page, by default it shows the Featured items from the database using the featured.php script.
The main div is populated by clicking the text and icons around the site.
Clicking the animals on the side populates main with appropriate search results.
About.html is a page about the fictional company, containing information, staff images and video of products.
Contact.html contains contact information for customers.
Shipping.html contains shipping information.
No pages apart from index.php are accessed directly, but they are called by jQuery functions to populate the main div of the index.
