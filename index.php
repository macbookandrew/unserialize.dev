<html>
   <head>
        <title>Unserialize</title>
        <style>
           body { font-family: sans-serif; }
           textarea {
               width: 540px;
               height: 180px;
               margin-bottom: 1em;
           }
           input[type="submit"] { font-size: 2em; }
        </style>
   </head>
   <body>
        <?php
        if ($_POST && isset($_POST['input'])) {
            $data = $_POST['input'];
        } elseif ($_GET && isset($_GET['input'])) {
            $data = $_GET['input'];
        } else {
            $data = 'a:2:{i:0;s:12:"Sample array";i:1;a:2:{i:0;s:5:"Apple";i:1;s:6:"Orange";}}';
        }
       ?>
       <form method="post">
            <textarea name="input"><?php echo $data; ?></textarea><br/>
            <input type="submit" />
        </form>

        <?php
        if ($data) {
            echo'<pre><code>';var_dump(unserialize($data));echo'</code></pre>';
        }
        ?>
    </body>
</html>
