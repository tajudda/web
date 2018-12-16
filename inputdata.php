<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="edit.css">
        <header>
            <ul>
                <a href=index.php><li>home</li></a></div>
                <a href="logout.php"style="float: right"><li>Logout</li></a>
            </ul>
        </header>
    </head>
    <div id="lembaran">
    <body>
        <form action="prosesinput.php" method="post">
        <p>nama barang</p>
        <input type="text"name="barang">
        <p>harga barang</p>
        <input type="text" name="harga">
        <input type="submit" value="submit">
        </form>
    </body>
    </div>
</html>