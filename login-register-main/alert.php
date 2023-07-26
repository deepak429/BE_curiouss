<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Alert Box with Cut Function</title>
  <style>
    .alert-box {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #f0f0f0;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    .close-btn {
      cursor: pointer;
      background-color: #ccc;
      border: none;
      color: #fff;
      font-weight: bold;
      padding: 6px 10px;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <div class="alert-box">
    <div class="alert-content">
      This is a simple alert box. Click the X button to close it.
    </div>
    <button class="close-btn" onclick="cutAlert()">X</button>
  </div>

  <script>
    function cutAlert() {
      const alertBox = document.querySelector('.alert-box');
      alertBox.style.display = 'none';
    }
  </script>
</body>

</html>
