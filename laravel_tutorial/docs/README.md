
## laravel 


* 라라벨 파일 생성
  * laravel new 파일명

* 컴포저를 통한 설치
  * composer create-project --prefer-dist laravel/laravel 파일명 

* 실행. 
  * php artisan serve






## backend 구조 settings

1. php artisan make:migration create_users_table
    * 마이그레이션 파일 생성
        * php artisan make:migration create_users_table --create=users
        * php artisan make:migration add_votes_to_users_table --table=users

2. php artisan make:seeder UsersTableSeeder
    * seeder 생성

3. php artisan make:factory FooFactory --model=Foo
    * Factory 생성(단수)

4. php artisan make:controller FooController --api --model=Models/Foo
    * Controller, Model 생성
        * php artisan make:controller API/FooController --api
            * api 리소스 컨트롤러
        * php artisan make:controller FooController --resource
            * 컨트롤러 리소스
        * php artisan make:controller FooController --resource --model=Foo
            * 리소스 모델 지정


5. php artisan make:resource FooResource
        * 리소스 클래스 생성(단수)
            * 리소스 컬렉션 생성
                * php artisan make:resource Foos --collection
                * php artisan make:resource FooCollection

6. php artisan make:resource FooCollection
        * 리소스 클래스 생성
            * 리소스 컬렉션 생성
                * php artisan make:resource Foos --collection
                * php artisan make:resource FooCollection








## artisan 명령어

* php artisan migrate
    * 마이그래이션
    * php artisan migrate --force

* php artisan migrate:rollback
    * 이전 migrate 작동 되돌리기(생성한 migrate취소)
    * php artisan migrate:rollback --step=5

* php artisan migrate:fresh
    * 모든 테이블&마이그레이션 drop
    * php artisan migrate:fresh --seed

* php artisan migrate:refresh
    * 롤백&마이그레이트
    * php artisan migrate:refresh --seed
    * php artisan migrate:refresh --step=5

  
 * php artisan migrate:reset
    * 리셋


* php artisan route:list
    *  모든 라우트 리스트 확인( controller 등까지)
 
* php artisan cache:clear
    * 캐시 삭제

* php artisan config:cache
    * 설정내역 로딩 최적화

* php artisan config:clear


*  php artisan make:test AuthControllerTest
    * tests/Feature폴더에 Controller파일생성

* php artisan make:seeder UserTableSeeder
    * Seeder 파일 생성, 데이터베이스 시딩( seed )


*  php artisan db:seed
    * 시드 데이터 Database에 입력( database 초기데이터 )
    * seeder 실행(composer dump-autoload 이후)
    * php artisan db:seed --class=UsersTableSeeder



* php artisan make:model Teak -c -m
  => model, controller, migrate  세개 파일을 자동을로 (제위치에)만들어줌
 

* php artisan tinker
 * 코드 예행연습( 터미널로 결과 미리볼수 있음) 

* php artisan make:middleware Foo
    * 미들웨어 생성

* php artisan make:request StoreFooPost
    * form request 생성

* php artisan make:provider FooServiceProvider
    * 서비스 프로바이더 작성
    * config/app.php 편집

* php artisan make:test UserTest --unit
    * 테스트 생성