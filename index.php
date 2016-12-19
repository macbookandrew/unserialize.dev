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
       <form>
            <textarea name="input" placeholder='a:2:{i:0;s:12:"Sample array";i:1;a:2:{i:0;s:5:"Apple";i:1;s:6:"Orange";}}'></textarea><br/>
            <input type="submit" />
        </form>

        <?php
        if ($_GET) {
            $unserialized = unserialize($_GET['input']);
            echo'<pre><code>';var_dump($unserialized);echo'</code></pre>';
        }
        ?>
    </body>
</html>
