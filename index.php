<html>
  <head>
    <title>Monitor</title>
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:900,700' rel='stylesheet' type='text/css'>
    <link href='style.css' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.netpie.io/microgear.js"></script>
  </head>
  <body>

    <h1 id="temp">-</h1><br>
    <h1 id="humid">-</h1><br>
    <h1 id="eco">-</h1><br>
      
      <script type="text/javascript">
        const APPID     = "greenbot"
		const APPKEY    = "xmWFLfDAfKodr95"
		const APPSECRET = "b6jcXoUmKtyO0gkHyKLsyH6bb"


		    var microgear = Microgear.create({
		        key: APPKEY,
		        secret: APPSECRET,
		        alias : "myhtml"         /*  optional  */
		    });

		    microgear.on('message',function(topic,msg) {
            if(topic == "/greenbot/Temp"){
              $("#Temp").html(msg);  
            }
	    if(topic == "/greenbot/humid"){
              $("#humid").html(msg);  
            }
            if(topic == "/greenbot/eco"){
              $("#eco").html(msg);  
            }
		    });

		    microgear.on('connected', function() {
		        microgear.setAlias('htmlgear');
            microgear.subscribe("/Temp");
            microgear.subscribe("/humid");
            microgear.subscribe("/eco");
		        alert("connect");
		    });
		    microgear.connect(APPID);
		</script>

      </script>
  </body>
</html>
