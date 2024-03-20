
const tableElem=document.querySelector('.table');
const grienvanceBoxs=document.querySelectorAll('.g-d-box');
const gStatusBtn=document.querySelectorAll('.buttons .button');
const verticalBtn=document.querySelector('.vertical-dot');
const logoutBox=document.querySelector('.logout-box');
var followupBox=document.querySelector('.followup-box');
var tranferBox=document.querySelector('.tranfer-box');

var allGrievances;
var statusAtiveBtn="All";
verticalBtn.addEventListener('click',()=>{
    logoutBox.classList.toggle('box-visible')
    console.log("hello");
})
gStatusBtn.forEach(btn=>{
    btn.addEventListener('click',(e)=>{
        console.log(e.target.dataset.status);
        gStatusBtn.forEach(btn=>{
            btn.classList.remove("active");    
        })
        e.target.classList.add("active");
        statusAtiveBtn=e.target.dataset.status;
        if(e.target.dataset.status=="All") {showGrivance(allGrievances); return};
        let filterGrievance=allGrievances.filter(g=>e.target.dataset.status==g.status);
        console.log(filterGrievance);
        showGrivance(filterGrievance);
    })
})

// console.log(grienvanceBox);

// const readMoreBtn=document.querySelectorAll('.readmore-btn');
// readMoreBtn[0].addEventListener('click',(e)=>{
//     e.target.parentElement.querySelector('.g-d-box').style.display="block";
// })




window.addEventListener('DOMContentLoaded',async ()=>{

    let response = await fetch(`./application/getGrievance.php`);
    let result = await response.json();
    allGrievances=result;
    console.log(result);
    // if(result==="Record Delete Successfully")
    // {
    //     displayAlert(result, "danger", 3000);
    //     studentForm.reset();         
    // }   
    // else
    // {
    //     displayAlert(result, "danger", 3000);

    // }
    showGrivance(result);

    
    

})

function showFollowupForm(e){
    console.log("helo");
    hideDialogBox();
    let gid=e.target.dataset.gid
    let followpform=`<div class="followup-container">
                            <div class="followup-form">
                                <h2>Add FollowUp</h2>
                                <select name="Status" class="form-control" id="g-status">
                                    <option value="" selected>Select Grievance Status</option>
                                    <option value="Solved">Solved</option>
                                    <option value="Rejected">Rejected</option>
                                </select>                                
                                <textarea name="" class="form-control" id="followup-textarea" cols="90" rows="8"></textarea>
                                <div class="btns">
                                    <button class="btn btn-light cancle-btn">Cancle</button>
                                    <button class="btn save-btn btn-primary" data-gid=${gid}>Save</button>
                                </div>
                            </div>
                        </div>
                    `
    followupBox.innerHTML=followpform;
    var cancleBtn=document.querySelector('.cancle-btn');                
    cancleBtn.addEventListener('click',hideFollowupForm)
    var saveFollowBtn=document.querySelector('.save-btn');                
    saveFollowBtn.addEventListener('click',saveFollowup);

}


function hideFollowupForm(){
    followupBox.innerHTML="";
}

async function saveFollowup(e){
    var gid=e.target.dataset.gid
    console.log(gid);

    var followupData=new FormData()
    followupData.append('gid', gid);
    var followupText=document.getElementById('followup-textarea').value;                
    
    followupData.append('followup', followupText);
    // console.log(followupData);

    followupData.append('status',document.getElementById('g-status').value);
    console.log(followupData);

    let response = await fetch('./application/updateGrievance.php', {
        method: 'POST',
        body: followupData
    });      
    let result = await response.text();
    console.log(result);
    if(result=='updated'){
        allGrievances.forEach(grivance=>{
            if(gid==grivance.grievanceid) {
                grivance.addnote=followupText
                grivance.status=followupData.get('status');
                console.log("matched");
            }
            // console.log(gid+":"+grivance.grievanceid);
        })
        if(statusAtiveBtn=="All") {showGrivance(allGrievances); hideFollowupForm(); return};
        let filterGrievance=allGrievances.filter(g=>g.status==statusAtiveBtn);
        console.log(filterGrievance);
        showGrivance(filterGrievance);

        // showGrivance(allGrievances)
        // console.log(allGrievances);
        hideFollowupForm();
    
    }
    // console.log(allGrievances);
    
}

async function showTranferDialog(e){
    console.log("helo");
    hideDialogBox();
    let gid=e.target.dataset.gid
    let response = await fetch('./application/getUser.php');      
    let result = await response.json();
  	console.log(result)
    let userDiv='';
    result.forEach(userObj=>{
        userDiv+=`<div class="user-input"><input type="radio" class="form-check-input" name="handlerid" value="${userObj.mailid}" id="${userObj.mailid}"><label for="${userObj.mailid}">${userObj.name}</label></div>`;
    })


    let tranferDialogBox=` 
                <form action="" name="tranferForm">
                <div class="t-box-container">
                    <div class="t-form">
                        <div class="head"><h6>Select User</h6></div>
                        <div class="user-name">
                               ${userDiv} 
                           
                            
                        </div>

                        <div class="btn">
                            <button class="btn btn-light cancle-btn">Cancle</button>
                            <button class="btn btn-primary assign-btn" data-gid=${gid}>Assign</button>
                        </div>

                        
                    </div>

                </div>
                </form>

                    `
    tranferBox.innerHTML=tranferDialogBox;
    var cancleBtn=document.querySelector('.cancle-btn');                
    cancleBtn.addEventListener('click',hideTranferDialogBox)
    var tranferBtn=document.querySelector('.assign-btn');                
    tranferBtn.addEventListener('click',tranferGrievance);

}
function hideTranferDialogBox(e){
    // e.preventDeafult();
    tranferBox.innerHTML="";
}
async function tranferGrievance(e){
    var gid=e.target.dataset.gid
    console.log(gid);
    // console.log("hello");
    e.preventDefault();
    var tranferData=new FormData(tranferForm)
    tranferData.append('gid',gid)
    for (var value of tranferData.entries()) {
        console.log(value[0]+" "+value[1]);
     }
    let response = await fetch('./application/updategrievancehandler.php', {
        method: 'POST',
        body: tranferData
    });      
    let result = await response.text();
    console.log(result);
    if(result=='updated'){
        allGrievances=allGrievances.filter(g=>gid!=g.grievanceid)
        
        
        showGrivance(allGrievances)
        console.log(allGrievances);
        hideTranferDialogBox();
    
    }
    // console.log(allGrievances);
    
}




function hideDialogBox(){
    const dialogbox=document.querySelectorAll('.dialog-box');
        dialogbox.forEach(dbox=>{
            dbox.style.display="none";
            
        });

}




function showGrivance(grivances){
    console.log(grivances);
    tableElem.getElementsByTagName('tbody')[0].remove();
    
    tablebody=document.createElement('tbody');
    grivances.forEach(grievance => {
        record=`<tr class="record align-middle">
                    <td scope="row" >${grivances.indexOf(grievance)+1}</td>
                    <td ><div class="g-details-link" data-gID="${grievance.grievanceid}"><a href="#">${grievance.grievanceid}</a></div></td>
                    <td>${grievance.studentname}</td>
                    <td>${grievance.email}</td>
                    <td>${grievance.mobileno}</td>
                    <td>${grievance.grievancename}</td>
                    <td width="200px">${grievance.grievancediscription.substring(1, 40)}
                        <button class="btn btn-outline-primary norrow-btn readmore-btn">Read more</button>
                        <div class="g-d-box dialog-box"><div class="inner-box ">${grievance.grievancediscription}</div></div>
                    </td>
                   
                    <td>${grievance.Createdon}</td>
                    <td><button class="btn btn-outline-info btn-sm tranfer-btn" data-gid=${grievance.grievanceid}>Tranfer To</button></td>
                    <td> <button class="btn btn-outline-primary norrow-btn note-btn">Show</button>
                           <br> 
                           <button class="btn btn-outline-success followup-btn norrow-btn" data-gid=${grievance.grievanceid}>Add Follow Up</button>
                          <div class="f-d-box dialog-box"><div class="followup-inner-box">${grievance.addnote}</div>
                    </td>
                    

                
                
                </tr>

                `
        tablebody.innerHTML+=record;
        
    });

    
    // tableElem.innerHTML+=`</tbody>`;
    tableElem.appendChild(tablebody);

    const GrievanceDetailsLinks=document.querySelectorAll(" .g-details-link");
    GrievanceDetailsLinks.forEach(link=>{
        link.addEventListener('click',(e)=>{
            e.preventDefault();
            const gDialogBox=document.querySelector('.ig-dialogbox')
                   const gid=e.currentTarget.dataset.gid  
                    console.log(gid);
                    const clickedGrievance=allGrievances.find((g)=>{
                        if(g.grievanceid===gid)
                            return g
                    })
                    // console.log(clickedGrievance);

                    gDialogBox.innerHTML=`
                            <div class="Grievance-Details-Form">
                                <div class="ig-box">
                                    <h4 class="title">Grievance Dtails</h4>
                                    <div class="personal-Details">
                                        <h5>Enrollment No</h5><p>${clickedGrievance.enrollmentno}</p>
                                        <h5>Candidate Name</h5><p>${clickedGrievance.studentname}</p>
                                        <h5>Emailid</h5><p>${clickedGrievance.email}</p>
                                        <h5>Gender</h5><p>${clickedGrievance.gender}</p>
                                        <h5>Mobile no</h5><p>${clickedGrievance.mobileno}</p>
                                        <h5>Regional Centre</h5><p>${clickedGrievance.regionalcenter}</p>
                                        <h5>Programme</h5><p>${clickedGrievance.programme}</p>
                                        <h5>Address</h5><p>${clickedGrievance.address} ${clickedGrievance.city} ${clickedGrievance.state} ${clickedGrievance.pincode} </p>
                                        <h5>Assigned to</h5><p>${clickedGrievance.assignedto}</p>
                                        <h5>Date of Grievance</h5><p>${clickedGrievance.Createdon}</p>
                                        <h5>Status</h5><p>${clickedGrievance.status}</p>
                                        <h5>Grievance Category</h5><p>${clickedGrievance.grievancecategory}</p>
                                        <h5>Grievance related to</h5><p>${clickedGrievance.grievancename}</p>
                                    </div>
                                    <div class="g-Details">

                                        <h5>Grievance Discription</h5><p>${clickedGrievance.grievancediscription}</p>
                                        <h5>Proposed Solution</h5><p>${clickedGrievance.solution}</p>
                                        <h5>Follow-up Note</h5><p>${clickedGrievance.addnote}</p>
                                    </div>


                                    
                                </div>
                            </div>
                    `
                const igBack=document.querySelector('.Grievance-Details-Form');
                igBack.addEventListener('click',(e)=>{
                    const back=document.querySelector('.Grievance-Details-Form');
                    if(e.target===back)
                        gDialogBox.innerHTML=""
                })


            // console.log("hello");
        })
    })


    const noteBtns=document.querySelectorAll('.note-btn');
    noteBtns.forEach(btn=>{
        btn.addEventListener('click',(e)=>{
            // const followupBoxs=document.querySelectorAll('.dialog-box');
            // followupBoxs.forEach(fbox=>{
            //     fbox.style.display="none";    
            // });
            hideDialogBox();
            noteBtns.forEach(btn=>{
                if(e.target!=btn)
                    btn.innerHTML="Show";
            })


            
            console.log(e.target.innerHTML);
            
            if(e.target.innerHTML=="hide"){
                e.target.parentElement.querySelector('.f-d-box').style.display="none";
                e.target.innerHTML="Show";
            }else{
                e.target.parentElement.querySelector('.f-d-box').style.display="block";
                e.target.innerHTML="hide";
            }


        })
    })

    const readMoreBtn=document.querySelectorAll('.readmore-btn');
    //   console.log(readMoreBtn);

    // Add event listener to All Read more Btn
    readMoreBtn.forEach(btn=>{
        btn.addEventListener('click',(e)=>{

            hideDialogBox();           
            readMoreBtn.forEach(btn=>{
                if(e.target!=btn)
                    btn.innerHTML="read more";
            })


            
            console.log(e.target.innerHTML);
            
            if(e.target.innerHTML=="read less"){
                e.target.parentElement.querySelector('.g-d-box').style.display="none";
                e.target.innerHTML="read more";
            }else{
                e.target.parentElement.querySelector('.g-d-box').style.display="block";
                e.target.innerHTML="read less";
            }

            // compStyles = window.getComputedStyle(grienvanceBox)
    
            // e.target.innerHTML="read less";
                // console.log("hello");
        })

    })

    // Adding Event Listener to all Show Btn


    // Adding Event Listener to all Add followup Btn
    const followupBtns=document.querySelectorAll('.followup-btn');
    followupBtns.forEach(btn=>{
        btn.addEventListener('click',showFollowupForm)
    })

    // const bodyElem=document.querySelector('.body');
    // bodyElem.addEventListener('click',()=>{
    //     hideDialogBox();
    //     console.log("helloe");
    // });   

    const tranferBtn=document.querySelectorAll('.tranfer-btn');
    tranferBtn.forEach(btn=>{
        btn.addEventListener('click',showTranferDialog)
    })

    
}