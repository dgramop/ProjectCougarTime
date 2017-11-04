function addStudent(number)
{
  var xhr = new XMLHttpRequest();
  xhr.open("POST", '/addstudent.php', true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if(xhr.status == 200) {
      var returned=JSON.parse(xhr.responseText);
      if(returned.status=="success")
      {
        return true;
      }
      else
      {
        return false;
      }
    }
  }
  xhr.send("studentid="+number);
}

document.getElementById("id").onkeypress=function keyforstudent(e)
{
  if(e.charCode==13)
  {
    if(addStudent(document.getElementById("id").value))
    {
      toast("Added "+document.getElementById("id").value, "success")
    }
    else
    {
      toast("Failed to add "+document.getElementById("id").value, "alert")
    }
    document.getElementById("id").value="";
  }
}
