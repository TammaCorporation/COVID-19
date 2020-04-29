<!--  -->
# Public Home School API
<!--  -->
This is intended as a quick reference for *__Public Home School API__*, A small yet robust service that provides the capabilities for remote academic studies
<!--  -->
### Table of contents
* **Create student account**
* **Sign in as a student**
* **Retrieve subject list(Assigned teacher info included)**
* **Retrieve list of questions asked**
* **Ask teacher a question**
* **Update an existing question**
* **Delete a question**
* **Retrieve task excerpt**
* **Retrieve task details(exercise inclusive)**
* **Submit student exercise**
* **Logout student**
---
* **Create Admin __(MOE/Teacher)__ account**
---

<!-- Create student account -->
## Create student account
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

<!-- Sign in as a student -->
## Sign in as a student
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

<!-- Retrieve subject list -->
## Retrieve subject list(Assigned teacher info included)
**Example Request:**
```javascript
// 
var settings = {
  "url": "http://localhost/www/COVID-19/config/student/students.inc.php?getSubjectList=true",
  "method": "GET",
  "timeout": 0
};
// 
$.ajax(settings).done(function (response) {
  console.log(response);
});
```
**Example Responses:**
```json
// Request is successful
{
    "status": true,
    "message": [
        {
            "fullname": "Mr. Yorni Sackie",
            "phone": "0777001001",
            "subjects": [
                "History",
                "Civics"
            ]
        },
        {
            "fullname": "Jasmine Varese",
            "phone": "07770730821",
            "subjects": [
                "Economics"
            ]
        }
    ]
}
//
{
    "status": false,
    "message": "Sorry, all of the parameters: {getSubjectList} must be set inorder to complete this action",
    "data": []
}
```

<!--  -->
## Retrieve list of questions asked
**Example #1 Request (fetch all):**
```javascript
//
var settings = {
  "url": "http://localhost/www/COVID-19/config/student/students.inc.php?getInquiries=true",
  "method": "GET",
  "timeout": 0,
};
//
$.ajax(settings).done(function (response) {
  console.log(response);
});
```
**Example Responses:**
```json
{
    "status": true,
    "message": [
        {
            "id": "6",
            "studentName": "Michael Nimley",
            "intended_subject": "Literature",
            "student_question": "Who do you think is to really be blamed in the Novel 'The gods are not to blame'?",
            "teacher_answer": "In all fairness, Bonkar is to be blamed.Why?....let's face it. The god",
            "teacher_first_name": "Michael ",
            "teacher_last_name": "Nimley",
            "teacher_phone": "0777007009",
            "teacher_gender": "male"
        },
        {
            "id": "10",
            "studentName": "Michael Nimley",
            "intended_subject": "Literature",
            "student_question": "Who do you think is to really be blamed in the Novel 'The gods are not to blame'?",
            "teacher_answer": "",
            "teacher_first_name": "Michael ",
            "teacher_last_name": "Nimley",
            "teacher_phone": "0777007009",
            "teacher_gender": "male"
        },
        {
            "id": "11",
            "studentName": "Michael Nimley",
            "intended_subject": "Literature",
            "student_question": "Who do you think is to really be blamed in the Novel 'The gods are not to blame'?",
            "teacher_answer": "",
            "teacher_first_name": "Michael ",
            "teacher_last_name": "Nimley",
            "teacher_phone": "0777007009",
            "teacher_gender": "male"
        },
        {
            "id": "12",
            "studentName": "Michael Nimley",
            "intended_subject": "Literature",
            "student_question": "Who do you think is to really be blamed in the Novel 'The gods are not to blame'?",
            "teacher_answer": "",
            "teacher_first_name": "Michael ",
            "teacher_last_name": "Nimley",
            "teacher_phone": "0777007009",
            "teacher_gender": "male"
        },
        {
            "id": "13",
            "studentName": "Michael Nimley",
            "intended_subject": "Literature",
            "student_question": "What is money?",
            "teacher_answer": "",
            "teacher_first_name": "Michael ",
            "teacher_last_name": "Nimley",
            "teacher_phone": "0777007009",
            "teacher_gender": "male"
        }
    ]
}
```

**Example #2 Request (fetch specific for ie editing):**
```javascript
//
var settings = {
  "url": "http://localhost/www/COVID-19/config/student/students.inc.php?getInquiries=true&id=6",
  "method": "GET",
  "timeout": 0,
};
//
$.ajax(settings).done(function (response) {
  console.log(response);
});
```
**Example Responses:**
```json
{
    "status": true,
    "message": [
        {
            "id": "6",
            "studentName": "Michael Nimley",
            "intended_subject": "Literature",
            "student_question": "Who do you think is to really be blamed in the Novel 'The gods are not to blame'?",
            "teacher_answer": "In all fairness, Bonkar is to be blamed.Why?....let's face it. The god",
            "teacher_first_name": "Michael ",
            "teacher_last_name": "Nimley",
            "teacher_phone": "0777007009",
            "teacher_gender": "male"
        }
    ]
}
```


<!--  -->
## Ask teacher a question
**Example Request:**
```javascript
// 
var class     =  document.getElementById('class').value;
var Qsubject  =  document.getElementById('Qsubject').value;
var Question  =  document.getElementById('Question').value;
// 
var formData = new FormData();
formData.append("addInquiry", "true");
formData.append("class", class);
formData.append("Qsubject", Qsubject);
formData.append("Question", Question);
// 
var settings = {
  "url": "http://localhost/www/COVID-19/config/student/students.inc.php",
  "method": "POST",
  "timeout": 0,
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": formData
};
// 
$.ajax(settings).done(function (response) {
  console.log(response);
});
```
**Example Responses:**
```json
//
{
    "status": true,
    "message": "1 question added"
}
//
{
    "status": false,
    "message": "Sorry, there's no teacher available for this class"
}
```

<!--  -->
## Topic
**Example Request:**
```javascript
```
**Example Responses:**
```json


<!--  -->
## Topic
**Example Request:**
```javascript
```
**Example Responses:**
```json
```

<!--  -->
## Topic
**Example Request:**
```javascript
```
**Example Responses:**
```json


<!--  -->
## Topic
**Example Request:**
```javascript
```
**Example Responses:**
```json
```

<!--  -->
## Topic
**Example Request:**
```javascript
```
**Example Responses:**
```json
```










