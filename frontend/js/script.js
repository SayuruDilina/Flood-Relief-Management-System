console.log("test update");

function registerUser() {
    console.log("function reached");
    console.log("test");

    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm_password").value;
    const fullname = document.getElementById("fullname").value.trim();
    const contact_number = document.getElementById("contact_number").value.trim();
    const email = document.getElementById("email").value.trim();
    const NIC = document.getElementById("NIC").value.trim();
    const gender = document.getElementById("gender").value;
    const street_address = document.getElementById("street_address").value.trim();
    const city = document.getElementById("city").value.trim();
    const district = document.getElementById("district").value;
    const province = document.getElementById("province").value;
    const DOB = document.getElementById("DOB").value;

    if (!username || !password || !fullname || !contact_number || !email || 
        !NIC || !gender || !street_address || !city || !district || !province || !DOB) {
        alert("Please fill in all fields");
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
    }

    const payload = {
        username,
        password,
        fullname,
        contact_number,
        email,
        NIC,
        gender,
        street_address,
        city,
        district,
        province,
        DOB
    };

    console.log("JSON being sent:", payload);
   fetch("http://localhost/flood-Relief-Management-System/backend/user_authentication/registration.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        console.log("Server response:", data)
        
        if (data.status === "ok") {
          
          alert(data.message);
          window.location.href = "../authentication/login.php"; 
        }else{
            alert(data.message);
        }
    })
    .catch(error => {
        console.error("Fetch error:", error);
   
    });
}

function login(){

const username=document.getElementById("username").value;
const password=document.getElementById("password").value;
const payload={
    username:username,
    password:password
}
    fetch("http://localhost/flood-Relief-Management-System/backend/user_authentication/login.php",{
        method:"POST",
        headers:{
            "Content-Type":"application/json"
        },
        body:JSON.stringify(payload)
    }).then(response=>response.json())
    .then(data=>{
        console.log(data);
        if(data.status=="success"){
            
        alert(data.message);
        if(data.role=="admin"){
            window.location.href = "../admin/admin.php";
        }else{
          
        window.location.href = "../user/home.php"; 
          
        }
   
       
        }else{
            alert(data.message);
        }
    })
}
function setUserProfileInfro(){
    fetch("http://localhost/flood-Relief-Management-System/backend/user_management/update_user_profile.php")
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        document.getElementById("hn-brand-title").innerHTML=data.user.fullname;
        document.getElementById("fullname").value=data.user.fullname;
        document.getElementById("contact_number").value=data.user.contact_number;
        document.getElementById("email").value=data.user.email;
        document.getElementById("NIC").value=data.user.NIC;
        document.getElementById("gender").value=data.user.gender;
        document.getElementById("street_address").value=data.user.street_address;
        document.getElementById("city").value=data.user.city;
        document.getElementById("district").value=data.user.district;
        document.getElementById("province").value=data.user.province;
        document.getElementById("DOB").value=data.user.DOB;
    })
}

function updateProfile(){
   
   
    const fullname = document.getElementById("fullname").value.trim();
    const contact_number = document.getElementById("contact_number").value.trim();
    const email = document.getElementById("email").value.trim();
    const NIC = document.getElementById("NIC").value.trim();
    const gender = document.getElementById("gender").value;
    const street_address = document.getElementById("street_address").value.trim();
    const city = document.getElementById("city").value.trim();
    const district = document.getElementById("district").value;
    const province = document.getElementById("province").value;
    const DOB = document.getElementById("DOB").value;

    if ( !fullname || !contact_number || !email || 
        !NIC || !gender || !street_address || !city || !district || !province || !DOB) {
        alert("Please fill in all fields");
        return;
    }

    

    const payload = {
       
        fullname,
        contact_number,
        email,
        NIC,
        gender,
        street_address,
        city,
        district,
        province,
        DOB
    };

    console.log("JSON being sent:", payload);
   fetch("http://localhost/flood-Relief-Management-System/backend/user_management/update_user_profile.php", {
        method: "PUT",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        console.log("Server response:", data)
        
        if (data.status === "ok") {
          
          alert(data.message);
         window.location.href = "../user/home.php"; 
        }else{
            alert(data.message);
        }
    })
    .catch(error => {
        console.error("Fetch error:", error);
   
    });
}

function createReliefRequest(){
   // const user_id=1;
    const type_of_relief = document.getElementById("type_of_relief").value.trim();
    console.log(type_of_relief);
    const devisional_secretariat= document.getElementById("devisional_secretariat").value.trim();
    const gn_devision = document.getElementById("gn_devision").value;
  
    console.log(gn_devision);
    
    const contact_person_name = document.getElementById("contact_person_name").value.trim();
    const contact_number = document.getElementById("contact_number").value.trim();
    const address = document.getElementById("address").value.trim();
    const num_of_family_members = document.getElementById("num_of_family_members").value.trim();
    const flood_level = document.getElementById("flood_level").value.trim();
    const description = document.getElementById("description").value.trim();
     const district = document.getElementById("district").value;
   
    
    const payload = {
       // user_id,
        type_of_relief,
        devisional_secretariat,
        gn_devision,
        contact_person_name,
        contact_number,
        address,
        num_of_family_members,
        flood_level,
        description,
        district
    };

    console.log("JSON being sent:", payload);
   fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/user_relief_request.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        console.log("Server response:", data)
        
        if (data.status === "ok") {
          
          alert(data.message);
          
        }else{
            alert(data.message);
        }
    })
    .catch(error => {
        console.error("Fetch error:", error);
   
    });

    

}
function getAllReliefRequestSpecificUser(){
   // const user_id=1;
    fetch(`http://localhost/flood-Relief-Management-System/backend/relief_management/user_relief_request.php`,{
        method:"GET"
    }).then(response=>response.json())
    .then(data=>{
        console.log(data);
        const reliefRContainer=document.getElementById("reliefRContainer");
        reliefRContainer.innerHTML="";
       data.forEach(relief_request=>{
      
        const editModalId = `editModal_${relief_request.relief_id}`;
        const deleteModalId = `deleteModal_${relief_request.relief_id}`;
        
        if (relief_request.current_status === "pending") {
    statusColor = "yellow";
} 
else if (relief_request.current_status === "viewed") {
    statusColor = "limegreen";
}
        reliefRContainer.innerHTML+=`
        <div class="hn-card-container">
            <div class="relief-card">
                <div class="card-header">
                    <span class="relief-type">${relief_request.type_of_relief}</span>
                    <span class="status" style="color: ${statusColor}">
                        ${relief_request.current_status}
                    </span>
                    <span id="flood_level" class="status high">${relief_request.flood_level}</span>
                </div>

                <div class="card-body">
                    <p>District: ${relief_request.district}</p>
                    <p>Divisional Secretariat: ${relief_request.divisional_secretariat}</p>
                    <p>GN Division: ${relief_request.gn_division}</p>
                    <p>Family Members: ${relief_request.num_of_family_members}</p>
                    <p class="description">Description: ${relief_request.description}</p>
                    <p class="description">Address: ${relief_request.address}</p>
                    <p class="description">Contact Person: ${relief_request.contact_person_name}</p>
                    <p class="description">Contact Number: ${relief_request.contact_number}</p>
                </div>

                <div class="card-actions">
                    <button type="button" class="btn btn-primary rounded-pill px-5"
                            data-bs-toggle="modal"
                            data-bs-target="#${editModalId}">
                        Edit
                    </button>

                    <button type="button" class="btn btn-danger rounded-pill px-5"
                            data-bs-toggle="modal"
                            data-bs-target="#${deleteModalId}">
                        Delete
                    </button>
                </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="${editModalId}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header custom-header">
                            <h5 class="modal-title">Edit Relief Request</h5>
                            <button type="button" class="btn-close btn-close-white"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form>
                                <h6 class="section-title fw-bold mb-3">Request Details</h6>
                                
                                <input type="hidden" id="relief_id_${relief_request.relief_id}" value="${relief_request.relief_id}">
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Relief Type</label>
                                        <input type="text" class="form-control" id="type_of_relief_${relief_request.relief_id}" value="${relief_request.type_of_relief}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">District</label>
                                        <input type="text" class="form-control" id="district_${relief_request.relief_id}" value="${relief_request.district}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Divisional Secretariat</label>
                                        <input type="text" class="form-control" id="devisional_secretariat_${relief_request.relief_id}" value="${relief_request.divisional_secretariat}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">GN Division</label>
                                        <input type="text" class="form-control" id="gn_devision_${relief_request.relief_id}" value="${relief_request.gn_division}">
                                    </div>
                                </div>

                                <hr>
                                <h6 class="section-title fw-bold mb-3">Household Details</h6>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Contact Person Name</label>
                                        <input type="text" class="form-control" id="contact_person_name_${relief_request.relief_id}" value="${relief_request.contact_person_name}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Contact Number</label>
                                        <input type="text" class="form-control" id="contact_number_${relief_request.relief_id}" value="${relief_request.contact_number}">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Address</label>
                                    <input type="text" class="form-control" id="address_${relief_request.relief_id}" value="${relief_request.address}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">No of Family Members</label>
                                    <input type="number" class="form-control" id="num_of_family_members_${relief_request.relief_id}" value="${relief_request.num_of_family_members}">
                                </div>

                                <hr>
                                <h6 class="section-title fw-bold mb-3">Flood Severity Level</h6>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Level</label>
                                    <select class="form-select" id="flood_level_${relief_request.relief_id}">
                                        <option value="Low" ${relief_request.flood_level === 'Low' ? 'selected' : ''}>Low</option>
                                        <option value="Medium" ${relief_request.flood_level === 'Medium' ? 'selected' : ''}>Medium</option>
                                        <option value="High" ${relief_request.flood_level === 'High' ? 'selected' : ''}>High</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Description</label>
                                    <textarea class="form-control" rows="3" id="description_${relief_request.relief_id}">${relief_request.description}</textarea>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary rounded-pill px-5" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary rounded-pill px-5" onclick="updateSpecificReliefRequest(${relief_request.relief_id})">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="${deleteModalId}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title">Confirm Delete</h5>
                            <button type="button" class="btn-close btn-close-white"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body text-center">
                            <p style="font-size:18px;">
                                Are you sure you want to delete this relief request?
                            </p>
                            <p class="text-muted">This action cannot be undone.</p>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary rounded-pill px-5" data-bs-dismiss="modal">
                                No
                            </button>
                            <button type="button" class="btn btn-danger rounded-pill px-5" onclick="deleteSpecificReliefRequest(${relief_request.relief_id})">
                                Yes, Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
    });

    });

}

function updateSpecificReliefRequest(relief_id) {
   
    const type_of_relief = document.getElementById(`type_of_relief_${relief_id}`).value.trim();
    const devisional_secretariat = document.getElementById(`devisional_secretariat_${relief_id}`).value.trim();
    const gn_devision = document.getElementById(`gn_devision_${relief_id}`).value.trim();
    const contact_person_name = document.getElementById(`contact_person_name_${relief_id}`).value.trim();
    const contact_number = document.getElementById(`contact_number_${relief_id}`).value.trim();
    const address = document.getElementById(`address_${relief_id}`).value.trim();
    const num_of_family_members = document.getElementById(`num_of_family_members_${relief_id}`).value.trim();
    const flood_level = document.getElementById(`flood_level_${relief_id}`).value.trim();
    const description = document.getElementById(`description_${relief_id}`).value.trim();
    const district = document.getElementById(`district_${relief_id}`).value;

    const payload = {
        relief_id,
        user_id,
        type_of_relief,
        devisional_secretariat,
        gn_devision,
        contact_person_name,
        contact_number,
        address,
        num_of_family_members,
        flood_level,
        description,
        district
    };

    fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/user_relief_request.php", {
        method: "PUT",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(payload)
    })
    .then(response => response.json())
    .then(data => {
        if(data.status == "ok"){
            alert(data.message);
              bootstrap.Modal.getInstance(document.getElementById(`editModal_${relief_id}`)).hide();
            getAllReliefRequestSpecificUser();
        } else {
            alert(data.message);
        }
    });
}
function deleteSpecificReliefRequest(relief_id) {
    fetch(`http://localhost/flood-Relief-Management-System/backend/relief_management/user_relief_request.php?relief_id=${relief_id}`, {
        method: "DELETE"
    })
    .then(response => response.json())
    .then(data => {
        if(data.status == "ok"){
            alert(data.message);
            bootstrap.Modal.getInstance(document.getElementById(`deleteModal_${relief_id}`)).hide();
            getAllReliefRequestSpecificUser();
        } else {
            alert(data.message);
        }
    });
}

function logOut(){
    fetch("http://localhost/flood-Relief-Management-System/backend/user_authentication/logout.php")
    .then(response => response.json())
    .then(data => {
        if(data.status == "ok"){
            alert(data.message);
            window.location.href = "../authentication/login.php";
        } else {
            alert(data.message);
        }
    });
}

function getAllPendingRequests() {

    fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/high_risks_relief_requests.php")
    .then(response=>response.json())
    .then(data => {
        console.log(data);
const highPendingRequestsTable=document.getElementById("highPendingRequestsTable");
highPendingRequestsTable.innerHTML="";

data.forEach(relief_request => {

    highPendingRequestsTable.innerHTML+=`
    <tr>

    <td>${relief_request.type_of_relief}</td>
    <td>${relief_request.divisional_secretariat}</td>
    <td>${relief_request.gn_division}</td>
    <td>${relief_request.contact_person_name}</td>
    <td>${relief_request.contact_number}</td>
    <td>${relief_request.address}</td>
    <td>${relief_request.num_of_family_members}</td>
    <td>${relief_request.description}</td>
    <td>${relief_request.district}</td>
    <td>${relief_request.current_status}</td>
    <td>${relief_request.created_at}</td>
    <td> <button type="button" class="btn btn-primary rounded-pill px-4" onclick="takeActionRequest(${relief_request.relief_id})"> accept</button></td>
         
     </tr>
    `;
    
})

    })
   
}

function takeActionRequest(relief_id){
    console.log(relief_id);
    
    fetch(`http://localhost/flood-Relief-Management-System/backend/relief_management/admin_relief_request.php?relief_id=${relief_id}`,{
        method:'PUT'
    })
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        if(data.status=="ok"){
            alert(data.message);
            getAllPendingRequests();
        }else{
            alert(data.message);
        }
    })
}

function  totalUserCount(){
console.log("totUser");

    fetch("http://localhost/flood-Relief-Management-System/backend/user_management/total_user_count.php")
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        document.getElementById("totalUsers").innerText=data.total_users;
    })
}

function pendingReliefRequestCount(){
    fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/pending_relief_request_count.php")
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        document.getElementById("pendingRequests").innerText=data.pending_cases;
    })
}

function highSeverityCasesCount(){
    fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/high_flood_count.php")
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        document.getElementById("highSeverityCases").innerText=data.total_cases;
    })
}
function totalReliefRequestCount(){
    fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/total_relief_requests_count.php")
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        document.getElementById("totalRequests").innerText=data.total_cases;
    })
}

function getAllReleifRequests(){
    fetch("http://localhost/flood-Relief-Management-System/backend/relief_management/admin_relief_request.php")
    .then(response=>response.json())
    .then(data=>{
        console.log(data);

       const allRequestsTable=document.getElementById("allRequestsTable");
allRequestsTable.innerHTML="";

data.forEach(relief_request => {

    allRequestsTable.innerHTML+=`
    <tr>

    <td>${relief_request.type_of_relief}</td>
    <td>${relief_request.divisional_secretariat}</td>
    <td>${relief_request.gn_division}</td>
    <td>${relief_request.contact_person_name}</td>
    <td>${relief_request.contact_number}</td>
    <td>${relief_request.address}</td>
    <td>${relief_request.num_of_family_members}</td>
    <td>${relief_request.description}</td>
    <td>${relief_request.district}</td>
    <td>${relief_request.current_status}</td>
    <td>${relief_request.created_at}</td>
      <td>${relief_request.user_id}</td>
    
    <td> <button type="button" class="btn btn-primary rounded-pill px-4" onclick="takeActionRequest(${relief_request.relief_id})"> ${relief_request.current_status}</button></td>
         
     </tr>
    `;
    
}) 
    })
}

function forgotPassword(){

    const username=document.getElementById("username").value;
    const password=document.getElementById("newPassword").value;
   const NIC=document.getElementById("NIC").value;
console.log(username);
console.log(password);
console.log(NIC);



   if(!username || !password || !NIC){
    alert("Please fill in all fields");
    return;
   }
    const payload={
        username,
        password,
        NIC
    }
    console.log(payload);
    

    fetch("http://localhost/flood-Relief-Management-System/backend/user_authentication/fogot_password.php",{
        method:"PUT",
        headers:{
            "Content-Type":"application/json"
        },
        body:JSON.stringify(payload)
    })
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        if(data.status=="ok"){
            alert(data.message);
        }else{
            alert(data.message);
        }
    })
}
document.addEventListener("DOMContentLoaded", () => {
    getAllReliefRequestSpecificUser();
    getAllPendingRequests();
    totalUserCount();
    pendingReliefRequestCount();
    highSeverityCasesCount();
    totalReliefRequestCount();
    getAllReleifRequests();
      setUserProfileInfro();
});

