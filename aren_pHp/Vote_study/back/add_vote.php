<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增主題</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main>
        <h1>新增主題</h1>
        <form action="../api/add_vote.php" method="post">
            <div>
                <lable for="">主題說明:</lable>
                <input type="text" name="subject" id="subject" class="subject-input">
            </div>
            <div class="time-set">
                <div class="time-item">
                    <lable for="">開放時間:</lable>
                    <input type="datetime-local" name="close_time" id="close_time">
                </div>
                <div>
                    <lable for="">關閉時間:</lable>
                    <input type="datetime-local" name="open_time" id="open_time">
                </div>
            </div>
            <div>
                <lable for="">單複選:</lable>
                <input type="radio" name="type" value="1">單選&nbsp;&nbsp;
                <input type="radio" name="type" value="2">複選
            </div>
            <div>
                <input type="submit" value="新增">
            </div>
    
        </form>
    </main>
</body>

</html>