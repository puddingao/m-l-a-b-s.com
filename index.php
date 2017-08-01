<!--
Desenvolvido Por: mLabs
-->
<?php
$url = "http://m-l-a-b-s.com/";
$title = "mLabs";

$var = array(
        "1" => array(
                  "titulo" => "Bari rockeiro",
                  "image" => "https://scontent.fbfh1-1.fna.fbcdn.net/v/t1.0-9/19894766_1375846895865678_9182240405749923085_n.png?oh=f7d8f8075309aa8046c1294339c9372f&oe=59F0365C"
                  ),
        "2" => array(
                  "titulo" => "Bariminion",
                  "image" => "https://scontent.fbfh1-1.fna.fbcdn.net/v/t1.0-9/19656930_1368159073301127_434549933860652994_n.png?oh=501c34898af2ebc92405d2f6ff414386&oe=59EB3F27"
                  ),
        "3" => array(
                  "titulo" => "Bariroberto",
                  "image" => "https://scontent.fbfh1-1.fna.fbcdn.net/v/t1.0-9/19905052_1376312122485822_3364033343635805806_n.png?oh=7faee9609b56f433b816c38dcebcb167&oe=5A387B01"
                  ),
        );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://www.mlabs.com.br/';
  },100);
</script>
