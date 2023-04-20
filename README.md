# NVOnline - A PHP Project

This is a simple website project that shows good books to read, mostly web novels or of a similar type.

## Installation or Requirements 
- A server running PHP and MySql(XAMPP/LAMP or MAMP {I use XAMPP} ).
- Download the file and put it in the folder :
>xampp/htdocs
- Please check the ==./model/db_conn.ph== file for your database config.



## Usage
- When you run the server go to your browser and go to:

> localhost/NVOnline
- Due to this being MVC you have to navigate to ==/view== to work.

- The website should be running. Then you can sign up as you follow the buttons such as login/sign up.

- Has a search, details and a reader page added

- Will extend more functionalities later.

## Functionalities 

- The ```  ./control``` folder contains all the action files required for login, registration and form validation using REGEX. The form_validation works by testing if REGEX conditions are met and return an array containing the original data/text, true/false if the test was passed and finally, a message which contains the reason for failure that can be displayed back to the page as errors or success messages.
- The ``` ./model ``` contains all the files that work with the database. This also contains a ``` fetchBooks.php```  that behaves like an API with functions that can be used to call upon the database and perform specific actions, such as getting all books or a particular chapter of a book. 
- The ```./view ``` contains all the client-side pages which display results to the user. An important thing to note is the three files that begin with the book are the files which display the books and interacts with the ``` fetchBooks.php ``` file. 
 > ```bookList.php``` -> displays search result
 >```bookDetails.php``` -> displays book details and chapter list click on title to go to the reader.
>```bookReader.php``` -> displays the chapter of the book and can navigate using the top buttons.


## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
