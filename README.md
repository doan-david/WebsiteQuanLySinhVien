1. Create project: composer create-project larvel/laravel name_project
2. Create module:
   install module: composer require nwidart/laravel-models
   fix composer.json: "autoload": {
   "psr-4": {
   "App\\": "app/",
   "Modules\\": "Modules/",
   }
   compose dump-autoload
   php artisan make:module name_module
3. Create database:
   php artisan make:migration create_name_table
   php artisan migrate
   php artisan make:migration add_avatar_to_admin_table --table=admins
4. Create seeder
   php artisan make:seeder NameSeeder
   php artisan db:seed
   php artisan db:seed --class=UserTableSeeder
5. Create controller: php artisan module:make-controller NameController name_module
6. Create middleware: php artisan make:middleware adminAuthenticate
7. Create model
   php artisan make:model Admin

git checkout -b dev
git add .
git status
git commit -m "demo-git"
git push origin dev
----
git checkout main
git pull origin main
git merge origin dev
----
git checkout -b feature/login
-----------
- thong bao email: nguoi dung vua dang nhap o dau do
  btvn:
  làm dang nhap -  quen mk ( gui email
  haon thanh them sua xoa admin, role
  thứ 4 quay video demo


