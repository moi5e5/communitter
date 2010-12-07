/*******************************************************************************

jQuery Radio Button Style v1.0

http://www.weblee.co.uk

Licensed under :
    Creative Commons Attribution 3.0 http://creativecommons.org/licenses/by/3.0/

Tested on the following browsers/platforms:
-------------------------------------------
XP/SP2:
    IE 8.0      - No Bugs
	IE 7.0      - No Bugs
    IE 6.0      - no Bugs
    FF 2.0      - No bugs
	FF 3.0      - No bugs
    Safari 3.0  - No bugs
    Opera 9.2   - No bugs
	Chrome 1.0	- No Bugs

*******************************************************************************/

$(document).ready(function () {
	
    $("#list li > a").live('click', function (event) {
        // First disable the normal link click
        event.preventDefault();

        // Remove all list and links active class.
        $('#list .active').removeClass("active");

        // Grab the link clicks ID
        var id = this.id;

        // The id will now be something like "link1"
        // Now we need to replace link with option (this is the ID's of the checkbox)
        var newselect = id.replace('link', 'option');

        // Make newselect the option selected.
        $('#'+newselect).attr('checked', true);

        // Now add active state to the link and list item
        $(this).addClass("active").parent().addClass("active");

        return false;
    });
	
	// Toggle Form so you can see it working
	$("a.toggleform").click(function (event){
		event.preventDefault();
		$('#radioform').toggle("slow");

    });
	
});