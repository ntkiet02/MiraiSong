@extends('layouts.frontend')
@section('title', User Profile)
@section('content')

<div class="profile-container">
    <div class="profile-header">User Profile</div>
    <div class="profile-picture" id="profilePictureContainer">
        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Picture" id="profilePicture">
    </div>
    <div class="profile-info">
        <label for="inputUsername">Tên đăng nhập:</label>
        <p id="inputUsername">username</p>

        <label for="inputName">Họ và tên:</label>
        <p id="inputName">John Doe</p>

        <label for="inputEmail">Email:</label>
        <p id="inputEmail">john.doe@example.com</p>

        <label for="inputBirthdate">Ngày tháng năm sinh:</label>
        <p id="inputBirthdate">01/01/1990</p>

        <label for="inputPhone">Số điện thoại:</label>
        <p id="inputPhone">555-123-4567</p>
    </div>

    <button class="edit-profile-btn" onclick="editProfile()">Chỉnh sửa thông tin</button>
    <button class="save-changes-btn" onclick="saveChanges()">Lưu thay đổi</button>

    <div id="editProfileForm" style="display: none;">
        <label for="editName">Họ và tên:</label>
        <input type="text" id="editName" placeholder="Nhập họ và tên">

        <label for="editEmail">Email:</label>
        <input type="email" id="editEmail" placeholder="Nhập địa chỉ email">

        <label for="editBirthdate">Ngày tháng năm sinh:</label>
        <input type="date" id="editBirthdate">

        <label for="editPhone">Số điện thoại:</label>
        <input type="tel" id="editPhone" placeholder="Nhập số điện thoại">

        <label for="editPicture">Thay đổi ảnh đại diện:</label>
        <input type="file" id="editPicture" accept="image/*">
    </div>
</div>

<script src="script.js"></script>

</body>
</html>

@endsection