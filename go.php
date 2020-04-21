<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Redirect to LINE LIFF</title>
</head>
<body>
<script>
    window.location = `line://app/<?php echo $_GET['liffid'] ?>?d=${Date.now()}`;
</script>
</body>
</html>