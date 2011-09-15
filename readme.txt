Feedbackbox 1.0
15.09.2011

Developed by Antonio Cosentino at Kultmedia.com
Documentation: http://www.kultmedia.com/lab/feedbackbox



DESCRIPTION
===============================
Feedbackbox is a PHP script that allows you to display eBay feedback comments in your website. The script works via RSS and it's based on "Ebay Feedback Notification Pipe", a cool service developed by Arend v. Reinersdorff which is able to convert any eBay feedback page into a Yahoo! Pipes application / RSS feed.
For more info: http://arendvr.com/2008/05/05/ebay-feedback-notification-pipe/


REQUIREMENTS
===============================
PHP 5.1.2+



USAGE
===============================
Simply copy	feedbackbox.php in your website folder and include it in your pages. 
Then choose your option:
- Ebay username
- Number of comments to display

Example:

/////////

include "feedbackbox.php";
feedbackbox("artopweb", "10");

/////////

"artopweb" is the eBay username and "10" is the number of comments that we would like to display.


CUSTOMIZATION
===============================

You can customize the appearance of the feedback comments via CSS. Every element has his own class:

ul.feedbackboxlist => the list of comments

ul.feedbackboxlist li => the single comment

ul.feedbackboxlist li a.username => the username link

ul.feedbackboxlist li span.text=> the comment text



ADDITIONAL NOTES
===============================

The script requires a valid eBay username. This must not be confused with the eBay shop name.

You can view a fully functional example in the example.php file.





