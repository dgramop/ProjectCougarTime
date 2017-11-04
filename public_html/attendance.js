function addStudent(number, cb)
{
  var xhr = new XMLHttpRequest();
  xhr.open("POST", '/addstudent.php', true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if(xhr.readyState==4 && xhr.status==200) { //DONE const is for readyState 4, just so you folks don't get confused, I switched it
      console.log(xhr.responseText);
      var returned=JSON.parse(xhr.responseText);
      cb(returned)
    }
  }
  xhr.send("studentid="+number);
}

document.getElementById("id").onkeypress=function keyforstudent(e)
{
  if(e.charCode==13)
  {
    var student=addStudent(document.getElementById("id").value, function(stuff){
      if(stuff.status)
      {
        toast("Added "+document.getElementById("id").value, "success")
        document.getElementById("stidlist").innerHTML+=document.getElementById("id").value;
      }
      else
      {
        console.log(student)
        toast("Failed to add "+document.getElementById("id").value, "alert")
      }
      document.getElementById("id").value="";
    });
  }
}
