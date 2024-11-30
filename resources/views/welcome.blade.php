
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    {{-- <style>
        .font{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 14px;
            color: blue;
            text-align: center;
        }
        .box{
            background-color: red;
        }
    </style> --}}

    <link rel="stylesheet" href="{{asset('stylesheet.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Company</h1>

        <nav>
            <a href="" class="nav-item">Home</a>
            <a href="" class="nav-item">Catalog</a>
            <a href="" class="nav-item">Login</a>
            <a href="" class="nav-item">Contact Us</a>
        </nav>
    </header>
    <h1>This is heading 1</h1>
    <h2>This is heading 2</h2>
    <h3>This is heading 3</h3>
    <h4>This is heading 4</h4>
    <h5>This is heading 5</h5>
    <h6>This is heading 6</h6>

    <p class="font box">Hello World!</p>

    <a href="https://binus.ac.id/">
    <img src="{{asset('contoh.jpg')}}" class="image" alt="">
    </a>
    <br>
    <hr>
    <a href="https://bncc.net/">This goes to BNCC.net</a>
    <br>
    <form action="">
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Input Your name" name="name">
        <br>
        <label for="name">Date of Birth</label>
        <input type="date" id="name" name="dob" >
        <br>
        <label for="name">Foto diri</label>
        <input type="file" id="name"name="foto-diri">
        <br>
        <label for="name">Age</label>
        <input type="number" id="name"  placeholder="Input Your age" name="umur">
        <br>
        <button type="submit">Submit</button>
    </form>

    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>Rey</td>
            <td>19</td>
            <td>14-4-2005</td>
            <td>CS</td>
        </tr>
    </table>

    <div class="display">
        <div class="box">
            <h2>This is div</h2>
            <p>This is how div works</p>
        </div>

        <div class="box">
            <h2>This is div</h2>
            <p>This is how div works</p>
        </div>

        <div class="box">
            <h2>This is div</h2>
            <p>This is how div works</p>
        </div>

        <div class="box">
            <h2>This is div</h2>
            <p>This is how div works</p>
        </div>

        <div class="box">
            <h2>This is div</h2>
            <p>This is how div works</p>
        </div>
    </div>

    {{-- Semantic Tags --}}
    {{-- <header></header>
    <main></main>
    <footer></footer>
    <section></section> --}}


</body>
</html>
