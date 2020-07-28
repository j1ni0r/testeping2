<style type="text/css">
#contact .container form table tr td {
	color: #000;
	font-size:9px;
	animation:!important;
}
#contact .container table {
	color: #093;
}
a:link {
	color: #060;
}
.list-group-item {
	font-size:17px;
}
</style>


<div class="container-fluid">
  <h1>Serviços</h1>
    <div class="col-md-3"> 
    <div class="list-group-item">
  <h4 class="list-group-item-heading">
      SOAP
  </h4>
  <p class="list-group-item-text">
     <?php
$host = '192.168.6.41:28080/gmsoap/VMix?wsdl';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">SOAP ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">SOAP OFFLINE</span> ';
}
?>
</p> 
</div>
    </div>
    
    <div class="col-md-3"> 
                            <div class="list-group-item"> 
                                  <h4 class="list-group-item-heading">
                                      PC Developer
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.4.167';
                                if($socket =@ fsockopen($host, 631, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">PC DEVELOPER ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">PC DEVELOPER OFFLINE</span> ';
                                }
                                
                                ?>
                                </p>
                             </div>     
    
    
    </div>

<div class="col-md-3"> 
                            <div class="list-group-item"> 
                                  <h4 class="list-group-item-heading">
                                      PDV de Testes [4.189]
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.4.189';
                                if($socket =@ fsockopen($host, 445, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">PDV 4.189 ON-LINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">PDV 4.189 OFF-LINE</span> ';


  $chat_id="238769841";

    $token="504863335:AAF6fuSL7Vu50EIrnAGFhOruWtTPp3f5nKg";

    $mensagem="PDV 4.189 OFF-LINE";

    $url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$mensagem."";

    $execucao = file_get_contents($url);
                                }
                                
                                ?>
                                </p>
                             </div>     
    
    
    </div>
                        
     
</div>

<div class="col-md-3"> <h1> Lojas </h1>
<div class="list-group-item">
    <h4 class="list-group-item-heading">
    LOJA 01
    </h4>
<p class="list-group-item-text">
<?php
$host = '192.168.10.100:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 01 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 01 OFFLINE</span> ';
}
$host = '192.168.10.253:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 01 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 01 OFFLINE</span> ';
}
?>

</p>
</div>
    
<div class="list-group-item">    
 <h4 class="list-group-item-heading"> LOJA 02  </h4>
<p class="list-group-item-heading">
<?php
$host = '192.168.2.1:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 02 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 02 OFFLINE</span> ';
}
$host = '192.168.2.111:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 02 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 02 OFFLINE</span> ';
}
?>
 
    
    
</p>
</div>

<div class="list-group-item"><h4 class="list-group-item-heading">LOJA 04 </h4>
  
  <p class="list-group-item-text">
<?php
$host = '192.168.4.100:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
//echo ' <span class="label label-success">GW 04 ONLINE</span>';
echo ' <a href="http://192.168.4.100/ping.asp" <span class="label label-success">GW 4 ONLINE</span></a>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 04 OFFLINE</span> ';
}
$host = '192.168.4.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 04 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 04 OFFLINE</span> ';
}
?></p></div>
<div class="list-group-item">
  <h4 class="list-group-item-heading">
      LOJA 15
</h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.17.1:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 15 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 15 OFFLINE</span> ';
}
$host = '192.168.17.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 15 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 15 OFFLINE</span> ';
}
?>
</p>
</div>

<div class="list-group-item">
  <h4 class="list-group-item-heading" class="container">
      LOJA 24
  </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.28.100:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 24 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 24 OFFLINE</span> ';
}
$host = '192.168.28.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 24 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 24 OFFLINE</span> ';
}
?>
</p>
</div>

<div class="list-group-item">
  <h4 class="list-group-item-heading">
      LOJA 26
  </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.29.100:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 26 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 26 OFFLINE</span> ';
}
$host = '192.168.29.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 26 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 26 OFFLINE</span> ';
}
?>
</p>
</div>

<div class="list-group-item">
  <h4 class="list-group-item-heading">
      LOJA 28
  </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.29.100:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 28 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 28 OFFLINE</span> ';
}
$host = '192.168.29.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 28 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 28 OFFLINE</span> ';
}
?>
</p>
</div>

<div class="list-group-item">
      <h4 class="list-group-item-heading">
      LOJA 38
      </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.39.100:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 38 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 38 OFFLINE</span> ';
}
$host = '192.168.39.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 38 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 38 OFFLINE</span> ';
}
?>
</p>
</div>


<div class="list-group-item">
  <h4 class="list-group-item-heading">
      LOJA 92
  </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.22.1:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 92 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 92 OFFLINE</span> ';
}
$host = '192.168.22.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 92 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 92 OFFLINE</span> ';
}
?>
</p>
</div>

</div>

<div class="col-md-3"> <h1>Lojas 2</h1>   

<div class="list-group-item">
  <h4 class="list-group-item-heading">
      LOJA 94
  </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.1.100';
if($socket =@ fsockopen($host, 3389, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 94 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 94 OFFLINE</span> ';
}
$host = '192.168.1.210';
if($socket =@ fsockopen($host, 3390, $errno, $errstr, 1)) {
echo ' <span class="label label-success">FW 94 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 94 OFFLINE</span> ';
}
?>
</p>
</div>

<div class="list-group-item">
  <h4 class="list-group-item-heading">
      LOJA 95
  </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.102.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 95 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 95 OFFLINE</span> ';
}
$host = '192.168.102.100:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 95 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 95 OFFLINE</span> ';
}

?>
</p>
</div>

<div class="list-group-item">
  <h4 class="list-group-item-heading">
      LOJA 414
  </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.54.100:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 414 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 414 OFFLINE</span> ';
}
$host = '192.168.54.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 24 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 24 OFFLINE</span> ';
}
?>
</p>
</div>

<div class="list-group-item">
  <h4 class="list-group-item-heading">
      LOJA 416
  </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.138.100:3389';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 416 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 416 OFFLINE</span> ';
}
$host = '192.168.138.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 416 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 416 OFFLINE</span> ';
}
?>
</p>
</div>
    
    <div class="list-group-item">
  <h4 class="list-group-item-heading">
      LOJA 423
  </h4>
  <p class="list-group-item-text">
<?php
$host = '192.168.109.100';
if($socket =@ fsockopen($host, 3389, $errno, $errstr, 5)) {
echo ' <span class="label label-success">GW 423 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">GW 423 OFFLINE</span> ';
}
$host = '192.168.109.254:3390';
if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
echo ' <span class="label label-success">FW 423 ONLINE</span>';
fclose($socket);
} else {
echo ' <span class="label label-danger">FW 423 OFFLINE</span> ';
}
?>
</p>
</div>


		    		</div>
			  		<div class="col-md-3"> <h1>Eletros</h1>
                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 13
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.15.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
// <a href="http://192.168.15.254/phpvirtualbox/" class="btn btn-info" role="button">Loja 13</a>
                                echo ' <a href="http://192.168.15.100/" <span class="label label-success">GW 13 ONLINE</span></a>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 13 OFFLINE</span> ';
                                }
                                $host = '192.168.15.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <a href="http://192.168.15.254/phpvirtualbox/" <span class="label label-success">FW 13 ONLINE</span></a>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 13 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 59
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.17.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 59 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 59 OFFLINE</span> ';
                                }
                                $host = '192.168.17.200';
                                if($socket =@ fsockopen($host, 3390, $errno, $errstr, 1)) {
                                echo ' <span class="label label-success">FW 59 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 59 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 67
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.67.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 67 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 67 OFFLINE</span> ';
                                }
                                $host = '192.168.67.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 67 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 67 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 71
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.16.1:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 71 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 71 OFFLINE</span> ';
                                }
                                $host = '192.168.16.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 71 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 71 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 73
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.73.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 73 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 73 OFFLINE</span> ';
                                }
                                $host = '192.168.73.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 73 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 73 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 76
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.76.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 76 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 76 OFFLINE</span> ';
                                }
                                $host = '192.168.76.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 76 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 76 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 124
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.124.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 124 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 124 OFFLINE</span> ';
                                }
                                $host = '192.168.124.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 124 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 124 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 125
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.125.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 125 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 125 OFFLINE</span> ';
                                }
                                $host = '192.168.125.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 125 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 125 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 126
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.126.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 126 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 126 OFFLINE</span> ';
                                }
                                $host = '192.168.126.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 126 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 126 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>
</div>
                        	<div class="col-md-3"> <h1>Eletros 2</h1>
                                

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 127
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.127.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 127 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 127 OFFLINE</span> ';
                                }
                                $host = '192.168.127.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 127 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 127 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 128
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.128.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 128 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 128 OFFLINE</span> ';
                                }
                                $host = '192.168.128.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 128 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 128 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 129
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.129.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 129 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 129 OFFLINE</span> ';
                                }
                                $host = '192.168.129.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 129 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 129 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 132
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.132.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 132 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 132 OFFLINE</span> ';
                                }
                                $host = '192.168.132.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 132 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 132 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 133
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.133.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 133 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 133 OFFLINE</span> ';
                                }
                                $host = '192.168.133.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 133 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 133 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>

                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 134
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.134.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 134 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 134 OFFLINE</span> ';
                                }
                                $host = '192.168.134.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 134 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 134 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>
                                
                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 137
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.137.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 137 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 137 OFFLINE</span> ';
                                }
                                $host = '192.168.137.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 137 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 137 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>
                                
                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 138
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.99.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 138 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 138 OFFLINE</span> ';
                                }
                                $host = '192.168.99.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 138 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 138 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>
                                
                                <div class="list-group-item">
                                  <h4 class="list-group-item-heading">
                                      ELETRO 142
                                  </h4>
                                  <p class="list-group-item-text">
                                <?php
                                $host = '192.168.64.100:3389';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">GW 142 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">GW 142 OFFLINE</span> ';
                                }
                                $host = '192.168.64.254:3390';
                                if($socket =@ fsockopen($host, 28080, $errno, $errstr, 5)) {
                                echo ' <span class="label label-success">FW 142 ONLINE</span>';
                                fclose($socket);
                                } else {
                                echo ' <span class="label label-danger">FW 142 OFFLINE</span> ';
                                }
                                ?>
                                </p>
                                </div>
                        
                              

                             
			  			
			  			  			
					</div>
		
