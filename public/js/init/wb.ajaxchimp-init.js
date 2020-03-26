/**
 * Ajaxchimp JS Init
 *
 * @author We Both
 * @version 1.0
 * @requires
 *
 */
$(function () {
  'use strict';

  var $mailchimpURL = '#'; // Replace the URL with your mailchimp URL (put your URL inside '').

  // callback function when the form submitted, show the notification box
	function mailchimpCallback(resp) {
      if (resp.result === 'success') {
          $('#subscribe-success-notification').addClass('show');
      }
      else if (resp.result === 'error') {
           $('#subscribe-error-notification').addClass('show');
      }
  }

  $('.subscribe-form').ajaxChimp({
		callback: mailchimpCallback,
	  url: $mailchimpURL
	});
});
