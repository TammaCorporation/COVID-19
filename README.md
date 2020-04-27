<!--  -->
# Public Home School API
<!-- -->
<img src="https://static.toiimg.com/thumb/msid-74688799,imgsize-140514,width-400,resizemode-4/74688799.jpg" width="300" height="300">
<!--  -->
__This is intended as a quick reference for *Public Home School API*, A small yet robust service that provides the capabilities for remote academic studies__
<!--  -->
### Table of contents
* **Creating student account**
* **Signing in as a student**
* **Creating Admin __(MOE/Teacher)__ account**
<!--  -->
## Creating student account
**Example:**
```javascript

// form values
var  fullname = document.getElementById('fullname').value;
var  Username = document.getElementById('Username').value;
var  Phone    = document.getElementById('Phone').value;
var  Age      = document.getElementById('Age').value;
var  School   = document.getElementById('School').value;
var  Class    = document.getElementById('Class').value;

// 
var formData = new FormData();
formData.append("addUser", true);                          // entry point (Boolean)
formData.append("data[0]", "Peter Parker");                // fullname (Variable)
formData.append("data[1]", "pParker");                     // Username (Variable)
formData.append("data[2]", "0777001001");                  // Phone Number (Variable)
formData.append("data[3]", "11");                          // Age (Variable)
formData.append("data[4]", "Weltona Christian Academy");   // School (Variable)
formData.append("data[5]", "Grade Seven");                 // Class (Variable)
formData.append("data[6]", "yes");                         // Follow (Variable)

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




