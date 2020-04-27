<!--  -->
# Public Home School API
<!--  -->
__This is intended as a quick reference for *Public Home School API*, A small yet robust service that provides the capabilities for remote academic studies__
<!--  -->
### Table of contents
* **Creating student account**
* **Signing in as a student**
* **Creating Admin __(MOE/Teacher)__ account**
<!--  -->
## Creating student account
**Example Request:**
```javascript

// form values
var  fullname = document.getElementById('fullname').value;
var  Username = document.getElementById('Username').value;
var  Phone    = document.getElementById('Phone').value;
var  Age      = document.getElementById('Age').value;
var  School   = document.getElementById('School').value;
var  Class    = document.getElementById('Class').value;
var  follow   = document.getElementById('follow').value;

// 
var formData = new FormData();
formData.append("addUser", true);        // entry point (Boolean)
formData.append("data[0]", fullname);    // fullname (Variable)
formData.append("data[1]", Username);    // Username (Variable)
formData.append("data[2]", Phone);       // Phone Number (Variable)
formData.append("data[3]", Age);         // Age (Variable)
formData.append("data[4]", School);      // School (Variable)
formData.append("data[5]", Class);       // Class (Variable)
formData.append("data[6]", follow);      // Follow (Variable)

// 
var settings = {
  url: "http://localhost/www/COVID-19/config/initialize.inc.php", // URI of my local server
  method: "POST",
  timeout: 0,
  processData: false,
  mimeType: "multipart/form-data",
  contentType: false,
  data: formData
};

// 
$.ajax(settings).done(function (response) {
  console.log(response);
});
```
**Example Responses:**
```json
// Account was created
{
    "status": true,
    "message": "user added",
    "data": []
}
// Account creation negated due to missing parameter or parameter value
{
    "status": false,
    "message": "Sorry, all of the parameters: 
        {data[0] (fullname) },
        {data[1] (UserName) },
        {data[2] (phone) },
        {data[3] (age) },
        {data[4] (school) },
        {data[5] (class) },
        {data[6] (follow) }, 
        must be set inorder to complete this action",
    "data": []
}
// Fullname and phone number duplicated
{
    "status": false,
    "message": "Sorry, account creation halted due to duplication",
    "data": []
}
```
<!--  -->
## Signing in as a student
**Example Request:**
```javascript

// form values
var  UserName = document.getElementById('UserName').value;
var  phone    = document.getElementById('phone').value;

// 
var formData = new FormData();
formData.append("login", "true");       // entry point (Boolean)
formData.append("UserName", UserName);  // Username (Variable)
formData.append("phone", phone);        // Phone Number (Variable)

// 
var settings = {
  url: "http://localhost/www/COVID-19/config/initialize.inc.php", // URI of my local server
  method: "POST",
  timeout: 0,
  processData: false,
  mimeType: "multipart/form-data",
  contentType: false,
  data: formData
};

// 
$.ajax(settings).done(function (response) {
  console.log(response);
});
```
**Example Responses:**
```json
// Login is successfull
{
    "status": true,
    "message": "login successful",
    "data": {
        "Fullname": "Peter Parker",
        "Mobile": "0777000001",
        "Age": "11",
        "School": "Weltona Christian Academy",
        "Class": "Grade Seven"
    }
}
// Login Failed
{
    "status": false,
    "message": "Sorry, invalid credentials"
}
// Login negated due to missing parameter or value 
{
    "status": false,
    "message": "Sorry, all of the parameters: {UserName}, {phone} must be set inorder to complete this action",
    "data": []
}
```
