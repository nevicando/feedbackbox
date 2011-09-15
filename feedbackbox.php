<?
/// Feedbackbox 1.0
/// 15.09.2011

/// A simple PHP script that allows you to display eBay feedback comments in your website 

/// Developed by Antonio Cosentino at Kultmedia.com
/// Documentation: http://www.kultmedia.com/lab/feedbackbox


function feedbackbox($ebay_username, $limit){
echo "
<ul class=\"feedbackboxlist\">";

$url = "http://pipes.yahoo.com/pipes/pipe.run?_cmd=Run+Pipe&_id=vspfUrQA3BGzQ6831vC6Jw&_render=rss&ebayUsername=$ebay_username&ebayDomain=ebay.com";

$xml = simplexml_load_file($url);  	

foreach($xml->channel->item as $voce) if ($count < $limit)
{

$fbtype = substr($voce->title, 0, 3);

if ($fbtype=="Pos"){
$image = "http://q.ebaystatic.com/aw/pics/icon/iconPos_16x16.gif";
}
else if ($fbtype=="Neu"){
$image = "http://p.ebaystatic.com/aw/pics/icon/iconNeu_16x16.gif";
}
else if ($fbtype=="Neg"){
$image = "http://q.ebaystatic.com/aw/pics/icon/iconNeg_16x16.gif";
}

$username = str_replace('Positive feedback left by ', '', $voce->title);
$username = str_replace('Neutral feedback left by ', '', $username);
$username = str_replace('Negative feedback left by ', '', $username);

$text = $voce->description;
$text = htmlentities($text, ENT_QUOTES, "UTF-8");

echo "
<li>
<img src=\"$image\" align=\"absmiddle\" />
<a class=\"username\" href=\"http://myworld.ebay.it/$username\" target=\"blank\">$username</a> 
<span class=\"text\">$text</span>
</li>
";
$count++;
}
echo "</ul>";
}
?>

