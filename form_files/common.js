function popup(link, w, h, o, n)
{
	if(link.blur && typeof (link.blur) == 'function') {
		link.blur();
	}

	if(!link || !link.href) {
		return false;
	}

	var x = (screen.width - w) / 2;
	var y = (screen.height - h) / 2;

	if(x < 0) {
		x = 0;
		w = screen.width;
	}

	if(y < 0) {
		y = 0;
		h = screen.height;
	}

	if(!o) {
		var o = 'status=0,toolbar=0,location=0,menubar=0,resizable=1,scrollbars=1';
	}

	if(!n) {
		var n = "popup";
	}

	var options = o + 
		',height=' + h + 
		',width=' + w + 
		',screenX=' + x + 
		',screenY=' + y + 
		',top=' + x + 
		',left=' + y;

	var win = window.open(link.href, n, options);
	if(!win) {
		return true;
	}

	win.moveTo(x, y);
	win.focus();

	return false;
}

function getKeyCode(e)
{
	if (window.event) {
		return window.event.keyCode;
	}

	return e ? e.which : null;
}

function keyRestrict(e, validchars)
{
	key = getKeyCode(e);

	if(key == null || key == 0 || key == 8 || key == 9 || key == 13 || key == 27 ) {
		return true;
	}

	keychar = String.fromCharCode(key).toLowerCase();
	validchars = validchars.toLowerCase();

	if(validchars.indexOf(keychar) != -1) {
		return true;
	}

	return false;
}

function limit_zip(obj)
{
	obj.value = obj.value.substring(0,5);
}

function jump(who, where, when, e)
{
	key = getKeyCode(e);
	if(key == null || key == 0 || key == 8 || key == 9 || key == 13 || key == 27 ) {
		return;
	}

	if(who.value.length == when) {
		who.form[where].focus();
	}
}

function send_form(form, loadingId, errorId)
{
	if(loadingId) {
		$('#' + loadingId).toggle().siblings().toggle();
	}

	$('form :input').css('background', '').parent().css('background', '');

	$.post(form.action, $(form).serializeArray(), function(response) {
		if(loadingId) {
			$('#' + loadingId).toggle().siblings().toggle();
		}

		if(response.status == 'success') {
			if(errorId) {
				$('#' + errorId).css('display' , 'none');
			}

			if(response.redirectURL) {
				top.location.href = response.redirectURL;
			}

			return;
		}

		// failure: validate_form
		if(response.errorFields) {
			if(errorId) {
				$('#' + errorId).css('display' , 'block');
			}

			var error_color = '#EBA2A2';

			for(i in response.errorFields) {
				field = response.errorFields[i];
				qfield = $('form :input[name="' + field['name'] + '"]');

				fieldtype = qfield.attr('type');
				if(fieldtype == 'radio' || fieldtype == 'checkbox') {
					qfield.parent().css('background', error_color);
				} else {
					qfield.css('background', error_color);
				}
			}
		}
	}, 'json');
}
