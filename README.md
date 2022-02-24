# Laravel Crud 2

In this exercise we create a basic CRUD for the **Pen** Entity 

## Table DB
  ### Pens
  <hr>
  
  - id
  - name | varchar 80
  - brand | varchar 60
  - series | varchar 80
  - color | varchar 100
  - type  | varchar 80
  - refill | varchar 100
  - body_material | varchar 100
  - closed_length | SMALLINT
  - body_length | SMALLINT
  - cap_length | SMALLINT
  - diameter | SMALLINT
  - weigth | SMALLINT
  - created_at
  - updated_at
<hr>
  
## Example data
```
Brand : Lamy
Series : Lamy Studio
Color : Black
Edition : Special
Body Material : Metal
Refill Type : Proprietary
Length (closed) : 140 mm
Length (body) : 127 mm
Length (cap) : 58 mm
Diameter (grip) : 12 mm
Weight (overall) : 30 g
```

## Todo
1. Create a new `Laravel 7` project 
2. Create a DB `laravel-base-crud`
3. Modify `.env` file 
4. Install `Bootstrap 5`  
5. Remove old package Faker Fzaninotto <br>
`composer remove fzaninotto/faker`
6. Add new package Faker <br>
`composer require fakerphp/faker`
7. Create `migration`, `model`, `seeder`, `controller` 
8. Create resources routes in` web.php`
9. Create `Index`, `Show`, `Create`, `Edit`, `Update` functions
10. Create layouts and pages for these routes


## Diagram routes
[Diagram](/Crud.drawio)

<br>
<hr>
<br>

## Links to Laravel Docs
### Artisan Commands
https://laravel.com/docs/7.x/artisan
### Models
https://laravel.com/docs/7.x/eloquent#defining-models
### Migrations
https://laravel.com/docs/7.x/migrations#generating-migrations
### Seeders
https://laravel.com/docs/7.x/seeding#writing-seeders

### Resource Controller
https://laravel.com/docs/7.x/controllers#resource-controllers