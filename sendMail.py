#!/usr/local/bin/python3
 
import cgitb
import cgi
import os
from django.conf import settings
from django.core.mail import send_mail 
cgitb.enable()
import smtplib
print("Content-type: text/plain;charset=utf-8")
print()
# os.environ['DJANGO_SETTINGS_MODULE'] = 'DJANGOTEST.setting
subject = "SuperMail"
form = cgi.FieldStorage()
recipient =  form.getvalue("email")
def send_email():
	gmail_user = "jodywisternofff@gmail.com"
	gmail_pwd = "Immortal1988"
	FROM = 'jodywisternofff@gmail.com'
	TO = [recipient] #must be a list
	SUBJECT = "Password recovering"
	TEXT = "Testing sending mail using gmail servers"

	#Prepare actual message
	message = """\From: %s\nTo: %s\nSubject: %s\n\n%s
	""" % (FROM, ", ".join(TO), SUBJECT, TEXT)
	try:
		# server = smtplib.SMTP(SERVER) 
		server = smtplib.SMTP("smtp.gmail.com", 587) #or port 465 doesn't seem to work!
		server.ehlo()
		server.starttls()
		server.login(gmail_user, gmail_pwd)
		server.sendmail(FROM, TO, message)
		#server.quit()
		server.close()
		print ('successfully sent the mail to ' + recipient )
	except:
		print ("failed to send mail")
send_email()