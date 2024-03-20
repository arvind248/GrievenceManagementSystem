let states={
    "AN":"Andaman and Nicobar Islands",
    "AP":"Andhra Pradesh",
    "AR":"Arunachal Pradesh",
    "AS":"Assam",
    "BR":"Bihar",
    "CG":"Chandigarh",
    "CH":"Chhattisgarh",
    "DN":"Dadra and Nagar Haveli",
    "DD":"Daman and Diu",
    "DL":"Delhi",
    "GA":"Goa",
    "GJ":"Gujarat",
    "HR":"Haryana",
    "HP":"Himachal Pradesh",
    "JK":"Jammu and Kashmir",
    "JH":"Jharkhand",
    "KA":"Karnataka",
    "KL":"Kerala",
    "LA":"Ladakh",
    "LD":"Lakshadweep",
    "MP":"Madhya Pradesh",
    "MH":"Maharashtra",
    "MN":"Manipur",
    "ML":"Meghalaya",
    "MZ":"Mizoram",
    "NL":"Nagaland",
    "OR":"Odisha",
    "PY":"Puducherry",
    "PB":"Punjab",
    "RJ":"Rajasthan",
    "SK":"Sikkim",
    "TN":"Tamil Nadu",
    "TS":"Telangana",
    "TR":"Tripura",
    "UP":"Uttar Pradesh",
    "UK":"Uttarakhand",
    "WB":"West Bengal"
}
const stateElem=document.getElementById("state");
const cityElem=document.getElementById("city");
const grievanceCatElem=document.getElementById("grievancecategory");
const grievanceElem=document.getElementById("relatedgrievance");
const gForm=document.getElementById("grievance-form");
const alert=document.getElementById("alert-msg");


// console.log(form);

document.addEventListener("DOMContentLoaded",()=>{
    
    stateElem.innerHTML=`<option selected="selected" value="Select State">Select State</option>`;
    for (const key in states) {
        stateElem.innerHTML+=`<option value='${states[key]}' >${states[key]}</option>`;
    }
    

});

async function addCityOption(){

   
    let selectedState=stateElem.value;
    let response= await fetch(`./cityAPI.php?state=${selectedState}`)
    let cities=await  response.json()
    // console.log(cities);
    cityElem.innerHTML=`<option selected="selected" value="Select City" >Select City</option>`;
    cities.forEach(city => {
            cityElem.innerHTML+=`<option name='${city.name}'>${city.name}</option>`;        
       
        });
    
    
}

async function addRelatedGrievanceOption(){

      
    let selectedGrievance=grievanceCatElem.value;
    
    let response= await fetch(`./application/Getgrievancenames.php?category=${selectedGrievance}`)
    let options=await  response.text()
    
    
    grievanceElem.innerHTML=`<option selected="selected" value="Select grievance" >Select Grievance</option>`;
    grievanceElem.innerHTML+=options
    
    
}
grievanceCatElem.addEventListener("change",addRelatedGrievanceOption);

stateElem.addEventListener("change",addCityOption);


gForm.addEventListener('submit',async (e)=>{
    e.preventDefault();
    // e.preventDefault();
    console.log("hello");
    let grievanceData= new FormData(grievanceForm)
    

    // console.log(grievanceData);
    let response = await fetch('./application/addGrievance.php', {
      method: 'POST',
      body: grievanceData
    });
    
    let result = await response.text();
    console.log(result);
    if(result.search("successfully")>=0)
        displayAlert("Record Added Successfully", "success", 5000);
    else
        displayAlert("Enrollment id already Exist ", "danger", 5000);
    // newBtn.classList.toggle("hide-btn");
    // saveBtn.classList.toggle("hide-btn"); 
    // studentForm.reset();
    
})


function displayAlert(msg,type,time){    
    alert.innerHTML=msg;
    alert.classList.add(`alert-${type}`);
    
    setTimeout(function () {
        alert.textContent="";
        alert.classList.remove(`alert-${type}`);
    }, time);
}


