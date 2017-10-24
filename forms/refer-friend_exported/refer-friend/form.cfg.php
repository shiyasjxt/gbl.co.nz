<?php exit(0); ?> { 
"settings":
{
	"data_settings" : 
	{
		"save_database" : 
		{
			"database" : "",
			"is_present" : false,
			"password" : "",
			"port" : 3306,
			"server" : "",
			"tablename" : "",
			"username" : ""
		},
		"save_file" : 
		{
			"filename" : "form-results.csv",
			"is_present" : false
		},
		"save_sqlite" : 
		{
			"database" : "refer-friend.dat",
			"is_present" : false,
			"tablename" : "refer-friend"
		}
	},
	"email_settings" : 
	{
		"auto_response_message" : 
		{
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You are referred to GBL Personnel</title></head>\n<body>\n<p><strong>[first_name] [last_name] has referred you to GBL Personnel.<br/>\nA GBL consultant will be in touch with you soon to discuss job opportunities.</p>\n<p>In the meantime, please take a look at our <a href=\"https://www.gbl.co.nz/advancedsearch.aspx?search=1\" target=\"_blank\">current roles.</a></p>\n<p>Kind regards</p>\n<p>GBL Personnel Limited<br />\n<strong>TEL</strong> <a href=\"tel:044720140\">(04) 472 0140</a></p>\n<p><a href=\"https://www.gbl.co.nz\" target=\"_blank\">https://www.gbl.co.nz</a></p>\n<p>Level 5, 107 Customhouse Quay, Wellington 6011<br />\nPO Box 10-435, Wellington 6143, New Zealand</p>\n<p>Great People, Great Jobs</p>\n</body>\n</html>",
				"is_present" : true,
				"subject" : "[first_name] [last_name] has referred you to GBL Personnel"
			},
			"from" : "mailbox@gbl.co.nz",
			"is_present" : true,
			"to" : "[friends_email]"
		},
		"notification_message" : 
		{
			"bcc" : "",
			"cc" : "",
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>Refer a Friend Form Filled</title></head>\n<body>\n<p>[first_name] [last_name] referred a friend.</p>\n        <table cellspacing=\"0\" cellpadding=\"0\" style=\"width:100%;\">\n        \t<tr style=\"height:35px;\">\n\t        \t<td style=\"width:35%;\">\n\t        \t\tFirst Name *:\n\t        \t</td>\n\t        \t<td>\n\t        \t\t[first_name]\n\t        \t</td>\n        \t</tr>\n        \t<tr style=\"height:35px;\">\n\t        \t<td>\n\t        \t\tLast Name *:\n\t        \t</td>\n\t        \t<td>\n\t\t\t\t\t[last_name]\n\t        \t</td>\n        \t</tr>\n            <tr style=\"height:35px;\">\n\t        \t<td>\n\t        \t\tEmail *:\n\t        \t</td>\n\t        \t<td>\n\t\t\t\t\t[email]\n\t        \t</td>\n        \t</tr>\n        \t<tr style=\"height:35px;\">\n\t        \t<td>\n\t        \t\tContact Number *:\n\t        \t</td>\n\t        \t<td>\n\t        \t\t[contact_number]\n\t        \t</td>\n        \t</tr>\n             <tr style=\"height:35px;\">\n\t        \t<td style=\"font-weight:700;\">\n\t        \t\tReferred Person\n\t        \t</td>\n\t        \t<td>\n\t        \t\t\n\t        \t</td>\n        \t<tr style=\"height:35px;\">\n \t        \t<td>\n\t        \t\tFirst Name *:\n\t        \t</td>\n\t        \t<td>\n\t        \t\t[friend_first_name]\n\t        \t</td>\n        \t</tr>\n        \t<tr style=\"height:35px;\">\n\t        \t<td>\n\t        \t\tLast Name *:\n\t        \t</td>\n\t        \t<td>\n\t\t\t\t\t[friend_last_name]\n\t        \t</td>\n        \t</tr>\n            <tr style=\"height:35px;\">\n\t        \t<td>\n\t        \t\tEmail *:\n\t        \t</td>\n\t        \t<td>\n\t\t\t\t\t[friends_email]\n\t        \t</td>\n        \t</tr>\n        \t<tr style=\"height:35px;\">\n\t        \t<td>\n\t        \t\tContact Number *:\n\t        \t</td>\n\t        \t<td>\n\t        \t\t[friends_contact_number]\n\t        \t</td>\n        \t</tr>\n        \t<tr style=\"height:35px;\">\n\t        \t<td>\n\t        \t\tRelevant Experience:\n\t        \t</td>\n\t        \t<td>\n\t        \t\t[relevant_industry]\n\t        \t</td>\n        \t</tr>\n        \t<tr style=\"height:35px;\">\n\t        \t<td>\n\t        \t\tSubmitted On:\n\t        \t</td>\n\t        \t<td>\n\t        \t\t[_submitted_]\n\t        \t</td>\n        \t</tr>\n        </table>\n</body>\n</html>",
				"is_present" : true,
				"subject" : "Refer a Friend Form Filled | [first_name] [last_name]"
			},
			"from" : "forms@jxt.com.au",
			"is_present" : true,
			"replyto" : "",
			"to" : "mailbox@gbl.co.nz"
		}
	},
	"general_settings" : 
	{
		"colorboxautoenabled" : false,
		"colorboxautotime" : 3,
		"colorboxenabled" : false,
		"colorboxname" : "Default",
		"formname" : "",
		"is_appstore" : "0",
		"timezone" : "UTC"
	},
	"mailchimp" : 
	{
		"apiKey" : "",
		"lists" : []
	},
	"payment_settings" : 
	{
		"confirmpayment" : "<center>\n<style type=\"text/css\">\n#docContainer table {width:80%; margin-top: 5px; margin-bottom: 5px;}\n#docContainer td {text-align:right; min-width:25%; font-size: 12px !important; line-height: 20px;margin: 0px;border-bottom: 1px solid #e9e9e9; padding-right:5px;}\n#docContainer td:first-child {text-align:left; font-size: 13px !important; font-weight:bold; vertical-align:text-top; min-width:50%;}\n#docContainer th {font-size: 13px !important; font-weight:bold; vertical-align:text-top; text-align:right; padding-right:5px;}\n#docContainer th:first-child {text-align:left;}\n#docContainer tr:first-child {border-bottom-width:2px; border-bottom-style:solid;}\n#docContainer center {margin-bottom:15px;}\n#docContainer form input { margin:5px; }\n#docContainer #fb_confirm_inline { margin:5px; text-align:center;}\n#docContainer #fb_confirm_inline>center h2 { }\n#docContainer #fb_confirm_inline>center p { margin:5px; }\n#docContainer #fb_confirm_inline>center a { }\n#docContainer #fb_confirm_inline input { border:none; color:transparent; font-size:0px; background-color: transparent; background-repat: no-repeat; }\n#docContainer #fb_paypalwps { background: url('https://coffeecupimages.s3.amazonaws.com/paypal.gif');background-repeat:no-repeat; width:145px; height:42px; }\n#docContainer #fb_googlepay { background: url('https://coffeecupimages.s3.amazonaws.com/googlecheckout.gif'); background-repeat:no-repeat; width:168px; height:44px; }\n#docContainer #fb_authnet { background: url('https://coffeecupimages.s3.amazonaws.com/authnet.gif'); background-repeat:no-repeat; width:135px; height:38px; }\n#docContainer #fb_2checkout { background: url('https://coffeecupimages.s3.amazonaws.com/2co.png'); background-repeat:no-repeat; width:210px; height:44px; }\n#docContainer #fb_invoice { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email.png'); background-repeat:no-repeat; width:102px; height:31px; }\n#docContainer #fb_invoice:hover { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email_hov.png'); }\n#docContainer #fb_goback { color: inherit; }\n</style>\n[_cart_summary_]\n<h2>Almost done! </h2>\n<p>Your order will not be processed until you click the payment button below.</p>\n<a id=\"fb_goback\"href=\"?action=back\">Back to form</a></center>",
		"currencysymbol" : "$",
		"decimals" : 2,
		"fixedprice" : "000",
		"invoicelabel" : "",
		"is_present" : false,
		"paymenttype" : "redirect",
		"shopcurrency" : "USD",
		"usecustomsymbol" : false
	},
	"redirect_settings" : 
	{
		"confirmpage" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head>\n<title>Success!</title>\n<meta charset=\"utf-8\">\n<style type=\"text/css\">\nbody {background: #f9f9f9;padding-left: 11%;padding-top: 7%; padding-right: 2%;max-width:700px;font-family: Helvetica, Arial;}\ntable{width:80%;}\np{font-size: 16px;font-weight: bold;color: #666;}\nh1{font-size: 60px !important;color: #ccc !important;margin:0px;}\nh2{font-size: 28px !important;color: #666 !important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\nh3{font-size: 16px; color: #a1a1a1; border-top: 1px dotted #00A2FF; padding-top:1.7%; font-weight: bold;}\nh3 span{color: #ccc;}\ntd {font-size: 12px !important; line-height: 30px;  color: #666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:50%; padding-right:5px;}\na:link {color:#666; text-decoration:none;} a:visited {color:#666; text-decoration:none;} a:hover {color:#00A2FF;}\n</style>\n</head>\n<body>\n<h1>Thanks! </h1>\n<h2>The form is on its way.</h2>\n<p>Here&rsquo;s what was sent:</p>\n<div>[_form_results_]</div>\n<!-- link back to your Home Page -->\n<h3>Let&rsquo;s go <span> <a target=\"_blank\" href=\"http://www.coffeecup.com\">Back Home</a></span></h3>\n</body>\n</html>\n",
		"gotopage" : "http://www.gbl.co.nz/thank-you",
		"inline" : "<h2>Thank you!</h2>\n<p>Your form was successfully submitted.</p>",
		"type" : "gotopage"
	},
	"uid" : "3732dd2383e09fec3fe795e1d922bf69",
	"validation_report" : "in_line"
},
"rules":{"first_name":{"label":"First Name *","fieldtype":"text","required":true},"last_name":{"label":"Last Name *","fieldtype":"text","required":true},"email":{"email":true,"label":"Email *","fieldtype":"email","required":true},"contact_number":{"label":"Contact Number *","fieldtype":"text","required":true},"friend_first_name":{"label":"First Name *","fieldtype":"text","required":true},"friend_last_name":{"label":"Last Name *","fieldtype":"text","required":true},"friends_email":{"email":true,"label":"Email *","fieldtype":"email","required":true},"friends_contact_number":{"label":"Contact Number * ","fieldtype":"text","required":true},"relevant_industry":{"label":"Relevant Experience","fieldtype":"text"}},
"payment_rules":{},
"conditional_rules":{},
"application_version":"Web Form Builder (Windows), build 2.3.5217"
}