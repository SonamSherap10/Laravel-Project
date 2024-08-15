<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Intra Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="{{asset('frontend/style.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="mainPan">
  <div id="leftPan">
    <div id="logoPan"><a href="#"><img src="{{asset('frontend/images/logo.jpg')}}"; title="Intra Blog" alt="Intra Blog" width="317" height="125" border="0" /></a></div>
    <div id="leftbodyPan">
      <h2>All Blogs</h2>
      <!-- @foreach ( as )
      
      @endforeach -->
      <p class="border">&nbsp;</p>
      <div style="display: flex; flex-wrap: wrap; gap: 20px;">
    <div style="border: 1px solid #ccc; border-radius: 10px; width: 250px; padding: 20px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <img src="image1.jpg" alt="Card 1" style="width: 100%; height: 150px; object-fit: cover; border-radius: 10px 10px 0 0;">
        <h3 style="margin: 20px 0 10px; font-size: 18px;">Card 1</h3>
        <p style="font-size: 14px; color: #555;">This is the first card.</p>
        <button style="background-color: #4CAF50; color: white; padding: 10px 20px; margin: 10px 5px; border: none; border-radius: 5px; cursor: pointer;">
            Edit
        </button>
        <button style="background-color: #f44336; color: white; padding: 10px 20px; margin: 10px 5px; border: none; border-radius: 5px; cursor: pointer;">
            Delete
        </button>
    </div>
    </div>
  </div>
  <div id="rightPan">
    <div id="rightTopPan">
      <ul>
        <li class="home">Home</li>
        <li><a href="#">Add Blog</a></li>
      </ul>
    </div>
  </div>
</div>

</body>
</html>
