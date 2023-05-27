var express = require('express');
var app = express();

app.use(express.json() );       // to support JSON-encoded bodies
app.use(express.urlencoded({     // to support URL-encoded bodies
  extended: false
})); 

var users = [
  {'user':'test1',  'password':'pass1'},
  {'user':'test2',  'password':'pass2'},
  {'user':'test3',  'password':'pass3'},
  {'user':'test4',  'password':'pass4'},
  {'user':'test5',  'password':'pass5'},
  {'user':'test6',  'password':'pass6'},
  {'user':'test7',  'password':'pass7'},
  {'user':'test8',  'password':'pass8'},
]

app.get('/', function(req, res){
   res.redirect('/users/list');
});

app.get('/users/list', function(req, res){

   var html = '<p>'
   for (var i = 0; i < users.length; i++) {
      html = html + users[i].user + ' ----';
      html = html + users[i].password + '<br>';
    }
    html += '</p>'

   res.send('List of users: ' + html + '<br><a href="/users/add">Add a new user</a> ');
});


app.get('/users/add', function(req, res){

  var html = '<br><form action="/users/adduser" method="post"><label for="uname">Username:</label><br><input type="text" id="uname" name="uname"><br><label for="pass">Password:</label><br><input type="text" id="pass" name="pass"><br><br><input type="submit" value="Submit"><br></form>'

  res.send('Insert a user and password: ' + html + '<br><a href="/users/list">List of users</a>');
});

app.post('/users/adduser', function(req, res){

  console.log(req.body);
  var new_user = req.body.uname;
  var new_pass = req.body.pass;

  var new_json = {'user': new_user, 'password': new_pass};
  users.push(new_json);
  res.send('User: ' + new_user + ' is added!<br> <a href="/users/list">list of users</a>');
}

);

app.listen(3000);
