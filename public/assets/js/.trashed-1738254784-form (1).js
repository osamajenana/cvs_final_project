  

//  this code for form 

 // Add new education group 

    const educationContainer = document.getElementById('education-container');

document.getElementById('add-education').addEventListener('click', function() {
  const newEducation = `
    <div class="education-group">
    <hr>
      <div class="mb-3">
        <label for="education" class="form-label">Major</label>
        <input type="text" class="form-control" placeholder="Enter your qualification">
      </div>
      <div class="mb-3">
        <label for="institution" class="form-label">University Name</label>
        <input type="text" class="form-control uni-name" placeholder="Enter institution name">
      </div>
    </div>
  `;
  educationContainer.insertAdjacentHTML('beforeend', newEducation);
});
    
    const experienceContainer = document.getElementById('experience-container');

    // Add new experience group
    document.getElementById('addExperience').addEventListener('click', function () {
        const newExperience = `
            <div class="experience-group">
                <hr>
                <div class="mb-3">
                    <label for="jobTitle" class="form-label">Job Title</label>
                    <input type="text" class="form-control" name="jobTitle[]" placeholder="Enter your job title">
                </div>
                <div class="mb-3">
                    <label for="companyName" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="companyName[]" placeholder="Enter company name">
                </div>
                <div class="mb-3">
                    <label for="jobDescription" class="form-label">Job Description</label>
                    <textarea class="form-control" name="jobDescription[]" rows="4" placeholder="Describe your job responsibilities"></textarea>
                </div>
                <div class="mb-3">
                    <label for="start" class="form-label">Start Date</label>
                    <input type="date" class="form-control" name="start[]" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="end" class="form-label">End Date</label>
                    <input type="date" class="form-control" name="end[]" placeholder="">
                </div>
            </div>`;
        experienceContainer.insertAdjacentHTML('beforeend', newExperience);
    });

    
    const referencesContainer = document.getElementById('references-container');
    document.getElementById('addRefernce').addEventListener('click', function(){
      const newReferences =`
       <div class="references-group">
       <hr>
        <div class="mb-3">
            <label for="references" class="form-label">List Your References</label>
            <input type="text" name="references[]" class="form-control"  placeholder="Enter Your Reference Name">
        </div>
         <div class="mb-3">
            <label for="references-job" class="form-label">Job</label>
            <input type="text" name="refJob[]" class="form-control"  placeholder="Enter The Reference Job">
        </div>
         <div class="mb-3">
            <label for="references-phone" class="form-label">Phone</label>
            <input type="text" name="refPhone[]" class="form-control" placeholder="Enter The Reference Phone">
        </div>
         <div class="mb-3">

            <label for="references-email" class="form-label">Email</label>

            <input type="text" name="references-email[]" class="form-control" id="references-email" placeholder="Enter The Reference email">
        </div>
        </div>
       </div> ` ;
       referencesContainer.insertAdjacentHTML('beforeend',newReferences);
    });

