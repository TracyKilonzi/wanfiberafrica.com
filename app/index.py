#!/usr/bin/python3.1O
import cgi

form_data = cgi.FieldStorage()

first_name = form_data.getvalue("Name")
last_name = form_data.getvalue("LastName")
user_email = form_data.getvalue("email")
user_phone = form_data.getvalue("Phone")
message = form_data.getvalue("Message")

