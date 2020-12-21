# WELCOME TO `Google-classroom-clone`

<p align = "center">
  <img src = "./sign_up_in/image/icon.png" width = "120" height = "100"/>
</p>

## Project Description
* This is my Google Classroom Clone which is just Google Classroom itself but with my features :laughing:
* The project will focus on everything required in [`description.pdf`](description.pdf)
* Framework I used: Boostrap 4

## Project backlog

- [x] Login - Logout - Signup - Forgot password
  - [x] Login
  - [x] Signup
  - [x] Logout
  - [x] Forgot password 
  - [x] Email verification
- [x] User privileges 
  - [x] Admin
  - [x] Teacher
  - [x] Student
- [ ] Classroom interaction
  - [x] Create classs
  - [x] Delete class
  - [x] Edit class
  - [ ] Search class
- [ ] Classroom management
  - [ ] For teachers
    - [x] View Student list
    - [ ] Add students
    - [ ] Remove students
    - [x] Post News, documents, images
    - [x] Remove News, documents, images
    - [x] Comment on news
    - [ ] Delete comments
    - [o] Create assignments - *reduced*
    - [x] View classes list
  - [ ] For students
    - [x] Join class using class code
    - [x] View class list
    - [x] View news
    - [ ] Download images
    - [ ] Download documents
    - [x] Comment on news
- [x] Responsive web design
- [o] Email notification, Password hashing - *reduced*

## Change logs: 
  - There are some minor errors in `TrangNguoiDung.php` from `Trang_giao_vien` folder:
    - Fix `delete_posts.php` when it cannot return to the right class id
  - Added function shortening the `class_name` by string... when the length is bigger than 20
  - Delete classes got problems with foreign key from `posts` table in the database so we have to truncate everything in `posts` which has selected `class_id`
  - Change class card content - Replace Class code with teacher name
  - Added Class code on the header of each class
  - Added email verification function, now everyone has to verify their account except the administrator
  - Fix `edit class` on Teacher side
  - Add Status control on admin side
  - Fix username reader for each greeting 
  - Add `Class control` on admin side, now admin can view `classes` table but still cannot go for other CUD since we just have Read only
  - Fix appearance of class cards
  - Add comment input and files input but not functional yet
  - Passing `username` among `Trangmonhoc` and its process page
  - Print full name as post owner
  - Fix lecturer name by getting it displayed by getting fullname from db 
  - Fix teacher side repeat of classes
  - Fixed some links but not all 
  - Add class list to teacher side and ready to add it to student side

## Localhost used
* [XAMPP](https://www.apachefriends.org/download.html) 
* SQL port: 3308
* Apache port: 80,443

## Release day
2/12/2020 :bicyclist:

