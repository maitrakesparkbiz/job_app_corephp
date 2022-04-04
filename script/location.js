
async function country() {
  var basic = document.getElementById("basic");
  basic.style.display = "block";



  fetch('../job_app/include/country.php')
  .then(response => response.text())
  .then(data => {
   display=data;
    const myArray = data.split("~~");
    console.log(myArray);
    document.getElementById('state').innerHTML="<option value='selected' selected disabled>Select</option>";
    document.getElementById('city').innerHTML="<option value='selected' selected disabled>Select</option>";
    for (let i = 0; i < myArray.length-1; i+=2) {
      let select= document.getElementById('country')
      var opt = document.createElement('option');
      opt.value = myArray[i]
      opt.innerHTML = myArray[i+1]
      select.appendChild(opt);
          
    }

  })

  
}

async function view_state() {
  var e =document.getElementById('country');
  var optionSelectedText = e.options[e.selectedIndex].value;
  console.log(optionSelectedText);


    fetch('../job_app/include/state.php?ctry='+optionSelectedText)
    .then(response => response.text())
    .then(data => {
     display=data;
      const myArray = data.split("~~");
      document.getElementById('state').innerHTML="<option value='selected' selected disabled>Select</option>";
      document.getElementById('city').innerHTML="<option value='selected' selected disabled>Select</option>";
      console.log(myArray);
      for (let i = 0; i < myArray.length-1; i+=2) {
        let select= document.getElementById('state')
        var opt = document.createElement('option');
        opt.value = myArray[i]
        opt.innerHTML = myArray[i+1]
        select.appendChild(opt);
            
      }
  
    })
}


async function view_city() {
  var e =document.getElementById('state');
  var optionSelectedText = e.options[e.selectedIndex].value;
  console.log(optionSelectedText);


    fetch('../job_app/include/city.php?state='+optionSelectedText)
    .then(response => response.text())
    .then(data => {
     display=data;
      const myArray = data.split("~~");
      document.getElementById('city').innerHTML="<option value='selected' selected disabled>Select</option>";
      console.log(myArray);
      for (let i = 0; i < myArray.length-1; i+=2) {
        let select= document.getElementById('city')
        var opt = document.createElement('option');
        opt.value = myArray[i]
        opt.innerHTML = myArray[i+1]
        select.appendChild(opt);
            
      }
  
    })
}

async function update(country,state,city) {
  var basic = document.getElementById("basic");
  basic.style.display = "block";

  console.log("update");

 const cyr=await country_update(country)

  setTimeout(() => {
    state_update(state,country); 

  }, 300);


  setTimeout(() => {
    city_update(city)
  }, 600);

}


async function country_update(country) {
  var val;
  fetch('../job_app/include/country.php')
  .then(response => response.text())
  .then(data => {
   display=data;
    const myArray = data.split("~~");
    console.log(myArray);


    for (let i = 0; i < myArray.length-1; i+=2) {
      let select= document.getElementById('country')
      var opt = document.createElement('option');
      opt.value = myArray[i]
      opt.innerHTML = myArray[i+1]
      select.appendChild(opt);
      if(parseInt(country)==myArray[i])
      {
        val=i/2
      }

    }
    document.getElementById('country').selectedIndex=val;
  })

  
}

async function state_update(state,country) {
  var val;
  var e =document.getElementById('country');
  var optionSelectedText = e.options[e.selectedIndex].value;
  console.log(optionSelectedText);


    fetch('../job_app/include/state.php?ctry='+country)
    .then(response => response.text())
    .then(data => {
     display=data;
      const myArray = data.split("~~");

      console.log(myArray);
      for (let i = 0; i < myArray.length-1; i+=2) {
        let select= document.getElementById('state')
        var opt = document.createElement('option');
        opt.value = myArray[i]
        opt.innerHTML = myArray[i+1]
        select.appendChild(opt);
        if(parseInt(state)==myArray[i])
        {
          val=i/2
        }

            
      }
      document.getElementById('state').selectedIndex=val;
    })
}

async function city_update(city) {
  var val;
  var e =document.getElementById('state');
  var optionSelectedText = e.options[e.selectedIndex].value;
  console.log(optionSelectedText);


    fetch('../job_app/include/city.php?state='+optionSelectedText)
    .then(response => response.text())
    .then(data => {
     display=data;
      const myArray = data.split("~~");

      console.log(myArray);
      for (let i = 0; i < myArray.length-1; i+=2) {
        let select= document.getElementById('city')
        var opt = document.createElement('option');
        opt.value = myArray[i]
        opt.innerHTML = myArray[i+1]
        select.appendChild(opt);
        if(parseInt(city)==myArray[i])
        {
        val=i/2;
        }

      }
      console.log(val);
      document.getElementById('city').selectedIndex=val;
    })
}

function basic_next()
{
  var fname =document.getElementById("firstname").value;
  let cnt=0;     
  var lname =document.getElementById("lastname").value;
  var designation = document.getElementById("designation").value;
  var email = document.getElementById("email").value;
  var city = document.getElementById("city").value;
  var zip = document.getElementById("zip").value;
  var addr1 =document.getElementById("addr1").value;
  var addr2 =document.getElementById("addr2").value;

  var phone =document.getElementById("phone").value;
  var gender =document.getElementById("gender").value;
  var country =document.getElementById("country").value;
  var state =document.getElementById("state").value;
  var materialStatus =document.getElementById("materialStatus").value;
  var dob =document.getElementById("dob").value;




  
  

  var nameptr = /^[a-zA-Z\s]*$/;
  
  var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var zipptr = /^[1-9]{1}[0-9]{5}$/
  var addr = /^[a-zA-Z\s1-9]{0,200}$/
  var phoneptr = /^[1-9]{1}[0-9]{9}$/
  var desptr = /^[a-zA-Z\s1-9]*$/;


  if(!fname.match(nameptr) || fname=="")
  {
    document.getElementById("firstname_error").innerHTML="First name only consists of alpha numeric number";
     cnt++;

  }
  if(!lname.match(nameptr) || fname=="")
  {
    alert("last false");
    cnt++;

  }
  if(!designation.match(desptr) || designation=="")
  {
    alert("des false");
    cnt++;

  }
  if(!addr1.match(addr) || addr1=="")
  {
    alert("addr1 false");
    cnt++;

  }
  if(!email.match(emailformat))
  {
  alert("email false");
  cnt++;

  }
 
  if(!addr2.match(addr) || addr2=="")
  {
    alert("addr2 false");
    cnt++;

  }
  if(!city.match(desptr))
  {
    alert("city false");
    cnt++;

  }
  if(!phone.match(phoneptr))
  {
    alert("phone false");
     cnt++;

  }
  if(!zip.match(zipptr))
  {
    alert("zip false");
    cnt++;

  }

  if(gender=="")
  {
    alert("Gender false");
    cnt++;

  }
  
  if(country=="selected")
  {
    alert("please Select a country ");
    cnt++;

  }

  if(state=="selected")
  {
    alert("please Select a state ");
    cnt++;

  }
  if(city=="selected")
  {
    alert("please Select a City ");
    cnt++;

  }
  if(materialStatus=="select")
  {
    alert("please Select a material Status ");
    cnt++;

  }
  if(dob=="")
  {
    alert("false dob");
    cnt++;

  } 
  
  

  if(cnt==0)
  {
    document.getElementById("basic").style.display = 'none';
    document.getElementById("education").style.display = 'block'
  }

}

function basic_back()
{
  document.getElementById("basic").style.display = 'block';
    document.getElementById("education").style.display = 'none'

}

function edu_next()
{
  
   var rows_count = document.getElementById('eductaionTable').getElementsByTagName('tr');

    let cnt=0;

  
  

  var uniptr = /^[a-zA-Z\s]*$/;
  var uniyearptr = /^[1-9]{1}[0-9]{3}$/;
  var uniperptr = /^[0-9]{2}[.][0-9]{2}$/;

 
  

  for(i=0;i<rows_count.length;i++)
  {
    var course="edu["+i+"][courseName]";

    var str="edu["+i+"][universityName]";
    var str1="edu["+i+"][passingYear]";
    var str2="edu["+i+"][percentage]";
    let cnt=0;
    var coursename =document.getElementById(course).value;
    var uni =document.getElementById(str).value;
    var uniyear =document.getElementById(str1).value;
    var uniper =document.getElementById(str2).value;
    let number = eval(i+1)
    console.log(coursename);
    if(coursename=="select")
    {
      alert("please Select "+number+" university course")
        cnt++;

    }

    if(!uni.match(uniptr) || uni=="")
    {
      alert("false "+number+" university name")
        cnt++;

    }
    
    if(!uniyear.match(uniyearptr))
    {
      alert("false "+number+" university year")
        cnt++;

    }
    if(!uniper.match(uniperptr))
    {
      alert("false "+number+" university percentage")
        cnt++;

    }

  }
  if(cnt==0)
  {
    document.getElementById("education").style.display = 'none';
    document.getElementById("work").style.display = 'block'
  }


}

function edu_back()
{
  document.getElementById("education").style.display = 'block';
    document.getElementById("work").style.display = 'none'

}

function work_next()
{
  
 var rows_count1 = document.getElementById('workExTable').getElementsByTagName('tr');

  
  


  var dateptr=/^[1-9]{4}[-][0-9]{2}[-][0-9]{2}$/;

  var desptr = /^[a-zA-Z\s]*$/;


  for(i=0;i<rows_count1.length;i++)
  {
    var str2="work["+i+"][companyName]";
    var str3="work["+i+"][designation]"
    var str1="work["+i+"][from]";
    var str="work["+i+"][to]"
    var todate=document.getElementById(str).value;
    var fromdate=document.getElementById(str1).value;
    var compname=document.getElementById(str2).value;
    var desname=document.getElementById(str3).value;
    let number = eval(i+1)
    var cnt=0;

    if(!compname.match(desptr) ||  compname=="")
    {
      alert("company "+number+" false")
      cnt++;

    }
    if(!desname.match(desptr) ||  desname=="")
    {
      alert("des "+number+" false")
      cnt++;

    }
    if( todate=="")
    {
      //todate =new Date(todate);
    
      //if(!todate.match(dateptr) )
      //{
        alert(" "+number+" to  date false")
        cnt++;

      //}
    }
/*     else
    {
      alert(" "+number+" to date false")
      cnt++;

    } */

    if( fromdate=="")
    {
      //fromdate =new Date(fromdate);
    
      //if(!fromdate.match(dateptr) )
      //{
        alert(" "+number+" from date false")
        cnt++;

      //}
    }
/*     else
    {
      alert(" "+number+" from date false")
      cnt++;

    } */
  }
  if(cnt==0)
  {
    document.getElementById("work").style.display = 'none';
    document.getElementById("combo").style.display = 'block'
  }
  




}
function work_back()
{
  document.getElementById("work").style.display = 'block';
    document.getElementById("combo").style.display = 'none'

}

function reff_next()
{
  var rows_count3 = document.getElementById('lanTable').getElementsByTagName('tr');

  for(i=0;i<rows_count3.length;i++)
  {
    var cnt1=0;
    var cnt2=0;
    var cnt3=0;
    var str="lang["+i+"][language]";
    var str1="lang["+i+"][read]";
    var str2="lang["+i+"][write]";
    var str3="lang["+i+"][speak]";
    var e =document.getElementById(str);
    var optionSelectedText = e.options[e.selectedIndex].value;
    var cnt=0;
    var read = document.getElementById(str1);  
    var write = document.getElementById(str2);  
    var speak = document.getElementById(str3);  

    if(optionSelectedText=="lan_select")
    {
        alert("false lang")
        cnt++;
    }
    else
    {
      if (read.checked==false && write.checked==false && speak.checked==false) 
        {
        alert("false checkbox")
        cnt++;
        }
    }
  }
  if(cnt==0)
  {
    document.getElementById("combo").style.display = 'none';
    document.getElementById("reff").style.display = 'block'
  }


}

function reff_back()
{
  document.getElementById("combo").style.display = 'block';
  document.getElementById("reff").style.display = 'none'

}

function pref_next()
{
  var rows_count2 = document.getElementById('refTable').getElementsByTagName('tr');
  var nameptr = /^[a-zA-Z\s]*$/;
  var contact=/^[+]{1}[0-9]*$/;
  var desptr = /^[a-zA-Z\s1-9]*$/;
  let cnt=0;
  
  for(i=0;i<rows_count2.length;i++)
  {
    var str="ref["+i+"][refName]";
    var str1="ref["+i+"][refContact]";
    var str2="ref["+i+"][refRelation]";
    var name =document.getElementById(str).value;
    var refcontact =document.getElementById(str1).value;
    var relation =document.getElementById(str2).value;
    let number= eval(i+1);
   
    if(!name.match(nameptr) || name=="")
    {
      alert("false "+number+" Refeneces name")
      cnt++;

    }
    
    if(!refcontact.match(contact) || refcontact=="")
    {
      alert("false "+number+" Refeneces contect")
      cnt++;

    }
    if(!relation.match(desptr)|| relation=="")
    {
      alert("false "+number+" Refeneces relation")
      cnt++;

    }

  }
  if(cnt==0)
  {
    console.log("location");
    document.getElementById("reff").style.display = 'none';
    document.getElementById("location").style.display = 'block'
  }


 
}
function pref_back()
{
  document.getElementById("reff").style.display = 'block';
  document.getElementById("location").style.display = 'none'
}

      //--------------------js for row add
function onAddEduRow() {
  let table = document.getElementById("eductaionTable");
  var edu_counter = document.getElementById('eductaionTable').getElementsByTagName('tr').length;
  console.log(edu_counter)
  let row = table.insertRow();
  row.id = "edu" + edu_counter;

  let cell1 = row.insertCell();
  let cell2 = row.insertCell();
  let cell3 = row.insertCell();
  let cell4 = row.insertCell();
  let cell5 = row.insertCell();

  cell1.innerHTML =
    "<label for='courseName" +
    edu_counter +
    "'>Course: </label> <select name=edu["+edu_counter+"][courseName] id='edu["+edu_counter+"][courseName]'>" +
    "<option value='select' selected disabled>Select</option> <option value='ssc'>SSC</option> <option value='hsc'>HSC</option> <option value='bachelor'>Bachelors</option> <option value='master'>Masters</option> </select > ";
  cell2.innerHTML =
    "<label for='universityName" +
    edu_counter +
    "'>University</label>" +
    "<input type='text' name=edu["+edu_counter+"][universityName]  id='edu["+edu_counter+"][universityName]'>";
  cell3.innerHTML =
    "<label for='passingYear" +
    edu_counter +
    "'>Passing Year: </label>" +
    "<input type='text' name=edu["+edu_counter+"][passingYear]  id='edu["+edu_counter+"][passingYear]'>";
  cell4.innerHTML =
    "<label for='percentage" +
    edu_counter +
    "'>Percentage: </label>" +
    "<input type='text' name=edu["+edu_counter+"][percentage]  id='edu["+edu_counter+"][percentage]'>";
  cell5.innerHTML =
    "<input type='button' value='-' name='removeRow" +
    edu_counter +
    "' id='removeRow" +
    edu_counter +
    "' onclick=onRemoveRow('edu" +
    edu_counter +
    "')>";

  edu_counter = edu_counter + 1;
}
function onAddwxRow() {
  let table = document.getElementById("workExTable");
  var wx_counter = document.getElementById('workExTable').getElementsByTagName('tr').length;
  let row = table.insertRow();
  row.id = "wx" + wx_counter;

  let cell1 = row.insertCell();
  let cell2 = row.insertCell();
  let cell3 = row.insertCell();
  let cell4 = row.insertCell();
  let cell5 = row.insertCell();


    cell1.innerHTML =
    "<label for='designation" +
    wx_counter +
    "'>Comapny Name:</label> <input type='text' name='work["+wx_counter+"][companyName]' id='work["+wx_counter+"][companyName]"+"'>";
  cell2.innerHTML =
    "<label for='designation" +
    wx_counter +
    "'>Designation:</label> <input type='text' name='work["+wx_counter+"][designation]' id='work["+wx_counter+"][designation]"+"'>";
  cell3.innerHTML =
    "<label for='from" +
"'>From:</label> <input type='date' name='work["+wx_counter+"][from]' id='work["+wx_counter+"][from]"+"'>";
  cell4.innerHTML =
    "<label for='to" +
    wx_counter +
    "'>To:</label> <input type='date' name='work["+wx_counter+"][to]' id='work["+wx_counter+"][to]" +"'>";
  cell5.innerHTML =
    "<input type='button' value='-' name='removeRow" +
    wx_counter +
    "' id='removeRow" +
    wx_counter +
    "' onclick=onRemoveRow('wx" +
    wx_counter +
    "')>";

  wx_counter = wx_counter + 1;
}
function onAddLanRow() {
  let table = document.getElementById("lanTable");
  var lan_counter = document.getElementById('lanTable').getElementsByTagName('tr').length;
  let row = table.insertRow();
  row.id = "lan" + lan_counter;

  let cell1 = row.insertCell();
  let cell2 = row.insertCell();
  let cell3 = row.insertCell();

  cell1.innerHTML =
    "<select name='lang["+lan_counter+"][language]' id='lang["+lan_counter+"][language]'>" +
    "<option value='lan_select'" +
    "selected disabled>Select</option>" +
    "<option value='english'" +
    ">English</option>" +
    "<option value='hindi'" +
    ">Hindi</option>" +
    "<option value='gujarati'" +
    ">Gujarati</option>" +
    "</select>";
  cell2.innerHTML =
    "<input type='checkbox'  name='lang["+lan_counter+"][read]'  id='lang["+lan_counter+"][read]'  value='read' >Read " +
    "<input type='checkbox' name='lang["+lan_counter+"][write]'  id='lang["+lan_counter+"][write]''   value='write' >Write " +
    "<input type = 'checkbox' name = 'lang["+lan_counter+"][speak]' id='lang["+lan_counter+"][speak]' value='speak' >Speak ";
  cell3.innerHTML =
    "<input type='button' value='-' name='removeRow" +
    lan_counter +
    "' id='removeRow" +
    lan_counter +
    "' onclick=onRemoveRow('lan" +
    lan_counter +
    "')>";

  lan_counter = lan_counter + 1;
}
function onAddTechRow() {
  let table = document.getElementById("techTable");
  var tech_counter = document.getElementById('techTable').getElementsByTagName('tr').length;
  let row = table.insertRow();
  row.id = "tech" + tech_counter;

  let cell1 = row.insertCell();
  let cell2 = row.insertCell();
  let cell3 = row.insertCell();

  cell1.innerHTML =
    "<select name='tech["+tech_counter+"][technology]' id='tech["+tech_counter+"][technology]'>" +
    "<option value='select" +
    tech_counter +
    "' selected disabled>Select</option>" +
    " <option value='javascript'>JavaScript</option>" +
    "<option value='php'>PHP</option>" +
    " <option value='nodejs'>NodeJS</option>" +
    "<option value='Python'>Python</option>" +
    "</select>";
  cell2.innerHTML =
    "<input type='radio' name='tech["+tech_counter+"][status]'    id=tech["+tech_counter+"][status] value='beginer' /> Beginer" +
    "<input type='radio' name='tech["+tech_counter+"][status]'  id=tech["+tech_counter+"][status] value='mediocre'/> Mediocre" +
    "<input type='radio' name='tech["+tech_counter+"][status]'  id=tech["+tech_counter+"][status]  value='expert' /> Expert";
  cell3.innerHTML =
    "<input type='button' value= '-' name='removeRow" +
    tech_counter +
    "'  id='removeRow" +
    tech_counter +
    "' onclick=onRemoveRow('tech" +
    tech_counter +
    "') />";

  tech_counter = tech_counter + 1;
}

function submit_form()
{  
  var location= document.getElementById("location").value
  var current_CTC= document.getElementById("currentCTC").value

  var department= document.getElementById("department").value


  var expected_CTC= document.getElementById("expectedCTC").value
  var notice_Period=document.getElementById("noticePeriod").value
  var ctc = /^[0-9a-zA-Z.\s]*$/;
  var noticeptr=/^[0-9\s]*$/;
console.log(location);
/*   if(typeof(location)=="undefined")
  {
    alert("please select location") 
      return false;
      

  }
  else */ if(!notice_Period.match(noticeptr) || notice_Period=="")
  {
    alert("false notice period") 
    return false;

  }
  else if(!current_CTC.match(ctc) || current_CTC=="")
  {
    alert("false current ctc")
    return false;

  }

  else if(!expected_CTC.match(ctc) || expected_CTC=="")
  {
    alert("false expected ctc")
    return false;

  }
  else if(department=="select")
  {
    alert("please select department") 
    return false;

  }
  else
  {
    return true;
  }


}