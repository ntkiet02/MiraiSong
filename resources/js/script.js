function editProfile() {
    document.getElementById('editProfileForm').style.display = 'block';
    document.querySelector('.edit-profile-btn').style.display = 'none';
    document.querySelector('.save-changes-btn').style.display = 'inline-block';
    document.querySelector('.profile-container').classList.add('editing');
}

function saveChanges() {
    document.getElementById('inputName').textContent = document.getElementById('editName').value;
    document.getElementById('inputEmail').textContent = document.getElementById('editEmail').value;
    document.getElementById('inputBirthdate').textContent = document.getElementById('editBirthdate').value;
    document.getElementById('inputPhone').textContent = document.getElementById('editPhone').value;

    // Change profile picture
    var profilePictureInput = document.getElementById('editPicture');
    if (profilePictureInput.files.length > 0) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profilePicture').src = e.target.result;
        };
        reader.readAsDataURL(profilePictureInput.files[0]);
    }

    // Reset form and hide it
    document.getElementById('editProfileForm').reset();
    document.getElementById('editProfileForm').style.display = 'none';
    document.querySelector('.edit-profile-btn').style.display = 'inline-block';
    document.querySelector('.save-changes-btn').style.display = 'none';
    document.querySelector('.profile-container').classList.remove('editing');
}
