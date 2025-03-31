let educationCount = 1;
document.getElementById('add-education').addEventListener('click', function() {
    const educationContainer = document.getElementById('education-container');
    const newEducation = `
    <div class="education-group">
        <hr>
        <div class="mb-3">
            <label for="major" class="form-label">Major</label>
            <input type="text" class="form-control" name="education[major][${educationCount}]" placeholder="Enter your qualification">
        </div>
        <div class="mb-3">
            <label for="institution" class="form-label">University Name</label>
            <input type="text" class="form-control" name="education[institution][${educationCount}]" placeholder="Enter university name">
        </div>
    </div>`;
    educationContainer.insertAdjacentHTML('beforeend', newEducation);
    educationCount++;
});

let experienceIndex = 1;
document.getElementById('addExperience').addEventListener('click', function() {
    const experienceContainer = document.getElementById('experience-container');
    const newExperience = `
    <div class="experience-group">
        <hr>
        <div class="mb-3">
            <label for="jobTitle" class="form-label">Job Title</label>
            <input type="text" class="form-control" name="experiences[jobTitle][${experienceIndex}]" placeholder="Enter your job title">
        </div>
        <div class="mb-3">
            <label for="companyName" class="form-label">Company Name</label>
            <input type="text" class="form-control" name="experiences[companyName][${experienceIndex}]" placeholder="Enter company name">
        </div>
        <div class="mb-3">
            <label for="jobDescription" class="form-label">Job Description</label>
            <textarea class="form-control" name="experiences[jobDescription][${experienceIndex}]" rows="4" placeholder="Describe your job responsibilities"></textarea>
        </div>
        <div class="mb-3">
            <label for="start" class="form-label">Start Date</label>
            <input type="date" class="form-control" name="experiences[start][${experienceIndex}]" placeholder="">
        </div>
        <div class="mb-3">
            <label for="end" class="form-label">End Date</label>
            <input type="date" class="form-control" name="experiences[end][${experienceIndex}]" placeholder="">
        </div>
    </div>`;
    experienceContainer.insertAdjacentHTML('beforeend', newExperience);
    referenceIndex++;
});

let referenceIndex = 1;
document.getElementById('addReference').addEventListener('click', function() {
    const referencesContainer = document.getElementById('references-container');
    const newReferences = `
    <div class="references-group">
        <hr>
        <div class="mb-3">
            <label for="references" class="form-label">Reference Name</label>
            <input type="text" name="references[name][${referenceIndex}]" class="form-control" placeholder="Enter Reference Name">
        </div>
        <div class="mb-3">
            <label for="references-job" class="form-label">Job</label>
            <input type="text" name="references[job][${referenceIndex}]" class="form-control" placeholder="Enter Reference Job">
        </div>
        <div class="mb-3">
            <label for="references-phone" class="form-label">Phone</label>
            <input type="text" name="references[phone][${referenceIndex}]" class="form-control" placeholder="Enter Reference Phone">
        </div>
        <div class="mb-3">
            <label for="references-email" class="form-label">Email</label>
            <input type="email" name="references[email][${referenceIndex}]" class="form-control" placeholder="Enter Reference Email">
        </div>
    </div>`;
    referencesContainer.insertAdjacentHTML('beforeend', newReferences);
    referenceIndex++;
});