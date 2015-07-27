# ST. MARK'S COPTIC ORTHODOX CHURCH ROCHESTER #

* Inherited from M. Dawoud
* Notes to the next developer:
	* The original files I received are under /original
	* My edits are under /modified
	* I have left all original text (including incorrect text) as it was, but modified code structure:
		* All pages titles and headings are in config.ini
		* Lots of header and footer markup was repeated, I've moved much into /includes for ease of maintenance
	* "Upcoming events" sidebar was originally apparently database-driven, but I did not receive the database, nor do I have time to manage one
		* I would recommend using the Google Calendar API instead, since the calendar is already populated by Google
		* I do not own the Google calendars
	* Other databased content will eventually be daily readings and verses
	* The site should really move to a CMS like Wordpress. I did not originally contract for such a scope, only content edits which I have not yet made.