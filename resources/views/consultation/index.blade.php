
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Searchable Multi-select Dropdown Demos</title>
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="/asset/css/bootstrap.min.css">
  <script type="text/javascript" src="/jqueySearch/mock.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/jqueySearch/jquery.dropdown.css">
  <script src="/jquerySeach/jquery.dropdown.js"></script>
  <style>
    .container { margin:150px auto;}
  </style>
</head>

<body>
<div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li><a href="https://www.jqueryscript.net/form/Searchable-Multi-select-jQuery-Dropdown.html">Download This Plugin</a></li>
<li><a href="https://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
<div class="container">
  <h2> Searchable Multi-select Dropdown Demos</h2>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <div class="text-info">Multi-select+JSON+Token Mode</div><br>
      <div class="dropdown-mul-1">
        <select style="display:none"  name="" id="" multiple placeholder="Select"> </select>
      </div>
    </div>
  </div>
  <br>
  <br>
  
  <br>
  <br>
  
  <br>
  <br>
  
  <br>
  <br>
  <br>
  <br>
  </div>
  <script>
    var Random = Mock.Random;
    var json1 = Mock.mock({
      "data|10-50": [{
        name: function () {
          return Random.name(true)
        },
        "id|+1": 1,
        "disabled|1-2": true,
        groupName: 'Group Name',
        "groupId|1-4": 1,
        "selected": false
      }]
    });

    $('.dropdown-mul-1').dropdown({
      data: json1.data,
      limitCount: 40,
      multipleMode: 'label',
      choice: function () {
        // console.log(arguments,this);
      }
    });

    var json2 = Mock.mock({
      "data|10000-10000": [{
        name: function () {
          return Random.name(true)
        },
        "id|+1": 1,
        "disabled": false,
        groupName: 'Group Name',
        "groupId|1-4": 1,
        "selected": false
      }]
    });

    $('.dropdown-mul-2').dropdown({
      limitCount: 5,
      searchable: false
    });

    $('.dropdown-sin-1').dropdown({
      readOnly: true,
      input: '<input type="text" maxLength="20" placeholder="Search">'
    });

    $('.dropdown-sin-2').dropdown({
      data: json2.data,
      input: '<input type="text" maxLength="20" placeholder="Search">'
    });
  </script>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</html>
