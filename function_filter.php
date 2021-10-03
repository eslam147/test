<?php
    function Filter(){
        foreach($_POST as $key => $value){
            if(isset($_POST['email']) && $_POST[strtolower($key)] == $_POST['email']){
                $postfilter[] = strip_tags(filter_var($value, FILTER_SANITIZE_EMAIL));
            }else{
                $postfilter[] = strip_tags(filter_var($value, FILTER_SANITIZE_STRING));
            }
            $thiskeys[] = $key;
        }
        $comb = array_combine($thiskeys, $postfilter);
        return $comb;
    }
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>test</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class='container'>
<center>
<h1>short form and short code</h1>
<form action='<?php echo $_SERVER['HTTP_SELF'] ?>' method='post'>
  <label name='الاسم الاول' id='fname'>first name: -</label>
  <input class='form-control' type='text' name='fname'><br><br>
    <label name='اسم العائلة' id='lname'>last name: -</label>
  <input class='form-control' type='text' name='lname'><br><br>
    <label name='العمر' id='age'>age: -</label>
  <input class='form-control' type='text' name='age'><br><br>
  <button type='submit' class='btn btn-success'>send</button><br><br>
</form>
  </center>
  </div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
