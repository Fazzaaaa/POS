# *SOAL PRAKTIKUM*
> Ahmad Faza Alfan Fashlah
> TI - 2F / 03

## Kode Program 
### HomeController
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.home');
    }
}
```
### CategoryController
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function food() {
        return view('products.food');
    }

    public function beauty() {
        return view('products.beauty');
    }

    public function homecare() {
        return view('products.homecare');
    }

    public function baby() {
        return view('products.baby');
    }
}
```
### TransactionController
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transaction()
    {
        return view('transaction.transaction');
    }
}
```
### UserProfileController
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function user($id, $name) {
        return view('user.user')
            ->with('id', $id)
            ->with('name', $name);
    }
}
```

### home.blade.php
```php
<html>
    <body>
        <h1>Selamat Datang Di Halaman Utama Kyuarr</h1>
    </body>
</html>
```

### baby.blade.php
```php
<html>
    <body>
        <h1>Baby - Kid Category</h1>
    </body>
</html>
```

### beauty.blade.php
```php
<html>
    <body>
        <h1>Beauty Health Category</h1>
    </body>
</html>
```

### food.blade.php
```php
<html>
    <body>
        <h1>Food and Beverage Category</h1>
    </body>
</html>
```

### homecare.blade.php
```php
<html>
    <body>
        <h1>Home Care Category</h1>
    </body>
</html>
```

### transaction.blade.php
```php
<html>
    <body>
        <h1>Transaction Page</h1>
    </body>
</html>
```

### user.blade.php
```php
<html>
    <body>
        <h1>User Profile Page</h1>
        <br>
        <h2>ID : {{ $id }}</h2>
        <h2>Nama : {{ $name }}</h2>
    </body>
</html>
```

## Output Program 
### Home Page
<img src="/screenshot/1.png">

### Category Page
#### food-beverage
<img src="/screenshot/2.png">

#### home-care
<img src="/screenshot/3.png">

#### beauty-health
<img src="/screenshot/4.png">

#### baby-kid
<img src="/screenshot/5.png">

### Transaction Page
<img src="/screenshot/6.png">

### User Profile Page
<img src="/screenshot/7.png">

